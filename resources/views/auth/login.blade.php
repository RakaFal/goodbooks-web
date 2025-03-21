<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - GoodBooks</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-gray-700 text-center">Login - GoodBooks</h2>
        
        <form action="{{ route('login') }}" method="POST" class="mt-6">
            @csrf
            
            <div>
                <label for="email" class="block text-gray-600 text-sm font-medium">Email</label>
                <input type="email" id="email" name="email" required class="w-full p-3 border border-gray-300 rounded mt-1 focus:ring-blue-500 focus:border-blue-500">
            </div>
            
            <div class="mt-4">
                <label for="password" class="block text-gray-600 text-sm font-medium">Password</label>
                <input type="password" id="password" name="password" required class="w-full p-3 border border-gray-300 rounded mt-1 focus:ring-blue-500 focus:border-blue-500">
            </div>
            
            <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded mt-6 hover:bg-blue-600 transition">Login</button>
        </form>
        
        <p class="text-center text-gray-600 text-sm mt-4">Don't have an account yet? <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Register Here</a></p>
    </div>
</body>
</html>