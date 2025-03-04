<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth'])->get('/profile', [ProfileController::class, 'index'])->name('profile');