<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.landing')->name('home');

Route::resource('user', UserController::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/settings.php';
