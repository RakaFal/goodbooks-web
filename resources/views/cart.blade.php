@extends('layouts.app')

@section('content')

<div class="container mx-auto py-10 mt-20">
    <h2 class="text-2xl font-bold text-gray-700 mb-4">Keranjang Belanja</h2>
    @if(session('cart') && count(session('cart')) > 0)
    <div class="bg-white p-4 rounded-lg shadow-md">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b">
                    <th class="p-2">Produk</th>
                    <th class="p-2 text-center">Harga</th>
                    <th class="p-2 text-center">Jumlah</th>
                    <th class="p-2 text-center">Total</th>
                    <th class="p-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach(session('cart') as $id => $item)
                @php $subtotal = $item['price'] * $item['quantity']; @endphp
                @php $total += $subtotal; @endphp
                <tr class="border-b">
                    <td class="p-2 flex items-center space-x-4">
                        <img src="{{ $item['image'] }}" alt="Gambar Produk" class="w-16 h-16 rounded-md">
                        <span class="font-semibold">{{ $item['name'] }}</span>
                    </td>
                    <td class="p-2 text-center">Rp{{ number_format($item['price'], 0, ',', '.') }}</td>
                    <td class="p-2 text-center">
                        <form action="{{ route('cart.update', $id) }}" method="POST" class="flex justify-center">
                            @csrf
                            <button type="submit" name="action" value="decrease" class="px-2 py-1 bg-gray-200 hover:bg-gray-300 rounded-md">-</button>
                            <span class="px-4">{{ $item['quantity'] }}</span>
                            <button type="submit" name="action" value="increase" class="px-2 py-1 bg-gray-200 hover:bg-gray-300 rounded-md">+</button>
                        </form>
                    </td>
                    <td class="p-2 text-center">Rp{{ number_format($subtotal, 0, ',', '.') }}</td>
                    <td class="p-2 text-center">
                        <form action="{{ route('cart.remove', $id) }}" method="POST">
                            @csrf
                            <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4 text-right">
            <h3 class="text-lg font-semibold">Total: Rp{{ number_format($total, 0, ',', '.') }}</h3>
            <a href="{{ route('checkout') }}" class="mt-2 inline-block px-6 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600">Checkout</a>
        </div>
    </div>
    @else
    <p class="text-gray-500">Keranjang belanja Anda kosong.</p>
    @endif
</div>
@endsection