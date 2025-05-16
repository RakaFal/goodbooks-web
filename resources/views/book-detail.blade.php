@extends('layouts.app')

@section('content')

<div class="container mx-auto max-w-7xl px-6 py-10 mt-20 bg-white rounded-xl shadow-md">
    <div class="grid md:grid-cols-2">
        <!-- Gambar Buku -->
        <div>
            <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->title }}" class="w-[384px] h-[411px] object-contain rounded">
        </div>

        <!-- Info Buku -->
        <div>
            <h1 class="text-3xl font-bold">{{ $book->title }}</h1>
            <p class="text-lg text-gray-700">by {{ $book->author }}</p>
            <p class="text-2xl font-bold text-blue-600 mt-2">Rp{{ number_format($book->price, 0, ',', '.') }}</p>
            <p class="mt-4 text-gray-700">{{ $book->description }}</p>

            <div class="mt-6">
                <h3 class="text-xl font-semibold mb-2">Detail Buku</h3>
                <ul class="space-y-1 text-gray-700">
                    <li><strong>Penerbit:</strong> {{ $book->publisher }}</li>
                    <li><strong>Tanggal Terbit:</strong> {{ $book->publish_date }}</li>
                    <li><strong>ISBN:</strong> {{ $book->isbn }}</li>
                    <li><strong>Halaman:</strong> {{ $book->pages }}</li>
                    <li><strong>Bahasa:</strong> {{ $book->language }}</li>
                    <li><strong>Ukuran:</strong> {{ $book->length }} x {{ $book->width }} cm</li>
                    <li><strong>Berat:</strong> {{ $book->weight }} gram</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection