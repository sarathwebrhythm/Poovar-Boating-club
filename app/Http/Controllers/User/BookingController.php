<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\TemporaryBooking;

class BookingController extends Controller
{

    public function store(Request $request)
    {

        // Validate request
        $request->validate([
            'package_id' => 'required|exists:packages,id',
            'name' => 'required|string|max:100',
            'phone' => 'required|digits:10',
            'email' => 'nullable|email',
             'booking_date' => 'required|date|after_or_equal:today',
            'people' => 'required|integer|min:1',
            'duration' => 'nullable|integer'
        ]);


        // Get package
        $package = Package::findOrFail($request->package_id);


        $people = $request->people;

        // Boat calculation (1 boat = 8 people)
        $boatsRequired = ceil($people / 8);


        // Price calculation
        if ($package->pricing_type === 'flexible') {

            $duration = $request->duration;

            $extraDuration = $duration - $package->base_duration;

            $increments = $extraDuration / $package->increment_minutes;

            $durationPrice = $package->base_price + ($increments * $package->increment_price);

        } else {

            $duration = $package->duration;

            $durationPrice = $package->price;
        }


        // Final price
        $totalPrice = $boatsRequired * $durationPrice;


        // Store temporary booking
        $booking = TemporaryBooking::create([
            'package_id' => $package->id,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
             'booking_date' => $request->booking_date,
            'people' => $people,
            'duration' => $duration,
            'boats_required' => $boatsRequired,
            'price' => $totalPrice,
            'payment_status' => 'pending'
        ]);


        
       return redirect()->route('payment.pay', $booking->id);

    }
}