@extends('layouts.admin')

@section('title', 'Booking Management')

@section('content')

<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg min-h-[70vh]">

    <div class="p-6 border-b border-gray-200">

        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold">Booking Management</h2>


        </div>





        <!-- Table -->


        <table class="min-w-full divide-y divide-gray-200">

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
                        {{ \Carbon\Carbon::parse($booking->booking_date)->format('d/m/Y') }}
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


        <div class="mt-4">
            {!! $bookings->links() !!}
        </div>


        <!-- Pagination -->
        <div class="mt-4">

            {!! $bookings->links() !!}

        </div>
        <div class="flex justify-between">
            <a href="{{ route('admin.dashboard') }}" class="text-blue-500">Back</a>

        </div>

    </div>


</div>


@endsection