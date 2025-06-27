@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-2xl mt-20 bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-6">💳 Pembayaran via Kartu</h2>

    <p class="text-gray-700 mb-4">Silakan lanjutkan pembayaran menggunakan kartu debit/kredit Anda melalui gateway kami.</p>

    <div class="bg-gray-100 p-4 rounded mb-6">
        <p class="text-sm text-gray-600">🔒 Transaksi Anda aman dan terenkripsi.</p>
    </div>

    <div class="text-right">
        <a href="{{ route('home') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded text-sm">
            Kembali ke Beranda
        </a>
    </div>
</div>
@endsection