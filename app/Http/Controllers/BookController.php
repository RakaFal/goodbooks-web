<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show($id) {
        $book = Book::with('category', 'reviews.user')->findOrFail($id);
        return view('book-detail', compact('book'));
    }
}
