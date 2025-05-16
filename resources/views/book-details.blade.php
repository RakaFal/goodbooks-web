@extends('layouts.app')

@section('content')

<div class="container mx-auto max-w-6xl px-6 py-12 mt-20 bg-white rounded-lg shadow-lg">
    <a href="{{ url()->previous() }}" class="inline-block mb-6 text-gray-600 hover:text-gray-900 transition">
        ← Kembali
    </a>

    <div class="flex flex-col md:flex-row gap-10">
        <!-- Cover Buku -->
        <div class="flex-shrink-0 w-full md:w-1/3">
            <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->title }}"
                class="w-full h-[411px] object-contain rounded-lg shadow-md" />
        </div>

        <!-- Detail Buku -->
        <div class="flex-1 flex flex-col justify-between">
            <div>
                <h1 class="text-4xl font-semibold text-gray-900 mb-2">{{ $book->title }}</h1>
                <p class="text-lg text-gray-700 italic mb-6"> {{ $book->author }}</p>

                <p class="text-3xl font-bold text-blue-600 mb-8">Rp{{ number_format($book->price, 0, ',', '.') }}</p>

                <h2 class="text-2xl font-semibold">Deskripsi</h2>
                <p class="text-gray-800 leading-relaxed mb-8">{{ $book->description }}</p>

                <h2 class="text-2xl font-semibold mb-4 pb-2">Detail Buku</h2>
                <ul class="text-gray-700 mb-10 grid grid-cols-2 gap-x-8 gap-y-6">
                    <li>
                        <span class="block font-semibold">Penerbit:</span>
                        <span>{{ $book->publisher }}</span>
                    </li>
                    <li>
                        <span class="block font-semibold">Tanggal Terbit:</span>
                        <span>{{ \Carbon\Carbon::parse($book->publish_date)->translatedFormat('d F Y') }}</span>
                    </li>
                    <li>
                        <span class="block font-semibold">ISBN:</span>
                        <span>{{ $book->isbn }}</span>
                    </li>
                    <li>
                        <span class="block font-semibold">Halaman:</span>
                        <span>{{ $book->pages }}</span>
                    </li>
                    <li>
                        <span class="block font-semibold">Bahasa:</span>
                        <span>{{ $book->language }}</span>
                    </li>
                    <li>
                        <span class="block font-semibold">Panjang:</span>
                        <span>{{ $book->length }} cm</span>
                    </li>
                    <li>
                        <span class="block font-semibold">Lebar:</span>
                        <span>{{ $book->width }} cm</span>
                    </li>
                    <li>
                        <span class="block font-semibold">Berat:</span>
                        <span>{{ $book->weight }} gram</span>
                    </li>
                </ul>
            </div>

            <button class="self-start bg-blue-600 hover:bg-blue-700 transition text-white font-semibold py-3 px-8 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                Beli Sekarang
            </button>
        </div>
    </div>
</div>

@endsection