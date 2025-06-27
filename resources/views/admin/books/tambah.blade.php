@extends('layouts.app')

@section('content')

<nav class="bg-white p-4 shadow-md rounded-md flex justify-between items-center mb-6">
    <h2 class="text-xl font-bold text-gray-700">Seller Dashboard</h2>
    <div class="flex items-center space-x-4">
        <span class="text-gray-700 font-semibold">{{ auth()->user()->name }}</span>
        @if(auth()->user()->profile_picture)
        <img src="{{ asset('storage/' . auth()->user()->profile_picture) }}" alt="Seller" class="w-10 h-10 rounded-full object-cover">
        @else
        <div class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center font-semibold">
            {{ strtoupper(auth()->user()->name[0]) }}
        </div>
        @endif
    </div>
</nav>

<div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Tambah Buku Baru</h2>

    <form action="{{ route('admin.books.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="title" class="block text-gray-700">Judul Buku</label>
            <input type="text" name="title" id="title" class="w-full p-3 border border-gray-300 rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="price" class="block text-gray-700">Harga</label>
            <input type="number" name="price" id="price" class="w-full p-3 border border-gray-300 rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="stock" class="block text-gray-700">Stok</label>
            <input type="number" name="stock" id="stock" class="w-full p-3 border border-gray-300 rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="category" class="block text-gray-700">Kategori</label>
            <select name="category_id" id="category" class="w-full p-3 border border-gray-300 rounded-md" required>
                <option value="">Pilih Kategori</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition">
                Simpan Buku
            </button>
        </div>
    </form>
</div>
@endsection