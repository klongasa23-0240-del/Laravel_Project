<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectPublicController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;

//
// Public landing page (controller-powered)
//
Route::get('/', [ProjectPublicController::class, 'index'])->name('home');

//
// Guest-only routes (login + register)
//
Route::middleware('guest')->group(function () {

    // Register
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
    Route::post('/register', [AuthController::class, 'performRegister'])->name('register.perform');

    // Login  ← name must be 'login' so middleware can redirect here
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'performLogin'])->name('login.perform');

});

//
// Authenticated routes (dashboard + admin + logout)
//
Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Admin project CRUD
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('projects', AdminProjectController::class);
    });

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});

//
// Optional shortcut (can remove if not used)
//
Route::view('/index', 'index');
