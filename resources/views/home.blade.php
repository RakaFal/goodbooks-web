@extends('layouts.app')

@section('content')
    <section class="text-center my-12">
        <h1 class="text-4xl font-bold text-blue-600">Selamat Datang di GoodBooks</h1>
        <p class="text-gray-700 mt-4">Temukan berbagai buku favoritmu dengan harga terbaik!</p>
        <a href="/produk" class="mt-6 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
            Lihat Produk
        </a>
    </section>
    
    {{-- Daftar Produk (Dummy Sementara) --}}
    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="{{ asset('images/book1.jpg') }}" alt="Buku 1" class="w-full h-48 object-cover">
            <h2 class="mt-4 font-bold">Buku Judul 1</h2>
            <p class="text-gray-700">Rp 50.000</p>
            <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Beli</button>
        </div>
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="{{ asset('images/book2.jpg') }}" alt="Buku 2" class="w-full h-48 object-cover">
            <h2 class="mt-4 font-bold">Buku Judul 2</h2>
            <p class="text-gray-700">Rp 75.000</p>
            <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Beli</button>
        </div>
    </section>
@endsection
