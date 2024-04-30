<?php

use App\Http\Controllers\user\TeamMemberController;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\user\WithdrawController;
use Illuminate\Support\Facades\Route;

Route::name('User.')->prefix('User')->middleware('auth', 'user')->group(function () {
    Route::get('/Dashboard', [UserDashboardController::class, 'index'])->name('Dashboard');
    // Withdraw Requsts
    Route::get('Apply/Withdraw', [WithdrawController::class, 'apply'])->name('Apply.Withdraw');
    Route::post('Store/Withdraw', [WithdrawController::class, 'storeWithdraw'])->name('Store.Withdraw');
    Route::get('All/Withdraw', [WithdrawController::class, 'all'])->name('All.Withdraw');
    // Team routes
    Route::get('All/Member', [TeamMemberController::class, 'team'])->name('All.Members');
    // All Tasks
    Route::get('New/Tasks', [UserDashboardController::class, 'tasks'])->name('new.tasks');
    Route::get('Get/Tasks/Reward/{id}', [UserDashboardController::class, 'getReward'])->name('Get.task.Reward');
});
