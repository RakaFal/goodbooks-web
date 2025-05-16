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
}