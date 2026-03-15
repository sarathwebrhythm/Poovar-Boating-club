@extends('layouts.admin')

@section('title','Booking Details')

@section('content')

<div class="bg-white shadow rounded p-6">

<h2 class="text-xl font-bold mb-6">Booking Details</h2>

<div class=" border rounded grid grid-cols-2 gap-8">

    <!-- LEFT SIDE : PACKAGE DETAILS -->
    <div class=" p-4">
        <h3 class="text-lg font-semibold mb-4 text-gray-700">Package Details</h3>

        <div class="space-y-2">

            <div>
                <strong>Package Name:</strong> {{ $booking->package->name }}
            </div>

            <div>
                <strong>Booking Date:</strong>
                {{ date('d/m/Y', strtotime($booking->booking_date)) }}
            </div>

            <div>
                <strong>Duration:</strong> {{ $booking->duration }} minutes
            </div>

            <div>
                <strong>Number Of People:</strong> {{ $booking->people }}
            </div>

            <div>
                <strong>Boats Required:</strong> {{ $booking->boats_required }}
            </div>

            <div>
                <strong>Price:</strong> ₹{{ $booking->price }}
            </div>

        </div>
    </div>


    <!-- RIGHT SIDE : USER DETAILS -->
    <div class=" p-4">
        <h3 class="text-lg font-semibold mb-4 text-gray-700">Customer Details</h3>

        <div class="space-y-2">

            <div>
                <strong>Name:</strong> {{ $booking->name }}
            </div>

            <div>
                <strong>Phone:</strong> {{ $booking->phone }}
            </div>

            <div>
                <strong>Email:</strong> {{ $booking->email }}
            </div>

            <div>
                <strong>Booking ID:</strong> {{ $booking->transaction_id }}
            </div>
            <div>
                <strong>PhonePe Ref Id:</strong> {{ $booking->phonepe_ref}}
            </div>
            <div>
                <strong>Created At:</strong> {{ $booking->created_at }}
            </div>

        </div>
    </div>

</div>

<div class="mt-6">
<a href="{{ route('admin.bookings.index') }}" class="text-blue-500">Back</a>
</div>

</div>

@endsection