@extends('layouts.app')

@section('title', 'Instruct Us')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-24">
    <div class="grid lg:grid-cols-2 gap-12 items-start">
        <div>
            <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                Instruct Us Here
            </h1>
            <p class="text-lg text-gray-600 mb-8 max-w-lg">
                Ready to engage our services? We make it easy to get started with your legal matter. Simply fill out our comprehensive intake form and we'll get back to you within the shortest time possible.
            </p>

            <div class="space-y-6">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center text-red-600">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Call Us</h3>
                        <p class="text-gray-600">+254 732 355 157</p>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Visit Us</h3>
                        <p class="text-gray-600">Diamond Plaza, Nairobi</p>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Email Us</h3>
                        <p class="text-gray-600">info@nbyadvocates.com</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-xl p-8 lg:p-10 border border-gray-100">
            <h2 class="text-2xl font-bold mb-6 text-gray-900">Send us a message</h2>

            @if (session('success'))
                <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-lg">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf

                <div class="grid sm:grid-cols-2 gap-5">
                    <div>
                        <label for="firstName" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                        <input type="text" name="firstName" id="firstName" required value="{{ old('firstName') }}"
                            class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all">
                        @if ($errors->has('firstName'))
                            <p class="mt-1 text-xs text-red-500">{{ $errors->first('firstName') }}</p>
                        @endif
                    </div>

                    <div>
                        <label for="lastName" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                        <input type="text" name="lastName" id="lastName" required value="{{ old('lastName') }}"
                            class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all">
                        @if ($errors->has('lastName'))
                            <p class="mt-1 text-xs text-red-500">{{ $errors->first('lastName') }}</p>
                        @endif
                    </div>
                </div>

                <div class="grid sm:grid-cols-2 gap-5">
                    <div>
                        <label for="telephone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                        <input type="text" name="telephone" id="telephone" required value="{{ old('telephone') }}"
                            class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all">
                        @if ($errors->has('telephone'))
                            <p class="mt-1 text-xs text-red-500">{{ $errors->first('telephone') }}</p>
                        @endif
                    </div>

                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-700 mb-1">Company (Optional)</label>
                        <input type="text" name="company" id="company" value="{{ old('company') }}"
                            class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all">
                        @if ($errors->has('company'))
                            <p class="mt-1 text-xs text-red-500">{{ $errors->first('company') }}</p>
                        @endif
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" name="email" id="email" required value="{{ old('email') }}"
                        class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all">
                    @if ($errors->has('email'))
                        <p class="mt-1 text-xs text-red-500">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">How can we help?</label>
                    <textarea name="message" id="message" rows="4" required
                        class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all">{{ old('message') }}</textarea>
                    @if ($errors->has('message'))
                        <p class="mt-1 text-xs text-red-500">{{ $errors->first('message') }}</p>
                    @endif
                </div>

                <div>
                    <label for="attachment" class="block text-sm font-medium text-gray-700 mb-1">Attachment (Optional)</label>
                    <input type="file" name="attachment" id="attachment" class="hidden" accept=".pdf,.doc,.docx,.txt,.jpg,.jpeg,.png" max-size="20480">
                    <label for="attachment" id="file-label" class="block w-full text-sm text-gray-600 border-2 border-dashed border-gray-300 hover:border-red-400 hover:bg-red-50 rounded-lg p-4 cursor-pointer transition-all duration-300">
                        <div id="upload-placeholder" class="text-center">
                            <svg class="h-8 w-8 mx-auto mb-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" /></svg>
                            <span class="font-medium">Click to upload a file</span>
                            <p class="text-xs mt-1 opacity-75">PDF, DOC, DOCX, TXT, JPG, PNG (Max 20MB)</p>
                        </div>
                        <div id="file-preview" class="hidden text-center">
                            <div class="flex items-center justify-center space-x-3">
                                <svg id="file-icon" class="h-5 w-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                                <span class="font-medium text-gray-700 text-sm" id="file-name">filename.pdf</span>
                                <button type="button" id="remove-file" class="text-red-500 hover:text-red-700 transition-colors">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                                </button>
                            </div>
                            <p class="text-xs text-gray-500 mt-1" id="file-size">2.5 MB</p>
                        </div>
                    </label>
                    
                    <!-- Upload Progress Bar -->
                    <div id="upload-progress" class="hidden mt-2">
                        <div class="flex justify-between text-xs text-gray-600 mb-1">
                            <span>Uploading...</span>
                            <span id="progress-percent">0%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div id="progress-bar" class="bg-red-600 h-2 rounded-full transition-all duration-300" style="width: 0%"></div>
                        </div>
                    </div>
                    
                    <!-- Error Message -->
                    <div id="file-error" class="hidden mt-2 text-xs text-red-600 bg-red-50 border border-red-200 rounded-lg p-2"></div>
                    
                    @if ($errors->has('attachment'))
                        <p class="mt-1 text-xs text-red-500">{{ $errors->first('attachment') }}</p>
                    @endif
                </div>

                <!-- Honeypot field for bot protection -->
                <div style="display: none;">
                    <label for="website">Leave this field empty</label>
                    <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                    <input type="text" id="form_timestamp" name="form_timestamp" value="{{ time() }}">
                </div>

                <button type="submit" id="submit-btn"
                    class="w-full bg-red-600 text-white font-bold py-4 px-6 rounded-lg hover:bg-red-700 focus:ring-4 focus:ring-red-100 transition-all transform hover:-translate-y-0.5 active:scale-[0.98]">
                    <span id="btn-text">Send Inquiry</span>
                </button>
            </form>
            
            <!-- Loading Overlay -->
            <div id="loading-overlay" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
                <div class="bg-white rounded-2xl p-8 shadow-2xl flex flex-col items-center">
                    <svg class="animate-spin h-12 w-12 text-red-600 mb-4" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <p class="text-gray-700 font-semibold text-lg">Uploading your message...</p>
                    <p class="text-gray-500 text-sm mt-2">Please wait while we process your request</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Track form load time for bot protection
    const formLoadTime = Date.now();

    // File type icons mapping
    const fileIcons = {
        'pdf': '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" /><text x="8" y="16" font-size="8" fill="currentColor">PDF</text>',
        'doc': '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /><text x="6" y="16" font-size="6" fill="currentColor">DOC</text>',
        'docx': '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /><text x="5" y="16" font-size="5" fill="currentColor">DOCX</text>',
        'txt': '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /><text x="7" y="16" font-size="7" fill="currentColor">TXT</text>',
        'jpg': '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /><text x="6" y="16" font-size="6" fill="currentColor">JPG</text>',
        'jpeg': '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /><text x="4" y="16" font-size="5" fill="currentColor">JPEG</text>',
        'png': '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /><text x="7" y="16" font-size="6" fill="currentColor">PNG</text>'
    };

    // Get file icon based on extension
    function getFileIcon(filename) {
        const ext = filename.split('.').pop().toLowerCase();
        return fileIcons[ext] || fileIcons['doc'];
    }

    // Show error message
    function showFileError(message) {
        const errorDiv = document.getElementById('file-error');
        errorDiv.textContent = message;
        errorDiv.classList.remove('hidden');
    }

    // Hide error message
    function hideFileError() {
        const errorDiv = document.getElementById('file-error');
        errorDiv.classList.add('hidden');
    }

    // Reset file upload UI
    function resetFileUpload() {
        const fileInput = document.getElementById('attachment');
        const uploadPlaceholder = document.getElementById('upload-placeholder');
        const filePreview = document.getElementById('file-preview');
        const fileLabel = document.getElementById('file-label');
        
        fileInput.value = '';
        uploadPlaceholder.classList.remove('hidden');
        filePreview.classList.add('hidden');
        fileLabel.classList.remove('border-red-400', 'bg-red-50');
        hideFileError();
    }

    // File size validation and name display (20MB limit)
    document.getElementById('attachment').addEventListener('change', function(e) {
        const file = e.target.files[0];
        const maxSize = 20 * 1024 * 1024; // 20MB in bytes
        const uploadPlaceholder = document.getElementById('upload-placeholder');
        const filePreview = document.getElementById('file-preview');
        const fileLabel = document.getElementById('file-label');
        const fileName = document.getElementById('file-name');
        const fileSize = document.getElementById('file-size');
        const fileIcon = document.getElementById('file-icon');

        hideFileError();

        if (file) {
            // Check file size
            if (file.size > maxSize) {
                showFileError(`File size (${(file.size / 1024 / 1024).toFixed(2)} MB) exceeds the 20MB limit. Please upload a smaller file.`);
                resetFileUpload();
                return;
            }

            // Check file type
            const allowedTypes = ['pdf', 'doc', 'docx', 'txt', 'jpg', 'jpeg', 'png'];
            const fileExt = file.name.split('.').pop().toLowerCase();
            if (!allowedTypes.includes(fileExt)) {
                showFileError(`File type .${fileExt} is not allowed. Allowed types: PDF, DOC, DOCX, TXT, JPG, PNG.`);
                resetFileUpload();
                return;
            }

            // Show file preview
            const fileSizeMB = (file.size / 1024 / 1024).toFixed(2);
            fileName.textContent = file.name;
            fileSize.textContent = `${fileSizeMB} MB`;
            fileIcon.innerHTML = getFileIcon(file.name);
            
            uploadPlaceholder.classList.add('hidden');
            filePreview.classList.remove('hidden');
            fileLabel.classList.add('border-red-400', 'bg-red-50');
        } else {
            resetFileUpload();
        }
    });

    // Remove file button
    document.getElementById('remove-file').addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        resetFileUpload();
    });

    // Form submission with progress tracking
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const form = this;
        const fileInput = document.getElementById('attachment');
        const maxSize = 20 * 1024 * 1024; // 20MB in bytes

        // File validation
        if (fileInput.files.length > 0) {
            const file = fileInput.files[0];
            if (file.size > maxSize) {
                showFileError(`File size exceeds 20MB limit. Please upload a smaller file.`);
                return;
            }
        }

        // Time-based validation (minimum 3 seconds to fill form)
        const timeElapsed = Date.now() - formLoadTime;
        const minTime = 3000; // 3 seconds

        if (timeElapsed < minTime) {
            alert('Please take your time to fill out the form properly.');
            return;
        }

        // Show loading state
        const submitBtn = document.getElementById('submit-btn');
        const btnText = document.getElementById('btn-text');
        const loadingOverlay = document.getElementById('loading-overlay');
        const uploadProgress = document.getElementById('upload-progress');
        const progressBar = document.getElementById('progress-bar');
        const progressPercent = document.getElementById('progress-percent');

        submitBtn.disabled = true;
        submitBtn.classList.add('opacity-75', 'cursor-not-allowed');
        btnText.textContent = 'Sending...';
        loadingOverlay.classList.remove('hidden');

        // Show progress bar if file is attached
        if (fileInput.files.length > 0) {
            uploadProgress.classList.remove('hidden');
        }

        // Create FormData for AJAX upload
        const formData = new FormData(form);
        
        // Use XMLHttpRequest for progress tracking
        const xhr = new XMLHttpRequest();
        
        xhr.upload.addEventListener('progress', function(e) {
            if (e.lengthComputable) {
                const percentComplete = (e.loaded / e.total) * 100;
                progressBar.style.width = percentComplete + '%';
                progressPercent.textContent = Math.round(percentComplete) + '%';
            }
        });

        xhr.addEventListener('load', function() {
            console.log('XHR response status:', xhr.status);
            console.log('XHR response text:', xhr.responseText);
            
            loadingOverlay.classList.add('hidden');
            submitBtn.disabled = false;
            submitBtn.classList.remove('opacity-75', 'cursor-not-allowed');
            btnText.textContent = 'Send Inquiry';
            uploadProgress.classList.add('hidden');
            
            if (xhr.status === 200) {
                try {
                    const response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        // Show success message
                        const successDiv = document.createElement('div');
                        successDiv.className = 'fixed top-4 right-4 z-50 bg-green-100 border-2 border-green-500 text-green-800 px-6 py-4 rounded-xl shadow-2xl flex items-center space-x-3';
                        successDiv.innerHTML = `
                            <svg class="h-6 w-6 text-green-600 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div class="flex-1">
                                <p class="font-semibold">Success!</p>
                                <p class="text-sm">${response.success}</p>
                            </div>
                            <button onclick="this.parentElement.remove()" class="text-green-600 hover:text-green-800 transition-colors">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        `;
                        document.body.appendChild(successDiv);
                        
                        // Reset form
                        form.reset();
                        resetFileUpload();
                        
                        // Remove success message after 8 seconds
                        setTimeout(() => {
                            successDiv.style.opacity = '0';
                            successDiv.style.transition = 'opacity 0.5s';
                            setTimeout(() => successDiv.remove(), 500);
                        }, 8000);
                    }
                } catch (parseError) {
                    console.error('JSON parse error:', parseError);
                    // Show generic success
                    const successDiv = document.createElement('div');
                    successDiv.className = 'fixed top-4 right-4 z-50 bg-green-100 border-2 border-green-500 text-green-800 px-6 py-4 rounded-xl shadow-2xl flex items-center space-x-3';
                    successDiv.innerHTML = `
                        <svg class="h-6 w-6 text-green-600 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div class="flex-1">
                            <p class="font-semibold">Success!</p>
                            <p class="text-sm">Your message has been sent successfully.</p>
                        </div>
                        <button onclick="this.parentElement.remove()" class="text-green-600 hover:text-green-800 transition-colors">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    `;
                    document.body.appendChild(successDiv);
                    
                    form.reset();
                    resetFileUpload();
                    
                    setTimeout(() => {
                        successDiv.style.opacity = '0';
                        setTimeout(() => successDiv.remove(), 500);
                    }, 8000);
                }
            } else {
                // Error - show error message
                try {
                    const response = JSON.parse(xhr.responseText);
                    const errorMessage = response.error || 'There was an error sending your message. Please try again.';
                    
                    const errorDiv = document.createElement('div');
                    errorDiv.className = 'fixed top-4 right-4 z-50 bg-red-100 border-2 border-red-500 text-red-800 px-6 py-4 rounded-xl shadow-2xl flex items-center space-x-3';
                    errorDiv.innerHTML = `
                        <svg class="h-6 w-6 text-red-600 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div class="flex-1">
                            <p class="font-semibold">Error</p>
                            <p class="text-sm">${errorMessage}</p>
                        </div>
                        <button onclick="this.parentElement.remove()" class="text-red-600 hover:text-red-800 transition-colors">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    `;
                    document.body.appendChild(errorDiv);
                    
                    setTimeout(() => {
                        errorDiv.style.opacity = '0';
                        setTimeout(() => errorDiv.remove(), 500);
                    }, 8000);
                } catch {
                    const errorDiv = document.createElement('div');
                    errorDiv.className = 'fixed top-4 right-4 z-50 bg-red-100 border-2 border-red-500 text-red-800 px-6 py-4 rounded-xl shadow-2xl flex items-center space-x-3';
                    errorDiv.innerHTML = `
                        <svg class="h-6 w-6 text-red-600 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div class="flex-1">
                            <p class="font-semibold">Error</p>
                            <p class="text-sm">There was an error sending your message. Please try again.</p>
                        </div>
                        <button onclick="this.parentElement.remove()" class="text-red-600 hover:text-red-800 transition-colors">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    `;
                    document.body.appendChild(errorDiv);
                    
                    setTimeout(() => {
                        errorDiv.style.opacity = '0';
                        setTimeout(() => errorDiv.remove(), 500);
                    }, 8000);
                }
            }
        });

        xhr.addEventListener('error', function() {
            console.error('XHR error occurred');
            loadingOverlay.classList.add('hidden');
            submitBtn.disabled = false;
            submitBtn.classList.remove('opacity-75', 'cursor-not-allowed');
            btnText.textContent = 'Send Inquiry';
            uploadProgress.classList.add('hidden');
            
            const errorDiv = document.createElement('div');
            errorDiv.className = 'fixed top-4 right-4 z-50 bg-red-100 border-2 border-red-500 text-red-800 px-6 py-4 rounded-xl shadow-2xl flex items-center space-x-3';
            errorDiv.innerHTML = `
                <svg class="h-6 w-6 text-red-600 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div class="flex-1">
                    <p class="font-semibold">Network Error</p>
                    <p class="text-sm">Please check your connection and try again.</p>
                </div>
                <button onclick="this.parentElement.remove()" class="text-red-600 hover:text-red-800 transition-colors">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            `;
            document.body.appendChild(errorDiv);
            
            setTimeout(() => {
                errorDiv.style.opacity = '0';
                setTimeout(() => errorDiv.remove(), 500);
            }, 8000);
        });

        xhr.open('POST', form.action, true);
        xhr.send(formData);
    });
</script>
@endsection
