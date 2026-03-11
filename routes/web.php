<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\PackageController;
use App\Http\Controllers\Admin\AdminController;

// User Routes (Public/Not authenticated)
Route::get('/', [UserController::class, 'index'])->name('user.index');
//Package details route
Route::get('/package-details/{id}', [PackageController::class, 'show'])->name('user.package.detail');
Route::get('/success', [UserController::class, 'paymentSuccess'])->name('success');

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
    });


     // package
    Route::resource('packages', App\Http\Controllers\Admin\PackageController::class);
   

   
});
