<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoodBooks - Toko Buku Online</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100">
    
    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Tempat Konten Halaman --}}
    <main class="container mx-auto px-4 py-8">
        @yield('content')  {{-- Konten dari halaman lain akan dimasukkan di sini --}}
    </main>

    {{-- Footer --}}
    @include('components.footer')

</body>
</html>
