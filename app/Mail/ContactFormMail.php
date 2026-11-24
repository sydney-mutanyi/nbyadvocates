<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ContactFormMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $contactData;

    /**
     * Create a new message instance.
     */
    public function __construct($contactData)
    {
        $this->contactData = $contactData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "📩 New Inquiry from {$this->contactData['fullName']} - Instruct Us Form",
            from: 'info@nbyadvocates.com',
            replyTo: $this->contactData['email'],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
            with: [
                'firstName' => $this->contactData['firstName'],
                'lastName' => $this->contactData['lastName'],
                'fullName' => $this->contactData['fullName'],
                'telephone' => $this->contactData['telephone'],
                'email' => $this->contactData['email'],
                'company' => $this->contactData['company'],
                'inquiryMessage' => $this->contactData['inquiryMessage'],
                'hasAttachment' => $this->contactData['hasAttachment'],
                'attachmentName' => $this->contactData['attachmentName'],
                'attachmentSize' => $this->contactData['attachmentSize'],
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];
        
        if (!empty($this->contactData['attachmentPath'])) {
            try {
                $fullPath = Storage::path($this->contactData['attachmentPath']);
                
                if (file_exists($fullPath)) {
                    Log::info('Attaching file to email:', ['path' => $fullPath]);
                    $attachments[] = Attachment::fromPath($fullPath);
                } else {
                    Log::error('Attachment file not found:', ['path' => $fullPath]);
                }
            } catch (\Exception $e) {
                Log::error('Error attaching file to email:', ['error' => $e->getMessage()]);
            }
        }
        
        return $attachments;
    }
}
