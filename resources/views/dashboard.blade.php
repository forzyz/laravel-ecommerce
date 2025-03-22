@extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
    <div class="min-h-screen bg-gradient-to-r from-blue-100 to-blue-300 p-8">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">
                Welcome, {{ auth()->user()->name }}
            </h2>

            <!-- Navigation links -->
            <nav class="text-center text-lg mb-6">
                <a href="{{ url('/products/create') }}" class="text-blue-600 hover:underline mx-4">➕ Add Product</a> |
                <a href="{{ url('/products') }}" class="text-blue-600 hover:underline mx-4">📦 View Products</a> |
                <a href="{{ url('/orders') }}" class="text-blue-600 hover:underline mx-4">📜 View Orders</a>
            </nav>

            <!-- Your Products -->
            <div class="mb-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Your Products</h3>
                <ul class="list-disc pl-6 space-y-2 text-lg text-gray-700">
                    @foreach ($products as $product)
                        <li>{{ $product->name }} - ${{ $product->price }}</li>
                    @endforeach
                </ul>
            </div>  

            <!-- Your Orders -->
            <div class="mb-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Your Orders</h3>
                <ul class="list-disc pl-6 space-y-2 text-lg text-gray-700">
                    @foreach ($orders as $order)
                        <li>
                            Order #{{ $order->id }} - {{ $order->product->name }} (x{{ $order->quantity }}) - ${{ $order->total_price }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Logout Form -->
            <div class="text-center">
                <form action="{{ url('/logout') }}" method="POST" class="inline-block">
                    @csrf
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-all duration-300">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
