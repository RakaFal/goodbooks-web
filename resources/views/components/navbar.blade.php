<nav class="bg-white shadow-md" id="home, trending">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-none focus:ring-inset">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <!-- Logo GoodBooks bisa diklik -->
                <div class="flex shrink-0 items-center">
                    <a href="/" class="text-blue-500 text-xl font-bold hover:text-blue-400 transition duration-300">GoodBooks</a>
                </div>
                <div class="hidden sm:ml-8 sm:block">
                    <div class="flex space-x-4">
                        <a href="#home" class="rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-500">Home</a>
                        <a href="#trending" class="rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-500">Trending Now</a>
                        <a href="#new-arrival" class="rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-500">New Arrival</a>
                        <a href="#best-seller" class="rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-500">Best Seller</a>
                        <a href="#sale" class="rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-500">Sale</a>
                    </div>
                </div>
            </div>
            
            <!-- Search Bar -->
            <div class="relative w-64 hidden sm:block">
                <input type="text" class="w-full p-2 pl-10 text-sm text-gray-700 bg-slate-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" placeholder="Search...">
                <svg class="absolute left-3 top-2.5 size-4 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M15 10a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                </svg>
            </div>

            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <!-- Cart Button -->
                <button type="button" class="relative rounded-full bg-slate-200 p-1 text-gray-700 hover:text-blue-500 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View Cart</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1 5h12l-1-5M10 18a2 2 0 1 1-4 0m10 0a2 2 0 1 1-4 0" />
                    </svg>
                </button>

                <!-- Profile dropdown -->
                <div class="relative ml-3">
                    <div>
                        <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Open Profile</span>
                            <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </button>
                    </div>
                    <!-- <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 ring-1 shadow-lg ring-black/5">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:text-blue-500">Your Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:text-blue-500">Settings</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:text-blue-500">Sign out</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</nav>
