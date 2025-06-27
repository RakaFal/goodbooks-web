<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);
        if (empty($cart)) {
            return redirect()->route('home')->with('error', 'Keranjang kosong.');
        }

        $user = Auth::user();
        return view('checkout', compact('cart', 'user'));
    }

    public function process(Request $request)
    {
        $cart = session('cart', []);

        if (empty($cart)) {
            return redirect()->route('home')->with('error', 'Keranjang kosong. Silakan belanja dulu.');
        }

        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'address' => 'required|string|max:1000',
            'phone'   => 'required|string|max:20',
        ]);

        // Hitung total
        $total = collect($cart)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });

        // Simpan Order
        $order = Order::create([
            'user_id'     => Auth::id(),
            'name'        => $validated['name'],
            'email'       => $validated['email'],
            'address'     => $validated['address'],
            'phone'       => $validated['phone'],
            'total_price' => $total,
            'status'      => 'pending',
        ]);

        // Simpan Item
        foreach ($cart as $productId => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'book_id'  => $productId,
                'quantity' => $item['quantity'],
                'price'    => $item['price'],
                'subtotal' => $item['price'] * $item['quantity'],
            ]);
        }

        session()->forget('cart');

        // Arahkan ke halaman pemilihan metode pembayaran
        return redirect()->route('payment', $order->id);
    }

    // Menampilkan halaman payment.blade.php untuk pilih metode
    public function payment($orderId)
    {
        $order = Order::with('items.book')->findOrFail($orderId);

        if ($order->user_id !== Auth::id()) {
            abort(403);
        }

        return view('payment', compact('order'));
    }

    // Menangani redirect ke view pembayaran spesifik
    public function handlePayment($orderId, $method)
    {
        $order = Order::with('items.book')->findOrFail($orderId);

        if ($order->user_id !== Auth::id()) {
            abort(403);
        }

        switch ($method) {
            case 'credit_card':
                return view('payments.card', compact('order'));
            case 'bank_transfer':
                return view('payments.bank', compact('order'));
            case 'ewallet_qris':
                return view('payments.qris', compact('order'));
            default:
                abort(404, 'Metode pembayaran tidak ditemukan');
        }
    }
}