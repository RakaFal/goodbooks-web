<div class="fixed top-0 left-0 w-full bg-white shadow-md z-50 transition-all duration-300 h-20 grid grid-cols-12 grid-rows-3 gap-4 p-4">
    <!-- Logo -->
    <div class="container mx-auto flex items-center justify-between px-4 py-2 md:py-3 lg:py-4 transition-all duration-300 col-span-2 row-span-3">
        <a href="/" class="text-blue-500 pl-14 text-lg md:text-xl lg:text-3xl font-bold hover:text-blue-400 transition-all duration-300">
            GoodBooks
        </a>
    </div>

    <!-- Search Bar -->
    <div class="hidden md:flex flex-grow mx-4 md:mx-10 transition-all duration-300 col-span-9 row-span-2 col-start-3 items-center">
        <div class="relative w-full">
            <input type="text" class="w-full p-2 pl-12 text-gray-700 bg-slate-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" placeholder="Cari buku favoritmu...">
            <svg class="absolute left-4 top-2 size-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M15 10a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
            </svg>
        </div>
    </div>

    <!-- Kategori -->
    <div class="col-span-9 col-start-3 row-start-3 flex justify-center space-x-10 text-xs">
        <a href="/" class="text-gray-700 hover:text-blue-500 font-medium">Trending Now</a>
        <a href="#new-arrivals" class="text-gray-700 hover:text-blue-500 font-medium">New Arrivals</a>
        <a href="#best-seller" class="text-gray-700 hover:text-blue-500 font-medium">Best Seller</a>
        <a href="#sale" class="text-gray-700 hover:text-blue-500 font-medium">Sale</a>
        <a href="#" class="text-gray-700 hover:text-blue-500 font-medium">Fiction</a>
        <a href="#" class="text-gray-700 hover:text-blue-500 font-medium">Non-Fiction</a>
        <a href="#" class="text-gray-700 hover:text-blue-500 font-medium">Romantic</a>
        <a href="#" class="text-gray-700 hover:text-blue-500 font-medium">Horror</a>
        <a href="#" class="text-gray-700 hover:text-blue-500 font-medium">Thriller</a>
        <a href="#" class="text-gray-700 hover:text-blue-500 font-medium">History</a>
    </div>

    <!-- Cart & Profile Section -->
    <div class="row-span-3 col-start-12 row-start-1 flex items-center space-x-3">
        <!-- Cart -->
        <a href="/cart" class="relative rounded-full bg-slate-200 p-2 text-gray-700 hover:text-blue-500 focus:ring-2 focus:ring-blue-500">
            <span class="sr-only">View Cart</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1 5h12l-1-5M10 18a2 2 0 1 1-4 0m10 0a2 2 0 1 1-4 0" />
            </svg>
        </a>

        <!-- Profile -->
        <a href="/profile" class="relative rounded-full bg-slate-200 p-2 text-gray-700 hover:text-blue-500 focus:ring-2 focus:ring-blue-500">
            <span class="sr-only">Profile</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 14c4.418 0 8 1.79 8 4v2H4v-2c0-2.21 3.582-4 8-4zM12 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8z" />
            </svg>
        </a>
    </div>

</div>