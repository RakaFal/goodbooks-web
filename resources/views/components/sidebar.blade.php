<!-- resources/views/components/sidebar.blade.php -->
<aside class="w-64 bg-blue-700 text-white h-screen p-6 sticky top-0">
    <h1 class="text-2xl font-bold mb-8">Seller Books</h1>
    <nav>
        <a href="{{ route('dashboard') }}" class="block py-3 px-4 mb-3 hover:bg-blue-500 rounded-lg transition">Dashboard</a>
        <a href="{{ route('buku') }}" class="block py-3 px-4 mb-3 hover:bg-blue-500 rounded-lg transition">Daftar Buku</a>
        <a href="{{ route('') }}" class="block py-3 px-4 mb-3 hover:bg-blue-500 rounded-lg transition">Pesanan</a>
        <a href="{{ route('') }}" class="block py-3 px-4 mb-3 hover:bg-blue-500 rounded-lg transition">Laporan</a>
        <a href="{{ route('logout') }}" class="block py-3 px-4 mb-3 hover:bg-red-600 rounded-lg transition">Logout</a>
    </nav>
</aside>