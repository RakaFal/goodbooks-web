<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Menampilkan form tambah buku
    public function create()
    {
        $categories = Category::all();
        return view('admin.books.tambah', compact('categories'));
    }

    // Menyimpan buku baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        $book = new Book();
        $book->title = $request->title;
        $book->price = $request->price;
        $book->stock = $request->stock;
        $book->category_id = $request->category_id;
        $book->save();

        return redirect()->route('dashboard')->with('success', 'Buku berhasil ditambahkan!');
    }

    // Menampilkan form edit buku
    public function edit($slug)
    {
        $book = Book::where('slug', $slug)->firstOrFail();
        $categories = Category::all();

        // Ubah nama view menjadi sesuai dengan path yang benar
        return view('admin.books.edit', compact('book', 'categories'));  // Menyesuaikan path
    }

    // Memperbarui data buku
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        $book = Book::where('slug', $slug)->firstOrFail();
        $book->title = $request->title;
        $book->price = $request->price;
        $book->stock = $request->stock;
        $book->category_id = $request->category_id;
        $book->save();

        return redirect()->route('dashboard')->with('success', 'Buku berhasil diperbarui!');
    }

    // Menghapus buku
    public function destroy($slug)
    {
        $book = Book::where('slug', $slug)->firstOrFail();
        $book->delete();

        return redirect()->route('dashboard')->with('success', 'Buku berhasil dihapus!');
    }
}
