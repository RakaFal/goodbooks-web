<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use App\Models\Book;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SellerDashboardController;

// Halaman utama
Route::get('/', function () {
    $books = Book::all(); // ambil semua buku
    return view('home', compact('books')); // tampilkan view home dengan data books
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
Route::get('/books/{slug}', [BookController::class, 'show'])->name('books.show');

// Halaman hanya untuk user yang login
Route::middleware(['auth'])->group(function () {
    
    Route::prefix('admin')->group(function () {
        // Dashboard Admin
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        // Daftar Buku Admin
        Route::get('/buku', function () {
            return view('admin.daftar-buku');
        })->name('admin.buku');
    });

    // Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/update-picture', [ProfileController::class, 'updatePicture'])->name('profile.updatePicture');

    // Forgot Password
    // Ini adalah route yang akan digunakan ketika user klik "Forgot Password?"
    Route::get('password/reset', function () {
        // Menampilkan view 'auth.passwords.email', biasanya berisi form input email
        return view('auth.passwords.email');
    })->name('password.request'); // Penting: nama route ini harus 'password.request'

    // Route untuk meng-handle permintaan reset password (mengirim email reset)
    // Ini adalah proses ketika user sudah mengisi email lalu klik "Send Reset Link"
    Route::post('password/email', function (Request $request) {
        // Validasi bahwa email tidak boleh kosong dan harus valid
        $request->validate(['email' => 'required|email']);

        // Kirim link reset password ke email
        $status = Password::sendResetLink(
            $request->only('email') // Ambil hanya email dari input
        );

        // Jika berhasil, redirect balik dengan status berhasil
        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            // Jika gagal (misalnya email tidak ditemukan), kirim error
            : back()->withErrors(['email' => __($status)]);
    })->name('password.email'); // Nama route ini harus 'password.email'

    // Cart
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

    // Checkout
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
});
