<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show($slug)
    {
        $book = Book::where('slug', $slug)->firstOrFail();
        return view('book-details', compact('book'));
    }

    // Menampilkan buku berdasarkan kategori
    public function showBooksByCategory()
    {
        // Ambil semua buku dengan kategori terkait
        $books = Book::with('category')->get(); // Mengambil semua buku dan memuat kategori terkait

        // Kirim data buku ke view
        return view('home', compact('books'));
    }
}