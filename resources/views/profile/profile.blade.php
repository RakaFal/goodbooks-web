@extends('layouts.app')

@section('content')

<div class="container mx-auto max-w-5xl px-6 py-10 mt-20 bg-white rounded-xl shadow-md">
    <div class="flex flex-col md:flex-row items-center md:items-start space-y-8 md:space-y-0 md:space-x-10">

        <!-- Profile Picture -->
        <div class="relative w-36 h-36 rounded-full overflow-hidden border-4 border-blue-500 shadow-sm bg-gray-100 flex items-center justify-center text-gray-700 text-4xl font-bold">
            @if (auth()->user()->profile_picture)
            <img src="{{ asset('storage/' . auth()->user()->profile_picture) }}"
                alt="Profile"
                class="w-full h-full object-cover">
            @else
            {{ strtoupper(auth()->user()->name[0]) }}
            @endif
        </div>

        <!-- User Information -->
        <div class="flex-1 space-y-2">
            <h2 class="text-3xl font-bold text-gray-800">{{ $user->name }}</h2>
            <p class="text-gray-600 text-lg">📧 {{ $user->email }}</p>
            <p class="text-gray-500 text-sm">📞 {{ $user->phone ?? '-' }}</p>
            <p class="text-gray-500 text-sm">🏢 {{ $user->address ?? '-' }}</p>
            <p class="text-gray-500 text-sm">👤 Member since {{ $user->created_at->format('F Y') }}</p>
        </div>
    </div>

    <!-- Divider -->
    <hr class="my-10 border-gray-300">

    <!-- User Preferences Section -->
    <div>
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">📚 Book Preferences</h3>
        <ul class="space-y-1 text-gray-700">
            <li><strong>Favorite Genre:</strong> Fiction</li>
            <li><strong>Preferred Formats:</strong> Hardback, eBook</li>
            <li><strong>Wishlist:</strong>
                <ul class="list-disc list-inside pl-4">
                    <li>Hujan</li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- Divider -->
    <hr class="my-10 border-gray-300">

    <div class="flex flex-wrap gap-4">
        <a href="{{ route('profile.edit') }}"
            class="flex items-center gap-3 bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 text-white px-5 py-2 rounded-md shadow-sm transition duration-200"
            title="Edit Profile">
            <i class="fas fa-user-edit text-lg"></i>
            Edit Profile
        </a>

        <a href="{{ route('password.change') }}"
            class="flex items-center gap-3 bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 text-white px-5 py-2 rounded-md shadow-sm transition duration-200"
            title="Change Password">
            <i class="fas fa-key text-lg"></i>
            Change Password
        </a>

        <a href="{{ route('orders.shows') }}"
            class="flex items-center gap-3 bg-yellow-500 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400 text-gray-900 px-5 py-2 rounded-md shadow-sm transition duration-200"
            title="Order History">
            <i class="fas fa-history text-lg"></i>
            Order History
        </a>


        <a href="{{ route('admin.dashboard') }}"
            class="flex items-center gap-3 bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 text-white px-5 py-2 rounded-md shadow-sm transition duration-200"
            title="Halaman Jualan">
            <i class="fas fa-store text-lg"></i>
            Dashboard Seller
        </a>

        <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit"
                class="flex items-center gap-3 bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 text-white px-5 py-2 rounded-md shadow-sm transition duration-200 cursor-pointer"
                title="Logout">
                <i class="fas fa-sign-out-alt text-lg"></i>
                Logout
            </button>
        </form>
    </div>

    <!-- Divider -->
    <hr class="my-10 border-gray-300">

    <!-- Form to Upload Profile Picture -->
    <div>
        <form action="{{ route('profile.updatePicture') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label for="profile_picture" class="block text-lg font-medium text-gray-800">
                    🖼️ Change Profile Picture <span class="text-sm text-gray-500">(Max 2MB)</span>
                </label>
                <input type="file" name="profile_picture" id="profile_picture" class="mt-2 border border-gray-300 rounded-md p-2 w-full file:bg-blue-50 file:text-blue-700 file:border-0 file:rounded file:py-1 file:px-4 file:cursor-pointer" required>
                @error('profile_picture')
                <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md shadow-md transition duration-200">Update Picture</button>
        </form>
    </div>
</div>

@endsection