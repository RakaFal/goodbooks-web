@extends('layouts.app')

@section('content')

<nav class="bg-white p-4 shadow-md rounded-md flex justify-between items-center mb-6">
    <h2 class="text-xl font-bold text-gray-700">Dashboard Penjual</h2>
    <div class="flex items-center space-x-4">
        <span class="text-gray-700 font-semibold">{{ auth()->user()->name }}</span>
        @if(auth()->user()->profile_picture)
        <img src="{{ asset('storage/' . auth()->user()->profile_picture) }}" alt="Seller" class="w-10 h-10 rounded-full object-cover">
        @else
        <div class="w-10 h-10 rounded@extends('layouts.app')

@section('content')

<nav class="bg-white p-4 shadow-md rounded-md flex justify-between items-center mb-6">
    <h2 class="text-xl font-bold text-gray-700">Dashboard Penjual</h2>
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

<!-- Dashboard Content -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Statistik Cards -->
    <div class="bg-white shadow-lg rounded-lg p-6">
        <h3 class="text-lg font-semibold text-gray-700">Total Buku</h3>
        <p class="text-4xl font-bold text-blue-600">12</p>
    </div>
    <div class="bg-white shadow-lg rounded-lg p-6">
        <h3 class="text-lg font-semibold text-gray-700">Total Pesanan</h3>
        <p class="text-4xl font-bold text-green-600">34</p>
    </div>
    <div class="bg-white shadow-lg rounded-lg p-6">
        <h3 class="text-lg font-semibold text-gray-700">Pendapatan</h3>
        <p class="text-4xl font-bold text-yellow-600">Rp 2.500.000</p>
    </div>
</div>

<!-- Grafik -->
<div class="mt-8 bg-white shadow-lg rounded-lg p-6">
    <h3 class="text-xl font-semibold text-gray-700 mb-4">Grafik Penjualan Bulanan</h3>
    <canvas id="salesChart"></canvas>
</div>

<!-- Daftar Buku -->
<div class="mt-8 bg-white shadow-lg rounded-lg p-6">
    <h3 class="text-xl font-semibold text-gray-700 mb-4">Daftar Buku</h3>
    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 p-3 text-left">Judul</th>
                <th class="border border-gray-300 p-3 text-left">Harga</th>
                <th class="border border-gray-300 p-3 text-left">Stok</th>
                <th class="border border-gray-300 p-3 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr class="hover:bg-gray-50 transition">
                <td class="border border-gray-300 p-3">Buku A</td>
                <td class="border border-gray-300 p-3">Rp 50.000</td>
                <td class="border border-gray-300 p-3">10</td>
                <td class="border border-gray-300 p-3">
                    <a href="#" class="text-blue-500 hover:underline">Edit</a> |
                    <a href="#" class="text-red-500 hover:underline">Hapus</a>
                </td>
            </tr>
            <tr class="hover:bg-gray-50 transition">
                <td class="border border-gray-300 p-3">Buku B</td>
                <td class="border border-gray-300 p-3">Rp 75.000</td>
                <td class="border border-gray-300 p-3">5</td>
                <td class="border border-gray-300 p-3">
                    <a href="#" class="text-blue-500 hover:underline">Edit</a> |
                    <a href="#" class="text-red-500 hover:underline">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection-full bg-blue-600 text-white flex items-center justify-center font-semibold">
            {{ strtoupper(auth()->user()->name[0]) }}
        </div>
        @endif
    </div>
</nav>

<!-- Main Content -->
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-gray-800">📚 Daftar Buku</h2>
    <a href="#"
        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition">
        + Tambah Buku
    </a>
</div>

<!-- Notifikasi sementara -->
<div class="bg-green-100 text-green-700 p-3 rounded mb-4">
    Buku berhasil ditambahkan.
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
            <tr>
                <td class="px-4 py-2 text-gray-800">Buku A</td>
                <td class="px-4 py-2 text-gray-600">Rp 50.000</td>
                <td class="px-4 py-2">10</td>
                <td class="px-4 py-2">Novel</td>
                <td class="px-4 py-2 space-x-2">
                    <a href="#" class="text-blue-600 hover:underline">Edit</a>
                    <a href="#" class="text-red-600 hover:underline">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="px-4 py-2 text-gray-800">Buku B</td>
                <td class="px-4 py-2 text-gray-600">Rp 75.000</td>
                <td class="px-4 py-2">5</td>
                <td class="px-4 py-2">Fiksi</td>
                <td class="px-4 py-2 space-x-2">
                    <a href="#" class="text-blue-600 hover:underline">Edit</a>
                    <a href="#" class="text-red-600 hover:underline">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection