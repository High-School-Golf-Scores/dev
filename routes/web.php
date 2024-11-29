<?php

use Illuminate\Support\Facades\Route;

Route::view('/players.index', \App\Livewire\Players\Index::class)
    ->middleware(['auth', 'verified'])
    ->name('index');

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
