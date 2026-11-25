<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instruct Us - NB Yaseen Advocates</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-50">
    <!-- Navigation -->
    <nav class="sticky top-0 z-50 shadow-lg">
        <div class="w-full">
            <div class="flex items-center h-20">
                <!-- Mobile Layout -->
                <div class="lg:hidden flex items-center justify-between w-full bg-red-600 px-4">
                    <a href="{{ route('home') }}" class="focus:outline-none group transition-all duration-300 hover:scale-105 py-2">
                        <img src="{{ asset('logo1.png') }}" alt="NB YASEEN" class="h-16 w-auto object-contain max-h-full filter drop-shadow-sm group-hover:drop-shadow-md transition-all duration-300">
                    </a>
                    <button id="mobile-menu-btn" class="text-white hover:bg-red-700 hover:bg-opacity-50 transition-all duration-200 p-2 rounded-lg shadow-md hover:shadow-lg">
                        <div class="relative w-6 h-6 flex items-center justify-center">
                            <span class="absolute block h-0.5 w-6 bg-white transform transition-all duration-300 -translate-y-1.5"></span>
                            <span class="absolute block h-0.5 w-6 bg-white transform transition-all duration-300"></span>
                            <span class="absolute block h-0.5 w-6 bg-white transform transition-all duration-300 translate-y-1.5"></span>
                        </div>
                    </button>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center justify-center flex-1 bg-red-600 h-full px-4">
                    <div class="flex space-x-12">
                        <a href="{{ route('home') }}" class="px-6 py-3 rounded-md text-base font-semibold transition-colors text-white hover:bg-red-700 hover:bg-opacity-30">HOME</a>
                        <a href="{{ route('home') }}#about" class="px-6 py-3 rounded-md text-base font-semibold transition-colors text-white hover:bg-red-700 hover:bg-opacity-30">ABOUT US</a>
                        <div class="relative group" onmouseenter="document.getElementById('practice-dropdown').classList.remove('hidden')" onmouseleave="document.getElementById('practice-dropdown').classList.add('hidden')">
                            <button onclick="document.getElementById('practice-dropdown').classList.toggle('hidden')" class="px-6 py-3 rounded-md text-base font-semibold transition-all duration-200 flex items-center text-white hover:bg-red-700 hover:bg-opacity-30">
                                <span class="mr-1">PRACTICE AREAS</span>
                                <svg class="h-4 w-4 transition-transform duration-200 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </button>
                            <!-- Dropdown Menu -->
                            <div id="practice-dropdown" class="hidden group-hover:block absolute left-0 mt-1 w-64 rounded-lg shadow-xl bg-white ring-1 ring-gray-200 overflow-hidden transition-all duration-200 transform origin-top opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 pointer-events-none group-hover:pointer-events-auto" style="box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);">
                                <div class="py-1">
                                    <a href="{{ route('practice-area', 'commercial') }}" class="block w-full text-left px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 focus:bg-red-50 focus:text-red-600">
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 mr-3 text-gray-400 group-hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                                            <div class="flex-1">Commercial Law</div>
                                            <svg class="h-4 w-4 text-gray-400 group-hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                                        </div>
                                    </a>
                                    <a href="{{ route('practice-area', 'conveyancing') }}" class="block w-full text-left px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 focus:bg-red-50 focus:text-red-600">
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 mr-3 text-gray-400 group-hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                                            <div class="flex-1">Conveyancing</div>
                                            <svg class="h-4 w-4 text-gray-400 group-hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                                        </div>
                                    </a>
                                    <a href="{{ route('practice-area', 'probate') }}" class="block w-full text-left px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 focus:bg-red-50 focus:text-red-600">
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 mr-3 text-gray-400 group-hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                                            <div class="flex-1">Probate & Administration</div>
                                            <svg class="h-4 w-4 text-gray-400 group-hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                                        </div>
                                    </a>
                                    <a href="{{ route('practice-area', 'family') }}" class="block w-full text-left px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 focus:bg-red-50 focus:text-red-600">
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 mr-3 text-gray-400 group-hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                                            <div class="flex-1">Family Law</div>
                                            <svg class="h-4 w-4 text-gray-400 group-hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                                        </div>
                                    </a>
                                    <a href="{{ route('practice-area', 'criminal') }}" class="block w-full text-left px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 focus:bg-red-50 focus:text-red-600">
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 mr-3 text-gray-400 group-hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" /></svg>
                                            <div class="flex-1">Criminal Litigation</div>
                                            <svg class="h-4 w-4 text-gray-400 group-hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('contact-form') }}" class="px-6 py-3 rounded-md text-base font-semibold transition-colors text-white hover:bg-red-700 hover:bg-opacity-30">INSTRUCT US</a>
                        <a href="https://lawris-app.com/router" target="_blank" rel="noopener noreferrer" class="px-6 py-3 rounded-md text-base font-semibold transition-colors text-white hover:bg-red-700 hover:bg-opacity-30">STAFF PORTAL</a>
                    </div>
                </div>

                <!-- Desktop Logo -->
                <div class="hidden lg:block flex-shrink-0 ml-auto bg-white h-full px-3 flex items-center">
                    <a href="{{ route('home') }}" class="focus:outline-none group transition-all duration-300 hover:scale-105 py-1 h-full flex items-center">
                        <img src="{{ asset('logo.png') }}" alt="NB YASEEN" class="h-18 w-auto object-contain max-h-full filter drop-shadow-lg group-hover:drop-shadow-xl transition-all duration-300">
                    </a>
                </div>
            </div>

            <!-- Mobile Navigation Menu -->
            <div id="mobile-menu" class="lg:hidden bg-red-600 border-t border-red-500 px-4 hidden">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="{{ route('home') }}" class="block w-full text-left px-6 py-4 text-white hover:bg-red-700 hover:bg-opacity-50 font-semibold transition-colors duration-200 rounded-md text-lg">HOME</a>
                    <a href="{{ route('home') }}#about" class="block w-full text-left px-6 py-4 text-white hover:bg-red-700 hover:bg-opacity-50 font-semibold transition-colors duration-200 rounded-md text-lg">ABOUT US</a>
                    <div class="space-y-1">
                        <button onclick="document.getElementById('mobile-practice-dropdown').classList.toggle('hidden')" class="flex justify-between items-center w-full text-left px-6 py-4 text-white hover:bg-red-700 hover:bg-opacity-50 font-semibold transition-colors duration-200 rounded-md text-lg">
                            <span>PRACTICE AREAS</span>
                            <svg class="h-5 w-5 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="mobile-practice-dropdown" class="hidden ml-4 mt-1 space-y-1 pl-2 border-l-2 border-red-400 border-opacity-30">
                            <a href="{{ route('practice-area', 'commercial') }}" class="flex items-center justify-between w-full text-left px-4 py-3 text-sm text-white hover:bg-red-700 hover:bg-opacity-30 rounded-md transition-colors duration-200">
                                <div class="flex items-center">
                                    <svg class="h-4 w-4 mr-3 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                    <span>Commercial Law</span>
                                </div>
                                <svg class="h-4 w-4 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <a href="{{ route('practice-area', 'conveyancing') }}" class="flex items-center justify-between w-full text-left px-4 py-3 text-sm text-white hover:bg-red-700 hover:bg-opacity-30 rounded-md transition-colors duration-200">
                                <div class="flex items-center">
                                    <svg class="h-4 w-4 mr-3 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    <span>Conveyancing</span>
                                </div>
                                <svg class="h-4 w-4 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <a href="{{ route('practice-area', 'probate') }}" class="flex items-center justify-between w-full text-left px-4 py-3 text-sm text-white hover:bg-red-700 hover:bg-opacity-30 rounded-md transition-colors duration-200">
                                <div class="flex items-center">
                                    <svg class="h-4 w-4 mr-3 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <span>Probate & Administration</span>
                                </div>
                                <svg class="h-4 w-4 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <a href="{{ route('practice-area', 'family') }}" class="flex items-center justify-between w-full text-left px-4 py-3 text-sm text-white hover:bg-red-700 hover:bg-opacity-30 rounded-md transition-colors duration-200">
                                <div class="flex items-center">
                                    <svg class="h-4 w-4 mr-3 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    <span>Family Law</span>
                                </div>
                                <svg class="h-4 w-4 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <a href="{{ route('practice-area', 'criminal') }}" class="flex items-center justify-between w-full text-left px-4 py-3 text-sm text-white hover:bg-red-700 hover:bg-opacity-30 rounded-md transition-colors duration-200">
                                <div class="flex items-center">
                                    <svg class="h-4 w-4 mr-3 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                    </svg>
                                    <span>Criminal Litigation</span>
                                </div>
                                <svg class="h-4 w-4 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <a href="{{ route('contact-form') }}" class="block w-full text-left px-6 py-4 text-white hover:bg-red-700 hover:bg-opacity-50 font-semibold transition-colors duration-200 rounded-md text-lg">INSTRUCT US</a>
                    <a href="https://lawris-app.com/router" target="_blank" rel="noopener noreferrer" class="block w-full text-left px-6 py-4 text-white hover:bg-red-700 hover:bg-opacity-50 font-semibold transition-colors duration-200 rounded-md text-lg">STAFF PORTAL</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <a href="{{ route('home') }}" class="mb-8 inline-flex items-center text-red-600 hover:text-gray-600 transition-colors">
            <svg class="mr-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
            Back
        </a>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Left side - Contact Form -->
            <div class="bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                <div class="bg-gradient-to-r from-red-50 to-red-100 px-8 py-6 border-b border-red-200">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                        <h2 class="text-xl font-bold text-red-800 flex items-center uppercase">Instruct Us Here</h2>
                        <div class="inline-flex items-center gap-2 rounded-lg bg-white/80 px-4 py-2 border border-red-200">
                            <span class="text-sm text-gray-700">or</span>
                            <a href="mailto:info@nbyadvocates.com" class="text-sm font-semibold text-red-700 hover:text-red-800 underline">info@nbyadvocates.com</a>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data" class="space-y-7">
                        @csrf
                        @if(session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl mb-4">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if($errors->any())
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl mb-4">
                                <ul class="list-disc pl-4">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Name Fields -->
                        <div class="space-y-6">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div class="group">
                                    <label for="firstName" class="block text-sm font-semibold text-gray-800 mb-3 flex items-center">
                                        <div class="bg-red-100 p-1.5 rounded-lg mr-2">
                                            <svg class="h-4 w-4 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                                        </div>
                                        First Name *
                                    </label>
                                    <input type="text" id="firstName" name="firstName" value="{{ old('firstName') }}" required class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-red-100 focus:border-red-500 transition-all duration-300 bg-gray-50 focus:bg-white hover:border-gray-300 text-gray-900 placeholder-gray-500" placeholder="Enter your first name">
                                </div>
                                <div class="group">
                                    <label for="lastName" class="block text-sm font-semibold text-gray-800 mb-3 flex items-center">
                                        <div class="bg-red-100 p-1.5 rounded-lg mr-2">
                                            <svg class="h-4 w-4 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                                        </div>
                                        Last Name *
                                    </label>
                                    <input type="text" id="lastName" name="lastName" value="{{ old('lastName') }}" required class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-red-100 focus:border-red-500 transition-all duration-300 bg-gray-50 focus:bg-white hover:border-gray-300 text-gray-900 placeholder-gray-500" placeholder="Enter your last name">
                                </div>
                            </div>

                            <!-- Contact Fields -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div class="group">
                                    <label for="telephone" class="block text-sm font-semibold text-gray-800 mb-3 flex items-center">
                                        <div class="bg-red-100 p-1.5 rounded-lg mr-2">
                                            <svg class="h-4 w-4 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                                        </div>
                                        Telephone *
                                    </label>
                                    <input type="tel" id="telephone" name="telephone" value="{{ old('telephone') }}" required class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-red-100 focus:border-red-500 transition-all duration-300 bg-gray-50 focus:bg-white hover:border-gray-300 text-gray-900 placeholder-gray-500" placeholder="+254 XXX XXX XXX">
                                </div>
                                <div class="group">
                                    <label for="email" class="block text-sm font-semibold text-gray-800 mb-3 flex items-center">
                                        <div class="bg-red-100 p-1.5 rounded-lg mr-2">
                                            <svg class="h-4 w-4 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                        </div>
                                        Email Address *
                                    </label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-red-100 focus:border-red-500 transition-all duration-300 bg-gray-50 focus:bg-white hover:border-gray-300 text-gray-900 placeholder-gray-500" placeholder="your.email@example.com">
                                </div>
                            </div>

                            <!-- Company Field -->
                            <div class="group">
                                <label for="company" class="block text-sm font-semibold text-gray-800 mb-3 flex items-center">
                                    <div class="bg-red-100 p-1.5 rounded-lg mr-2">
                                        <svg class="h-4 w-4 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                                    </div>
                                    Company <span class="text-gray-500 text-xs ml-2">(optional)</span>
                                </label>
                                <input type="text" id="company" name="company" value="{{ old('company') }}" class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-red-100 focus:border-red-500 transition-all duration-300 bg-gray-50 focus:bg-white hover:border-gray-300 text-gray-900 placeholder-gray-500" placeholder="Your company name">
                            </div>

                            <!-- Message Field -->
                            <div class="group">
                                <label for="message" class="block text-sm font-semibold text-gray-800 mb-3 flex items-center">
                                    <div class="bg-red-100 p-1.5 rounded-lg mr-2">
                                        <svg class="h-4 w-4 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                                    </div>
                                    Message *
                                </label>
                                <textarea id="message" name="message" required rows="6" class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-red-100 focus:border-red-500 transition-all duration-300 bg-gray-50 focus:bg-white hover:border-gray-300 text-gray-900 placeholder-gray-500 resize-vertical min-h-[120px]" placeholder="Please describe your legal matter or inquiry in detail...">{{ old('message') }}</textarea>
                            </div>

                            <!-- File Attachment -->
                            <div class="group">
                                <label for="attachment" class="block text-sm font-semibold text-gray-800 mb-3 flex items-center">
                                    <div class="bg-red-100 p-1.5 rounded-lg mr-2">
                                        <svg class="h-4 w-4 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" /></svg>
                                    </div>
                                    Attachment <span class="text-gray-500 text-xs ml-2">(optional)</span>
                                </label>
                                <div class="relative">
                                    <input type="file" id="attachment" name="attachment" class="hidden" accept=".pdf,.doc,.docx,.txt,.jpg,.jpeg,.png" max-size="20480">
                                    <label for="attachment" id="file-label" class="w-full flex items-center justify-center px-6 py-6 border-2 border-dashed border-gray-300 hover:border-red-400 hover:bg-red-50 text-gray-600 rounded-xl transition-all duration-300 cursor-pointer">
                                        <div class="text-center" id="upload-placeholder">
                                            <svg class="h-8 w-8 mx-auto mb-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" /></svg>
                                            <span class="font-medium" id="file-text">Click to upload a file</span>
                                            <p class="text-xs mt-1 opacity-75">PDF, DOC, DOCX, TXT, JPG, PNG (Max 20MB)</p>
                                        </div>
                                        <div class="hidden text-center" id="file-preview">
                                            <div class="flex items-center justify-center space-x-3">
                                                <svg id="file-icon" class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                                                <span class="font-medium text-gray-700" id="file-name">filename.pdf</span>
                                                <button type="button" id="remove-file" class="text-red-500 hover:text-red-700 transition-colors">
                                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                                                </button>
                                            </div>
                                            <p class="text-xs text-gray-500 mt-2" id="file-size">2.5 MB</p>
                                        </div>
                                    </label>
                                </div>
                                
                                <!-- Upload Progress Bar -->
                                <div id="upload-progress" class="hidden mt-3">
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
                            </div>

                            <!-- Honeypot field for bot protection -->
                            <div style="display: none;">
                                <label for="website">Leave this field empty</label>
                                <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                                <input type="text" id="form_timestamp" name="form_timestamp" value="{{ time() }}">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-6">
                            <button type="submit" id="submit-btn" class="w-full bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-bold py-5 px-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-[1.02] flex items-center justify-center text-lg">
                                <svg class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                <span id="btn-text">Send Message</span>
                            </button>
                            <p class="text-center text-sm text-gray-500 mt-4">We'll respond to your inquiry within the shortest time possible</p>
                            <div class="mt-6 pt-6 border-t border-gray-100 text-center">
                                <p class="text-sm text-gray-500 mb-3">Prefer social media? Find and message us on:</p>
                                @include('partials.social-links', ['variant' => 'light', 'align' => 'justify-center'])
                            </div>
                        </div>
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

            <!-- Right side - Get in Touch -->
            <div class="bg-gradient-to-br from-red-600 to-red-800 rounded-lg shadow-lg p-8 text-white self-start">
                <h2 class="text-2xl font-bold mb-6">Get in Touch</h2>
                <div class="space-y-6">
                    <div class="flex items-start">
                        <svg class="h-6 w-6 mr-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        <div>
                            <h3 class="font-semibold mb-1">Address</h3>
                            <p class="text-white/90">Diamond Plaza, Nairobi</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="h-6 w-6 mr-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                        <div>
                            <h3 class="font-semibold mb-1">Phone</h3>
                            <p class="text-white/90">+254 732 355 157</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="h-6 w-6 mr-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                        <div>
                            <h3 class="font-semibold mb-1">Email</h3>
                            <p class="text-white/90">info@nbyadvocates.com</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="h-6 w-6 mr-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <div>
                            <h3 class="font-semibold mb-1">Business Hours</h3>
                            <p class="text-white/90">Monday - Friday: 8:00 AM - 5:00 PM</p>
                            <p class="text-white/90">Saturday: 9:00 AM - 1:00 PM</p>
                            <p class="text-white/90">Sunday: Closed</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="h-6 w-6 mr-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" /></svg>
                        <div>
                            <h3 class="font-semibold mb-2">Follow Us</h3>
                            @include('partials.social-links', ['variant' => 'onred'])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
                <!-- Firm Info -->
                <div class="lg:col-span-1">
                    <div class="flex items-center mb-6">
                        <div class="bg-red-600 p-2 rounded-lg mr-3">
                            <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" /></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white">NB YASEEN</h3>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed mb-6">Providing exceptional legal services with integrity and excellence.</p>
                    @include('partials.social-links')
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold text-white mb-6 pb-2 border-b border-gray-700">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 flex items-center group"><span class="w-1 h-1 bg-red-500 rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>Home</a></li>
                        <li><a href="{{ route('home') }}#about" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 flex items-center group"><span class="w-1 h-1 bg-red-500 rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>About Us</a></li>
                        <li><a href="{{ route('home') }}#practice-areas" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 flex items-center group"><span class="w-1 h-1 bg-red-500 rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>Services</a></li>
                        <li><a href="{{ route('team') }}" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 flex items-center group"><span class="w-1 h-1 bg-red-500 rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>Our Team</a></li>
                        <li><a href="{{ route('contact-form') }}" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 flex items-center group"><span class="w-1 h-1 bg-red-500 rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>Contact</a></li>
                        <li><a href="https://lawris-app.com/router" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 flex items-center group"><span class="w-1 h-1 bg-red-500 rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>Staff Portal</a></li>
                    </ul>
                </div>

                <!-- Practice Areas -->
                <div>
                    <h4 class="text-lg font-semibold text-white mb-6 pb-2 border-b border-gray-700">Practice Areas</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}#practice-areas" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 flex items-center group"><span class="w-1 h-1 bg-red-500 rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>Commercial Law</a></li>
                        <li><a href="{{ route('home') }}#practice-areas" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 flex items-center group"><span class="w-1 h-1 bg-red-500 rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>Conveyancing</a></li>
                        <li><a href="{{ route('home') }}#practice-areas" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 flex items-center group"><span class="w-1 h-1 bg-red-500 rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>Family Law</a></li>
                        <li><a href="{{ route('home') }}#practice-areas" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 flex items-center group"><span class="w-1 h-1 bg-red-500 rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>Criminal Law</a></li>
                        <li><a href="{{ route('home') }}#practice-areas" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 flex items-center group"><span class="w-1 h-1 bg-red-500 rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>Employment Disputes</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold text-white mb-6 pb-2 border-b border-gray-700">Contact Us</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div class="bg-gray-800 p-2 rounded-lg mr-3 flex-shrink-0">
                                <svg class="h-5 w-5 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            </div>
                            <span class="text-gray-400 text-sm">Diamond Plaza, Nairobi</span>
                        </li>
                        <li class="flex items-center">
                            <div class="bg-gray-800 p-2 rounded-lg mr-3">
                                <svg class="h-5 w-5 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                            </div>
                            <a href="tel:+254732355157" class="text-gray-400 hover:text-white text-sm transition-colors duration-300">+254 732 355 157</a>
                        </li>
                        <li class="flex items-center">
                            <div class="bg-gray-800 p-2 rounded-lg mr-3">
                                <svg class="h-5 w-5 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            </div>
                            <a href="mailto:info@nbyadvocates.com" class="text-gray-400 hover:text-white text-sm transition-colors duration-300">info@nbyadvocates.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="pt-8 mt-8 border-t border-gray-800">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="text-gray-500 text-sm mb-4 md:mb-0">© {{ date('Y') }} NB Yaseen Advocates. All rights reserved.</div>
                    <div class="text-gray-500 text-sm">Developed by <a href="https://digitalvortexltd.com" target="_blank" rel="noopener noreferrer" class="text-red-400 hover:text-red-300 transition-colors duration-300">Digital Vortex</a></div>
                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/254732355157?text=Hello%2C%20I%20would%20like%20to%20inquire%20about%20your%20legal%20services" target="_blank" rel="noopener noreferrer" class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg z-50 transition-all duration-300 transform hover:scale-110">
        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
    </a>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

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
                
                // Additional client-side validation
                const allowedTypes = ['pdf', 'doc', 'docx', 'txt', 'jpg', 'jpeg', 'png'];
                const fileExt = file.name.split('.').pop().toLowerCase();
                if (!allowedTypes.includes(fileExt)) {
                    showFileError(`File type .${fileExt} is not allowed. Allowed types: PDF, DOC, DOCX, TXT, JPG, PNG.`);
                    return;
                }
                
                // Log file details for debugging
                console.log('Uploading file:', {
                    name: file.name,
                    size: file.size,
                    sizeMB: (file.size / 1024 / 1024).toFixed(2),
                    type: file.type,
                    lastModified: new Date(file.lastModified)
                });
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
                    console.log('Upload progress:', Math.round(percentComplete) + '%');
                }
            });

            xhr.addEventListener('load', function() {
                console.log('XHR response status:', xhr.status);
                console.log('XHR response text:', xhr.responseText);
                
                loadingOverlay.classList.add('hidden');
                submitBtn.disabled = false;
                submitBtn.classList.remove('opacity-75', 'cursor-not-allowed');
                btnText.textContent = 'Send Message';
                uploadProgress.classList.add('hidden');
                
                if (xhr.status === 200) {
                    try {
                        const response = JSON.parse(xhr.responseText);
                        if (response.success) {
                            // Show success message
                            const successDiv = document.createElement('div');
                            successDiv.className = 'fixed top-4 right-4 z-50 bg-green-100 border-2 border-green-500 text-green-800 px-6 py-4 rounded-xl shadow-2xl flex items-center space-x-3 animate-bounce-in';
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
                btnText.textContent = 'Send Message';
                uploadProgress.classList.add('hidden');
                alert('Network error. Please check your connection and try again.');
            });

            xhr.addEventListener('abort', function() {
                console.error('XHR was aborted');
                loadingOverlay.classList.add('hidden');
                submitBtn.disabled = false;
                submitBtn.classList.remove('opacity-75', 'cursor-not-allowed');
                btnText.textContent = 'Send Message';
                uploadProgress.classList.add('hidden');
                alert('Upload was cancelled. Please try again.');
            });

            xhr.open('POST', form.action, true);
            xhr.send(formData);
        });
    </script>
</body>
</html>
