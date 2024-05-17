<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\BuyPlan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function allUsers()
    {
        $users = User::has('trxIds')
            ->whereHas('trxIds', function ($query) {
                $query->whereNotNull('trx')->whereNotNull('img')
                    ->whereNotNull('user_name')->whereNotNull('account');
            })->get();

        return view('admin.user.allUsers', compact('users'));
    }

    public function todayUsers()
    {
        $users = User::has('trxIds')
            ->whereHas('trxIds', function ($query) {
                $query->whereNotNull('trx')->whereNotNull('img')
                    ->whereNotNull('user_name')->whereNotNull('account');
            })->whereDate('creat_at', Carbon::today())->get();

        return view('admin.user.today', compact('users'));
    }

    public function pendingUsers()
    {
        $users = User::where('status', 'pending')->has('trxIds')
            ->whereHas('trxIds', function ($query) {
                $query->whereNotNull('trx')->whereNotNull('img')
                    ->whereNotNull('user_name')->whereNotNull('account');
            })->get();

        return view('admin.user.pending', compact('users'));
    }

    public function approvedUsers()
    {
        $users = User::where('status', 'approved')->has('trxIds')
            ->whereHas('trxIds', function ($query) {
                $query->whereNotNull('trx')->whereNotNull('img')
                    ->whereNotNull('user_name')->whereNotNull('account');
            })->get();

        return view('admin.user.approved', compact('users'));
    }

    public function rejectedUsers()
    {
        $users = User::where('status', 'rejected')->has('trxIds')
            ->whereHas('trxIds', function ($query) {
                $query->whereNotNull('trx')->whereNotNull('img')
                    ->whereNotNull('user_name')->whereNotNull('account');
            })->get();

        return view('admin.user.rejected', compact('users'));
    }

    public function editUser($id)
    {
        $user = User::with('trxIds')->find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function updateUserPlan(Request $request, $id)
    {
        $plan = BuyPlan::where('user_id', $request->user_id)->where('id', $id)->first();
        $plan->plan_name = $request->plan;
        $plan->save();
        return redirect()->back()->with('success', 'Plan changed');
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->balance = $request->balance;
        $user->level = $request->level;
        $user->save();
        return redirect()->back()->with('success', 'User Updated successfully');
    }

    public function updatePassword(Request $request, $id)
    {
        $user = User::find($id);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('success', 'User Password Changed');
    }
}
