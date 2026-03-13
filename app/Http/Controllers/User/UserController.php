<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Package;

class UserController extends Controller
{
    /**
     * Display the user landing page
     */
    public function index(): View
    {
        $packages = Package::where('status', 1)
            ->orderBy('order')
            ->get();

        return view('user.landing', compact('packages'));
    }

  
    public function thankyou()
    {
        return view('user.thankyou');
    }
     public function paymentFailed()
    {
        return view('user.payment-failed');
    }
}
