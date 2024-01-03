<?php

use App\Http\Controllers\Auth\OtentikasiController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('login', [OtentikasiController::class, 'index'])->name('login');
Route::post('login', [OtentikasiController::class, 'login']);

Route::middleware('auth')->group(function () {

    Route::prefix('super-admin')->middleware('role:super_admin')->group(function () {
        Route::get('dashboard', [DashboardController::class,'super_admin'])->name('super_admin');
    });
    
    Route::prefix('admin-sekolah')->middleware('role:admin_sekolah')->group(function () {
        Route::get('dashboard', [DashboardController::class,'admin_sekolah'])->name('admin_sekolah');
    });
    

    Route::get('logout', [OtentikasiController::class, 'logout'])->name('logout');
});
