<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - Admin Panel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100">

<div class="min-h-screen flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-slate-900 text-white fixed inset-y-0 left-0">

        <!-- Logo -->
        <div class="p-5 border-b border-white/10">
            <h2 class="text-xl font-bold">Admin Panel</h2>
        </div>

        <!-- Menu -->
        <nav class="p-4 space-y-2">

            <!-- Packages -->
            <a href=""
               class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-700 transition">

                <i class="material-icons-round">inventory_2</i>
                <span>Packages</span>
            </a>

            <!-- Booking -->
            <a href=""
               class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-700 transition">

                <i class="material-icons-round">event</i>
                <span>Bookings</span>
            </a>

        </nav>


        <!-- Logout -->
        <div class="absolute bottom-0 w-full p-4 border-t border-white/10">

            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf

                <button
                    class="w-full flex items-center gap-3 px-4 py-2 text-red-400 hover:bg-red-500/10 rounded-lg transition">

                    <i class="material-icons-round">logout</i>
                    Logout
                </button>
            </form>

        </div>

    </aside>


    <!-- Main Content -->
    <main class="flex-1 ml-64 p-6">

        <!-- Top Bar -->
        <!-- <div class="flex justify-between items-center mb-6">

            <h1 class="text-2xl font-bold">@yield('title')</h1>

            <div class="flex items-center gap-3 text-gray-600">

                <i class="material-icons-round">person</i>
                {{ auth()->user()->name ?? 'Admin' }}

            </div>
        </div> -->


        <!-- Page Content -->
        <div class="bg-white p-6 rounded-lg shadow">

            @yield('content')

        </div>

    </main>

</div>
 @stack('scripts')

</body>

</html>