@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-5xl px-6 py-10 mt-20 bg-white rounded-xl shadow-md">
    <h1 class="text-3xl font-bold text-gray-800 mb-8">Detail Pesanan</h1>

    <div class="border rounded-lg p-6 shadow-sm">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="text-xl font-semibold text-gray-700">Order #{{ $order->id }}</h2>
                <p class="text-gray-500 text-sm">Tanggal: {{ $order->created_at->format('d M Y, H:i') }}</p>
            </div>
            <span class="inline-block px-3 py-1 rounded-full text-sm font-semibold
                {{ $order->status === 'paid' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                {{ ucfirst($order->status) }}
            </span>
        </div>

        <div class="space-y-3 text-gray-700">
            <p><strong>Nama:</strong> {{ $order->name }}</p>
            <p><strong>Email:</strong> {{ $order->email }}</p>
            <p><strong>Telepon:</strong> {{ $order->phone }}</p>
            <p><strong>Alamat:</strong> {{ $order->address }}</p>
            @if ($order->items->count())
            @foreach ($order->items as $item)
            <ul class="divide-y divide-gray-200">
                <li class="py-3 flex items-start space-x-4 border-b last:border-b-0">
                    <!-- Gambar Buku -->
                    <div class="w-8 h-12 rounded overflow-hidden bg-gray-100 flex-shrink-0">
                        @if ($item->book && $item->book->image)
                        <img src="{{ asset('storage/' . $item->book->image) }}"
                            alt="{{ $item->book->title }}"
                            class="w-full h-full object-cover rounded">
                        @else
                        <div class="w-full h-full flex items-center justify-center text-sm text-gray-400">
                            Tidak ada gambar
                        </div>
                        @endif
                    </div>


                    <!-- Info Buku -->
                    <div class="flex-1">
                        <p class="text-gray-800 font-semibold">{{ $item->book->title ?? 'Judul tidak ditemukan' }}</p>
                        <p class="text-sm text-gray-500">Jumlah: {{ $item->quantity }}</p>
                    </div>

                    <!-- Harga -->
                    <div class="text-right text-gray-700 min-w-[100px]">
                        <p>Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                        <p class="text-sm text-gray-400">Subtotal: Rp {{ number_format($item->price * $item->quantity, 0, ',', '.') }}</p>
                    </div>
                </li>
                @endforeach
            </ul>
            @else
            <p class="text-gray-500">Belum ada item dalam pesanan ini.</p>
            @endif
            <p><strong>Total Harga:</strong> Rp {{ number_format($order->total_price, 0, ',', '.') }}</p>
        </div>
        
        <div class="mt-6">
            <a href="{{ route('orders.shows') }}"
                class="inline-block text-red-600 font-semibold">
                ← Kembali ke Riwayat
            </a>
        </div>
    </div>
</div>
@endsection