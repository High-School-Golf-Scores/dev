<?php

use App\Livewire\Player;
use App\Livewire\SchoolSelection;
use App\Livewire\GolfScoreForm;
use App\Livewire\HomePage;
use App\Livewire\Order\Index\Page;
use App\Livewire\Schedule;
use Illuminate\Support\Facades\Route;
use App\Livewire\GolfCourseForm;
use App\Livewire\AssignGolfers;
use App\Livewire\Players;


Route::view('/logout', 'logout')->name('logout');
Route::get('/home-page', HomePage::class)->middleware(['auth', 'verified']);
Route::get('/schedule', Schedule::class)->middleware(['auth', 'verified']);
Route::get('/golf-scores', GolfScoreForm::class);
Route::get('/school-selection', SchoolSelection::class)
    ->middleware(['auth', 'verified'])->name('school-selection');

//Route::get('/players', Players::class)->middleware('auth');
Route::get('/tournament/{id}/assign', AssignGolfers::class)->name('assign.golfers');



Route::get('/store/{store}/orders', Page::class)
    ->middleware('can:view,store');

Route::get('/roster/{store}/players', Page::class)
    ->middleware('can:view,store');


Route::view('/', 'welcome');
Route::view('/posts', 'summaries')->middleware(['auth', 'verified']);
Route::view('/players', 'roster')->middleware(['auth', 'verified']);
Route::view('/courses', 'courses')->middleware(['auth', 'verified']);
Route::view('/tournaments', 'tournaments')->middleware(['auth', 'verified']);
//Route::view('/store/{store}/orders', 'orders');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
