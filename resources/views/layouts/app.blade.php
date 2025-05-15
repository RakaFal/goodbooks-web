<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GoodBooks - Toko Buku Online</title>

    {{-- Font Awesome --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />

    {{-- Swiper CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    {{-- Chart Admin --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {{-- Tailwind & Vite --}}
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

    {{-- Sidebar atau Navbar --}}
    @if(request()->is('dashboard*'))
    <div class="flex min-h-screen">
        {{-- Sidebar untuk dashboard --}}
        <div class="w-64 bg-gray-800 text-white min-h-screen">
            @include('components.sidebar')
        </div>

        {{-- Konten Utama untuk dashboard --}}
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
    @else
    {{-- Navbar untuk halaman umum --}}
    @include('components.navbar')

    {{-- Konten Utama untuk halaman umum --}}
    <main class="flex-grow w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @yield('content')
    </main>
    @endif

    {{-- Footer --}}
    @if(!request()->is('dashboard*'))
    @include('components.footer')
    @endif

    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".mySwiper", {
            speed: 1000,
            loop: true,
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 4000,
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

        // Dashboard
        var ctx = document.getElementById('salesChart').getContext('2d');
        var salesChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
                datasets: [{
                    label: 'Penjualan',
                    data: [10, 20, 15, 30, 25, 40],
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>