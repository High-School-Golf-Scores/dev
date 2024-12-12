<?php

use App\Livewire\GolfScoreForm;
use App\Livewire\HomePage;
use App\Livewire\Order\Index\Page;
use App\Livewire\Schedule;
use Illuminate\Support\Facades\Route;



Route::view('/logout', 'logout')->name('logout');
Route::get('/home-page', HomePage::class)->middleware(['auth', 'verified']);
Route::get('/schedule', Schedule::class)->middleware(['auth', 'verified']);
Route::get('/golf-scores', GolfScoreForm::class);


Route::get('/store/{store}/orders', Page::class)
    ->middleware('can:view,store');

Route::get('/roster/{store}/players', Page::class)
    ->middleware('can:view,store');


Route::view('/', 'welcome');
Route::view('/posts', 'summaries')->middleware(['auth', 'verified']);
Route::view('/players', 'roster')->middleware(['auth', 'verified']);
Route::view('/courses', 'courses');
Route::view('/tournaments', 'tournaments')->middleware(['auth', 'verified']);
//Route::view('/store/{store}/orders', 'orders');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
