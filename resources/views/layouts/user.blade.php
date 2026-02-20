<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Poovar Boating Club</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC]">
    <!-- Navigation -->
    <nav class="bg-white dark:bg-[#161615] border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="{{ route('user.index') }}" class="text-2xl font-bold hover:opacity-80 transition">
                    Poovar Boating Club
                </a>
                <div class="space-x-4">
                    <a href="{{ route('user.index') }}" class="inline-block px-5 py-2 border border-[#19140035] hover:border-[#1915014a] rounded-sm text-sm">Home</a>
                    <a href="{{ route('admin.login') }}" class="inline-block px-5 py-2 bg-black text-white hover:bg-gray-800 rounded-sm text-sm">Admin</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white dark:bg-[#161615] border-t border-[#e3e3e0] dark:border-[#3E3E3A] mt-20 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-[#706f6c] dark:text-[#A1A09A]">&copy; 2026 Poovar Boating Club. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
