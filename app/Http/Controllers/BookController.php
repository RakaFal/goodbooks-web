<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    // Menampilkan detail buku
    public function show($slug)
    {
        $book = Book::where('slug', $slug)->firstOrFail();
        return view('book-details', compact('book'));
    }

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
            ->exists()
        ) {
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
            'description' => 'nullable|string',
            'author' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'publisher' => 'nullable|string|max:255',
            'publish_date' => 'nullable|date',
            'isbn' => 'nullable|string|max:255',
            'pages' => 'nullable|integer',
            'language' => 'nullable|string|max:255',
            'length' => 'nullable|numeric',
            'width' => 'nullable|numeric',
            'weight' => 'nullable|numeric',
            'image' => 'nullable|image|max:2048', // max 2MB
        ]);

        $book = new Book();
        $book->title = $request->title;
        $book->description = $request->description;
        $book->author = $request->author;
        $book->price = $request->price;
        $book->stock = $request->stock;
        $book->id_category = $request->category_id;
        $book->publisher = $request->publisher;
        $book->publish_date = $request->publish_date;
        $book->isbn = $request->isbn;
        $book->pages = $request->pages;
        $book->language = $request->language;
        $book->length = $request->length;
        $book->width = $request->width;
        $book->weight = $request->weight;

        $book->slug = $this->generateUniqueSlug($request->title);

        // Upload gambar jika ada
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('books', 'public');
            $book->image = $path;
        }

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
            'description' => 'nullable|string',
            'author' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'publisher' => 'nullable|string|max:255',
            'publish_date' => 'nullable|date',
            'isbn' => 'nullable|string|max:255',
            'pages' => 'nullable|integer',
            'language' => 'nullable|string|max:255',
            'length' => 'nullable|numeric',
            'width' => 'nullable|numeric',
            'weight' => 'nullable|numeric',
            'image' => 'nullable|image|max:2048',
        ]);

        $book = Book::where('slug', $slug)->firstOrFail();

        $book->title = $request->title;
        $book->description = $request->description;
        $book->author = $request->author;
        $book->price = $request->price;
        $book->stock = $request->stock;
        $book->id_category = $request->category_id;
        $book->publisher = $request->publisher;
        $book->publish_date = $request->publish_date;
        $book->isbn = $request->isbn;
        $book->pages = $request->pages;
        $book->language = $request->language;
        $book->length = $request->length;
        $book->width = $request->width;
        $book->weight = $request->weight;

        $book->slug = $this->generateUniqueSlug($request->title, $book->id);

        // Jika upload gambar baru, hapus gambar lama dan simpan yang baru
        if ($request->hasFile('image')) {
            if ($book->image && Storage::disk('public')->exists($book->image)) {
                Storage::disk('public')->delete($book->image);
            }
            $path = $request->file('image')->store('books', 'public');
            $book->image = $path;
        }

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
