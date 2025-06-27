<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class SellerDashboardController extends Controller
{
    // Menampilkan halaman dashboard penjual
    public function index()
    {
        // Ambil semua buku dari database
        $books = Book::all();

        // Kirim data buku ke view 'dashboard'
        return view('admin.daftar-buku', compact('books'));
    }
}