<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penjual</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-blue-600 text-white h-screen p-6">
        <h1 class="text-2xl font-bold mb-6">Penjual Buku</h1>
        <nav>
            <a href="#" class="block py-2 px-4 hover:bg-blue-500 rounded">Dashboard</a>
            <a href="#" class="block py-2 px-4 hover:bg-blue-500 rounded">Daftar Buku</a>
            <a href="#" class="block py-2 px-4 hover:bg-blue-500 rounded">Pesanan</a>
            <a href="#" class="block py-2 px-4 hover:bg-blue-500 rounded">Laporan</a>
            <a href="/" class="block py-2 px-4 hover:bg-blue-500 rounded text-red-300">Logout</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 p-6">
        <!-- Navbar -->
        <nav class="bg-white p-4 shadow-md rounded-md flex justify-between items-center">
            <h2 class="text-lg font-bold">Dashboard Penjual</h2>
            <div class="flex items-center space-x-4">
                <span class="text-gray-700">Marty</span>
                <img src="https://via.placeholder.com/40" class="rounded-full" alt="Seller">
            </div>
        </nav>

        <!-- Dashboard Content -->
        <div class="mt-6">
            <div class="grid grid-cols-3 gap-4">
                <!-- Statistik -->
                <div class="bg-white shadow-md p-6 rounded-lg">
                    <h3 class="text-lg font-semibold">Total Buku</h3>
                    <p class="text-gray-500 mt-2 text-3xl font-bold">12</p>
                </div>
                <div class="bg-white shadow-md p-6 rounded-lg">
                    <h3 class="text-lg font-semibold">Total Pesanan</h3>
                    <p class="text-gray-500 mt-2 text-3xl font-bold">34</p>
                </div>
                <div class="bg-white shadow-md p-6 rounded-lg">
                    <h3 class="text-lg font-semibold">Pendapatan</h3>
                    <p class="text-gray-500 mt-2 text-3xl font-bold">Rp 2.500.000</p>
                </div>
            </div>

            <!-- Daftar Buku -->
            <div class="mt-6 bg-white p-6 shadow-md rounded-lg">
                <h3 class="text-lg font-semibold mb-4">Daftar Buku</h3>
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-300 p-2">Judul</th>
                            <th class="border border-gray-300 p-2">Harga</th>
                            <th class="border border-gray-300 p-2">Stok</th>
                            <th class="border border-gray-300 p-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 p-2">Buku A</td>
                            <td class="border border-gray-300 p-2">Rp 50.000</td>
                            <td class="border border-gray-300 p-2">10</td>
                            <td class="border border-gray-300 p-2">
                                <a href="#" class="text-blue-500">Edit</a> | 
                                <a href="#" class="text-red-500">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">Buku B</td>
                            <td class="border border-gray-300 p-2">Rp 75.000</td>
                            <td class="border border-gray-300 p-2">5</td>
                            <td class="border border-gray-300 p-2">
                                <a href="#" class="text-blue-500">Edit</a> | 
                                <a href="#" class="text-red-500">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>