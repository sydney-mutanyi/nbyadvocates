<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('contact-form');
    }

    public function store(Request $request)
    {
        try {
            // Check if AJAX request
            $isAjax = $request->ajax() || $request->wantsJson();

            // Honeypot check - if filled, it's a bot
            if ($request->filled('website')) {
                if ($isAjax) {
                    return response()->json(['error' => 'Spam detected. Please try again.'], 400);
                }
                return redirect()->back()->with('error', 'Spam detected. Please try again.');
            }

            // Timestamp check - minimum 3 seconds to fill form
            if ($request->has('form_timestamp')) {
                $formTime = $request->input('form_timestamp');
                $currentTime = time();
                $timeElapsed = $currentTime - $formTime;

                if ($timeElapsed < 3) {
                    if ($isAjax) {
                        return response()->json(['error' => 'Please take your time to fill out the form properly.'], 400);
                    }
                    return redirect()->back()->with('error', 'Please take your time to fill out the form properly.');
                }
            }

            $validated = $request->validate([
                'firstName' => 'required|string|max:255',
                'lastName' => 'required|string|max:255',
                'telephone' => 'required|string|max:20',
                'email' => 'required|email|max:255',
                'company' => 'nullable|string|max:255',
                'message' => 'required|string',
                'attachment' => 'nullable|file|mimes:pdf,doc,docx,txt,jpg,jpeg,png|max:20480', // 20MB limit
                'website' => 'nullable|string|max:255', // Honeypot field
                'form_timestamp' => 'nullable|integer', // Timestamp field
            ]);

            // Log file upload details for debugging
            Log::info('File Upload Check:', [
                'has_file' => $request->hasFile('attachment'),
                'file_exists' => $request->file('attachment') ? 'yes' : 'no',
                'files_all' => $request->allFiles(),
                'post_max_size' => ini_get('post_max_size'),
                'upload_max_filesize' => ini_get('upload_max_filesize'),
            ]);

            $attachmentPath = null;
            if ($request->hasFile('attachment')) {
                $file = $request->file('attachment');
                
                Log::info('File Details:', [
                    'original_name' => $file->getClientOriginalName(),
                    'size' => $file->getSize(),
                    'size_mb' => round($file->getSize() / 1024 / 1024, 2),
                    'mime_type' => $file->getMimeType(),
                    'extension' => $file->getClientOriginalExtension(),
                    'is_valid' => $file->isValid(),
                    'error' => $file->getError(),
                ]);

                if (!$file->isValid()) {
                    $errorMessage = 'File upload failed. Error code: ' . $file->getError();
                    Log::error('File validation failed:', ['error' => $errorMessage]);
                    
                    if ($isAjax) {
                        return response()->json(['error' => $errorMessage], 400);
                    }
                    return back()->with('error', $errorMessage)->withInput();
                }

                try {
                    $attachmentPath = $file->store('contact_attachments');
                    Log::info('File stored successfully:', ['path' => $attachmentPath]);
                } catch (\Exception $e) {
                    Log::error('File storage failed:', ['exception' => $e->getMessage()]);
                    
                    if ($isAjax) {
                        return response()->json(['error' => 'Failed to store file: ' . $e->getMessage()], 500);
                    }
                    return back()->with('error', 'Failed to store file: ' . $e->getMessage())->withInput();
                }
            } else {
                Log::warning('No file attachment detected in request');
            }

            // Send email with HTML template using queue
            $fullName = $validated['firstName'] . ' ' . $validated['lastName'];
            $company = isset($validated['company']) ? $validated['company'] : 'Not provided';

            Log::info('Queueing email for sending...', [
                'to' => 'sydneymutanyi@gmail.com',
                'subject' => "📩 New Inquiry from {$fullName} - Instruct Us Form",
                'has_attachment' => $attachmentPath ? 'yes' : 'no',
                'attachment_path' => $attachmentPath,
            ]);

            // Queue the email for background processing
            Mail::to('sydneymutanyi@gmail.com')
             //   ->cc(['nbyasin@nbyadvocates.com', 'info@nbyadvocates.com', 'nbyasin@gmail.com', 'nbyasin@yahoo.com'])
                ->queue(new \App\Mail\ContactFormMail([
                    'firstName' => $validated['firstName'],
                    'lastName' => $validated['lastName'],
                    'fullName' => $fullName,
                    'telephone' => $validated['telephone'],
                    'email' => $validated['email'],
                    'company' => $company,
                    'inquiryMessage' => $validated['message'],
                    'hasAttachment' => $request->hasFile('attachment'),
                    'attachmentName' => $request->hasFile('attachment') ? $request->file('attachment')->getClientOriginalName() : null,
                    'attachmentSize' => $request->hasFile('attachment') ? round($request->file('attachment')->getSize() / 1024, 2) : null,
                    'attachmentPath' => $attachmentPath,
                ]));

            Log::info('Contact Form Submission:', array_merge($validated, ['attachment' => $attachmentPath]));

            if ($isAjax) {
                return response()->json(['success' => 'Thank you for contacting NBY Advocates. We will get back to you shortly.']);
            }

            return back()->with('success', 'Thank you for contacting NBY Advocates. We will get back to you shortly.');

        } catch (\Exception $e) {
            Log::error('Contact Form Error: ' . $e->getMessage(), [
                'exception' => $e,
                'request_data' => $request->except(['attachment'])
            ]);

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json(['error' => 'There was an error sending your message. Please try again or contact us directly at info@nbyadvocates.com.'], 500);
            }

            return back()->with('error', 'There was an error sending your message. Please try again or contact us directly at info@nbyadvocates.com. Error: ' . $e->getMessage())->withInput();
        }
    }
}
