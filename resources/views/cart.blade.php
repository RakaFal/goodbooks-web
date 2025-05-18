@extends('layouts.app')

@section('content')

<div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10 mt-20 bg-white rounded-xl shadow-md">
    <h2 class="text-2xl font-bold mb-6">Keranjang Belanja</h2>

    @if (session('success'))
        <div class="mb-4 text-green-600 font-semibold">
            {{ session('success') }}
        </div>
    @endif

    @if ($cart && count($cart) > 0)
        {{-- Buat wrapper scroll horizontal di layar kecil --}}
        <div class="overflow-x-auto">
            <table class="w-full table-auto mb-8 border border-gray-200 rounded-md overflow-hidden min-w-[600px]">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="p-2 sm:p-3">Buku</th>
                        <th class="p-2 sm:p-3 w-24 text-center font-semibold">Harga</th>
                        <th class="p-2 sm:p-3 w-28 text-center font-semibold">Jumlah</th>
                        <th class="p-2 sm:p-3 w-24 text-center font-semibold">Total</th>
                        <th class="p-2 sm:p-3 text-center font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach ($cart as $id => $item)
                        @php $itemTotal = $item['price'] * $item['quantity']; @endphp
                        @php $total += $itemTotal; @endphp
                        <tr class="border-t border-gray-200">
                            <td class="p-2 sm:p-3 flex items-center gap-3 sm:gap-4 min-w-[200px]">
                                <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['title'] }}" class="w-12 h-16 sm:w-16 sm:h-20 object-cover rounded">
                                <span class="font-medium text-sm sm:text-base">{{ $item['title'] }}</span>
                            </td>
                            <td class="p-2 sm:p-3 text-center text-gray-800 text-sm sm:text-base">
                                Rp{{ number_format($item['price'], 0, ',', '.') }}
                            </td>
                            <td class="p-2 sm:p-3 text-center">
                                <div class="inline-flex items-center border border-gray-300 rounded overflow-hidden text-sm sm:text-base">
                                    <form action="{{ route('cart.update', $id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="action" value="decrease">
                                        <button type="submit" class="px-2 sm:px-3 py-1 hover:bg-gray-200 transition cursor-pointer">−</button>
                                    </form>

                                    <span class="px-3 sm:px-4 font-semibold select-none">{{ $item['quantity'] }}</span>

                                    <form action="{{ route('cart.update', $id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="action" value="increase">
                                        <button type="submit" class="px-2 sm:px-3 py-1 hover:bg-gray-200 transition cursor-pointer">+</button>
                                    </form>
                                </div>
                            </td>
                            <td class="p-2 sm:p-3 text-center font-semibold text-gray-900 text-sm sm:text-base">
                                Rp{{ number_format($itemTotal, 0, ',', '.') }}
                            </td>
                            <td class="p-2 sm:p-3 text-center">
                                <form action="{{ route('cart.remove', $id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus buku ini dari keranjang?')">
                                    @csrf
                                    <button type="submit" class="text-red-600 hover:underline cursor-pointer text-sm sm:text-base">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="text-right text-lg sm:text-xl font-bold text-gray-900">
            Total: Rp{{ number_format($total, 0, ',', '.') }}
        </div>

        <div class="text-right mt-6">
            <a href="{{ route('checkout') }}" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition text-sm sm:text-base inline-block">
                Checkout
            </a>
        </div>
    @else
        <p class="text-center text-gray-700 text-sm sm:text-base">Keranjang kosong. <a href="{{ route('home') }}" class="text-blue-600 hover:underline">Belanja sekarang</a>.</p>
    @endif
</div>

@endsection