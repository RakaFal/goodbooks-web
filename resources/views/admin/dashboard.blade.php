<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Seller</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-50 flex">

    <!-- Sidebar -->
    @include('components.sidebar')

    <!-- Main Content -->
    <div class="flex-1 p-8 overflow-y-auto">
        <!-- Navbar -->
        <nav class="bg-white p-4 shadow-md rounded-md flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold text-gray-700">Dashboard Penjual</h2>
            <div class="flex items-center space-x-4">
                <span class="text-gray-700 font-semibold">Martypasha</span>
                <img src="https://via.placeholder.com/40" class="rounded-full" alt="Seller">
            </div>
        </nav>

        <!-- Dashboard Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Statistik Cards -->
            <div class="card">
                <h3 class="card-header">Total Buku</h3>
                <p class="card-body text-4xl font-bold text-blue-600">12</p>
            </div>
            <div class="card">
                <h3 class="card-header">Total Pesanan</h3>
                <p class="card-body text-4xl font-bold text-green-600">34</p>
            </div>
            <div class="card">
                <h3 class="card-header">Pendapatan</h3>
                <p class="card-body text-4xl font-bold text-yellow-600">Rp 2.500.000</p>
            </div>
        </div>

        <!-- Grafik -->
        <div class="mt-8 bg-white shadow-lg rounded-lg p-6">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Grafik Penjualan Bulanan</h3>
            <canvas id="salesChart"></canvas>
        </div>

        <!-- Daftar Buku -->
        <div class="mt-8 bg-white shadow-lg rounded-lg p-6">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Daftar Buku</h3>
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 p-3 text-left">Judul</th>
                        <th class="border border-gray-300 p-3 text-left">Harga</th>
                        <th class="border border-gray-300 p-3 text-left">Stok</th>
                        <th class="border border-gray-300 p-3 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-50 transition">
                        <td class="border border-gray-300 p-3">Buku A</td>
                        <td class="border border-gray-300 p-3">Rp 50.000</td>
                        <td class="border border-gray-300 p-3">10</td>
                        <td class="border border-gray-300 p-3">
                            <a href="#" class="text-blue-500 hover:underline">Edit</a> | 
                            <a href="#" class="text-red-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition">
                        <td class="border border-gray-300 p-3">Buku B</td>
                        <td class="border border-gray-300 p-3">Rp 75.000</td>
                        <td class="border border-gray-300 p-3">5</td>
                        <td class="border border-gray-300 p-3">
                            <a href="#" class="text-blue-500 hover:underline">Edit</a> | 
                            <a href="#" class="text-red-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        // Data untuk grafik penjualan bulanan
        var ctx = document.getElementById('salesChart').getContext('2d');
        var salesChart = new Chart(ctx, {
            type: 'line', // Jenis grafik
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'], // Bulan
                datasets: [{
                    label: 'Penjualan',
                    data: [10, 20, 15, 30, 25, 40], // Data penjualan per bulan
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)', // Warna garis grafik
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