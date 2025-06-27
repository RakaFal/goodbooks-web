<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GoodBooks - Toko Buku Online</title>

    <!-- Icon Web -->
    <link rel="icon" type="image/png" href="https://img.lovepik.com/free-png/20220119/lovepik-standing-book-png-image_401500960_wh860.png">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Chart Admin -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Tailwind & Vite -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Sidebar atau Navbar -->
    @if(request()->is('admin/*'))
    <div class="flex min-h-screen">
        <!-- Sidebar untuk admin -->
        <div class="w-64 bg-gray-800 text-white min-h-screen">
            @include('components.sidebar')
        </div>

        <!-- Konten Utama untuk admin -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
    @else
    <!-- Navbar untuk halaman umum -->
    @include('components.navbar')

    <!-- Konten Utama untuk halaman umum -->
    <main class="flex-grow w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @yield('content')
    </main>
    @endif

    <!-- Footer -->
    @if(!request()->is('admin/*'))
    @include('components.footer')
    @endif

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // Fungsi untuk menangani navigasi ke section
        function navigateToSection(event, sectionId) {
            event.preventDefault(); // Mencegah perilaku default link

            // Cek apakah kita berada di halaman home
            const currentPath = window.location.pathname;

            // Periksa apakah URL adalah halaman home atau halaman lain
            if (currentPath === '/' || currentPath === '/home') {
                // Jika berada di halaman home, update URL dengan query parameter tanpa reload halaman
                history.pushState(null, null, `/?section=${sectionId}`);
                scrollToSection(sectionId); // Scroll ke section yang dituju
            } else {
                // Jika berada di halaman selain home, arahkan ke halaman home dengan query parameter
                window.location.href = `/?section=${sectionId}`;
            }
        }

        // Fungsi untuk scroll ke section dengan ID
        function scrollToSection(sectionId) {
            const targetElement = document.getElementById(sectionId); // Cari elemen dengan ID yang sesuai
            if (targetElement) {
                // Ambil tinggi navbar jika ada, jika tidak anggap 0
                const navbarElement = document.getElementById('navbar');
                const navbarHeight = navbarElement ? navbarElement.offsetHeight : 0;

                // Scroll ke posisi yang sesuai, dengan mengurangi tinggi navbar
                window.scrollTo({
                    top: targetElement.offsetTop - navbarHeight,
                    behavior: 'smooth' // Efek scroll halus
                });
            } else {
                console.warn(`Elemen dengan ID '${sectionId}' tidak ditemukan di halaman.`);
            }
        }

        // Cek URL saat halaman dimuat untuk scroll otomatis ke section jika ada parameter 'section'
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const sectionId = urlParams.get('section'); // Ambil nilai parameter 'section'

            if (sectionId) {
                // Periksa apakah elemen dengan ID yang sesuai ada di halaman
                const targetElement = document.getElementById(sectionId);
                if (targetElement) {
                    scrollToSection(sectionId); // Scroll ke section yang sesuai
                } else {
                    console.warn(`Elemen dengan ID '${sectionId}' tidak ditemukan di halaman.`);
                }
            }
        };

        // Menangani perubahan state browser saat pengguna menavigasi dengan tombol back/forward
        window.onpopstate = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const sectionId = urlParams.get('section'); // Ambil nilai parameter 'section'

            if (sectionId) {
                // Periksa apakah elemen dengan ID yang sesuai ada di halaman
                const targetElement = document.getElementById(sectionId);
                if (targetElement) {
                    scrollToSection(sectionId); // Scroll ke section yang sesuai
                } else {
                    console.warn(`Elemen dengan ID '${sectionId}' tidak ditemukan di halaman.`);
                }
            }
        };

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
        var ctx = document.getElementById('salesChart')?.getContext('2d');
        if (ctx) {
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
        }
    </script>
</body>

</html>