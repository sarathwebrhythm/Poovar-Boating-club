@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="mb-12">
    <h2 class="text-3xl font-bold mb-2">Welcome to Admin Panel</h2>
    <p class="text-[#706f6c] dark:text-[#A1A09A]">Manage your boating club operations</p>
</div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Users Management -->
            <div class="border border-[#e3e3e0] dark:border-[#3E3E3A] p-8 rounded-lg hover:border-black dark:hover:border-white transition">
                <div class="text-4xl mb-4">👥</div>
                <h3 class="text-xl font-bold mb-2">Member Management</h3>
                <p class="text-[#706f6c] dark:text-[#A1A09A] mb-4">Manage club members and their profiles.</p>
                <a href="#" class="inline-block px-5 py-2 bg-black text-white rounded-sm hover:bg-gray-800">Manage</a>
            </div>

            <!-- Boats Management -->
            <div class="border border-[#e3e3e0] dark:border-[#3E3E3A] p-8 rounded-lg hover:border-black dark:hover:border-white transition">
                <div class="text-4xl mb-4">🚤</div>
                <h3 class="text-xl font-bold mb-2">Fleet Management</h3>
                <p class="text-[#706f6c] dark:text-[#A1A09A] mb-4">Add, edit, and manage boats in your fleet.</p>
                <a href="#" class="inline-block px-5 py-2 bg-black text-white rounded-sm hover:bg-gray-800">Manage</a>
            </div>

            <!-- Bookings -->
            <div class="border border-[#e3e3e0] dark:border-[#3E3E3A] p-8 rounded-lg hover:border-black dark:hover:border-white transition">
                <div class="text-4xl mb-4">📅</div>
                <h3 class="text-xl font-bold mb-2">Booking Management</h3>
                <p class="text-[#706f6c] dark:text-[#A1A09A] mb-4">View and manage all boat reservations.</p>
                <a href="#" class="inline-block px-5 py-2 bg-black text-white rounded-sm hover:bg-gray-800">Manage</a>
            </div>

            <!-- Events Management -->
            <div class="border border-[#e3e3e0] dark:border-[#3E3E3A] p-8 rounded-lg hover:border-black dark:hover:border-white transition">
                <div class="text-4xl mb-4">🎉</div>
                <h3 class="text-xl font-bold mb-2">Events Management</h3>
                <p class="text-[#706f6c] dark:text-[#A1A09A] mb-4">Create and manage club events and regattas.</p>
                <a href="#" class="inline-block px-5 py-2 bg-black text-white rounded-sm hover:bg-gray-800">Manage</a>
            </div>

            <!-- Reports -->
            <div class="border border-[#e3e3e0] dark:border-[#3E3E3A] p-8 rounded-lg hover:border-black dark:hover:border-white transition">
                <div class="text-4xl mb-4">📊</div>
                <h3 class="text-xl font-bold mb-2">Reports & Analytics</h3>
                <p class="text-[#706f6c] dark:text-[#A1A09A] mb-4">View club statistics and generate reports.</p>
                <a href="#" class="inline-block px-5 py-2 bg-black text-white rounded-sm hover:bg-gray-800">View Reports</a>
            </div>

            <!-- Settings -->
            <div class="border border-[#e3e3e0] dark:border-[#3E3E3A] p-8 rounded-lg hover:border-black dark:hover:border-white transition">
                <div class="text-4xl mb-4">⚙️</div>
                <h3 class="text-xl font-bold mb-2">Settings</h3>
                <p class="text-[#706f6c] dark:text-[#A1A09A] mb-4">Configure club settings and preferences.</p>
                <a href="#" class="inline-block px-5 py-2 bg-black text-white rounded-sm hover:bg-gray-800">Settings</a>
            </div>
        </div>

        <!-- Quick Stats Section -->
        <section class="mt-16">
            <h3 class="text-2xl font-bold mb-8">Quick Stats</h3>
            <div class="grid md:grid-cols-4 gap-6">
                <div class="bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] p-6 rounded-lg">
                    <p class="text-[#706f6c] dark:text-[#A1A09A] text-sm mb-2">Total Members</p>
                    <p class="text-3xl font-bold">287</p>
                </div>
                <div class="bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] p-6 rounded-lg">
                    <p class="text-[#706f6c] dark:text-[#A1A09A] text-sm mb-2">Active Boats</p>
                    <p class="text-3xl font-bold">42</p>
                </div>
                <div class="bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] p-6 rounded-lg">
                    <p class="text-[#706f6c] dark:text-[#A1A09A] text-sm mb-2">Pending Bookings</p>
                    <p class="text-3xl font-bold">15</p>
                </div>
                <div class="bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] p-6 rounded-lg">
                    <p class="text-[#706f6c] dark:text-[#A1A09A] text-sm mb-2">Upcoming Events</p>
                    <p class="text-3xl font-bold">8</p>
                </div>
            </div>
        </section>
@endsection
