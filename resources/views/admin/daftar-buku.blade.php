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

<!-- Main Content -->
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-gray-800">📚 Daftar Buku</h2>
    <a href="{{ route('admin.books.tambah') }}"
        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition">
        + Tambah Buku
    </a>
</div>

<!-- Tabel Daftar Buku -->
<div class="overflow-x-auto bg-white rounded-lg shadow">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Judul</th>
                <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Harga</th>
                <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Stok</th>
                <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Kategori</th>
                <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @foreach($books as $book)
            <tr>
                <td class="px-4 py-2 text-gray-800">{{ $book->title }}</td>
                <td class="px-4 py-2 text-gray-600">Rp {{ number_format($book->price, 0, ',', '.') }}</td>
                <td class="px-4 py-2">{{ $book->stock }}</td>
                <td class="px-4 py-2">{{ $book->category->name ?? 'Tidak Diketahui' }}</td>
                <td class="px-4 py-2 space-x-2">
                    <a href="{{ route('admin.books.edit', $book->slug) }}" class="text-blue-600 hover:underline">Edit</a>
                    <a href="{{ route('admin.books.hapus', $book->slug) }}" class="text-red-600 hover:underline" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection