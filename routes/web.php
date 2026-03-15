<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\RecaptchaController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\PackageController;
use App\Http\Controllers\User\PaymentController;
use App\Http\Controllers\User\BookingController;
use App\Http\Controllers\Admin\AdminController;


// User Routes (Public/Not authenticated)
Route::get('/', [UserController::class, 'index'])->name('user.index');
//Package details route
Route::get('/package-details/{id}', [PackageController::class, 'show'])->name('user.package.detail');
//Booking route
Route::post('/booking/store', [BookingController::class, 'store'])->name('user.booking.store');
//Payment route
Route::get('/payment/{id}', [PaymentController::class, 'pay'])->name('payment.pay');
Route::get('/payment-success', [PaymentController::class, 'success'])->name('payment.success');
// thankyou page 
Route::get('/thankyou', [UserController::class, 'thankyou'])->name('thankyou');
//payment failed page
Route::get('/payment-failed', [UserController::class, 'paymentFailed'])->name('payment.failed');

//Recapche
Route::post('/verify-recaptcha', [RecaptchaController::class, 'verify']);

// Admin Routes (Password authenticated)
Route::prefix('admin')->name('admin.')->group(function () {
    // Login route (public)
    Route::get('/', [AdminController::class, 'login'])->name('login');
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/authenticate', [AdminController::class, 'authenticate'])->name('authenticate');

    // Protected admin routes
    Route::middleware('admin.authenticated')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
        // package
        Route::resource('packages', App\Http\Controllers\Admin\PackageController::class);
        //booking
        Route::resource('bookings', App\Http\Controllers\Admin\BookingController::class);
    });

});
