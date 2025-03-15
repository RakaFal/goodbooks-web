<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoodBooks - Toko Buku Online</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100 grid min-h-screen grid-rows-[1fr_auto]">

    <!-- Navbar -->
    @include('components.navbar')

    {{-- Tempat Konten Halaman --}}
    <main class="container mx-auto px-4 py-8">
        @yield('content') {{-- Konten dari halaman lain akan dimasukkan di sini --}}
    </main>

    <!-- Footer -->
    @include('components.footer')

</body>

<script>
    var swiper = new Swiper(".mySwiper", {
        speed: 1000,
        loop: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 4000, // Auto-scroll setiap 4 detik
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>

</html>