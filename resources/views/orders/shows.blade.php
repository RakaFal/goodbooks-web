@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-5xl px-6 py-10 mt-20 bg-white rounded-xl shadow-md">

    <h1 class="text-3xl font-bold text-gray-800 mb-8">Riwayat Pesanan</h1>

    @if ($orders->count())
    <div class="space-y-6">
        @foreach ($orders as $order)
        <div class="border rounded-lg p-6 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between items-center mb-4">
                <div>
                    <h2 class="text-xl font-semibold text-gray-700">Order #{{ $order->id }}</h2>
                    <p class="text-gray-500 text-sm">Tanggal: {{ $order->created_at->format('d M Y, H:i') }}</p>
                </div>
                <span
                    class="inline-block px-3 py-1 rounded-full text-sm font-semibold
                            {{ $order->status === 'paid' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                    {{ ucfirst($order->status) }}
                </span>
            </div>

            <p class="text-gray-600 mb-2">Total Harga: <span class="font-semibold">Rp {{ number_format($order->total_price, 0, ',', '.') }}</span></p>

            <a href="{{ route('orders.details', $order->id) }}"
                class="inline-block text-blue-600 font-semibold">
                Lihat Detail
            </a>
        </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $orders->links() }}
    </div>
    @else
    <p class="text-center text-gray-500">Belum ada riwayat pesanan.</p>
    @endif
    <div class="mt-8">
        <a href="{{ route('profile') }}"
            class="bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-2 rounded-md inline-block">
            ← Kembali ke Profile
        </a>
    </div>
</div>
@endsection