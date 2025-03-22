@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <h2>Products</h2>
    <a href="{{ route('products.create') }}">Add New Product</a>
    <ul>
        @foreach($products as $product)
            <li>
                <strong>{{ $product->name }}</strong> - ${{ $product->price }}
                <p>{{ $product->description }}</p>
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" width="100">
                @endif
            </li>
        @endforeach
    </ul>
@endsection
