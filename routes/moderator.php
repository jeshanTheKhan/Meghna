<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Moderator\ClientController;
use App\Http\Controllers\Moderator\CylinderController;
use App\Http\Controllers\Moderator\OriginController;
use App\Http\Controllers\Moderator\ReportController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/Moderator-dashboard', action: function () {
    return view('Moderator.dashboard');
})->middleware(['auth', 'verified'])->name('home');

// Client Section
Route::get('/Moderator-Add-Client', [ClientController::class, 'index'])->middleware(['auth', 'verified'])
        ->name('add.client');
Route::get('/Moderator-all-Client', [ClientController::class, 'table'])->middleware(['auth', 'verified'])
        ->name('all.client');
Route::post('/Moderator-Save-Client', [ClientController::class, 'save'])->middleware(['auth', 'verified'])
        ->name('save.client');


// Cylinder Manufacture
Route::get('/Moderator-Add-Cylinder', [CylinderController::class, 'index'])->middleware(['auth', 'verified'])
        ->name('add.cylinder-manu');
Route::get('/Moderator-All-Cylinder', [CylinderController::class, 'table'])->middleware(['auth', 'verified'])
        ->name('all.cylinder-manu');
// save.cylinder
Route::post('/Moderator-Save-Cylinder', [CylinderController::class, 'save'])->middleware(['auth', 'verified'])
        ->name('save.cylinder');

// Cylinder Origin
Route::get('/Moderator-Add-Cylinder-Origin', [OriginController::class, 'index'])->middleware(['auth', 'verified'])
        ->name('add.cylinder-origin');
Route::get('/Moderator-All-Cylinder-Origin', [OriginController::class, 'table'])->middleware(['auth', 'verified'])
        ->name('all.cylinder-origin');
        // save.origin
Route::post('/Moderator-Save-Origin', [OriginController::class, 'save'])->middleware(['auth', 'verified'])
        ->name('save.origin');
// Cylinder Report
Route::get('/Moderator-Add-Cylinder-Report', [ReportController::class, 'index'])->middleware(['auth', 'verified'])
        ->name('add.report');
Route::get('/Moderator-All-Cylinder-Report', [ReportController::class, 'table'])->middleware(['auth', 'verified'])
        ->name('all.report');
        // save.report
        Route::post('/Moderator-Save-Report', [ReportController::class, 'save'])->middleware(['auth', 'verified'])
        ->name('save.report');
        Route::get('/Moderator-view-Report/{id}', [ReportController::class, 'view'])->name('report.view');

Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');