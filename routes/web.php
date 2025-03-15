<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('home');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');

Route::middleware(['auth'])->get('/profile', [ProfileController::class, 'index'])->name('profile');