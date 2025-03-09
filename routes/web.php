<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', action: function () {
    return view('auth.login');
});

Route::get('/User-dashboard',[UserController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/User-view-Report/{id}', [UserController::class, 'view'])->name('report.download');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
require __DIR__.'/auth.php';
