@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Gambar Buku -->
        <div class="flex justify-center">
            <img src="{{ asset('storage/books/' . $book->cover_image) }}"
                alt="{{ $book->title }}"
                class="w-72 h-auto rounded-lg shadow-lg">
        </div>

        <!-- Detail Buku -->
        <div class="space-y-4">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800">{{ $book->title }}</h1>
            <p class="text-gray-600">Penulis: <span class="font-semibold">{{ $book->author }}</span></p>
            <p class="text-gray-600">Kategori: <span class="font-semibold">{{ $book->category->name }}</span></p>
            <p class="text-xl font-semibold text-blue-600">Rp{{ number_format($book->price, 0, ',', '.') }}</p>

            <!-- Rating -->
            <div class="flex items-center space-x-1">
                @for ($i = 1; $i <= 5; $i++)
                    @if ($i <=round($book->rating))
                    <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 3.316a1 1 0 011.902 0l1.175 3.608a1 1 0 00.95.69h3.796a1 1 0 01.588 1.809l-3.073 2.234a1 1 0 00-.364 1.118l1.175 3.608a1 1 0 01-1.537 1.118L10 13.847l-3.073 2.234a1 1 0 01-1.537-1.118l1.175-3.608a1 1 0 00-.364-1.118L3.128 8.423a1 1 0 01.588-1.809h3.796a1 1 0 00.95-.69l1.175-3.608z" />
                    </svg>
                    @else
                    <svg class="w-6 h-6 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 3.316a1 1 0 011.902 0l1.175 3.608a1 1 0 00.95.69h3.796a1 1 0 01.588 1.809l-3.073 2.234a1 1 0 00-.364 1.118l1.175 3.608a1 1 0 01-1.537 1.118L10 13.847l-3.073 2.234a1 1 0 01-1.537-1.118l1.175-3.608a1 1 0 00-.364-1.118L3.128 8.423a1 1 0 01.588-1.809h3.796a1 1 0 00.95-.69l1.175-3.608z" />
                    </svg>
                    @endif
                    @endfor
                    <span class="text-gray-500 text-sm">({{ $book->reviews->count() }} Ulasan)</span>
            </div>

            <!-- Deskripsi -->
            <p class="text-gray-700">{{ $book->description }}</p>

            <!-- Tombol Aksi -->
            <div class="flex space-x-4">
                <form action="{{ route('cart.add', $book->id) }}" method="POST">
                    @csrf
                    <button class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-500 transition">
                        Tambah ke Keranjang 🛒
                    </button>
                </form>
                <form action="{{ route('wishlist.add', $book->id) }}" method="POST">
                    @csrf
                    <button class="bg-gray-300 text-gray-800 px-6 py-2 rounded-md hover:bg-gray-400 transition">
                        Simpan ke Wishlist ❤️
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Ulasan -->
    <div class="mt-10">
        <h2 class="text-xl font-semibold text-gray-800">Ulasan Pembeli</h2>
        <div class="mt-4 space-y-4">
            @foreach ($book->reviews as $review)
            <div class="border p-4 rounded-md">
                <p class="font-semibold">{{ $review->user->name }}</p>
                <p class="text-gray-700">{{ $review->content }}</p>
                <p class="text-sm text-gray-500">{{ $review->created_at->format('d M Y') }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection