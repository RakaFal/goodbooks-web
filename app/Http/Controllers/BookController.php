<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookController extends Controller
{
    // Fungsi helper buat generate slug unik
    private function generateUniqueSlug($title, $ignoreId = null)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $counter = 1;

        // Query untuk cek slug unik, kecuali record dengan id $ignoreId (untuk update)
        while (Book::where('slug', $slug)
            ->when($ignoreId, function ($query) use ($ignoreId) {
                return $query->where('id', '!=', $ignoreId);
            })
            ->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

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
        $book->id_category = $request->category_id;
        $book->slug = $this->generateUniqueSlug($request->title);
        $book->save();

        return redirect()->route('admin.buku')->with('success', 'Buku berhasil ditambahkan!');
    }

    // Menampilkan form edit buku
    public function edit($slug)
    {
        $book = Book::where('slug', $slug)->firstOrFail();
        $categories = Category::all();

        return view('admin.books.edit', compact('book', 'categories'));
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
        $book->id_category = $request->category_id;
        $book->slug = $this->generateUniqueSlug($request->title, $book->id);
        $book->save();

        return redirect()->route('admin.buku')->with('success', 'Buku berhasil diperbarui!');
    }

    // Menghapus buku
    public function destroy($slug)
    {
        $book = Book::where('slug', $slug)->firstOrFail();
        $book->delete();

        return redirect()->route('admin.buku')->with('success', 'Buku berhasil dihapus!');
    }
}