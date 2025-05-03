<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">📚 Daftar Buku</h2>
            <a href="#" 
               class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition">
                + Tambah Buku
            </a>
        </div>

        <!-- Notifikasi sementara -->
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            Buku berhasil ditambahkan.
        </div>

        <!-- Tabel Daftar Buku -->
        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Judul</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Harga</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Stok</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Kategori</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr>
                        <td class="px-4 py-2 text-gray-800">Buku A</td>
                        <td class="px-4 py-2 text-gray-600">Rp 50.000</td>
                        <td class="px-4 py-2">10</td>
                        <td class="px-4 py-2">Novel</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="#" class="text-blue-600 hover:underline">Edit</a>
                            <a href="#" class="text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 text-gray-800">Buku B</td>
                        <td class="px-4 py-2 text-gray-600">Rp 75.000</td>
                        <td class="px-4 py-2">5</td>
                        <td class="px-4 py-2">Fiksi</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="#" class="text-blue-600 hover:underline">Edit</a>
                            <a href="#" class="text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <!-- Tambah data dummy lain jika perlu -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>