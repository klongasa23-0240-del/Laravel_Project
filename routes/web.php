<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
})->name('home');

// Register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'performRegister'])->name('register.perform');

// Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'performLogin'])->name('login.perform');

// Logout (POST)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Optional index view
Route::view('/index', 'index');
