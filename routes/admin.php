<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CylinderController;
use App\Http\Controllers\Admin\OriginController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/Admin-dashboard', action: function () {
    return view('Admin.dashboard');
})->middleware(['auth', 'verified'])->name('home');

// Client Section
Route::get('/Admin-Add-Client', [ClientController::class, 'index'])->middleware(['auth', 'verified'])
        ->name('add.client');
Route::get('/Admin-all-Client', [ClientController::class, 'table'])->middleware(['auth', 'verified'])
        ->name('all.client');
Route::post('/Admin-Save-Client', [ClientController::class, 'save'])->middleware(['auth', 'verified'])
        ->name('save.client');
Route::get('/Admin-Delete-Client/{id}', [ClientController::class, 'delete'])->name('user.del');
// Cylinder Manufacture
Route::get('/Admin-Add-Cylinder', [CylinderController::class, 'index'])->middleware(['auth', 'verified'])
        ->name('add.cylinder-manu');
Route::get('/Admin-All-Cylinder', [CylinderController::class, 'table'])->middleware(['auth', 'verified'])
        ->name('all.cylinder-manu');
// save.cylinder
Route::post('/Admin-Save-Cylinder', [CylinderController::class, 'save'])->middleware(['auth', 'verified'])
        ->name('save.cylinder');
Route::get('/Admin-Delete-Cylinder/{id}', [CylinderController::class, 'delete'])->name('cylinder.del');        

// Cylinder Origin
Route::get('/Admin-Add-Cylinder-Origin', [OriginController::class, 'index'])->middleware(['auth', 'verified'])
        ->name('add.cylinder-origin');
Route::get('/Admin-All-Cylinder-Origin', [OriginController::class, 'table'])->middleware(['auth', 'verified'])
        ->name('all.cylinder-origin');
Route::post('/Admin-Save-Origin', [OriginController::class, 'save'])->middleware(['auth', 'verified'])
        ->name('save.origin');
Route::get('/Admin-Delete-Origin/{id}', [OriginController::class, 'delete'])->name('origin.del');    
// Cylinder Report
Route::get('/Admin-Add-Cylinder-Report', [ReportController::class, 'index'])->middleware(['auth', 'verified'])
        ->name('add.report');
Route::get('/Admin-All-Cylinder-Report', [ReportController::class, 'table'])->middleware(['auth', 'verified'])
        ->name('all.report');
Route::post('/Admin-Save-Report', [ReportController::class, 'save'])->middleware(['auth', 'verified'])
        ->name('save.report');


Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');