@extends('layouts.app')

@section('content')

<div class="container mx-auto max-w-lg px-6 py-10 mt-20 bg-white rounded-xl shadow-md">
    <h2 class="text-2xl font-bold mb-6">🔑 Change Password</h2>

    @if (session('success'))
    <div class="mb-4 text-green-600 font-semibold">
        {{ session('success') }}
    </div>
    @endif

    @if ($errors->any())
    <div class="mb-4 text-red-600">
        <ul class="list-disc list-inside space-y-1">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('password.update') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label for="current_password" class="block text-gray-700 font-medium mb-2">Password Lama</label>
            <input type="password" name="current_password" id="current_password" required
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div>
            <label for="new_password" class="block text-gray-700 font-medium mb-2">Password Baru</label>
            <input type="password" name="new_password" id="new_password" required minlength="8"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div>
            <label for="new_password_confirmation" class="block text-gray-700 font-medium mb-2">Konfirmasi Password Baru</label>
            <input type="password" name="new_password_confirmation" id="new_password_confirmation" required minlength="8"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <!-- Tombol Aksi -->
        <div class="flex items-center justify-between">
            <a href="{{ route('profile') }}"
                class="bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-2 rounded-md">
                ← Kembali
            </a>
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-md">
                Save
            </button>
        </div>
    </form>
</div>

@endsection