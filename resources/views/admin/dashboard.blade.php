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

@endsection