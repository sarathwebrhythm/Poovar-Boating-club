@extends('layouts.admin')

@section('title', 'Booking Management')

@section('content')

<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg min-h-[70vh]">

    <div class="p-6 border-b border-gray-200">

        <div class="flex justify-between items-center mb-6">

            <h2 class="text-xl font-bold">Booking Management</h2>

            <form method="GET" action="{{ route('admin.bookings.index') }}" class="relative w-64">

                <!-- Input -->
                <input type="search"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Search..."
                    class="w-full h-10 pl-3 pr-12 border border-gray-300 rounded-md text-sm text-gray-700 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">

                <!-- Button with SVG -->
                <button type="submit"
                    class="absolute right-0 top-1/2 -translate-y-1/2 h-10 px-3 bg-blue-600 hover:bg-blue-700 text-white rounded-r-md flex items-center justify-center">

                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-width="2"
                            d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                    </svg>

                </button>

            </form>

        </div>



        <!-- Table -->


        <table id="bookingTable" class="min-w-full divide-y divide-gray-200">

            <thead class="bg-gray-50">
                <tr>

                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>

                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>

                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Phone</th>

                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>

                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Booking Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Action</th>


                </tr>
            </thead>


            <tbody class="bg-white divide-y divide-gray-200">

                @foreach($bookings as $i => $booking)

                <tr>

                    <td class="px-6 py-4">
                        {{ $bookings->firstItem() + $i }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $booking->name }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $booking->phone }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $booking->email }}
                    </td>

                    <td class="px-6 py-4">
                        {{ date('d/m/Y', strtotime($booking->booking_date)) }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('admin.bookings.show', $booking->id) }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm">
                            View
                        </a>
                    </td>


                </tr>

                @endforeach

            </tbody>

        </table>




        <!-- Pagination -->
        <div class="mt-4">

            {!! $bookings->appends(request()->query())->links() !!}

        </div>
        <div class="flex justify-between">
            <a href="{{ route('admin.dashboard') }}" class="text-blue-500">Back</a>

        </div>

    </div>


</div>

@push('scripts')



@endpush

@endsection