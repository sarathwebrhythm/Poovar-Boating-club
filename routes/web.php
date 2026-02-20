<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;

// User Routes (Public/Not authenticated)
Route::get('/', [UserController::class, 'index'])->name('user.index');

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
});
