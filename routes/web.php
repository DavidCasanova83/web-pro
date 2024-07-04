<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::view('/', 'home')
    ->name('home');

Route::view('create', 'pages.create')
    ->middleware(['auth'])
    ->name('create');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::post('formulaire', [PageController::class, 'store'])
    ->middleware(['auth'])
    ->name('formulaire.store');

Route::get('/pages', [PageController::class, 'index'])->name('pages');
Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');
Route::get('/{slug}/edit', [PageController::class, 'edit'])->middleware(['auth', 'verified'])->name('pages.edit');
Route::put('/{slug}', [PageController::class, 'update'])->name('pages.update');

require __DIR__ . '/auth.php';
