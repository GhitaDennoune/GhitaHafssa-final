<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Landing');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});
Route::get('/creation', function () {
    return Inertia::render('auth/creation');
});

require __DIR__ . '/settings.php';
