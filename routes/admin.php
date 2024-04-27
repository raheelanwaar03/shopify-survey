<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminPlansController;
use Illuminate\Support\Facades\Route;

Route::name('Admin.')->prefix('Admin')->middleware('auth','admin')->group(function () {
    Route::get('/Dashboard',[AdminDashboardController::class,'index'])->name('Dashboard');
    // Plan
    Route::get('Add/Plan',[AdminPlansController::class,'add'])->name('Add.Plan');
    Route::post('Store/Plan',[AdminPlansController::class,'store'])->name('Store.Plan');
    Route::get('All/Plan',[AdminPlansController::class,'all'])->name('All.Plan');
});
