@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold mb-6 text-[#2C3930]">Shopping Cart</h2>

    @if(session('cart') && count(session('cart')) > 0)
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300 bg-white shadow-md rounded-lg">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Product</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Price</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Qty</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Subtotal</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach(session('cart') as $id => $item)
                        @php 
                            $price = floatval(str_replace(['$', ','], '', $item['price']));
                            $subtotal = $price * $item['quantity'];
                            $total += $subtotal;
                        @endphp
                        <tr class="border-t">
                            <td class="py-3 px-4">{{ $item['name'] }}</td>
                            <td class="py-3 px-4">${{ number_format($price, 2) }}</td>
                            <td class="py-3 px-4">
                                <form action="{{ route('update.cart') }}" method="POST" class="flex items-center gap-2">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="id" value="{{ $id }}">
                                    <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="w-16 px-2 py-1 border rounded">
                                    <button type="submit" class="bg-[#3F4F44] text-white px-3 py-1 rounded hover:bg-forest">Update</button>
                                </form>
                            </td>
                            <td class="py-3 px-4">${{ number_format($subtotal, 2) }}</td>
                            <td class="py-3 px-4">
                                <form action="{{ route('remove.from.cart') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $id }}">
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr class="border-t bg-gray-50">
                        <td colspan="3" class="py-3 px-4 font-bold text-right">Total:</td>
                        <td colspan="2" class="py-3 px-4 font-bold text-[#2C3930]">${{ number_format($total, 2) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            <a href="{{ route('checkout') }}" class="inline-block bg-[#FFA500] text-white font-semibold px-6 py-3 rounded shadow hover:bg-orange-600">Proceed to Checkout</a>
        </div>
    @else
        <p class="text-gray-600">Your cart is empty.</p>
    @endif
</div>
@endsection
