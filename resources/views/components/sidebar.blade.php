<!-- resources/views/components/sidebar.blade.php -->
<aside class="w-64 bg-blue-700 text-white h-screen p-6 sticky top-0">
    <h1 class="text-2xl font-bold mb-8">Seller Books</h1>
    <nav>
        <a href="{{ route('admin.dashboard') }}" class="block py-3 px-4 mb-3 hover:bg-blue-500 rounded-lg transition">Dashboard</a>
        <a href="{{ route('admin.buku') }}" class="block py-3 px-4 mb-3 hover:bg-blue-500 rounded-lg transition">Daftar Buku</a>
        <a href="#" class="block py-3 px-4 mb-3 hover:bg-blue-500 rounded-lg transition">Pesanan</a>
        <a href="#" class="block py-3 px-4 mb-3 hover:bg-blue-500 rounded-lg transition">Laporan</a>
        
        <!-- Form logout -->
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="block py-3 px-4 mb-3 hover:bg-red-600 rounded-lg transition w-full text-left">
                Logout
            </button>
        </form>
    </nav>
</aside>