<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use App\Models\Book;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
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
        Route::get('/buku', [SellerDashboardController::class, 'index'])->name('admin.buku');

        Route::prefix('books')->name('admin.books.')->group(function () {
            // Menampilkan daftar buku
            Route::get('/', [BookController::class, 'index'])->name('index');

            // Menambahkan buku
            Route::get('tambah', [BookController::class, 'create'])->name('tambah');
            Route::post('tambah', [BookController::class, 'store'])->name('store');

            // Mengedit buku
            Route::get('edit/{slug}', [BookController::class, 'edit'])->name('edit');
            Route::put('edit/{slug}', [BookController::class, 'update'])->name('update');

            // Menghapus buku
            Route::get('hapus/{slug}', [BookController::class, 'destroy'])->name('hapus');
        });
    });

    // Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/update-picture', [ProfileController::class, 'updatePicture'])->name('profile.updatePicture');

    // Change Password
    Route::get('/change-password', [AuthController::class, 'showChangePasswordForm'])->name('password.change');
    Route::post('/change-password', [AuthController::class, 'updatePassword'])->name('password.update');

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
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');

    // Payment
    Route::get('/payment/{order}', [CheckoutController::class, 'payment'])->name('payment');
    Route::get('/payment/{order}/pay/{method}', [CheckoutController::class, 'handlePayment'])->name('payment.process');

    Route::get('/payment/{order}/card', function ($orderId) {
        $order = \App\Models\Order::findOrFail($orderId);
        return view('payments.card', compact('order'));
    })->name('payment.card');

    Route::get('/payment/{order}/bank', function ($orderId) {
        $order = \App\Models\Order::findOrFail($orderId);
        return view('payments.bank', compact('order'));
    })->name('payment.bank');

    Route::get('/payment/{order}/qris', function ($orderId) {
        $order = \App\Models\Order::findOrFail($orderId);
        return view('payments.qris', compact('order'));
    })->name('payment.qris');

    // Orders History
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.shows');
    Route::get('/orders/{order}', [OrderController::class, 'show'])
        ->name('orders.details')
        ->scopeBindings();
});
