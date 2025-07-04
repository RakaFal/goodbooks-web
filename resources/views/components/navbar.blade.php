<div id="navbar" class="l-container fixed top-0 z-50 w-full flex flex-col justify-center px-16 bg-white border border-gray-300"> <!-- Background container dengan warna abu-abu muda -->
    <!-- Navbar Section -->
    <div class="my-2 flex items-center">
        <div class="w-2/12 hidden md:flex">
            <!-- Logo atau Nama Website -->
            <a href="/" class="text-blue-500 text-lg md:text-xl lg:text-3xl font-bold hover:text-blue-400 transition-all duration-300">
                GoodBooks
            </a>
        </div>
        <div class="flex w-7/12 flex-grow items-center">
            <div class="mx-auto flex w-10/12 items-center space-x-4">
                <a href="#kategori" onclick="navigateToSection(event, 'kategori')" class="hidden lg:flex relative items-center justify-center transition-colors">
                    <div class="">
                        <div class="text-gray-700 hover:text-blue-500 font-medium duration-500">
                            <span class="text-s-extrabold">Kategori</span>
                        </div>
                    </div>
                </a>
                <div class="w-full">
                    <!-- Form Pencarian -->
                    <form action="/search" method="GET">
                        <div class="flex-grow mx-2 md:mx-4 transition-all duration-300 items-center">
                            <div class="relative w-full">
                                <!-- Input Search -->
                                <input type="text" name="query" id="search-input"
                                    class="w-full p-3 pl-12 text-gray-700 bg-slate-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                                    placeholder="Cari buku favoritmu..." aria-label="Search Books">
                                <!-- Icon Search -->
                                <svg class="absolute left-4 top-3 size-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M15 10a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                </svg>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="relative">
                    <!-- Tombol Keranjang (Cart) -->
                    <a href="{{ route('cart.index') }}" class="hidden md:flex items-center rounded-full outline-none disabled:pointer-events-none border border-transparent text-gray-600 hover:bg-gray-100 p-3 transition duration-300 relative">
                        <!-- Ikon keranjang -->
                        <svg class="text-gray-600" style="font-size:24px" fill="currentColor" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.5 4.25c0-.41.34-.75.75-.75h.56c.95 0 1.52.64 1.84 1.23.22.4.38.86.5 1.27h12.6c.83 0 1.43.8 1.2 1.6L18.12 14a2.75 2.75 0 0 1-2.64 2H9.53a2.75 2.75 0 0 1-2.65-2.02l-.76-2.78-1.26-4.24v-.01c-.16-.57-.3-1.1-.52-1.5C4.13 5.07 3.96 5 3.8 5h-.56a.75.75 0 0 1-.75-.75Zm5.07 6.59.75 2.74c.15.54.65.92 1.21.92h5.95c.56 0 1.05-.37 1.2-.9l1.74-6.1H6.59l.97 3.29.01.05ZM11 19a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm-1.5 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0Zm8.5 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm-1.5 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0Z" fill="currentColor"></path>
                        </svg>

                        <!-- Menampilkan jumlah item -->
                        @php
                        $totalQuantity = 0;
                        $cart = session()->get('cart', []);
                        foreach ($cart as $item) {
                        $totalQuantity += $item['quantity'];
                        }
                        @endphp
                        @if($totalQuantity > 0)
                        <span class="absolute top-0 right-0 flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-red-500 rounded-full -mr-2">{{ $totalQuantity }}</span>
                        @endif
                    </a>
                </div>
            </div>
        </div>
        <div class="hidden md:flex w-2/12">
            <div class="ml-auto flex space-x-4">
                @guest
                <a href="/login"
                    class="relative inline-flex items-center justify-center focus:outline-none bg-white border border-gray-400 text-black py-3 px-4 text-sm font-semibold rounded-md hover:border-black shadow-md">
                    Login
                </a>
                <a href="/register"
                    class="relative inline-flex items-center justify-center focus:outline-none bg-blue-600 text-white py-3 px-4 text-sm font-semibold rounded-md hover:bg-blue-900 shadow-md">
                    Register
                </a>
                @endguest
                @auth
                <!-- Tampilkan jika sudah login -->
                <a href="/profile"
                    class="w-12 h-12 flex items-center justify-center rounded-full bg-blue-600 text-white font-semibold text-sm hover:bg-blue-800 transition duration-300 shadow-md">
                    @if (auth()->user()->profile_picture)
                    <img src="{{ asset('storage/' . auth()->user()->profile_picture) }}"
                        alt="Profile"
                        class="w-full h-full object-cover rounded-full">
                    @else
                    {{ strtoupper(auth()->user()->name[0]) }}
                    @endif
                </a>
                @endauth
            </div>
        </div>
    </div>
    <!-- End Navbar Section -->

    <!-- Keyword Slider Section -->
    <div class="hidden md:flex w-full items-center justify-center p-2">
        <div class="flex flex-wrap justify-center space-x-4 text-xs">
            <a href="#new-arrivals" onclick="navigateToSection(event, 'new-arrivals')" class="text-gray-700 hover:text-blue-500 font-medium duration-500">New Arrivals</a>
            <a href="#best-seller" onclick="navigateToSection(event, 'best-seller')" class="text-gray-700 hover:text-blue-500 font-medium duration-500">Best Seller</a>
            <a href="#sale" onclick="navigateToSection(event, 'sale')" class="text-gray-700 hover:text-blue-500 font-medium duration-500">Sale</a>
        </div>
    </div>
    <!-- End Keyword Slider Section -->
</div>