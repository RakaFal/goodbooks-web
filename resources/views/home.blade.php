@extends('layouts.app')

@section('content')

<!-- Banner Section -->
<section class="relative flex justify-center w-full py-8 mt-20">
    <div class="w-full relative">

        <!-- Swiper -->
        <div class="swiper mySwiper w-full h-64 md:h-80 lg:h-96 rounded-lg overflow-hidden relative group">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="w-full h-full bg-black bg-cover bg-center flex items-center justify-center text-white text-center"
                        style="background-image: url('https://source.unsplash.com/1600x600/?books,library');">
                        <div class="bg-black bg-opacity-50 p-6 md:p-10 rounded-lg">
                            <h1 class="text-2xl md:text-4xl font-bold">Diskon Besar Buku Favoritmu!</h1>
                            <p class="mt-2 text-sm md:text-lg">Hemat hingga <span class="text-yellow-400 font-bold">70%</span> sekarang.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="w-full h-full bg-black bg-cover bg-center flex items-center justify-center text-white text-center"
                        style="background-image: url('https://source.unsplash.com/1600x600/?bookstore,reading');">
                        <div class="bg-black bg-opacity-50 p-6 md:p-10 rounded-lg">
                            <h1 class="text-2xl md:text-4xl font-bold">Temukan Koleksi Terbaru!</h1>
                            <p class="mt-2 text-sm md:text-lg">Buku-buku terbaru dengan harga termurah.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="w-full h-full bg-black bg-cover bg-center flex items-center justify-center text-white text-center"
                        style="background-image: url('https://source.unsplash.com/1600x600/?study,desk');">
                        <div class="bg-black bg-opacity-50 p-6 md:p-10 rounded-lg">
                            <h1 class="text-2xl md:text-4xl font-bold">Gratis Ongkir Seluruh Indonesia!</h1>
                            <p class="mt-2 text-sm md:text-lg">Belanja tanpa khawatir biaya pengiriman.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>

            <!-- Tombol Navigasi (Muncul saat Hover) -->
            <div class="absolute inset-0 flex items-center justify-between opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="swiper-button-prev p-3 rounded-full bg-black/50 text-white hover:bg-black/70 transition cursor-pointer"></div>
                <div class="swiper-button-next p-3 rounded-full bg-black/50 text-white hover:bg-black/70 transition cursor-pointer"></div>
            </div>
        </div>
    </div>
</section>

<!-- Kategori Bergambar -->
<section class="container mx-auto p-4 rounded-lg shadow-2xl">
    <h2 class="text-xl md:text-2xl font-bold text-gray-700 text-center mb-4">Kategori Populer</h2>
    <div class="grid grid-cols-3 md:grid-cols-6 lg:grid-cols-8 gap-4 text-center">
        
        <!-- Kategori 1 -->
        <div class="flex flex-col items-center cursor-pointer hover:scale-105 transition duration-300 group">
            <div class="w-16 h-16 flex items-center justify-center rounded-full bg-gray-200 group-hover:bg-blue-600 transition">
                <i class="fas fa-book text-4xl text-gray-700 group-hover:text-white transition"></i>
            </div>
            <span class="mt-2 text-sm md:text-base text-gray-700 group-hover:text-blue-600 transition">Fiksi</span>
        </div>

        <!-- Kategori 2 -->
        <div class="flex flex-col items-center cursor-pointer hover:scale-105 transition duration-300 group">
            <div class="w-16 h-16 flex items-center justify-center rounded-full bg-gray-200 group-hover:bg-blue-600 transition">
                <i class="fas fa-briefcase text-4xl text-gray-700 group-hover:text-white transition"></i>
            </div>
            <span class="mt-2 text-sm md:text-base text-gray-700 group-hover:text-blue-600 transition">Bisnis</span>
        </div>

        <!-- Kategori 3 -->
        <div class="flex flex-col items-center cursor-pointer hover:scale-105 transition duration-300 group">
            <div class="w-16 h-16 flex items-center justify-center rounded-full bg-gray-200 group-hover:bg-blue-600 transition">
                <i class="fas fa-flask text-4xl text-gray-700 group-hover:text-white transition"></i>
            </div>
            <span class="mt-2 text-sm md:text-base text-gray-700 group-hover:text-blue-600 transition">Sains</span>
        </div>

        <!-- Kategori 4 -->
        <div class="flex flex-col items-center cursor-pointer hover:scale-105 transition duration-300 group">
            <div class="w-16 h-16 flex items-center justify-center rounded-full bg-gray-200 group-hover:bg-blue-600 transition">
                <i class="fas fa-landmark text-4xl text-gray-700 group-hover:text-white transition"></i>
            </div>
            <span class="mt-2 text-sm md:text-base text-gray-700 group-hover:text-blue-600 transition">Sejarah</span>
        </div>

        <!-- Kategori 5 -->
        <div class="flex flex-col items-center cursor-pointer hover:scale-105 transition duration-300 group">
            <div class="w-16 h-16 flex items-center justify-center rounded-full bg-gray-200 group-hover:bg-blue-600 transition">
                <i class="fas fa-graduation-cap text-4xl text-gray-700 group-hover:text-white transition"></i>
            </div>
            <span class="mt-2 text-sm md:text-base text-gray-700 group-hover:text-blue-600 transition">Edukasi</span>
        </div>

        <!-- Kategori 6 -->
        <div class="flex flex-col items-center cursor-pointer hover:scale-105 transition duration-300 group">
            <div class="w-16 h-16 flex items-center justify-center rounded-full bg-gray-200 group-hover:bg-blue-600 transition">
                <i class="fas fa-child text-4xl text-gray-700 group-hover:text-white transition"></i>
            </div>
            <span class="mt-2 text-sm md:text-base text-gray-700 group-hover:text-blue-600 transition">Anak-anak</span>
        </div>

        <!-- Kategori 7 -->
        <div class="flex flex-col items-center cursor-pointer hover:scale-105 transition duration-300 group">
            <div class="w-16 h-16 flex items-center justify-center rounded-full bg-gray-200 group-hover:bg-blue-600 transition">
                <i class="fas fa-ghost text-4xl text-gray-700 group-hover:text-white transition"></i>
            </div>
            <span class="mt-2 text-sm md:text-base text-gray-700 group-hover:text-blue-600 transition">Horror</span>
        </div>

        <!-- Kategori 8 -->
        <div class="flex flex-col items-center cursor-pointer hover:scale-105 transition duration-300 group">
            <div class="w-16 h-16 flex items-center justify-center rounded-full bg-gray-200 group-hover:bg-blue-600 transition">
                <i class="fas fa-laptop text-4xl text-gray-700 group-hover:text-white transition"></i>
            </div>
            <span class="mt-2 text-sm md:text-base text-gray-700 group-hover:text-blue-600 transition">Teknologi</span>
        </div>
    </div>
</section>

<!-- Trending Now -->
<section class="text-center py-10 mt-25">
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

<hr style="color: #f3f4f6" id="new-arrivals">

<!-- New Arrival -->
<section class="text-center py-10">
    <h1 class="text-4xl font-bold text-blue-600">New Arrivals</h1>
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
    <a href="/produk" class="inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
        View All
    </a>
</section>

<hr style="color: #f3f4f6" id="best-seller">

<!-- Best Seller -->
<section class="text-center py-10">
    <h1 class="text-4xl font-bold text-blue-600">Best Seller</h1>
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
    <a href="/produk" class="inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
        View All
    </a>
</section>

<hr style="color: #f3f4f6" id="sale">

<!-- Sale -->

<section class="text-center py-10">
    <h1 class="text-4xl font-bold text-blue-600">Sale</h1>
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
    <a href="/produk" class="inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
        View All
    </a>
</section>

@endsection