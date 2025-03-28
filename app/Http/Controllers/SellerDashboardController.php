<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class SellerDashboardController extends Controller
{
    public function index()
    {
        $books = Book::where('seller_id', auth()->id())->get(); // Ambil buku milik seller
        return view('seller.dashboard', compact('books'));
    }
}