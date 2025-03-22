@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gradient-to-r from-blue-100 to-blue-300">
        <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-2xl border-t-8 border-blue-500">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-6 tracking-tight">Create Your Account</h2>


            <form action="{{ url('/') }}" method="POST" class="space-y-8">
                @csrf
                <div class="space-y-6 flex flex-col gap-4">
                    <div>
                        <input type="text" name="name" value="{{ old('name') }}" required class="w-full p-4 text-lg border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400" id="name" placeholder="Enter your full name">
                    </div>

                    <div>
                        <input type="email" name="email" value="{{ old('email') }}" required class="w-full p-4 text-lg border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400" id="email" placeholder="Enter your email">
                    </div>

                    <div>
                        <input type="password" name="password" required class="w-full p-4 text-lg border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400" id="password" placeholder="Create a password">
                    </div>

                    <div>
                        <input type="password" name="password_confirmation" required class="w-full p-4 text-lg border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400" id="password_confirmation" placeholder="Confirm your password">
                    </div>
                </div>

                <div class="mt-5">
                    <button type="submit" class="w-full py-4 text-lg font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-300 ease-in-out">
                        Register
                    </button>
                </div>
            </form>       

            <!-- Display Validation Errors -->
            @if ($errors->any())
                <div class="mb-4">
                    <ul class="list-disc list-inside text-red-500">
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 mt-4">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <p class="text-center text-gray-600 mt-4">Already have an account? 
                <a href="{{ url('/login') }}" class="text-blue-500 hover:underline">Login here</a>
            </p>
        </div>
    </div>
@endsection
