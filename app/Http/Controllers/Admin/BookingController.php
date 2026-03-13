<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookingController extends Controller
{
     public function index()
    {
        // Many packages
        $bookings = Booking::orderBy('created_at','desc')
            ->latest()
            ->paginate(10);

        return view('admin.bookings.index', compact('bookings'));
    }
    public function show($id)
{
    $booking = Booking::findOrFail($id);

    return view('admin.bookings.view', compact('booking'));
}


 

   
}