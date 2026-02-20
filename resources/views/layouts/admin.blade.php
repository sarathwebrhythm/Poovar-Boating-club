<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Poovar Boating Club Admin</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC]">
    <!-- Admin Navigation -->
    <nav class="bg-black text-white sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="{{ route('admin.dashboard') }}" class="text-2xl font-bold hover:opacity-80 transition">
                    Admin Dashboard
                </a>
                <form method="POST" action="{{ route('admin.logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="px-5 py-2 border border-white hover:bg-white hover:text-black rounded-sm text-sm transition">
                        Logout
                    </button>
                </form>
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
            <p class="text-center text-[#706f6c] dark:text-[#A1A09A]">&copy; 2026 Poovar Boating Club Admin. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
