<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    /**
     * Display admin login page
     */
    public function login(): View
    {
        return view('admin.login');
    }

    /**
     * Handle admin authentication
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'password' => 'required|string',
        ]);

        // Use a hardcoded password or from env for demo
        $adminPassword = config('app.admin_password', 'admin123');

        if ($credentials['password'] === $adminPassword) {
            session(['admin_authenticated' => true]);
            return redirect()->route('admin.dashboard')->with('success', 'Admin panel accessed successfully!');
        }

        return redirect()->back()->withErrors(['password' => 'Invalid password.']);
    }

    /**
     * Display admin dashboard
     */
    public function dashboard(): View
    {
        return view('admin.dashboard');
    }

    /**
     * Logout admin
     */
    public function logout(Request $request): RedirectResponse
    {
        $request->session()->forget('admin_authenticated');
        return redirect()->route('admin.login')->with('success', 'Logged out successfully!');
    }
}
