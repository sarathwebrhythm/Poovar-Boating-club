<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookingController extends Controller
{
    //  public function index()
    // {

    //     $bookings = Booking::orderBy('created_at','desc')
    //         ->latest()
    //         ->paginate(2);

    //     return view('admin.bookings.index', compact('bookings'));
    // }

    public function index(Request $request)
    {
        $search = $request->search;

        $bookings = Booking::when($search, function ($query) use ($search) {

            $query->where('name', 'like', "%$search%")
                ->orWhere('phone', 'like', "%$search%")
                ->orWhere('email', 'like', "%$search%");

            // If search looks like a date (dd/mm/yyyy)
            if (str_contains($search, '/')) {
                $date = \Carbon\Carbon::createFromFormat('d/m/Y', $search)->format('Y-m-d');
                $query->orWhereDate('booking_date', $date);
            }
        })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.bookings.index', compact('bookings'));
    }


    public function show($id)
    {
        $booking = Booking::findOrFail($id);

        return view('admin.bookings.view', compact('booking'));
    }
}
