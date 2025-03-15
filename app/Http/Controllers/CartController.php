<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart');
    }

    public function update(Request $request, $id)
    {
        $cart = session()->get('cart');

        if ($request->action === 'increase') {
            $cart[$id]['quantity'] += 1;
        } elseif ($request->action === 'decrease' && $cart[$id]['quantity'] > 1) {
            $cart[$id]['quantity'] -= 1;
        }

        session()->put('cart', $cart);
        return redirect()->route('cart.index');
    }

    public function remove($id)
    {
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect()->route('cart.index');
    }

    public function checkout()
    {
        return "Halaman Checkout"; // Bisa diubah ke view checkout
    }
}
