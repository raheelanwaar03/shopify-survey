<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminPlansController;
use App\Http\Controllers\admin\LuckyDrawController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\TaskController;
use App\Http\Controllers\admin\UserMangementController;
use App\Http\Controllers\admin\WithdrawController;
use Illuminate\Support\Facades\Route;

Route::name('Admin.')->prefix('Admin')->middleware('auth', 'admin')->group(function () {
    Route::get('/Dashboard', [AdminDashboardController::class, 'index'])->name('Dashboard');
    Route::get('/All/Users', [AdminDashboardController::class, 'allUsers'])->name('All.Users');
    Route::get('/Pending/Users', [AdminDashboardController::class, 'pendingUsers'])->name('Pending.Users');
    Route::get('/Approved/Users', [AdminDashboardController::class, 'approvedUsers'])->name('Approved.Users');
    Route::get('/Recjected/Users', [AdminDashboardController::class, 'rejectedUsers'])->name('Rejected.Users');
    Route::get('/Edit/User/{id}', [AdminDashboardController::class, 'editUser'])->name('Edit.User');
    Route::post('/Update/User/{id}', [AdminDashboardController::class, 'updateUser'])->name('Update.User');
    Route::post('/Update/User/Password/{id}', [AdminDashboardController::class, 'updatePassword'])->name('Update.Password');
    Route::post('/Update/User/Plan/{id}', [AdminDashboardController::class, 'updateUserPlan'])->name('Update.User.Plan');
    // Users Status
    Route::get('Make/User/Approved', [UserMangementController::class, 'approveUser'])->name('Make.User.Approved');
    Route::get('Make/User/Rejected', [UserMangementController::class, 'rejectUser'])->name('Make.User.Rejected');
    Route::get('Make/User/Pending', [UserMangementController::class, 'pendingUser'])->name('Make.User.Pending');
    // Plan
    Route::get('Add/Plan', [AdminPlansController::class, 'add'])->name('Add.Plan');
    Route::post('Store/Plan', [AdminPlansController::class, 'store'])->name('Store.Plan');
    Route::get('All/Plan', [AdminPlansController::class, 'all'])->name('All.Plan');
    Route::get('Delete/Plan/{id}', [AdminPlansController::class, 'deletePlan'])->name('Delete.Plan');
    Route::get('Edit/Plan/{id}', [AdminPlansController::class, 'editPlan'])->name('Edit.Plan');
    Route::post('Update/Plan/{id}', [AdminPlansController::class, 'updatePlan'])->name('Update.Plan');
    // Add Task
    Route::get('Add/Task', [TaskController::class, 'addTask'])->name('Add.Task');
    Route::post('Store/Task', [TaskController::class, 'storeTask'])->name('Store.Task');
    Route::get('All/Task', [TaskController::class, 'allTask'])->name('All.Task');
    Route::get('Delete/Task/{id}', [TaskController::class, 'deleteTask'])->name('Delete.Task');
    // Add Product into the LuckyDraw
    Route::get('Add/LuckyDraw', [LuckyDrawController::class, 'luckyDraw'])->name('Add.Lucky.Product');
    Route::post('Store/LuckyDraw', [LuckyDrawController::class, 'storeLuckyDraw'])->name('Store.Lucky.Product');
    Route::get('All/LuckyDraw/Products', [LuckyDrawController::class, 'allLuckyProducts'])->name('All.Lucky.Product');
    Route::get('Delete/LuckyDraw/Products/{id}', [LuckyDrawController::class, 'deleteProducts'])->name('Delete.Lucky.Product');
    Route::get('Add/LuckyDraw/Winner', [LuckyDrawController::class, 'addWinner'])->name('Add.Winner');
    Route::post('Store/LuckyDraw/Winner', [LuckyDrawController::class, 'storeWinner'])->name('Store.Lucky.Draw.Winner');
    Route::get('Delete/Winner/{id}', [LuckyDrawController::class, 'deleteWinner'])->name('Delete.Winner');
    // settings
    Route::get('Edit/Verification/Text', [SettingController::class, 'verificationText'])->name('Edit.Text');
    Route::post('Update/Verification/Text/{id}', [SettingController::class, 'updateText'])->name('Update.Text');
    Route::get('Edit/Wallet', [SettingController::class, 'editWallet'])->name('Edit.Wallet');
    Route::post('Update/Wallet/{id}', [SettingController::class, 'updateWallet'])->name('update.Wallet');
    Route::get('Edit/Setting', [SettingController::class, 'editSetting'])->name('Edit.Setting');
    Route::post('Update/Setting/{id}', [SettingController::class, 'updateSetting'])->name('Update.Setting');
    Route::get('Edit/Contact', [SettingController::class, 'editContact'])->name('Edit.Contact');
    Route::post('Update/Contact/{id}', [SettingController::class, 'updateContact'])->name('Update.Contact');
    Route::get('Edit/Level', [SettingController::class, 'editLevel'])->name('Edit.Level');
    Route::post('Update/Level/{id}', [SettingController::class, 'updateLevel'])->name('Update.Level');
    // withdraw
    Route::get('Pending/Withdraw', [WithdrawController::class, 'pendingWithdraw'])->name('Pending.Withdraw');
    Route::get('Approved/Withdraw', [WithdrawController::class, 'approvedWithdraw'])->name('Approved.Withdraw');
    Route::get('Rejected/Withdraw', [WithdrawController::class, 'rejectedWithdraw'])->name('Rejected.Withdraw');
    Route::get('Make/Withdraw/Approve/{id}', [WithdrawController::class, 'makeApprove'])->name('Make.Withdraw.Approve');
    Route::get('Make/Withdraw/Rejected/{id}', [WithdrawController::class, 'makeRejected'])->name('Make.Withdraw.Rejected');
});
