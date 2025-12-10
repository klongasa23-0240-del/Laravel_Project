@extends('layout.app')

@section('content')
<div class="max-w-md mx-auto px-6 pt-6">
    <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm">
        <h1 class="text-2xl font-semibold text-gray-900 mb-2">Sign In</h1>
        <p class="text-sm text-gray-600 mb-4">Welcome back! Log in to continue.</p>

        @if ($errors->any())
            <div class="mb-4 p-3 bg-rose\-100 border border-rose-300 text-sm text-rose-700 rounded">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        @if (session('success'))
            <div class="mb-4 p-3 bg-green-100 border border-green-300 text-sm text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('login.perform') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm text-gray-700 mb-1">Email</label>
                <input type="email" name="email" required class="w-full px-3 py-2 bg-white border border-gray-300 rounded-lg 
           text-gray-900 placeholder-gray-500 caret-red-600
           focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm text-gray-700 mb-1">Password</label>
                <input type="password" name="password" required class="w-full px-3 py-2 bg-white border border-gray-300 rounded-lg 
           text-gray-900 placeholder-gray-500 caret-red-600
           focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="flex justify-end">
                <a href="{{ route('password.request') }}" class="text-sm text-purple-600 hover:underline">
                    Forgot password?
                </a>
            </div>


            <button type="submit" class="w-full py-2 bg-purple-600 hover:bg-purple-700 text-white font-semibold rounded-lg">Login</button>
        </form>

        <p class="text-sm text-gray-600 mt-4">
            Don't have an account?
            <a href="{{ route('register.form') }}" class="text-purple-600 hover:underline">Register</a>
        </p>
    </div>
</div>
@endsection
