<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminPlansController;
use App\Http\Controllers\admin\LuckyDrawController;
use App\Http\Controllers\admin\TaskController;
use App\Http\Controllers\admin\UserMangementController;
use Illuminate\Support\Facades\Route;

Route::name('Admin.')->prefix('Admin')->middleware('auth', 'admin')->group(function () {
    Route::get('/Dashboard', [AdminDashboardController::class, 'index'])->name('Dashboard');
    Route::get('/All/Users', [AdminDashboardController::class, 'allUsers'])->name('All.Users');
    Route::get('/Pending/Users', [AdminDashboardController::class, 'pendingUsers'])->name('Pending.Users');
    Route::get('/Approved/Users', [AdminDashboardController::class, 'approvedUsers'])->name('Approved.Users');
    Route::get('/Recjected/Users', [AdminDashboardController::class, 'rejectedUsers'])->name('Rejected.Users');
    // Users Status
    Route::get('Make/User/Approved', [UserMangementController::class, 'approveUser'])->name('Make.User.Approved');
    Route::get('Make/User/Rejected', [UserMangementController::class, 'rejectUser'])->name('Make.User.Rejected');
    Route::get('Make/User/Pending', [UserMangementController::class, 'pendingUser'])->name('Make.User.Pending');
    // Plan
    Route::get('Add/Plan', [AdminPlansController::class, 'add'])->name('Add.Plan');
    Route::post('Store/Plan', [AdminPlansController::class, 'store'])->name('Store.Plan');
    Route::get('All/Plan', [AdminPlansController::class, 'all'])->name('All.Plan');
    // Add Task
    Route::get('Add/Task', [TaskController::class, 'addTask'])->name('Add.Task');
    Route::post('Store/Task', [TaskController::class, 'storeTask'])->name('Store.Task');
    Route::get('All/Task', [TaskController::class, 'allTask'])->name('All.Task');
    // Add Product into the LuckyDraw
    Route::get('Add/LuckyDraw', [LuckyDrawController::class, 'luckyDraw'])->name('Add.Lucky.Product');
    Route::post('Store/LuckyDraw', [LuckyDrawController::class, 'storeLuckyDraw'])->name('Store.Lucky.Product');
    Route::get('All/LuckyDraw/Products', [LuckyDrawController::class, 'allLuckyProducts'])->name('All.Lucky.Product');
    Route::get('Add/LuckyDraw/Winner', [LuckyDrawController::class, 'addWinner'])->name('Add.Winner');
    Route::post('Store/LuckyDraw/Winner', [LuckyDrawController::class, 'storeWinner'])->name('Store.Lucky.Draw.Winner');
});