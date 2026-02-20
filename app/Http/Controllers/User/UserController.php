<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display the user landing page
     */
    public function index(): View
    {
        $test = "Hello from UserController!";
        return view('user.landing', compact('test'));
    }
}
