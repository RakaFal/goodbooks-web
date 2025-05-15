@extends('layouts.app')

@section('content')

<div class="container mx-auto max-w-3xl px-6 py-10 mt-20 bg-white rounded-xl shadow-md">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">✏️ Edit Profil</h2>

    <!-- Form Edit Profile -->
    <form action="{{ route('profile.update') }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Nama -->
        <div>
            <label for="name" class="block text-lg font-medium text-gray-700">Nama</label>
            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                class="mt-2 block w-full rounded-md border border-gray-300 p-3" required>
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"
                class="mt-2 block w-full rounded-md border border-gray-300 p-3" required>
        </div>

        <!-- Nomor HP -->
        <div>
            <label for="phone" class="block text-lg font-medium text-gray-700">Nomor HP</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone', $user->phone) }}"
                class="mt-2 block w-full rounded-md border border-gray-300 p-3">
        </div>

        <!-- Alamat -->
        <div>
            <label for="address" class="block text-lg font-medium text-gray-700">Alamat</label>
            <textarea name="address" id="address" rows="3"
                class="mt-2 block w-full rounded-md border border-gray-300 p-3">{{ old('address', $user->address) }}</textarea>
        </div>

        <!-- Tombol Aksi -->
        <div class="flex items-center justify-between">
            <a href="{{ route('profile') }}"
                class="bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-2 rounded-md">
                ← Kembali
            </a>
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-md">
                Simpan
            </button>
        </div>
    </form>
</div>

@endsection