@extends('layouts.app')

@section('content')
    <section class="text-center my-12">
        <h1 class="text-4xl font-bold text-blue-600">Welcome Dear Reader!</h1>
        <p class="text-gray-700 mt-4">What's Trending Today!</p>
        <!-- <a href="/produk" class="mt-6 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
            Lihat Produk
        </a> -->
    </section>
    
    {{-- Daftar Produk (Dummy Sementara) --}}
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

    {{-- New Arrival --}}

    <section class="text-center my-12">      
        <a href="/produk" class="my-10 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
            View All
        </a>
        <hr>
        <h1 class="my-14 text-4xl font-bold text-blue-600">New Arrivals</h1>
        <p class="text-gray-700 mt-4">Temukan berbagai buku favoritmu dengan harga terbaik!</p>
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
        <a href="/produk" class="my-14 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
            View All
        </a>
        <hr>
        <h1 class="my-12 text-4xl font-bold text-blue-600">Best Seller</h1>
        <p class="text-gray-700 mt-4">Temukan berbagai buku favoritmu dengan harga terbaik!</p>
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
        <a href="/produk" class="my-14 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
            View All
        </a>
        <hr>
        <h1 class="my-12 text-4xl font-bold text-blue-600">Sale</h1>
        <p class="text-gray-700 mt-4">Temukan berbagai buku favoritmu dengan harga terbaik!</p>
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
        <a href="/produk" class="my-14 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
            View All
        </a>
        <hr>
    </section>
@endsection
