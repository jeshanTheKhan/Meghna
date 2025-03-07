<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/Admin-dashboard', action: function () {
    return view('Admin.dashboard');
})->middleware(['auth', 'verified'])->name('home');


Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');