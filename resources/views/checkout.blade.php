@extends('layouts.app')

@section('content')

<div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10 mt-20 bg-white rounded-xl shadow-md">
    <h2 class="text-2xl font-bold mb-6">Checkout</h2>

    @if (session('error'))
    <div class="mb-4 text-red-600 font-semibold">
        {{ session('error') }}
    </div>
    @endif

    @if ($cart && count($cart) > 0)
    @php $total = 0; @endphp

    <div class="mb-8">
        <h3 class="text-lg font-semibold mb-4">Ringkasan Pesanan</h3>
        <div class="overflow-x-auto">
            <table class="w-full table-auto border border-gray-200 rounded-md overflow-hidden min-w-[600px]">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="p-2 sm:p-3">Buku</th>
                        <th class="p-2 sm:p-3 w-24 text-center font-semibold">Harga</th>
                        <th class="p-2 sm:p-3 w-28 text-center font-semibold">Jumlah</th>
                        <th class="p-2 sm:p-3 w-24 text-center font-semibold">Total</th>
                    </tr>
                </thead>
                <tbody>
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
                        <td class="p-2 sm:p-3 text-center text-sm sm:text-base">
                            {{ $item['quantity'] }}
                        </td>
                        <td class="p-2 sm:p-3 text-center font-semibold text-gray-900 text-sm sm:text-base">
                            Rp{{ number_format($itemTotal, 0, ',', '.') }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="text-right text-lg sm:text-xl font-bold text-gray-900 mt-4">
            Total: Rp{{ number_format($total, 0, ',', '.') }}
        </div>
    </div>

    <div>
        <h3 class="text-lg text-center font-semibold mb-4">Data Pengiriman</h3>
        <form action="{{ route('checkout.process') }}" method="POST" class="max-w-lg mx-auto">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                <input type="text" name="name" id="name" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ old('name', $user->name ?? '') }}">
                @error('name')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" id="email" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ old('email', $user->email ?? '') }}">
                @error('email')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Alamat Pengiriman</label>
                <textarea name="address" id="address" rows="3" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('address', $user->address ?? '') }}</textarea>
                @error('address')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">No. Telepon</label>
                <input type="text" name="phone" id="phone" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ old('phone', $user->phone ?? '') }}">
                @error('phone')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="text-right">
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition text-sm sm:text-base">
                    Konfirmasi & Bayar
                </button>
            </div>
        </form>
    </div>


    @else
    <p class="text-center text-gray-700 text-sm sm:text-base">
        Keranjang kosong. <a href="{{ route('home') }}" class="text-blue-600 hover:underline">Belanja sekarang</a>.
    </p>
    @endif
</div>

@endsection