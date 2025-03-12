<!-- resources/views/profile.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10">
        <div class="flex items-center space-x-8">
            <!-- Profile Picture -->
            <div class="w-32 h-32 rounded-full overflow-hidden">
                <img src="{{ asset('storage/profile-pic.jpg') }}" alt="User Profile Picture" class="w-full h-full object-cover">
            </div>
            
            <!-- User Information -->
            <div>
                <h2 class="text-3xl font-semibold text-gray-800">{{ $user->name }}</h2>
                <p class="text-lg text-gray-600">Email: {{ $user->email }}</p>
                <p class="text-lg text-gray-600">Member since: {{ $user->created_at->format('F Y') }}</p>
            </div>
        </div>

        <!-- User Preferences Section -->
        <div class="mt-10">
            <h3 class="text-2xl font-semibold text-gray-800">Your Book Preferences</h3>
            <div class="mt-4 space-y-4">
                <p><strong>Favorite Genre:</strong> Fiction</p>
                <p><strong>Preferred Formats:</strong> Hardback, eBook</p>
                <p><strong>Wishlist:</strong></p>
                <ul class="list-disc pl-5">
                    <li>Hujan</li>
                    <li>Book Title 2</li>
                    <li>Book Title 3</li>
                </ul>
            </div>
        </div>
        
        <!-- Action Buttons -->
        <div class="mt-6 flex space-x-4">
            <a href="{{ route('profile.edit') }}" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Edit Profile</a>
            <a href="{{ route('password.request') }}" class="px-6 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700">Change Password</a>
        </div>
    </div>
@endsection

<!-- resources/views/profile.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10">
        <div class="flex items-center space-x-8">
            <!-- Profile Picture -->
            <div class="w-32 h-32 rounded-full overflow-hidden">
                <img src="{{ asset('storage/profile-pictures/' . $user->profile_picture) }}" alt="User Profile Picture" class="w-full h-full object-cover">
            </div>
            
            <!-- User Information -->
            <div>
                <h2 class="text-3xl font-semibold text-gray-800">{{ $user->name }}</h2>
                <p class="text-lg text-gray-600">Email: {{ $user->email }}</p>
                <p class="text-lg text-gray-600">Member since: {{ $user->created_at->format('F Y') }}</p>
            </div>
        </div>

        <!-- Form to Upload Profile Picture -->
        <div class="mt-6">
            <form action="{{ route('profile.updatePicture') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="profile_picture" class="block text-lg font-semibold text-gray-800">Change Profile Picture</label>
                <input type="file" name="profile_picture" id="profile_picture" class="mt-2 border p-2 rounded-md" required>
                <button type="submit" class="mt-4 bg-blue-600 text-white px-6 py-2 rounded-md">Update Picture</button>
            </form>
        </div>
    </div>
@endsection