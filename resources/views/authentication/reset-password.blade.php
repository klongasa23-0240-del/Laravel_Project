@extends('layout.app')

@section('content')
<div class="max-w-md mx-auto px-6 pt-6">
    <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm">
        <h1 class="text-2xl font-semibold text-gray-900 mb-2">Reset Password</h1>

        @if ($errors->any())
            <div class="mb-4 p-3 bg-rose-100 border border-rose-300 text-sm text-rose-700 rounded">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('password.update') }}" class="space-y-4">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div>
                <label class="block text-sm text-gray-700 mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required
                       class="w-full px-3 py-2 bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm text-gray-700 mb-1">New Password</label>
                <input type="password" name="password" required
                       class="w-full px-3 py-2 bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm text-gray-700 mb-1">Confirm Password</label>
                <input type="password" name="password_confirmation" required
                       class="w-full px-3 py-2 bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit"
                    class="w-full py-2 bg-purple-600 hover:bg-purple-700 text-white font-semibold rounded-lg">
                Reset Password
            </button>
        </form>
    </div>
</div>
@endsection
