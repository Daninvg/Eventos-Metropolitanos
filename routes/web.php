<?php

use App\Http\Controllers\UserController;
use Laravel\Fortify\Features;
use Illuminate\Support\Facades\Route;
use App\Livewire\Landing\Landing;

Route::view('/', 'pages.landing')->name('home');
Route::view('/landing', 'pages.landing')->name('pages.landing');
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('user', UserController::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/settings.php';
