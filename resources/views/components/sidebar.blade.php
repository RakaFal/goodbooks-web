<aside class="w-64 bg-blue-700 text-white h-screen p-6 sticky top-0 flex flex-col justify-between">

    <!-- Header Section -->
    <div>
        <a href="/">
            <h1 class="text-2xl font-bold mb-8">GoodBooks</h1>
        </a>
        <nav>
            <a href="{{ route('admin.dashboard') }}" class="block py-3 px-4 mb-3 hover:bg-blue-500 rounded-lg transition">
                Dashboard
            </a>
            <a href="{{ route('admin.buku') }}" class="block py-3 px-4 mb-3 hover:bg-blue-500 rounded-lg transition">
                Daftar Buku
            </a>
            <a href="#" class="block py-3 px-4 mb-3 hover:bg-blue-500 rounded-lg transition">
                Pesanan
            </a>
            <a href="#" class="block py-3 px-4 mb-3 hover:bg-blue-500 rounded-lg transition">
                Laporan
            </a>

            <!-- Logout Form -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="block py-3 px-4 mb-3 hover:bg-red-600 rounded-lg transition w-full text-left">
                    Logout
                </button>
            </form>
        </nav>
    </div>

    <!-- Footer Section -->
    <div class="border-t border-gray-700 mt-8 pt-4 text-center">
        <p class="text-gray-300 text-sm">
            &copy; 2025 GoodBooks. All rights reserved. Made with
            <i class="fas fa-heart text-red-500"></i>
        </p>
    </div>

</aside>