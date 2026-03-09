@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="space-y-8">

    <!-- Page Heading -->
    <div>
        <h1 class="text-3xl font-bold text-gray-800">Admin Dashboard</h1>
        <p class="text-gray-500 mt-1">Welcome back! Here’s what’s happening today.</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid md:grid-cols-4 gap-6">

        <!-- Total Packages -->
        <div class="bg-blue-500 text-white p-6 rounded-xl shadow-lg">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-sm opacity-80">Total Packages</p>
                    <h2 class="text-3xl font-bold mt-2">12</h2>
                </div>
                <i class="material-icons-round text-4xl opacity-80">inventory_2</i>
            </div>
        </div>

        <!-- Total Bookings -->
        <div class="bg-green-500 text-white p-6 rounded-xl shadow-lg">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-sm opacity-80">Total Bookings</p>
                    <h2 class="text-3xl font-bold mt-2">45</h2>
                </div>
                <i class="material-icons-round text-4xl opacity-80">event</i>
            </div>
        </div>

        <!-- Active Users -->
        <div class="bg-purple-500 text-white p-6 rounded-xl shadow-lg">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-sm opacity-80">Active Users</p>
                    <h2 class="text-3xl font-bold mt-2">28</h2>
                </div>
                <i class="material-icons-round text-4xl opacity-80">group</i>
            </div>
        </div>

        <!-- Revenue -->
        <div class="bg-orange-500 text-white p-6 rounded-xl shadow-lg">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-sm opacity-80">Revenue</p>
                    <h2 class="text-3xl font-bold mt-2">₹18,500</h2>
                </div>
                <i class="material-icons-round text-4xl opacity-80">payments</i>
            </div>
        </div>

    </div>

    <!-- Quick Actions -->
    <div class="bg-white p-6 rounded-xl shadow">
        <h2 class="text-xl font-semibold mb-4">Quick Actions</h2>

        <div class="flex flex-wrap gap-4">
            <a href="{{ route('admin.packages.index') }}"
               class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                Manage Packages
            </a>

            <a href="#"
               class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition">
                View Bookings
            </a>
        </div>
    </div>

   

</div>

@endsection