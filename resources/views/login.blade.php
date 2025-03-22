@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gradient-to-r from-blue-100 to-blue-300">
    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-2xl border-t-8 border-blue-500">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-6 tracking-tight">Login to Your Account</h2>

        <!-- Start Form -->
        <form action="{{ url('/login') }}" method="POST" class="space-y-8">
            @csrf

            <div class="flex flex-col gap-4">
                <!-- Email Field -->
                <div>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required class="w-full p-4 text-lg border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter your email">
                </div>

                <!-- Password Field -->
                <div>
                    <input type="password" name="password" id="password" required class="w-full p-4 text-lg border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter your password">
                </div>
            </div>

            <!-- Submit Button -->
            <div class="mt-5">
                <button type="submit" class="w-full py-4 text-lg font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-300 ease-in-out">
                    Login
                </button>
            </div>
        </form>

        <!-- Display Errors -->
        @if ($errors->any())
        <div class="mb-4">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                <li class="mt-4 text-red-500" style="color: #f87171 !important;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Register Link -->
        <p class="text-center mt-4">Don't have an account?
            <a href="{{ url('/') }}" class="text-blue-500 hover:underline">Register here</a>
        </p>
    </div>
</div>
@endsection
