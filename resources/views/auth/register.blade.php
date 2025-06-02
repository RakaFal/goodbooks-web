<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | GoodBooks</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen flex items-center justify-center bg-gradient-to-r from-green-500 to-blue-600">

    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <h2 class="text-2xl font-bold text-gray-800 text-center">Create Account
            <a href="/" class="text-blue-500">GoodBooks</a>
        </h2>
        <p class="text-gray-500 text-center mt-2">Daftar untuk mulai berjualan</p>

        <!-- Form Register -->
        <form action="{{ route('register') }}" method="POST" class="mt-6">
            @csrf
            <div>
                <label class="block text-gray-700">Full Name</label>
                <input type="text" name="name" class="w-full mt-1 px-4 py-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none" placeholder="Masukkan nama lengkap" required>
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" class="w-full mt-1 px-4 py-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none" placeholder="Masukkan email" required>
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" class="w-full mt-1 px-4 py-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none" placeholder="Masukkan password" required>
                @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <label class="block text-gray-700">Confirm Password</label>
                <input type="password" name="password_confirmation" class="w-full mt-1 px-4 py-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none" placeholder="Ulangi password" required>
            </div>

            <div class="my-4 flex items-center">
                <input type="checkbox" name="terms" class="text-green-500">
                <span class="ml-2 text-gray-600 text-sm">Saya menyetujui <a href="#" class="text-blue-500 hover:underline">syarat & ketentuan</a></span>
            </div>

            <div>
                <button type="submit" class="w-full mt-6 bg-green-500 hover:bg-green-600 text-white py-3 rounded-lg font-bold transition duration-300">Register
            </div>

            <p class="text-gray-600 text-center mt-4">Already have an account?
                <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a>
            </p>
        </form>
    </div>

</body>

</html>