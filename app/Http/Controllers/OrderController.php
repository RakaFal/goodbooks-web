<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // Tampilkan list riwayat pesanan user yang login
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('orders.shows', compact('orders'));
    }

    // Tampilkan detail pesanan tertentu milik user login
    public function show(Order $order)
    {
        // Karena sudah scoped, otomatis $order milik user yg login
        return view('orders.details', compact('order'));

        $order->load('items.book'); // Pastikan ini ada agar relasi termuat
        return view('orders.details', compact('order'));
    }
}
