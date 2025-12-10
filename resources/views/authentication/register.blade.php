@extends('layout.app')

@section('content')
<div class="max-w-md mx-auto px-6 pt-6">
    <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm">
        <h1 class="text-2xl font-semibold text-gray-900 mb-2">Create Account</h1>
        <p class="text-sm text-gray-600 mb-4">Join to manage your portfolio projects.</p>

        @if ($errors->any())
            <div class="mb-4 p-3 rounded bg-rose-100 border border-rose-300 text-sm text-rose-700">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('register.perform') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm text-gray-700 mb-1">Name</label>
                <input type="text" name="name" required class="w-full px-3 py-2 bg-white border border-gray-300 rounded-lg 
           text-gray-900 placeholder-gray-500 caret-red-600
           focus:ring-2 focus:ring-blue-500">
            </div>

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

            <div>
                <label class="block text-sm text-gray-700 mb-1">Confirm Password</label>
                <input type="password" name="password_confirmation" required class="w-full px-3 py-2 bg-white border border-gray-300 rounded-lg 
           text-gray-900 placeholder-gray-500 caret-red-600
           focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit" class="w-full py-2 bg-purple-600 hover:bg-purple-700 text-white font-semibold rounded-lg">Create Account</button>
        </form>

        <p class="text-sm text-gray-600 mt-4">
            Already have an account?
            <a href="{{ route('login') }}" class="text-purple-600 hover:underline">Sign in</a>
        </p>
    </div>
</div>
@endsection