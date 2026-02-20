@extends('layouts.user')

@section('title', 'Home')

@section('content')
<section class="text-center">
    <h2 class="text-4xl font-bold mb-6 colorChange">Welcome to Poovar Boating Club</h2>
    <p class="text-lg text-[#706f6c] dark:text-[#A1A09A] mb-8 max-w-2xl mx-auto">
        Experience the joy of boating at our exclusive club. Explore memberships, book your adventure, and connect with fellow boating enthusiasts.
    </p>
    <div class="flex gap-4 justify-center">
        <a href="#" class="px-8 py-3 border border-[#19140035] dark:border-[#3E3E3A] rounded-sm hover:border-black dark:hover:border-white">Learn More</a>
    </div>
</section>

<section class="grid md:grid-cols-3 gap-8 mt-20">
    <div class="border border-[#e3e3e0] dark:border-[#3E3E3A] p-8 rounded-lg">
        <h3 class="text-xl font-bold mb-4">🚤 Fleet</h3>
        <p class="text-[#706f6c] dark:text-[#A1A09A]">Browse our modern collection of boats available for rent.</p>
    </div>
    <div class="border border-[#e3e3e0] dark:border-[#3E3E3A] p-8 rounded-lg">
        <h3 class="text-xl font-bold mb-4">👥 Members</h3>
        <p class="text-[#706f6c] dark:text-[#A1A09A]">Join our exclusive community of boating enthusiasts.</p>
    </div>
    <div class="border border-[#e3e3e0] dark:border-[#3E3E3A] p-8 rounded-lg">
        <h3 class="text-xl font-bold mb-4">📅 Events</h3>
        <p class="text-[#706f6c] dark:text-[#A1A09A]">Participate in seasonal regattas and social gatherings.</p>
    </div>
</section>
@endsection