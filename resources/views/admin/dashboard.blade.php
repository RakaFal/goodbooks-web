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

<!-- Grafik -->
<div class="mt-8 bg-white shadow-lg rounded-lg p-6">
    <h3 class="text-xl font-semibold text-gray-700 mb-4">Grafik Penjualan Bulanan</h3>
    <canvas id="salesChart"></canvas>
</div>

@endsection