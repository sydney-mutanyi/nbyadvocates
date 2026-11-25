@extends('layouts.app')

@section('title', 'Home')

@section('content')
@php
$cards = [
    ['title' => 'INSTRUCT US', 'description' => 'Get in touch with our legal team', 'icon' => 'file-text', 'id' => 'instruct', 'route' => 'contact-form', 'color' => 'bg-green-600 hover:bg-green-700'],
    ['title' => 'WHY US ?', 'description' => 'Learn about our firm and our commitment to excellence', 'icon' => 'users', 'id' => 'proposition', 'route' => '#proposition', 'color' => 'bg-blue-600 hover:bg-blue-700'],
    ['title' => 'PRACTICE AREAS', 'description' => 'Explore our legal expertise and services', 'icon' => 'scale', 'id' => 'practice-areas', 'route' => '#practice-areas', 'color' => 'bg-red-600 hover:bg-red-700'],
    ['title' => 'OVERSEAS CLIENTS', 'description' => 'Access helpful legal information', 'icon' => 'globe', 'id' => 'diaspora', 'route' => '#diaspora', 'color' => 'bg-purple-600 hover:bg-purple-700'],
    ['title' => 'OUR TEAM', 'description' => 'Meet our experienced attorneys', 'icon' => 'user-check', 'id' => 'team', 'route' => '#team', 'color' => 'bg-amber-600 hover:bg-amber-700'],
    ['title' => 'CONTACT US', 'description' => 'Get in touch with our office', 'icon' => 'phone', 'id' => 'contact', 'route' => '#contact', 'color' => 'bg-teal-600 hover:bg-teal-700'],
];

$practiceAreas = [
    ['title' => 'Commercial Law', 'icon' => 'building', 'description' => 'We advise businesses of all sizes; start-ups, SMEs and corporations, on the full spectrum of commercial matters.', 'key' => 'commercial'],
    ['title' => 'Conveyancing', 'icon' => 'home', 'description' => 'Our Conveyancing service covers residential and commercial property transactions; from sale and purchase to transfer of leases, mortgages, lease extensions and more.', 'key' => 'conveyancing'],
    ['title' => 'Probate & Administration', 'icon' => 'file-text', 'description' => 'Navigating probate and estate administration after bereavement can be emotionally taxing. NB YASEEN supports executors, beneficiaries and grieving families through each stage.', 'key' => 'probate'],
    ['title' => 'Family Law', 'icon' => 'users', 'description' => 'Our legal firm provides a full-spectrum family law services. All solutions are tailored to your unique situation, whether amicable resolution, mediation or court proceedings.', 'key' => 'family'],
    ['title' => 'Criminal Litigation', 'icon' => 'gavel', 'description' => 'Our criminal litigation service covers all police-led investigations and prosecutions, from minor offences to serious indictable matters.', 'key' => 'criminal'],
    ['title' => 'Employment Disputes', 'icon' => 'briefcase', 'description' => 'By virtue of our great insights into national and international labour laws and other instruments, our employment law service supports both employers and employees with individual and collective disputes.', 'key' => 'employment-disputes'],
    ['title' => 'Civil Litigation', 'icon' => 'scale', 'description' => 'NB YASEEN Advocates offers comprehensive litigation services across an array of civil matters in the Kenyan court system.', 'key' => 'civil-litigation'],
    ['title' => 'Company Law', 'icon' => 'clipboard', 'description' => 'We assist start-ups, growing businesses and established Kenyan and foreign companies with a wide range of services', 'key' => 'company-law'],
    ['title' => 'Mediation', 'icon' => 'chat', 'description' => 'At NB YASEEN, we promote early dispute resolution through professionally-mediated negotiation, offering mediation services alongside representation in family, commercial, employment and civil disputes.', 'key' => 'mediation'],
    ['title' => 'Islamic Law', 'icon' => 'book', 'description' => 'Expert guidance on matters of Islamic personal law in Kenya', 'key' => 'islamic-law'],
    ['title' => 'General Practice', 'icon' => 'star', 'description' => 'NB YASEEN ADVOCATES provides legal services across a broad range of practice areas. Think of us as your legal equivalent of a family doctor.', 'key' => 'general-practice'],
    ['title' => 'Legal Due Diligence', 'icon' => 'shield', 'description' => 'Turn to NB YASEEN ADVOCATES to hedge your business against avoidable risk and uncertainty. Our Legal Due Diligence Audit and Risk Management services are designed to give you clarity, confidence, and control over your business operations.', 'key' => 'legal-due-diligence'],
];
@endphp

<div id="home" class="min-h-[calc(100vh-64px)]">
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-1 sm:py-2 lg:py-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-8 lg:gap-12 min-h-[calc(100vh-180px)]">
            <!-- Left Side - Introductory Content -->
            <div class="flex flex-col justify-center space-y-4 sm:space-y-8 lg:space-y-10 text-center">
                <!-- Hero Text -->
                <div class="space-y-2 sm:space-y-4">
                    <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-serif font-bold text-gray-900 uppercase tracking-tight leading-tight">
                        NB YASEEN
                    </h2>
                    <p class="text-lg sm:text-xl lg:text-2xl xl:text-3xl font-serif font-normal text-gray-700 uppercase tracking-wider">
                        ADVOCATES
                    </p>
                    <div class="w-20 lg:w-24 h-0.5 bg-red-600 mx-auto"></div>
                </div>

                <!-- Values Section -->
                <div class="flex justify-center space-x-3 sm:space-x-6 lg:space-x-12">
                    <div class="flex flex-col items-center group transform hover:scale-105 transition-all duration-300">
                        <div class="p-3 mb-3 bg-gradient-to-br from-blue-50 to-indigo-100 rounded-full shadow-md group-hover:shadow-lg transition-all duration-300">
                            <svg class="h-6 w-6 sm:h-7 sm:w-7 lg:h-8 lg:w-8 text-blue-600 group-hover:text-blue-700 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <span class="text-xs sm:text-sm lg:text-base font-serif font-semibold text-red-600 uppercase tracking-wide group-hover:text-blue-700 transition-colors duration-300">DIGITAL</span>
                        <div class="w-8 sm:w-10 lg:w-12 h-0.5 bg-gradient-to-r from-blue-500 to-indigo-600 mt-1 group-hover:from-blue-600 group-hover:to-indigo-700 transition-all duration-300"></div>
                    </div>
                    <div class="flex flex-col items-center group transform hover:scale-105 transition-all duration-300">
                        <div class="p-3 mb-3 bg-gradient-to-br from-green-50 to-emerald-100 rounded-full shadow-md group-hover:shadow-lg transition-all duration-300">
                            <svg class="h-6 w-6 sm:h-7 sm:w-7 lg:h-8 lg:w-8 text-green-600 group-hover:text-green-700 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <span class="text-xs sm:text-sm lg:text-base font-serif font-semibold text-red-600 uppercase tracking-wide group-hover:text-green-700 transition-colors duration-300">FAST</span>
                        <div class="w-8 sm:w-10 lg:w-12 h-0.5 bg-gradient-to-r from-green-500 to-emerald-600 mt-1 group-hover:from-green-600 group-hover:to-emerald-700 transition-all duration-300"></div>
                    </div>
                    <div class="flex flex-col items-center group transform hover:scale-105 transition-all duration-300">
                        <div class="p-3 mb-3 bg-gradient-to-br from-purple-50 to-violet-100 rounded-full shadow-md group-hover:shadow-lg transition-all duration-300">
                            <svg class="h-6 w-6 sm:h-7 sm:w-7 lg:h-8 lg:w-8 text-purple-600 group-hover:text-purple-700 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                        </div>
                        <span class="text-xs sm:text-sm lg:text-base font-serif font-semibold text-red-600 uppercase tracking-wide group-hover:text-purple-700 transition-colors duration-300">DILIGENT</span>
                        <div class="w-8 sm:w-10 lg:w-12 h-0.5 bg-gradient-to-r from-purple-500 to-violet-600 mt-1 group-hover:from-purple-600 group-hover:to-violet-700 transition-all duration-300"></div>
                    </div>
                </div>

                <!-- Main Tagline -->
                <div class="space-y-2">
                    <h1 class="text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl font-serif font-bold text-gray-900 tracking-tight leading-tight">
                        Cutting Edge Legal Services
                        <br />
                        <span class="text-red-600">Across The Region</span>
                    </h1>
                </div>
            </div>

            <!-- Right Side - Navigation Cards Grid -->
            <div class="flex items-center justify-center lg:justify-end">
                <!-- Mobile: Rounded Buttons -->
                <div class="grid grid-cols-2 gap-4 w-full max-w-sm sm:hidden">
                    @foreach($cards as $index => $card)
                    @php
                    $colorSchemes = [
                        ['bg' => 'bg-gradient-to-br from-blue-50 to-indigo-100', 'border' => 'border-blue-200', 'hover' => 'hover:border-blue-400 hover:from-blue-100 hover:to-indigo-200', 'icon' => 'text-blue-600'],
                        ['bg' => 'bg-gradient-to-br from-emerald-50 to-green-100', 'border' => 'border-emerald-200', 'hover' => 'hover:border-emerald-400 hover:from-emerald-100 hover:to-green-200', 'icon' => 'text-emerald-600'],
                        ['bg' => 'bg-gradient-to-br from-purple-50 to-violet-100', 'border' => 'border-purple-200', 'hover' => 'hover:border-purple-400 hover:from-purple-100 hover:to-violet-200', 'icon' => 'text-purple-600'],
                        ['bg' => 'bg-gradient-to-br from-orange-50 to-amber-100', 'border' => 'border-orange-200', 'hover' => 'hover:border-orange-400 hover:from-orange-100 hover:to-amber-200', 'icon' => 'text-orange-600'],
                        ['bg' => 'bg-gradient-to-br from-rose-50 to-pink-100', 'border' => 'border-rose-200', 'hover' => 'hover:border-rose-400 hover:from-rose-100 hover:to-pink-200', 'icon' => 'text-rose-600'],
                        ['bg' => 'bg-gradient-to-br from-teal-50 to-cyan-100', 'border' => 'border-teal-200', 'hover' => 'hover:border-teal-400 hover:from-teal-100 hover:to-cyan-200', 'icon' => 'text-teal-600'],
                    ];
                    $scheme = $colorSchemes[$index % count($colorSchemes)];
                    @endphp
                    <a href="{{ str_starts_with($card['route'], '#') ? $card['route'] : route($card['route']) }}" class="group {{ $scheme['bg'] }} border-2 {{ $scheme['border'] }} rounded-2xl px-4 py-4 shadow-lg hover:shadow-xl transition-all duration-300 {{ $scheme['hover'] }} transform hover:scale-105 flex items-center justify-center space-x-2">
                        @if($card['icon'] == 'file-text')
                        <svg class="h-5 w-5 {{ $scheme['icon'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                        @elseif($card['icon'] == 'users')
                        <svg class="h-5 w-5 {{ $scheme['icon'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                        @elseif($card['icon'] == 'scale')
                        <svg class="h-5 w-5 {{ $scheme['icon'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" /></svg>
                        @elseif($card['icon'] == 'globe')
                        <svg class="h-5 w-5 {{ $scheme['icon'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        @elseif($card['icon'] == 'user-check')
                        <svg class="h-5 w-5 {{ $scheme['icon'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                        @elseif($card['icon'] == 'phone')
                        <svg class="h-5 w-5 {{ $scheme['icon'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                        @endif
                        <span class="text-xs font-bold text-gray-900 uppercase tracking-wide whitespace-nowrap">{{ $card['title'] }}</span>
                    </a>
                    @endforeach
                </div>

                <!-- Tablet and Desktop: Card Grid -->
                <div class="hidden sm:grid grid-cols-3 gap-4 w-full max-w-sm sm:max-w-md lg:max-w-none lg:gap-6">
                    @foreach($cards as $index => $card)
                    @php
                    $colorSchemes = [
                        ['bg' => 'bg-gradient-to-br from-blue-50 to-indigo-100', 'border' => 'border-blue-200', 'hover' => 'hover:border-blue-400 hover:from-blue-100 hover:to-indigo-200', 'icon' => 'text-blue-600'],
                        ['bg' => 'bg-gradient-to-br from-emerald-50 to-green-100', 'border' => 'border-emerald-200', 'hover' => 'hover:border-emerald-400 hover:from-emerald-100 hover:to-green-200', 'icon' => 'text-emerald-600'],
                        ['bg' => 'bg-gradient-to-br from-purple-50 to-violet-100', 'border' => 'border-purple-200', 'hover' => 'hover:border-purple-400 hover:from-purple-100 hover:to-violet-200', 'icon' => 'text-purple-600'],
                        ['bg' => 'bg-gradient-to-br from-orange-50 to-amber-100', 'border' => 'border-orange-200', 'hover' => 'hover:border-orange-400 hover:from-orange-100 hover:to-amber-200', 'icon' => 'text-orange-600'],
                        ['bg' => 'bg-gradient-to-br from-rose-50 to-pink-100', 'border' => 'border-rose-200', 'hover' => 'hover:border-rose-400 hover:from-rose-100 hover:to-pink-200', 'icon' => 'text-rose-600'],
                        ['bg' => 'bg-gradient-to-br from-teal-50 to-cyan-100', 'border' => 'border-teal-200', 'hover' => 'hover:border-teal-400 hover:from-teal-100 hover:to-cyan-200', 'icon' => 'text-teal-600'],
                    ];
                    $scheme = $colorSchemes[$index % count($colorSchemes)];
                    @endphp
                    <a href="{{ str_starts_with($card['route'], '#') ? $card['route'] : route($card['route']) }}" class="group relative {{ $scheme['bg'] }} border-2 {{ $scheme['border'] }} rounded-2xl p-4 sm:p-5 lg:p-6 xl:p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 {{ $scheme['hover'] }} transform hover:scale-105 aspect-square flex flex-col items-center justify-center">
                        <div class="mb-3 sm:mb-4 lg:mb-5">
                            @if($card['icon'] == 'file-text')
                            <svg class="h-6 w-6 sm:h-7 sm:w-7 lg:h-9 lg:w-9 xl:h-11 xl:w-11 {{ $scheme['icon'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                            @elseif($card['icon'] == 'users')
                            <svg class="h-6 w-6 sm:h-7 sm:w-7 lg:h-9 lg:w-9 xl:h-11 xl:w-11 {{ $scheme['icon'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                            @elseif($card['icon'] == 'scale')
                            <svg class="h-6 w-6 sm:h-7 sm:w-7 lg:h-9 lg:w-9 xl:h-11 xl:w-11 {{ $scheme['icon'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" /></svg>
                            @elseif($card['icon'] == 'globe')
                            <svg class="h-6 w-6 sm:h-7 sm:w-7 lg:h-9 lg:w-9 xl:h-11 xl:w-11 {{ $scheme['icon'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            @elseif($card['icon'] == 'user-check')
                            <svg class="h-6 w-6 sm:h-7 sm:w-7 lg:h-9 lg:w-9 xl:h-11 xl:w-11 {{ $scheme['icon'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                            @elseif($card['icon'] == 'phone')
                            <svg class="h-6 w-6 sm:h-7 sm:w-7 lg:h-9 lg:w-9 xl:h-11 xl:w-11 {{ $scheme['icon'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                            @endif
                        </div>
                        <span class="text-xs sm:text-sm lg:text-base font-bold text-gray-900 uppercase tracking-wide text-center leading-tight whitespace-pre-line">{{ $card['title'] }}</span>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Sections -->
<div class="bg-white">
    <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-1 sm:py-3 lg:py-4 space-y-4 sm:space-y-6 lg:space-y-8">
        <!-- About Us Section -->
        <section id="about" class="text-center">
            <div class="mb-4 sm:mb-8">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 tracking-tight mb-2 sm:mb-4">About Us</h2>
                <div class="w-20 h-1 bg-red-600 mx-auto rounded-full"></div>
            </div>
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6 lg:gap-8 items-center mb-6 sm:mb-8 lg:mb-12">
                    <div class="text-left">
                        <p class="text-lg text-gray-600 leading-relaxed mb-3">
                            <span class="text-red-600">NB YASEEN ADVOCATES</span> is a forward-thinking law firm committed to delivering strategic, innovative, and client-centric legal services. With our offices in Diamond Plaza, Nairobi, Kenya, we pride ourselves with being exceptionally <span class="text-red-600">DIGITAL, FAST</span> and <span class="text-red-600">DILIGENT.</span>
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed mb-3 text-left">
                            To address the growing need for both efficient and effective legal support, we leverage cutting-edge digital tools and technologies to enhance our service delivery, ensuring that our clients receive timely, accurate, and exceptional legal solutions, whether online or in-office.
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed mb-6 text-left">
                            What's more? We understand that the world is constantly evolving, and with it, the legal landscape. For clients with interests in the wider East African region, we have a vast and reliable network of partner law firms across the region to serve you.
                        </p>
                    </div>
                    <!-- About video (self-hosted): only metadata loads until the visitor presses play -->
                    <div class="w-full rounded-2xl overflow-hidden shadow-lg border border-gray-100 bg-black">
                        <video class="w-full aspect-video"
                               controls
                               playsinline
                               preload="metadata"
                               controlslist="nodownload"
                               poster="{{ asset('videos/about-poster.jpg') }}"
                               title="NB YASEEN FIRM VIDEO">
                            <source src="{{ asset('videos/about-web.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <section id="proposition" class="text-center">
            <div class="mb-8">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 tracking-tight mb-2">Our Value Proposition</h2>
                <div class="w-20 h-1 bg-red-600 mx-auto rounded-full"></div>
                <p class="text-lg text-gray-600 mt-6 max-w-3xl mx-auto">Why NB Yaseen ADVOCATES?</p>
            </div>

            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100">
                        <div class="text-2xl font-black text-red-600 mb-2">1</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Digital-First Approach</h3>
                        <p class="text-gray-600">We leverage cutting-edge digital tools and technology-powered analytics to accelerate service delivery.</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100">
                        <div class="text-2xl font-black text-red-600 mb-2">2</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Fast &amp; Diligent</h3>
                        <p class="text-gray-600">Our team operates with urgency and precision, combining speed with thoroughness at every turn.</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100">
                        <div class="text-2xl font-black text-red-600 mb-2">3</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Regional Network</h3>
                        <p class="text-gray-600">A vast and reliable network of partner firms across East Africa provides comprehensive cross-border coverage.</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100">
                        <div class="text-2xl font-black text-red-600 mb-2">4</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Client-Centric Service</h3>
                        <p class="text-gray-600">You will not be just another file on the desk — you have a dedicated legal partner at your service.</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100">
                        <div class="text-2xl font-black text-red-600 mb-2">5</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Multi-Disciplinary Expertise</h3>
                        <p class="text-gray-600">Our team covers 12 specialised practice areas, ensuring expert advice regardless of complexity.</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100">
                        <div class="text-2xl font-black text-red-600 mb-2">6</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Integrity &amp; Professionalism</h3>
                        <p class="text-gray-600">We uphold the highest standards guided by a proud history of delivering results and a passion for advocacy.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission, Vision, Values Section -->
        <section class="relative py-2 sm:py-8 lg:py-6 bg-gradient-to-br from-gray-50 to-white overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
                <div class="text-center mb-16">
                    <span class="inline-block px-4 py-2 bg-red-100 text-red-700 text-sm font-semibold rounded-full mb-4">CORPORATE</span>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-gray-900 tracking-tight mb-2 sm:mb-4">Mission, Vision & Statement</h2>
                    <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4 sm:mb-8"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-8">
                    <div class="group relative bg-blue-50 backdrop-blur-sm p-6 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-blue-100 overflow-hidden">
                        <div class="flex flex-col h-full">
                            <div class="flex items-center space-x-4 mb-6">
                                <div class="flex-shrink-0 bg-blue-100 p-3 rounded-xl group-hover:bg-blue-200 transition-all duration-500">
                                    <svg class="h-8 w-8 text-blue-600 transition-colors duration-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-800 tracking-wide">Mission</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed flex-grow text-center">To deliver exceptional digital and physical legal services that exceed client expectations</p>
                            <div class="mt-6 pt-4 border-t border-blue-100">
                                <span class="text-sm font-medium text-blue-600 text-center">Our Commitment to Excellence</span>
                            </div>
                        </div>
                    </div>
                    <div class="group relative bg-green-50 backdrop-blur-sm p-6 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-green-100 overflow-hidden">
                        <div class="flex flex-col h-full">
                            <div class="flex items-center space-x-4 mb-6">
                                <div class="flex-shrink-0 bg-green-100 p-3 rounded-xl group-hover:bg-green-200 transition-all duration-500">
                                    <svg class="h-8 w-8 text-green-600 transition-colors duration-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-800 tracking-wide">Mission Statement</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed flex-grow text-center">To offer outstanding legal services through dedicated, personalised solutions both digitally and in-person, that exceed client expectations, uphold the highest standards of professionalism, and deliver real value across every area of practice</p>
                            <div class="mt-6 pt-4 border-t border-green-100">
                                <span class="text-sm font-medium text-green-600">Guiding Our Every Decision</span>
                            </div>
                        </div>
                    </div>
                    <div class="group relative bg-purple-50 backdrop-blur-sm p-6 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-purple-100 overflow-hidden">
                        <div class="flex flex-col h-full">
                            <div class="flex items-center space-x-4 mb-6">
                                <div class="flex-shrink-0 bg-purple-100 p-3 rounded-xl group-hover:bg-purple-200 transition-all duration-500">
                                    <svg class="h-8 w-8 text-purple-600 transition-colors duration-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-800 tracking-wide">Vision</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed flex-grow text-center">Provide exceptional and client-centric legal services across the East African region</p>
                            <div class="mt-6 pt-4 border-t border-purple-100">
                                <span class="text-sm font-medium text-purple-600">Shaping the Future of Law</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Practice Areas Section -->
        <section id="practice-areas" class="relative py-2 sm:py-4 lg:py-6 bg-gray-50 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
                <div class="text-center mb-2">
                    <span class="inline-block px-4 py-2 bg-red-100 text-red-700 text-sm font-semibold rounded-full mb-4">OUR EXPERTISE</span>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-gray-900 tracking-tight">Practice Areas</h2>
                    <div class="w-20 h-1 bg-red-600 mx-auto mt-2 sm:mt-4 mb-3 sm:mb-6 rounded-full"></div>
                    <p class="mt-2 sm:mt-4 max-w-2xl mx-auto text-gray-600 text-lg">Comprehensive legal solutions tailored to your unique needs, delivered with expertise and dedication.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8">
                    @foreach($practiceAreas as $index => $area)
                    @php
                    $colors = ['bg-red-600 hover:bg-red-700', 'bg-blue-600 hover:bg-blue-700', 'bg-green-600 hover:bg-green-700', 'bg-purple-600 hover:bg-purple-700', 'bg-amber-600 hover:bg-amber-700', 'bg-teal-600 hover:bg-teal-700'];
                    $bgColor = $colors[$index % count($colors)];
                    @endphp
                    <a href="{{ route('practice-area', $area['key']) }}" class="cursor-pointer {{ $bgColor }} p-4 sm:p-6 lg:p-8 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 text-white h-full flex flex-col">
                        <div class="p-3 rounded-full bg-white/20 w-14 h-14 flex items-center justify-center mb-3 sm:mb-6 shadow-inner">
                            @if($area['icon'] == 'building')
                            <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                            @elseif($area['icon'] == 'home')
                            <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                            @elseif($area['icon'] == 'file-text')
                            <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                            @elseif($area['icon'] == 'users')
                            <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                            @elseif($area['icon'] == 'gavel')
                            <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" /></svg>
                            @elseif($area['icon'] == 'briefcase')
                            <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            @elseif($area['icon'] == 'scale')
                            <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" /></svg>
                            @elseif($area['icon'] == 'shield')
                            <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                            @elseif($area['icon'] == 'star')
                            <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" /></svg>
                            @elseif($area['icon'] == 'clipboard')
                            <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" /></svg>
                            @elseif($area['icon'] == 'chat')
                            <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" /></svg>
                            @elseif($area['icon'] == 'book')
                            <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                            @endif
                        </div>
                        <h3 class="text-xl font-bold mb-2 sm:mb-3 text-center">{{ $area['title'] }}</h3>
                        <p class="text-opacity-90 mb-3 sm:mb-6 flex-grow text-center text-white">{{ $area['description'] }}</p>
                        <div class="mt-auto font-medium text-sm uppercase tracking-wide flex items-center justify-center text-center py-2 rounded-md transition-all text-black bg-white/20 hover:bg-white/40">
                            <b>Learn More</b>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="diaspora" class="text-center">
            <div class="mb-8">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 tracking-tight mb-2">Overseas Clients</h2>
                <div class="w-20 h-1 bg-red-600 mx-auto rounded-full"></div>
                <p class="text-lg text-gray-600 mt-6 max-w-3xl mx-auto">Diasporans &amp; Overseas Investors</p>
            </div>

            <div class="max-w-6xl mx-auto">
                <div class="bg-gradient-to-br from-blue-50 to-teal-50 border border-blue-100 rounded-2xl p-8 shadow-lg text-left">
                    <p class="text-lg text-gray-700 leading-relaxed mb-4">
                        If you are <span class="font-bold">OVERSEAS</span>, you can't afford to take risks with your money or investment.
                        Reach out to an established law firm to whom <span class="font-bold">TRUST</span> is a core value.
                        Contact <span class="text-red-600 font-bold">NB YASEEN ADVOCATES</span> for special, dedicated and personalised
                        legal services in Kenya and the larger East African region.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Whether you are buying property, setting up a company, buying or selling, turn to
                        <span class="text-red-600 font-bold">NB YASEEN ADVOCATES</span> for all the legal advice, practical help and protection
                        you require. <span class="font-bold">AVOID RISK.</span> Contact or instruct us.
                        We are <span class="font-bold">DIGITAL, FAST</span> and <span class="font-bold">DILIGENT</span>.
                    </p>
                    <div class="mt-6 pt-6 border-t border-blue-100 flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-5">
                        <span class="text-sm font-semibold text-gray-700 uppercase tracking-wide">Reach us from anywhere &mdash; follow &amp; message us</span>
                        @include('partials.social-links', ['variant' => 'light'])
                    </div>
                </div>
            </div>
        </section>

        <section id="team" class="text-center">
            <div class="mb-8">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 tracking-tight mb-2">Our Team</h2>
                <div class="w-20 h-1 bg-red-600 mx-auto rounded-full"></div>
                <p class="text-lg text-gray-600 mt-6 max-w-3xl mx-auto">Meet our experienced attorneys.</p>
            </div>

            <div class="max-w-6xl mx-auto">
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 text-left">
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        Once you make contact, you will not be just another file on the desk; you will have a dedicated legal partner at your service.
                    </p>
                    <a href="{{ route('team') }}" class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-red-600 text-white font-bold hover:bg-red-700 transition-colors">
                        View Our Team
                    </a>
                </div>
            </div>
        </section>

        <!-- Contact Us Section -->
        <section id="contact" class="text-center">
            <div class="mb-8">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 tracking-tight mb-2">Contact Us</h2>
                <div class="w-20 h-1 bg-red-600 mx-auto rounded-full"></div>
                <p class="text-lg text-gray-600 mt-6 max-w-3xl mx-auto">Reach out to our legal experts for professional guidance and support. We're here to help you navigate your legal challenges.</p>
            </div>

            <!-- Map Section -->
            <div class="mb-12 w-full h-96 rounded-xl overflow-hidden shadow-xl">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8552286266436!2d36.81555327358494!3d-1.2589359355939485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f171b74f9ba57%3A0x11a8c077b37bd655!2sDiamond%20Plaza%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1752847026237!5m2!1sen!2ske"
                    width="100%"
                    height="100%"
                    style="border: 0"
                    allowfullscreen
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    class="rounded-xl"
                ></iframe>
            </div>

            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                    <!-- Contact Information -->
                    <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <h3 class="text-xl font-bold text-gray-900 mb-6 uppercase tracking-wide">Contact Info</h3>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-red-100 rounded-lg flex-shrink-0 flex items-center justify-center mr-4">
                                    <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-1">Our Location</h4>
                                    <p class="text-gray-700">Diamond Plaza, Nairobi</p>
                                    <p class="text-gray-500 text-sm">P.O Box 38556-00623</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex-shrink-0 flex items-center justify-center mr-4">
                                    <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-1">Phone</h4>
                                    <a href="tel:+254732355157" class="text-gray-700 hover:text-red-600 transition-colors">+254 732 355 157</a>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-green-100 rounded-lg flex-shrink-0 flex items-center justify-center mr-4">
                                    <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-1">Email</h4>
                                    <a href="mailto:info@nbyadvocates.com" class="text-gray-700 hover:text-red-600 transition-colors">info@nbyadvocates.com</a>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-purple-100 rounded-lg flex-shrink-0 flex items-center justify-center mr-4">
                                    <svg class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" /></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-2">Follow Us</h4>
                                    @include('partials.social-links', ['variant' => 'light'])
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Office Hours -->
                    <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <h3 class="text-xl font-bold text-gray-900 mb-6 uppercase tracking-wide">Office Hours</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                                <span class="text-gray-600">Monday - Friday</span>
                                <span class="text-gray-900 font-medium">8:00 AM - 5:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                                <span class="text-gray-600">Saturday</span>
                                <span class="text-gray-900 font-medium">9:00 AM - 1:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                                <span class="text-gray-600">Sunday</span>
                                <span class="text-gray-900 font-medium">Closed</span>
                            </div>
                            <div class="pt-2">
                                <p class="text-sm text-gray-500">Emergency services available 24/7</p>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <h3 class="text-xl font-bold text-gray-900 mb-6 uppercase tracking-wide">Quick Actions</h3>
                        <div class="space-y-4">
                            <a href="{{ route('contact-form') }}" class="w-full bg-red-600 text-white py-3 px-4 rounded-lg hover:bg-red-700 transition-all duration-300 font-medium uppercase tracking-wide text-sm flex items-center justify-center">
                                <svg class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                                Instruct Us
                            </a>
                            <a href="tel:+254732355157" class="block w-full bg-blue-600 text-white py-3 px-4 rounded-lg hover:bg-blue-700 transition-all duration-300 font-medium uppercase tracking-wide text-sm text-center">
                                <svg class="h-4 w-4 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                                Call Us Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="faq" class="py-16 sm:py-20 lg:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <span class="inline-block px-4 py-2 bg-red-100 text-red-700 text-sm font-semibold rounded-full mb-4">
                        KNOWLEDGE BASE
                    </span>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-gray-900 tracking-tight mb-4">
                        Frequently Asked Questions
                    </h2>
                    <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                        <span class="text-red-600">NB YASEEN ADVOCATES</span> believes that a legally enlightened client is an empowered individual. Here are answers to some common legal questions in Kenya.
                    </p>
                </div>

                <div class="max-w-4xl mx-auto">
                    <!-- Land and Property Law Category -->
                    <div class="mb-12">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-200 flex items-center">
                            <svg class="h-6 w-6 text-red-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                            Land and Property Law
                        </h3>

                        <!-- FAQ Item 1 -->
                        <div class="mb-6 bg-gray-50 rounded-xl overflow-hidden border border-gray-200">
                            <button class="faq-question w-full text-left p-5 md:p-6 focus:outline-none flex justify-between items-center" onclick="toggleFaq(this)">
                                <span class="text-lg font-semibold text-gray-800">
                                    How can I protect myself from land disputes in Kenya?
                                </span>
                                <svg class="h-5 w-5 text-red-600 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="faq-content overflow-hidden transition-all duration-300 ease-in-out max-h-0">
                                <div class="p-5 md:p-6 pt-0 text-gray-700 bg-white">
                                    <p class="mb-4">Land disputes are a common and thorny issue. To protect yourself, it is important to:</p>
                                    <ul class="list-disc pl-6 space-y-2">
                                        <li>Conduct thorough due diligence before purchasing any land. This includes undertaking a land search at the relevant land registry to confirm ownership and any encumbrances.</li>
                                        <li>Ensure all necessary documents, such as the title deed, are in order and legally sound.</li>
                                        <li>Clearly define land boundaries with the help of a surveyor.</li>
                                        <li>Consult with a qualified land lawyer to guide you through the process and to draft all agreements.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="mb-6 bg-gray-50 rounded-xl overflow-hidden border border-gray-200">
                            <button class="faq-question w-full text-left p-5 md:p-6 focus:outline-none flex justify-between items-center" onclick="toggleFaq(this)">
                                <span class="text-lg font-semibold text-gray-800">
                                    What are the main ways to resolve a land dispute?
                                </span>
                                <svg class="h-5 w-5 text-red-600 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="faq-content overflow-hidden transition-all duration-300 ease-in-out max-h-0">
                                <div class="p-5 md:p-6 pt-0 text-gray-700 bg-white">
                                    <p class="mb-4">There are several avenues for resolving land disputes:</p>
                                    <ul class="list-disc pl-6 space-y-2">
                                        <li><strong>Alternative Dispute Resolution (ADR):</strong> This includes mediation and arbitration, which can be faster and less expensive than going to court.</li>
                                        <li><strong>Court Proceedings:</strong> The Environment and Land Court has the jurisdiction to hear and determine disputes related to land and the environment. You can file a lawsuit to seek a binding and enforceable decision.</li>
                                        <li><strong>Community Land Dispute Resolution:</strong> Under the Community Land Act, disputes over communal land can be resolved through local committees or other designated authorities.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Family Law Category -->
                    <div class="mb-12">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-200 flex items-center">
                            <svg class="h-6 w-6 text-red-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                            Family Law and Succession
                        </h3>

                        <!-- FAQ Item 1 -->
                        <div class="mb-6 bg-gray-50 rounded-xl overflow-hidden border border-gray-200">
                            <button class="faq-question w-full text-left p-5 md:p-6 focus:outline-none flex justify-between items-center" onclick="toggleFaq(this)">
                                <span class="text-lg font-semibold text-gray-800">
                                    What are the legal requirements for a divorce in Kenya?
                                </span>
                                <svg class="h-5 w-5 text-red-600 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="faq-content overflow-hidden transition-all duration-300 ease-in-out max-h-0">
                                <div class="p-5 md:p-6 pt-0 text-gray-700 bg-white">
                                    <p class="mb-4">Divorce in Kenya is governed by the Marriage Act, 2014. The grounds for divorce vary depending on the type of marriage (e.g., Christian, civil, customary). Generally, grounds include:</p>
                                    <ul class="list-disc pl-6 space-y-2">
                                        <li>Adultery</li>
                                        <li>Cruelty</li>
                                        <li>Desertion</li>
                                        <li>Irretrievable breakdown of the marriage</li>
                                    </ul>
                                    <p class="mt-4">It is highly recommended to seek legal advice to understand the specific requirements for your type of marriage and to ensure the process is handled correctly.</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="mb-6 bg-gray-50 rounded-xl overflow-hidden border border-gray-200">
                            <button class="faq-question w-full text-left p-5 md:p-6 focus:outline-none flex justify-between items-center" onclick="toggleFaq(this)">
                                <span class="text-lg font-semibold text-gray-800">
                                    How is matrimonial property divided upon divorce?
                                </span>
                                <svg class="h-5 w-5 text-red-600 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="faq-content overflow-hidden transition-all duration-300 ease-in-out max-h-0">
                                <div class="p-5 md:p-6 pt-0 text-gray-700 bg-white">
                                    <p>The Matrimonial Property Act, 2013, governs the division of property. The law provides for the equitable sharing of matrimonial property acquired during the marriage, regardless of who acquired it. The court considers various factors when making a determination.</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="mb-6 bg-gray-50 rounded-xl overflow-hidden border border-gray-200">
                            <button class="faq-question w-full text-left p-5 md:p-6 focus:outline-none flex justify-between items-center" onclick="toggleFaq(this)">
                                <span class="text-lg font-semibold text-gray-800">
                                    What happens if a person dies without a Will?
                                </span>
                                <svg class="h-5 w-5 text-red-600 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="faq-content overflow-hidden transition-all duration-300 ease-in-out max-h-0">
                                <div class="p-5 md:p-6 pt-0 text-gray-700 bg-white">
                                    <p>If a person dies without a valid Will (intestate), their estate is distributed according to the Law of Succession Act. The law specifies the order in which surviving relatives (spouse, children, etc.) inherit the deceased's property. The High Court will issue a Grant of Letters of Administration to an administrator who will manage and distribute the estate.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Employment Law Category -->
                    <div class="mb-12">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-200 flex items-center">
                            <svg class="h-6 w-6 text-red-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            Employment and Labour Law
                        </h3>

                        <!-- FAQ Item 1 -->
                        <div class="mb-6 bg-gray-50 rounded-xl overflow-hidden border border-gray-200">
                            <button class="faq-question w-full text-left p-5 md:p-6 focus:outline-none flex justify-between items-center" onclick="toggleFaq(this)">
                                <span class="text-lg font-semibold text-gray-800">
                                    What are the grounds for unfair dismissal in Kenya?
                                </span>
                                <svg class="h-5 w-5 text-red-600 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="faq-content overflow-hidden transition-all duration-300 ease-in-out max-h-0">
                                <div class="p-5 md:p-6 pt-0 text-gray-700 bg-white">
                                    <p class="mb-4">Under the Employment Act, termination may be considered unfair if:</p>
                                    <ul class="list-disc pl-6 space-y-2">
                                        <li>The employer does not follow the correct procedural requirements (notice, hearing, etc.)</li>
                                        <li>The dismissal is not based on a valid reason (e.g., misconduct, poor performance, redundancy)</li>
                                        <li>The dismissal is discriminatory (based on race, gender, religion, pregnancy, etc.)</li>
                                        <li>The employer fails to provide a valid reason or evidence for the dismissal</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="justice-sector" class="relative bg-gradient-to-b from-gray-50 to-gray-100 py-20 sm:py-24 lg:py-28 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <span class="inline-block px-4 py-2 bg-red-100 text-red-700 text-sm font-semibold rounded-full mb-4 shadow-sm">
                        JUSTICE SECTOR
                    </span>
                    <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-4">
                        Kenya's Justice Sector Framework
                    </h2>
                    <div class="w-24 h-1.5 bg-red-600 mx-auto rounded-full mb-6"></div>
                    <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                        A comprehensive ecosystem ensuring justice, fairness, and legal reforms across Kenya
                    </p>
                </div>

                <!-- NCAJ Overview -->
                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-10 mb-16 border border-gray-100">
                    <div class="md:flex items-start">
                        <div class="md:w-2/5 mb-8 md:mb-0 md:pr-10 border-b md:border-b-0 md:border-r border-gray-200 pb-8 md:pb-0 md:pr-8">
                            <div class="flex items-center mb-6">
                                <div class="bg-red-100 p-3 rounded-xl mr-4">
                                    <svg class="h-8 w-8 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" /></svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900">
                                    National Council on the Administration of Justice
                                </h3>
                            </div>
                            <p class="text-gray-600 mb-6">
                                The multi-sectoral body coordinating Kenya's justice sector reforms and administration.
                            </p>
                            <a href="https://www.ncaj.go.ke" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-6 py-3 bg-red-600 text-white font-medium rounded-lg hover:bg-red-700 transition-all duration-300">
                                Visit NCAJ Website
                                <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </a>
                        </div>

                        <div class="md:w-3/5 md:pl-10 pt-6 md:pt-0">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="bg-gray-50 p-5 rounded-xl border border-gray-100 hover:border-red-100 hover:bg-white transition-all duration-300">
                                    <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4 bg-red-600">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                                    </div>
                                    <h4 class="font-bold text-gray-900 mb-2 text-lg">Broad Representation</h4>
                                    <p class="text-gray-600 text-sm leading-relaxed">Diverse stakeholders from government agencies and NGOs ensuring comprehensive sector coverage.</p>
                                </div>
                                <div class="bg-gray-50 p-5 rounded-xl border border-gray-100 hover:border-red-100 hover:bg-white transition-all duration-300">
                                    <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4 bg-blue-600">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                                    </div>
                                    <h4 class="font-bold text-gray-900 mb-2 text-lg">Policy Leadership</h4>
                                    <p class="text-gray-600 text-sm leading-relaxed">Driving policy formulation and implementation for an efficient justice system.</p>
                                </div>
                                <div class="bg-gray-50 p-5 rounded-xl border border-gray-100 hover:border-red-100 hover:bg-white transition-all duration-300">
                                    <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4 bg-green-600">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" /></svg>
                                    </div>
                                    <h4 class="font-bold text-gray-900 mb-2 text-lg">Collaborative Structure</h4>
                                    <p class="text-gray-600 text-sm leading-relaxed">Specialized committees and working groups focused on targeted reform areas.</p>
                                </div>
                                <div class="bg-gray-50 p-5 rounded-xl border border-gray-100 hover:border-red-100 hover:bg-white transition-all duration-300">
                                    <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4 bg-purple-600">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                    </div>
                                    <h4 class="font-bold text-gray-900 mb-2 text-lg">Community Engagement</h4>
                                    <p class="text-gray-600 text-sm leading-relaxed">Court Users Committees (CUCs) addressing local justice needs and coordination.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Council Members -->
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- State Actors -->
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                        <div class="bg-gradient-to-r from-red-600 to-red-700 px-8 py-5">
                            <div class="flex items-center">
                                <div class="bg-white bg-opacity-20 p-2 rounded-lg mr-4">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                                </div>
                                <h3 class="text-xl font-bold text-white">State Actors</h3>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="space-y-2">
                                @foreach(['Judiciary', 'Kenya Prisons Service', 'Department of Justice', 'Ministry of Gender, Children and Social Development', 'Ministry of Environment and Mineral Resources', 'Ministry of Lands', 'National Police Service', 'Office of the Director of Public Prosecutions', 'Office of the President (Cabinet Office)', 'Probation and Aftercare Service', 'Attorney-General', 'Witness Protection Agency'] as $index => $item)
                                    <div class="flex items-start p-3 rounded-lg hover:bg-gray-50 transition-colors duration-200 group">
                                        <div class="flex-shrink-0 mt-1">
                                            <div class="w-6 h-6 rounded-full bg-red-100 flex items-center justify-center group-hover:bg-red-600 transition-colors duration-300">
                                                <span class="text-xs font-bold text-red-600 group-hover:text-white transition-colors duration-300">{{ $index + 1 }}</span>
                                            </div>
                                        </div>
                                        <span class="ml-3 text-gray-700 group-hover:text-gray-900 transition-colors duration-300">{{ $item }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Co-opted Members & Non-State Actors -->
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                        <div class="bg-gradient-to-r from-gray-800 to-gray-700 px-8 py-5">
                            <div class="flex items-center">
                                <div class="bg-white bg-opacity-20 p-2 rounded-lg mr-4">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                                </div>
                                <h3 class="text-xl font-bold text-white">Co-opted & Non-State Actors</h3>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                @foreach(['Commission on Administrative Justice', 'Community Service Orders Programme', 'Equality Now', 'Independent Electoral and Boundaries Commission', 'Kenya Association of Manufacturers', 'Kenya Law Reform Commission', 'Kenya Human Rights Commission', 'Kenya National Commission on Human Rights', 'Kenya Private Sector Alliance', 'Legal Resources Foundation', 'Ministry of Defence', 'National Council for Law Reporting', 'The Cradle'] as $index => $item)
                                    <div class="flex items-start p-3 rounded-lg hover:bg-gray-50 transition-colors duration-200 group">
                                        <div class="flex-shrink-0 mt-1">
                                            <div class="w-6 h-6 rounded-full bg-gray-100 flex items-center justify-center group-hover:bg-gray-800 transition-colors duration-300">
                                                <span class="text-xs font-bold text-gray-600 group-hover:text-white transition-colors duration-300">{{ $index + 1 }}</span>
                                            </div>
                                        </div>
                                        <span class="ml-3 text-gray-700 group-hover:text-gray-900 transition-colors duration-300">{{ $item }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            function toggleFaq(button) {
                const content = button.nextElementSibling;
                const icon = button.querySelector('svg');
                if (content && icon) {
                    const isExpanded = content.style.maxHeight;
                    content.style.maxHeight = isExpanded ? '' : content.scrollHeight + 'px';
                    icon.style.transform = isExpanded ? 'rotate(0deg)' : 'rotate(180deg)';
                }
            }
        </script>
    </div>
</div>
@endsection
