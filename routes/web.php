<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::view('/', 'home')
    ->name('home');

// Authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('create', 'pages.create')->name('create');
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('profile', 'profile')->name('profile');
    Route::post('formulaire', [PageController::class, 'store'])->name('formulaire.store');
    Route::get('/{slug}/edit', [PageController::class, 'edit'])->name('pages.edit');
});

Route::get('/pages', [PageController::class, 'index'])->name('pages');
Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');
Route::put('/{slug}', [PageController::class, 'update'])->name('pages.update');

require __DIR__ . '/auth.php';
