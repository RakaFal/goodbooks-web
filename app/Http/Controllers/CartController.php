<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class CartController extends Controller
{
    // Menampilkan halaman keranjang
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    // Menambahkan buku ke keranjang
    public function add($id)
    {
        $book = Book::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'title' => $book->title,
                'price' => $book->price,
                'image' => $book->image,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Buku berhasil ditambahkan ke keranjang!');
    }

    // Mengubah jumlah buku (tambah/kurang)
    public function update(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if ($request->action === 'increase') {
            $cart[$id]['quantity']++;
        } elseif ($request->action === 'decrease' && $cart[$id]['quantity'] > 1) {
            $cart[$id]['quantity']--;
        }

        session()->put('cart', $cart);
        return redirect()->route('cart.index')->with('success', 'Keranjang diperbarui.');
    }

    // Menghapus item dari keranjang
    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Item dihapus dari keranjang.');
    }

    // Halaman checkout (sementara)
    public function checkout()
    {
        return "Halaman Checkout"; // Ubah ke view checkout.blade.php jika sudah ada
    }
}