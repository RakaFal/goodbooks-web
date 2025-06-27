@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-2xl mt-20 bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-6">🏦 Pembayaran via Transfer Bank</h2>

    <p class="text-gray-700 mb-4">Silakan transfer total pembayaran ke rekening berikut:</p>

    <div class="bg-gray-50 p-4 border border-gray-200 rounded mb-4 text-sm">
        <p><strong>Bank:</strong> BCA</p>
        <p><strong>No. Rekening:</strong> 1234567890</p>
        <p><strong>Atas Nama:</strong> GoodBooks</p>
        <p><strong>Total:</strong> <span class="text-blue-600 font-semibold">Rp{{ number_format($order->total_price, 0, ',', '.') }}</span></p>
    </div>

    <p class="text-gray-600 mb-6">Setelah transfer, konfirmasi pembayaran ke admin via WhatsApp atau Email.</p>

    <div class="text-right">
        <a href="{{ route('home') }}" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded text-sm">
            Selesai
        </a>
    </div>
</div>
@endsection
