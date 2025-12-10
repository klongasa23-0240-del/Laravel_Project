<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;

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

    // Forgot password route
    Route::get('/forgot-password', function () {
        return view('authentication.forgot-password');
    })->name('password.request');

    // Forgot password: send reset link email
    Route::post('/forgot-password', function (Request $request) {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    })->name('password.email');

    // Reset password form (from email link)
    Route::get('/reset-password/{token}', function (string $token) {
        return view('authentication.reset-password', ['token' => $token]);
    })->name('password.reset');

    // Handle new password submit
    Route::post('/reset-password', function (Request $request) {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('success', __($status))
            : back()->withErrors(['email' => __($status)]);
    })->name('password.update');

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
