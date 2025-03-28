@extends('layouts.app')

@section('content')
<div class="flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 text-white min-h-screen p-4">
        <h2 class="text-lg font-semibold">Dashboard Penjual</h2>
        <nav class="mt-4">
            <a href="#" class="block py-2 px-4 hover:bg-gray-700">Beranda</a>
            <a href="#" class="block py-2 px-4 hover:bg-gray-700">Tambah Buku</a>
            <a href="#" class="block py-2 px-4 hover:bg-gray-700">Pesanan</a>
            <a href="#" class="block py-2 px-4 hover:bg-gray-700">Pengaturan</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        <h1 class="text-2xl font-bold text-gray-800">Dashboard Penjual</h1>

        <!-- Ringkasan -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
            <div class="bg-blue-500 text-white p-4 rounded-lg shadow">
                <p class="text-lg font-semibold">Total Buku</p>
                <p class="text-2xl">{{ count($books) }}</p>
            </div>
            <div class="bg-green-500 text-white p-4 rounded-lg shadow">
                <p class="text-lg font-semibold">Pesanan</p>
                <p class="text-2xl">15</p> 
            </div>
        </div>

        <!-- Daftar Buku -->
        <div class="mt-8">
            <h2 class="text-xl font-semibold text-gray-700">Buku yang Dijual</h2>
            <div class="mt-4 bg-white shadow p-4 rounded-lg">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="p-2">Judul</th>
                            <th class="p-2">Harga</th>
                            <th class="p-2">Stok</th>
                            <th class="p-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                        <tr class="border-t">
                            <td class="p-2">{{ $book->title }}</td>
                            <td class="p-2">Rp{{ number_format($book->price, 0, ',', '.') }}</td>
                            <td class="p-2">{{ $book->stock }}</td>
                            <td class="p-2">
                                <a href="#" class="text-blue-500 hover:underline">Edit</a> |
                                <a href="#" class="text-red-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>
@endsection