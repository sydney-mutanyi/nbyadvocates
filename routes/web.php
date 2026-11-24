<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact-form', [ContactController::class, 'create'])->name('contact-form');
Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:5,1') // Max 5 requests per minute
    ->name('contact.store');

// Practice areas (will be updated with controller later)
Route::get('/practice-area/{slug}', function ($slug) {
    return view('practice-area', ['slug' => $slug]);
})->name('practice-area');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/our-team', function () {
    return view('our-team');
})->name('team');

Route::get('/company-profile', function () {
    return view('company-profile');
})->name('company-profile');

Route::get('/ecard', function () {
    return view('ecard');
})->name('ecard');
