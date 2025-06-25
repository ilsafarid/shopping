@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold mb-6 text-[#2C3930]">Checkout</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-6">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('place.order') }}" class="bg-white shadow-lg rounded-lg p-6">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold mb-2">Your Name</label>
            <input type="text" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}" required
                class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500">
        </div>

        <div class="mb-4">
            <label for="address" class="block text-gray-700 font-semibold mb-2">Address</label>
            <input type="text" name="address" id="address" placeholder="Address" value="{{ old('address') }}" required
                class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500">
        </div>

        <div class="mb-6">
            <label for="phone" class="block text-gray-700 font-semibold mb-2">Phone</label>
            <input type="text" name="phone" id="phone" placeholder="Phone" value="{{ old('phone') }}" required
                class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500">
        </div>

        <button type="submit" class="w-full bg-[#FFA500] text-white font-semibold py-3 rounded-lg shadow hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500">
            Place Order
        </button>
    </form>
</div>
@endsection
