<?php

use App\Http\Controllers\admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;

Route::name('Admin.')->prefix('Admin')->middleware('auth','admin')->group(function () {
    Route::get('/Dashboard',[AdminDashboardController::class,'index'])->name('Dashboard');
});
