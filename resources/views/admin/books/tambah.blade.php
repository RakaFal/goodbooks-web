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

    <form action="{{ route('admin.books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Judul Buku -->
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Judul Buku</label>
            <input type="text" name="title" id="title" class="w-full p-3 border border-gray-300 rounded-md" required>
        </div>

        <!-- Deskripsi -->
        <div class="mb-4">
            <label for="description" class="block text-gray-700">Deskripsi</label>
            <textarea name="description" id="description" rows="3" class="w-full p-3 border border-gray-300 rounded-md"></textarea>
        </div>

        <!-- Author -->
        <div class="mb-4">
            <label for="author" class="block text-gray-700">Penulis</label>
            <input type="text" name="author" id="author" class="w-full p-3 border border-gray-300 rounded-md">
        </div>

        <!-- Kategori -->
        <div class="mb-4">
            <label for="category" class="block text-gray-700">Kategori</label>
            <select name="category_id" id="category" class="w-full p-3 border border-gray-300 rounded-md" required>
                <option value="">Pilih Kategori</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Harga -->
        <div class="mb-4">
            <label for="price" class="block text-gray-700">Harga</label>
            <input type="number" name="price" id="price" class="w-full p-3 border border-gray-300 rounded-md" required>
        </div>

        <!-- Stok -->
        <div class="mb-4">
            <label for="stock" class="block text-gray-700">Stok</label>
            <input type="number" name="stock" id="stock" class="w-full p-3 border border-gray-300 rounded-md" required>
        </div>

        <!-- Publisher -->
        <div class="mb-4">
            <label for="publisher" class="block text-gray-700">Penerbit</label>
            <input type="text" name="publisher" id="publisher" class="w-full p-3 border border-gray-300 rounded-md">
        </div>

        <!-- Publish Date -->
        <div class="mb-4">
            <label for="publish_date" class="block text-gray-700">Tanggal Terbit</label>
            <input type="date" name="publish_date" id="publish_date" class="w-full p-3 border border-gray-300 rounded-md">
        </div>

        <!-- ISBN -->
        <div class="mb-4">
            <label for="isbn" class="block text-gray-700">ISBN</label>
            <input type="text" name="isbn" id="isbn" class="w-full p-3 border border-gray-300 rounded-md">
        </div>

        <!-- Pages -->
        <div class="mb-4">
            <label for="pages" class="block text-gray-700">Jumlah Halaman</label>
            <input type="number" name="pages" id="pages" class="w-full p-3 border border-gray-300 rounded-md">
        </div>

        <!-- Language -->
        <div class="mb-4">
            <label for="language" class="block text-gray-700">Bahasa</label>
            <input type="text" name="language" id="language" class="w-full p-3 border border-gray-300 rounded-md">
        </div>

        <!-- Dimension -->
        <div class="mb-4 grid grid-cols-3 gap-2">
            <div>
                <label for="length" class="block text-gray-700">Panjang (cm)</label>
                <input type="number" step="0.01" name="length" id="length" class="w-full p-3 border border-gray-300 rounded-md">
            </div>
            <div>
                <label for="width" class="block text-gray-700">Lebar (cm)</label>
                <input type="number" step="0.01" name="width" id="width" class="w-full p-3 border border-gray-300 rounded-md">
            </div>
            <div>
                <label for="weight" class="block text-gray-700">Berat (gram)</label>
                <input type="number" step="0.01" name="weight" id="weight" class="w-full p-3 border border-gray-300 rounded-md">
            </div>
        </div>

        <!-- Image Upload -->
        <div class="mb-4">
            <label for="image" class="block text-gray-700">Gambar Sampul</label>
            <input type="file" name="image" id="image" class="w-full p-3 border border-gray-300 rounded-md" accept="image/*">
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition">
                Simpan Buku
            </button>
        </div>
    </form>
</div>
@endsection