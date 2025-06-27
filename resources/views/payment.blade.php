@extends('layouts.app')

@section('content')

<div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10 mt-20 bg-white rounded-xl shadow-md">
    <h2 class="text-2xl font-bold mb-6">Pembayaran Pesanan #{{ $order->id }}</h2>

    <div class="mb-8">
        <h3 class="text-lg font-semibold mb-4">Ringkasan Pesanan</h3>
        <table class="w-full table-auto border border-gray-200 rounded-md overflow-hidden">
            <thead class="bg-gray-100 text-left">
                <tr>
                    <th class="p-2 sm:p-3">Buku</th>
                    <th class="p-2 sm:p-3 w-24 text-center font-semibold">Jumlah</th>
                    <th class="p-2 sm:p-3 w-28 text-center font-semibold">Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->items as $item)
                <tr class="border-t border-gray-200">
                    <td class="p-2 sm:p-3 flex items-center gap-3 sm:gap-4 min-w-[200px]">
                        <img src="{{ asset('../storage/' . $item->book->image) }}" alt="{{ $item->book->title }}" class="w-12 h-16 sm:w-16 sm:h-20 object-cover rounded">
                        <span class="font-medium text-sm sm:text-base">{{ $item->book->title }}</span>
                    </td>
                    <td class="p-2 sm:p-3 text-center text-sm sm:text-base">{{ $item->quantity }}</td>
                    <td class="p-2 sm:p-3 text-center font-semibold text-gray-900 text-sm sm:text-base">
                        Rp{{ number_format($item->subtotal, 0, ',', '.') }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-right text-lg sm:text-xl font-bold text-gray-900 mt-4">
            Total: Rp{{ number_format($order->total_price, 0, ',', '.') }}
        </div>
    </div>

    <div class="mb-8">
        <h3 class="text-lg text-center font-semibold mb-4">Data Pengiriman</h3>
        <div class="max-w-lg mx-auto space-y-2 p-4 bg-gray-50 rounded-lg">
            <p><strong>Nama:</strong> {{ $order->name }}</p>
            <p><strong>Email:</strong> {{ $order->email }}</p>
            <p><strong>Alamat:</strong> {{ $order->address }}</p>
            <p><strong>Telepon:</strong> {{ $order->phone }}</p>
        </div>
    </div>

    <div class="container mx-auto max-w-md px-4 sm:px-6 lg:px-8 py-10 mt-20 bg-white rounded-xl shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Pilih Metode Pembayaran</h2>

        <div class="space-y-4">
            <a href="{{ route('payment.process', ['order' => $order->id, 'method' => 'credit_card']) }}"
                class="flex items-center justify-start w-full bg-blue-600 text-white py-3 px-6 rounded hover:bg-blue-700 transition-colors duration-200 text-lg font-semibold space-x-3">
                <i class="fas fa-credit-card" style="margin-right: 12px;"></i>
                <span>Credit / Debit Card</span>
            </a>

            <a href="{{ route('payment.process', ['order' => $order->id, 'method' => 'bank_transfer']) }}"
                class="flex items-center justify-start w-full bg-red-600 text-white py-3 px-6 rounded hover:bg-red-700 transition-colors duration-200 text-lg font-semibold space-x-3">
                <i class="fas fa-university" style="margin-right: 12px;"></i>
                <span>Bank Transfer</span>
            </a>

            <a href="{{ route('payment.process', ['order' => $order->id, 'method' => 'ewallet_qris']) }}"
                class="flex items-center justify-start w-full bg-green-600 text-white py-3 px-6 rounded hover:bg-green-700 transition-colors duration-200 text-lg font-semibold space-x-3">
                <i class="fas fa-wallet" style="margin-right: 12px;"></i>
                <span>E-Wallet / QRIS</span>
            </a>
        </div>

    </div>
</div>
@endsection