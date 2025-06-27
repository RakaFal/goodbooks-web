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

                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div class="w-full h-full bg-black bg-cover bg-center flex items-center justify-center text-white text-center"
                        style="background-image: url('https://source.unsplash.com/1600x600/?study,desk');">
                        <div class="bg-black bg-opacity-50 p-6 md:p-10 rounded-lg">
                            <h1 class="text-2xl md:text-4xl font-bold">Pre-order saat ini juga!</h1>
                            <p class="mt-2 text-sm md:text-lg">Pasti sampai tepat waktu.</p>
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
<section id="kategori" class="container mx-auto p-4 rounded-lg shadow-2xl">
    <h2 class="text-xl md:text-2xl font-bold text-gray-700 text-center mb-4">Kategori Populer</h2>
    <div class="grid grid-cols-3 text-center">

        <!-- New Arrivals -->
        <a href="#new-arrivals" onclick="navigateToSection(event, 'new-arrivals')" class="flex flex-col items-center cursor-pointer hover:scale-105 transition duration-300 group">
            <div class="w-16 h-16 flex items-center justify-center rounded-full group-hover:bg-blue-600 transition">
                <i class="fas fa-gift text-4xl text-gray-700 group-hover:text-white transition"></i>
            </div>
            <span class="mt-2 text-sm md:text-base text-gray-700 group-hover:text-blue-600 transition">New Arrivals</span>
        </a>

        <!-- Best Seller -->
        <a href="#best-seller" onclick="navigateToSection(event, 'best-seller')" class="flex flex-col items-center cursor-pointer hover:scale-105 transition duration-300 group">
            <div class="w-16 h-16 flex items-center justify-center rounded-full group-hover:bg-blue-600 transition">
                <i class="fas fa-star text-4xl text-gray-700 group-hover:text-white transition"></i>
            </div>
            <span class="mt-2 text-sm md:text-base text-gray-700 group-hover:text-blue-600 transition">Best Seller</span>
        </a>

        <!-- Sale -->
        <a href="#sale" onclick="navigateToSection(event, 'sale')" class="flex flex-col items-center cursor-pointer hover:scale-105 transition duration-300 group">
            <div class="w-16 h-16 flex items-center justify-center rounded-full group-hover:bg-blue-600 transition">
                <i class="fas fa-tags text-4xl text-gray-700 group-hover:text-white transition"></i>
            </div>
            <span class="mt-2 text-sm md:text-base text-gray-700 group-hover:text-blue-600 transition">Sale</span>
        </a>
    </div>
</section>

<hr class="bg-gray-100" id="new-arrivals" onclick="navigateToSection(event, 'new-arrivals')">

<!-- New Arrival -->
<section class="text-center py-10 mt-25">
    <h1 class="text-4xl font-bold text-blue-600">New Arrivals</h1>
    <p class="text-gray-700 mt-4">Temukan berbagai buku favoritmu dengan harga terbaik!</p>
</section>

<section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-center">
    @foreach ($books as $book)
    @if ($book->id_category == 1)
    <a href="{{ route('books.show', $book->slug) }}">
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->title }}" class="w-full h-48 object-contain">
            <h2 class="mt-4 font-bold">{{ $book->title }}</h2>
            <p class="text-gray-900">{{ $book->author }}</p>
            <p class="text-gray-600">Rp {{ number_format($book->price, 0, ',', '.') }}</p>
        </div>
    </a>
    @endif
    @endforeach
</section>

<section class="text-center my-20">
    <a href="/" class="inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
        View All
    </a>
</section>

<hr class="bg-gray-100" id="best-seller" onclick="navigateToSection(event, 'best-seller')">

<!-- Best Seller -->
<section class="text-center py-10 mt-25">
    <h1 class="text-4xl font-bold text-blue-600">Best Seller</h1>
    <p class="text-gray-700 mt-4">Temukan berbagai buku favoritmu dengan harga terbaik!</p>
</section>

<section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-center">
    @foreach ($books as $book)
    @if ($book->id_category == 2)
    <a href="{{ route('books.show', $book->slug) }}">
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->title }}" class="w-full h-48 object-contain">
            <h2 class="mt-4 font-bold">{{ $book->title }}</h2>
            <p class="text-gray-900">{{ $book->author }}</p>
            <p class="text-gray-600">Rp {{ number_format($book->price, 0, ',', '.') }}</p>
        </div>
    </a>
    @endif
    @endforeach
</section>

<section class="text-center my-20">
    <a href="/" class="inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
        View All
    </a>
</section>

<hr class="bg-gray-100" id="sale">

<!-- Sale -->

<section class="text-center py-10 mt-25">
    <h1 class="text-4xl font-bold text-blue-600">Sale</h1>
    <p class="text-gray-700 mt-4">Temukan berbagai buku favoritmu dengan harga terbaik!</p>
</section>

<section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-center">
    @foreach ($books as $book)
    @if ($book->id_category == 3)
    <a href="{{ route('books.show', $book->slug) }}">
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->title }}" class="w-full h-48 object-contain">
            <h2 class="mt-4 font-bold">{{ $book->title }}</h2>
            <p class="text-gray-900">{{ $book->author }}</p>
            <p class="text-gray-600">Rp {{ number_format($book->price, 0, ',', '.') }}</p>
        </div>
    </a>
    @endif
    @endforeach
</section>

<section class="text-center my-20">
    <a href="/" class="inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
        View All
    </a>
</section>

@endsection