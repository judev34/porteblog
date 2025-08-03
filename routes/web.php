<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Portfolio routes
Route::get('/', function () {
    return Inertia::render('Portfolio/Home');
})->name('home');

Route::get('/parcours', function () {
    return Inertia::render('Portfolio/Parcours');
})->name('parcours');

Route::get('/experiences', function () {
    return Inertia::render('Portfolio/Experiences');
})->name('experiences');

Route::get('/realisations', function () {
    return Inertia::render('Portfolio/Realisations');
})->name('realisations');

Route::get('/services', function () {
    return Inertia::render('Portfolio/Services');
})->name('services');

Route::get('/contact', function () {
    return Inertia::render('Portfolio/Contact');
})->name('contact');

// Auth routes (si nécessaire pour l'admin)
Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
