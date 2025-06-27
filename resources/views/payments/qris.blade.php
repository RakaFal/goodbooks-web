@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-2xl mt-20 bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-6">📱 Pembayaran via QRIS / E-Wallet</h2>

    <p class="text-gray-700 mb-4">Scan QRIS di bawah ini menggunakan aplikasi e-wallet (GoPay, OVO, Dana, dll):</p>

    <div class="flex justify-center mb-6">
        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjlPJSb5pRn-zrVXY9G1eAjyDpO5WHMw9lJj6wi5ciyAV9Ew6V8PpPN6c5405Qhie9JeYsIVtamZwK2ZmCYT-6y1DSVuQqVl-rwtyLZRnkDjmee-jzGfGyJGt6pBgL2S0rACXFm_Pzo1lBqBDYP4tSL6_mUOVIbzawmp-WzLbr88d2h5xmZ7vhg2Qpxog/s1386/1686440248261.jpg" alt="QRIS" class="w-48 h-48 object-contain border rounded">
    </div>

    <p class="text-gray-600 text-center text-sm">Total yang harus dibayar: <strong class="text-blue-600">Rp{{ number_format($order->total_price, 0, ',', '.') }}</strong></p>

    <div class="text-right">
        <a href="{{ route('home') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded text-sm">
            Kembali ke Beranda
        </a>
    </div>
</div>
@endsection