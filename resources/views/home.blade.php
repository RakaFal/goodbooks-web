@extends('layouts.app')

@section('content')

    <!-- Trending Now -->
    <section class="text-center my-20" id="trending-now">
        <h1 class="text-4xl font-bold text-blue-600">Welcome Dear Reader!</h1>
        <p class="text-gray-700 mt-4">What's Trending Today!</p>
    </section>
    
    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-center">
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="{{ asset('images/bumi.png') }}" alt="bumi" class="w-full h-48 object-contain">
            <h2 class="mt-4 font-bold">Bumi</h2>
            <p class="text-gray-900">Tere Liye</p>
            <p class="text-gray-600">Rp 89.000</p>
            <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Beli</button>
        </div>
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="{{ asset('images/pulang-pergi.png') }}" alt="pulang-pergi" class="w-full h-48 object-contain">
            <h2 class="mt-4 font-bold">Pulang Pergi</h2>
            <p class="text-gray-900">Tere Liye</p>
            <p class="text-gray-600">Rp 99.000</p>
            <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Beli</button>
        </div>
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="{{ asset('images/kami-(bukan)-jonggos-berdasi.png') }}" alt="kami-(bukan)-jonggos-berdasi" class="w-full h-48 object-contain">
            <h2 class="mt-4 font-bold">Kami (Bukan) Jonggos Berdasi</h2>
            <p class="text-gray-900">J.S. Khairen</p>
            <p class="text-gray-600">Rp 79.000</p>
            <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Beli</button>
        </div>
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="{{ asset('images/tintin-harta-karun.png') }}" alt="tintin-harta-karun" class="w-full h-48 object-contain">
            <h2 class="mt-4 font-bold">Petualangan Tintin</h2>
            <p class="text-gray-900">Herge</p>
            <p class="text-gray-600">Rp 129.000</p>
            <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Beli</button>
        </div>
    </section>

    <section class="text-center my-12">      
        <a href="/produk" class="inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
            View All
        </a>
    </section>

    <hr id="new-arrival">

    <!-- New Arrival -->
    <section class="text-center my-12">  
        <h1 class="my-14 text-4xl font-bold text-blue-600">New Arrivals</h1>
        <p class="text-gray-700 mt-4">Temukan berbagai buku favoritmu dengan harga terbaik!</p>
    </section>

    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-center">
    <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="{{ asset('images/bulan.png') }}" alt="bulan" class="w-full h-48 object-contain">
            <h2 class="mt-4 font-bold">Bulan</h2>
            <p class="text-gray-900">Tere Liye</p>
            <p class="text-gray-600">Rp 89.000</p>
            <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Beli</button>
        </div>
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="{{ asset('images/si-anak-kuat.png') }}" alt="si-anak-kuat" class="w-full h-48 object-contain">
            <h2 class="mt-4 font-bold">Si Anak Kuat</h2>
            <p class="text-gray-900">Tere Liye</p>
            <p class="text-gray-600">Rp 79.000</p>
            <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Beli</button>
        </div>
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="{{ asset('images/laskar-pelangi.png') }}" alt="laskar-pelangi" class="w-full h-48 object-contain">
            <h2 class="mt-4 font-bold">Laskar Pelangi</h2>
            <p class="text-gray-900">Andrea Hirata</p>
            <p class="text-gray-600">Rp 99.000</p>
            <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Beli</button>
        </div>
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="{{ asset('images/komet-minor.png') }}" alt="komet-minor" class="w-full h-48 object-contain">
            <h2 class="mt-4 font-bold">Komet Minor</h2>
            <p class="text-gray-900">Tere Liye</p>
            <p class="text-gray-600">Rp 89.000</p>
            <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Beli</button>
        </div>
    </section>
    
    <section class="text-center my-12">
        <a href="/produk" class="my-14 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
            View All
        </a>
        <hr id="best-seller">
        <h1 class="my-12 text-4xl font-bold text-blue-600">Best Seller</h1>
        <p class="text-gray-700 mt-4">Temukan berbagai buku favoritmu dengan harga terbaik!</p>
    </section>
    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-center">
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="{{ asset('images/mariposa.png') }}" alt="mariposa" class="w-full h-48 object-contain">
            <h2 class="mt-4 font-bold">Mariposa</h2>
            <p class="text-gray-900">Luluk HF</p>
            <p class="text-gray-600">Rp 119.000</p>
            <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Beli</button>
        </div>
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="{{ asset('images/melangkah.png') }}" alt="melangkah" class="w-full h-48 object-contain">
            <h2 class="mt-4 font-bold">Melangkah</h2>
            <p class="text-gray-900">J.S. Khairen</p>
            <p class="text-gray-600">Rp 129.000</p>
            <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Beli</button>
        </div>
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="{{ asset('images/milea.png') }}" alt="milea" class="w-full h-48 object-contain">
            <h2 class="mt-4 font-bold">Milea</h2>
            <p class="text-gray-900">Pidi Baiq</p>
            <p class="text-gray-600">Rp 139.000</p>
            <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Beli</button>
        </div>
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="{{ asset('images/ranah-3-warna.png') }}" alt="ranah-3-warna" class="w-full h-48 object-contain">
            <h2 class="mt-4 font-bold">Ranah 3 Warna</h2>
            <p class="text-gray-900">Ahmad Fuadi</p>
            <p class="text-gray-600">Rp 149.000</p>
            <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Beli</button>
        </div>
    </section>
    <section class="text-center my-12">
        <a href="/produk" class="my-14 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
            View All
        </a>
        <hr id="sale">
        <h1 class="my-12 text-4xl font-bold text-blue-600">Sale</h1>
        <p class="text-gray-700 mt-4">Temukan berbagai buku favoritmu dengan harga terbaik!</p>
    </section>
    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-center">
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="{{ asset('images/terusir.png') }}" alt="terusir" class="w-full h-48 object-contain">
            <h2 class="mt-4 font-bold">Terusir</h2>
            <p class="text-gray-900">Hamka</p>
            <p class="text-gray-600">Rp 39.000</p>
            <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Beli</button>
        </div>
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="{{ asset('images/gustira.png') }}" alt="gustira" class="w-full h-48 object-contain">
            <h2 class="mt-4 font-bold">Gustira</h2>
            <p class="text-gray-900">Kata Kokoh</p>
            <p class="text-gray-600">Rp 59.000</p>
            <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Beli</button>
        </div>
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="{{ asset('images/mozachiko.png') }}" alt="mozachiko" class="w-full h-48 object-contain">
            <h2 class="mt-4 font-bold">Mozachiko</h2>
            <p class="text-gray-900">Poppi Pertiwi</p>
            <p class="text-gray-600">Rp 49.000</p>
            <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Beli</button>
        </div>
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="{{ asset('images/ruang-sunyi.png') }}" alt="ruang-sunyi-" class="w-full h-48 object-contain">
            <h2 class="mt-4 font-bold">Ruang Sunyi</h2>
            <p class="text-gray-900">Herge</p>
            <p class="text-gray-600">Rp 59.000</p>
            <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Beli</button>
        </div>
    </section>
    <section class="text-center my-12">
        <a href="/produk" class="my-14 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
            View All
        </a>
        <hr>
    </section>
@endsection
