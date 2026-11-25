<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'NB YASEEN ADVOCATES') | Cutting Edge Legal Services</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-gray-100 min-h-screen">
    @include('partials.top-strip')

    <!-- Navigation -->
    <nav class="sticky top-0 z-50 shadow-lg">
        <div class="w-full">
            <div class="flex items-center h-20">
                <!-- Mobile Layout - Only visible on small screens -->
                <div class="lg:hidden flex items-center justify-between w-full bg-red-600 px-4">
                    <!-- Logo - Left -->
                    <div class="flex-shrink-0">
                        <a href="{{ route('home') }}" class="focus:outline-none group transition-all duration-300 hover:scale-105 py-2">
                            <img src="/logo1.png" alt="NB YASEEN" class="h-16 w-auto object-contain max-h-full filter drop-shadow-sm group-hover:drop-shadow-md transition-all duration-300">
                        </a>
                    </div>

                    <!-- Center - Instruct Us Button -->
                    <a href="{{ route('contact-form') }}" class="bg-red-700 hover:bg-red-800 text-white px-4 py-2 rounded-lg font-semibold text-sm transition-all duration-200 shadow-md hover:shadow-lg transform hover:scale-105">
                        INSTRUCT US
                    </a>

                    <!-- Mobile menu toggle - Right -->
                    <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="text-white hover:bg-red-700 hover:bg-opacity-50 transition-all duration-200 p-2 rounded-lg shadow-md hover:shadow-lg">
                        <div class="relative w-6 h-6 flex items-center justify-center">
                            <span class="block h-0.5 w-6 bg-white"></span>
                            <span class="block h-0.5 w-6 bg-white mt-1"></span>
                            <span class="block h-0.5 w-6 bg-white mt-1"></span>
                        </div>
                    </button>
                </div>

                <!-- Desktop Navigation - Centered -->
                <div class="hidden lg:flex items-center justify-center flex-1 bg-red-600 h-full px-4">
                    <div class="flex space-x-12">
                        <a href="{{ route('home') }}" class="px-6 py-3 rounded-md text-base font-semibold transition-colors text-white hover:bg-red-700 hover:bg-opacity-30">
                            HOME
                        </a>
                        <a href="{{ route('home') }}#about" class="px-6 py-3 rounded-md text-base font-semibold transition-colors text-white hover:bg-red-700 hover:bg-opacity-30">
                            ABOUT US
                        </a>
                        <div class="relative group" onmouseenter="document.getElementById('practice-dropdown').classList.remove('hidden')" onmouseleave="document.getElementById('practice-dropdown').classList.add('hidden')">
                            <button onclick="document.getElementById('practice-dropdown').classList.toggle('hidden')" class="px-6 py-3 rounded-md text-base font-semibold transition-all duration-200 flex items-center text-white hover:bg-red-700 hover:bg-opacity-30">
                                <span class="mr-1">PRACTICE AREAS</span>
                                <svg class="h-4 w-4 transition-transform duration-200 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <!-- Dropdown Menu -->
                            <div id="practice-dropdown" class="hidden group-hover:block absolute left-0 mt-1 w-64 rounded-lg shadow-xl bg-white ring-1 ring-gray-200 overflow-hidden transition-all duration-200 transform origin-top opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 pointer-events-none group-hover:pointer-events-auto" style="box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);">
                                <div class="py-1">
                                    <a href="{{ route('practice-area', 'commercial') }}" class="block w-full text-left px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 focus:bg-red-50 focus:text-red-600">
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 mr-3 text-gray-400 group-hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                            </svg>
                                            <div class="flex-1">Commercial Law</div>
                                            <svg class="h-4 w-4 text-gray-400 group-hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="{{ route('practice-area', 'conveyancing') }}" class="block w-full text-left px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 focus:bg-red-50 focus:text-red-600">
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 mr-3 text-gray-400 group-hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                            </svg>
                                            <div class="flex-1">Conveyancing</div>
                                            <svg class="h-4 w-4 text-gray-400 group-hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="{{ route('practice-area', 'probate') }}" class="block w-full text-left px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 focus:bg-red-50 focus:text-red-600">
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 mr-3 text-gray-400 group-hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                            <div class="flex-1">Probate & Administration</div>
                                            <svg class="h-4 w-4 text-gray-400 group-hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="{{ route('practice-area', 'family') }}" class="block w-full text-left px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 focus:bg-red-50 focus:text-red-600">
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 mr-3 text-gray-400 group-hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                            <div class="flex-1">Family Law</div>
                                            <svg class="h-4 w-4 text-gray-400 group-hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="{{ route('practice-area', 'criminal') }}" class="block w-full text-left px-4 py-3 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 focus:bg-red-50 focus:text-red-600">
                                        <div class="flex items-center">
                                            <svg class="h-4 w-4 mr-3 text-gray-400 group-hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                            </svg>
                                            <div class="flex-1">Criminal Litigation</div>
                                            <svg class="h-4 w-4 text-gray-400 group-hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('contact-form') }}" class="px-6 py-3 rounded-md text-base font-semibold transition-colors text-white hover:bg-red-700 hover:bg-opacity-30">
                            INSTRUCT US
                        </a>
                        <a href="https://lawris-app.com/router" target="_blank" rel="noopener noreferrer" class="px-6 py-3 rounded-md text-base font-semibold transition-colors text-white hover:bg-red-700 hover:bg-opacity-30">
                            STAFF PORTAL
                        </a>
                    </div>
                </div>

                <!-- Desktop Logo - Right -->
                <div class="hidden lg:block flex-shrink-0 ml-auto bg-white h-full px-3 flex items-center">
                    <a href="{{ route('home') }}" class="focus:outline-none group transition-all duration-300 hover:scale-105 py-1 h-full flex items-center">
                        <img src="/logo.png" alt="NB YASEEN" class="h-18 w-auto object-contain max-h-full filter drop-shadow-lg group-hover:drop-shadow-xl transition-all duration-300">
                    </a>
                </div>
            </div>

            <!-- Mobile Navigation Menu -->
            <div id="mobile-menu" class="hidden lg:hidden bg-red-600 border-t border-red-500 px-4">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="{{ route('home') }}" class="block w-full text-left px-6 py-3 text-white hover:bg-red-700 hover:bg-opacity-50 font-semibold transition-colors duration-200 rounded-md text-base">HOME</a>
                    <a href="{{ route('home') }}#about" class="block w-full text-left px-6 py-3 text-white hover:bg-red-700 hover:bg-opacity-50 font-semibold transition-colors duration-200 rounded-md text-base">ABOUT US</a>
                    <div class="space-y-1">
                        <button onclick="document.getElementById('mobile-practice-dropdown').classList.toggle('hidden')" class="flex justify-between items-center w-full text-left px-6 py-3 text-white hover:bg-red-700 hover:bg-opacity-50 font-semibold transition-colors duration-200 rounded-md text-base">
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
                    <a href="{{ route('contact-form') }}" class="block w-full text-left px-6 py-3 text-white hover:bg-red-700 hover:bg-opacity-50 font-semibold transition-colors duration-200 rounded-md text-base">INSTRUCT US</a>
                    <a href="https://lawris-app.com/router" target="_blank" rel="noopener noreferrer" class="block w-full text-left px-6 py-3 text-white hover:bg-red-700 hover:bg-opacity-50 font-semibold transition-colors duration-200 rounded-md text-base">STAFF PORTAL</a>
                    @include('partials.mobile-social')
                </div>
            </div>
        </div>
    </nav>

    <main class="min-h-[calc(100vh-64px)]">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
                <!-- Firm Info -->
                <div class="lg:col-span-1">
                    <div class="flex items-center mb-6">
                        <div class="bg-red-600 p-2 rounded-lg mr-3">
                            <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white">NB YASEEN</h3>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed mb-6">
                        Providing exceptional legal services with integrity and excellence
                    </p>
                    @include('partials.social-links')
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold text-white mb-6 pb-2 border-b border-gray-700">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white text-sm transition-colors duration-300">Home</a></li>
                        <li><a href="{{ route('home') }}#practice-areas" class="text-gray-400 hover:text-white text-sm transition-colors duration-300">Practice Areas</a></li>
                        <li><a href="{{ route('home') }}#about" class="text-gray-400 hover:text-white text-sm transition-colors duration-300">About Us</a></li>
                        <li><a href="{{ route('home') }}#contact" class="text-gray-400 hover:text-white text-sm transition-colors duration-300">Contact</a></li>
                        <li><a href="https://lawris-app.com/router" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white text-sm transition-colors duration-300">Staff Portal</a></li>
                    </ul>
                </div>

                <!-- Practice Areas -->
                <div>
                    <h4 class="text-lg font-semibold text-white mb-6 pb-2 border-b border-gray-700">Practice Areas</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('practice-area', 'commercial') }}" class="text-gray-400 hover:text-white text-sm transition-colors duration-300">Commercial Law</a></li>
                        <li><a href="{{ route('practice-area', 'conveyancing') }}" class="text-gray-400 hover:text-white text-sm transition-colors duration-300">Conveyancing</a></li>
                        <li><a href="{{ route('practice-area', 'family') }}" class="text-gray-400 hover:text-white text-sm transition-colors duration-300">Family Law</a></li>
                        <li><a href="{{ route('practice-area', 'criminal') }}" class="text-gray-400 hover:text-white text-sm transition-colors duration-300">Criminal Law</a></li>
                        <li><a href="{{ route('practice-area', 'employment-disputes') }}" class="text-gray-400 hover:text-white text-sm transition-colors duration-300">Employment Disputes</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold text-white mb-6 pb-2 border-b border-gray-700">Contact Info</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div class="bg-gray-800 p-2 rounded-lg mr-3 flex-shrink-0">
                                <svg class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-300 text-sm">Diamond Plaza, Nairobi<br>P.O Box 38556-00623</p>
                            </div>
                        </li>
                        <li class="flex items-center">
                            <div class="bg-gray-800 p-2 rounded-lg mr-3 flex-shrink-0">
                                <svg class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <a href="tel:+254732355157" class="text-gray-300 hover:text-white text-sm transition-colors duration-300">+254 732 355 157</a>
                        </li>
                        <li class="flex items-center">
                            <div class="bg-gray-800 p-2 rounded-lg mr-3 flex-shrink-0">
                                <svg class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <a href="mailto:info@nbyadvocates.com" class="text-gray-300 hover:text-white text-sm transition-colors duration-300 break-all">info@nbyadvocates.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-gray-800 pt-8 mt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-500 text-sm text-center md:text-left mb-4 md:mb-0">
                        © {{ date('Y') }} NB YASEEN ADVOCATES. All rights reserved.
                    </p>
                </div>
                <div class="mt-6 pt-6 border-t border-gray-800 text-center">
                    <p class="text-sm text-gray-600">
                        Designed with <span class="text-red-500">❤</span> by <a href="https://digitalvortexltd.com" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-colors duration-300">Digital Vortex</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/254732355157?text=Hello%2C%20I%20would%20like%20to%20inquire%20about%20your%20legal%20services" target="_blank" rel="noopener noreferrer" class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg z-50 transition-all duration-300 transform hover:scale-110" aria-label="Chat with us on WhatsApp">
        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
        </svg>
    </a>

    @stack('scripts')
</body>
</html>
