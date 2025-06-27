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
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Edit Buku: {{ $book->title }}</h2>

    <form action="{{ route('admin.books.update', $book->slug) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-gray-700">Judul Buku</label>
            <input type="text" name="title" id="title" class="w-full p-3 border border-gray-300 rounded-md" value="{{ old('title', $book->title) }}" required>
        </div>

        <div class="mb-4">
            <label for="price" class="block text-gray-700">Harga</label>
            <input type="number" name="price" id="price" class="w-full p-3 border border-gray-300 rounded-md" value="{{ old('price', $book->price) }}" required>
        </div>

        <div class="mb-4">
            <label for="stock" class="block text-gray-700">Stok</label>
            <input type="number" name="stock" id="stock" class="w-full p-3 border border-gray-300 rounded-md" value="{{ old('stock', $book->stock) }}" required>
        </div>

        <div class="mb-4">
            <label for="category" class="block text-gray-700">Kategori</label>
            <select name="category_id" id="category" class="w-full p-3 border border-gray-300 rounded-md" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $book->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition">
                Update Buku
            </button>
        </div>
    </form>
</div>
@endsection