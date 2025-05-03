<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SellerDashboardController;

// Halaman utama
Route::get('/', function () {
    return view('home');
})->name('home');

// Auth: Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Auth: Register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Route untuk logout
Route::post('/logout', function () {
    Auth::logout(); // Logout pengguna
    return redirect('/'); // Arahkan ke halaman home
})->name('logout');

// Buku detail (akses umum)
Route::get('/books/{id}', [BookController::class, 'show'])->name('book.detail');

// Halaman hanya untuk user yang login
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Daftar buku (admin/seller)
    Route::get('/buku', function () {
        return view('admin.daftar-buku');
    })->name('buku');

    // Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    // Cart
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

    // Checkout
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
});