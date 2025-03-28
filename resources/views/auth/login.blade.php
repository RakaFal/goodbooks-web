<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | GoodBooks</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex items-center justify-center bg-gradient-to-r from-blue-500 to-purple-600">

    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <h2 class="text-2xl font-bold text-gray-800 text-center">Login ke GoodBooks</h2>
        <p class="text-gray-500 text-center mt-2">Masuk untuk mengelola akun Anda</p>

        <!-- Form Login -->
        <form action="{{ route('login') }}" method="POST" class="mt-6">
            @csrf
            <div>
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" class="w-full mt-1 px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" placeholder="Masukkan email" required>
            </div>

            <div class="mt-4">
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" class="w-full mt-1 px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" placeholder="Masukkan password" required>
            </div>

            <div class="flex justify-between items-center mt-4">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="text-blue-500">
                    <span class="ml-2 text-gray-600 text-sm">Ingat saya</span>
                </label>
                <a href="#" class="text-sm text-blue-500 hover:underline">Lupa Password?</a>
            </div>

            <button type="submit" class="w-full mt-6 bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-lg font-bold transition duration-300">
                Login
            </button>

            <p class="text-gray-600 text-center mt-4">Belum punya akun? 
                <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Daftar</a>
            </p>
        </form>
    </div>

</body>
</html>
