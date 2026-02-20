@extends('layouts.auth')

@section('title', 'Admin Login')

@section('content')
<div class="w-full max-w-md">
    <div class="bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] p-8 rounded-lg">
        <h1 class="text-3xl font-bold mb-2">Admin Panel</h1>
        <p class="text-[#706f6c] dark:text-[#A1A09A] mb-8">Enter your password to access the admin dashboard</p>

        @if ($errors->any())
            <div class="mb-6 p-4 bg-[#fff2f2] dark:bg-[#1D0002] border border-[#F53003] rounded text-[#F53003]">
                <p class="font-semibold">{{ $errors->first() }}</p>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.authenticate') }}">
            @csrf
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium mb-2">Admin Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    required 
                    autofocus
                    class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm bg-white dark:bg-[#0a0a0a] focus:outline-none focus:border-black dark:focus:border-white"
                    placeholder="Enter password"
                >
            </div>

            <button 
                type="submit" 
                class="w-full px-4 py-2 bg-black dark:bg-white text-white dark:text-black rounded-sm font-medium hover:bg-gray-800 dark:hover:bg-gray-200"
            >
                Sign In
            </button>
        </form>

        <hr class="my-6 border-[#e3e3e0] dark:border-[#3E3E3A]">

        <p class="text-center text-sm text-[#706f6c] dark:text-[#A1A09A]">
            Not an admin? <a href="{{ route('user.index') }}" class="text-[#F53003] hover:underline">Back to home</a>
        </p>
    </div>

    <p class="text-center text-xs text-[#706f6c] dark:text-[#A1A09A] mt-6">
        For demo purposes, the default password is: <code class="bg-gray-100 dark:bg-[#1D0002] px-2 py-1 rounded">admin123</code>
    </p>
</div>
@endsection
