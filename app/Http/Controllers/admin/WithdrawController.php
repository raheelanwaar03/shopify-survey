<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\WithdrawSetting;
use App\Models\User;
use App\Models\user\Withdraw;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function pendingWithdraw()
    {
        $withdraw = Withdraw::where('status', 'pending')->get();
        return view('admin.withdraw.pending', compact('withdraw'));
    }

    public function rejectedWithdraw()
    {
        $withdraw = Withdraw::where('status', 'rejected')->get();
        return view('admin.withdraw.rejected', compact('withdraw'));
    }

    public function approvedWithdraw()
    {
        $withdraw = Withdraw::where('status', 'approved')->get();
        return view('admin.withdraw.approved', compact('withdraw'));
    }

    public function makeApprove($id)
    {
        $withdraw = Withdraw::find($id);
        $withdraw->status = 'approved';
        $withdraw->save();
        // withdrawable
        $setting = WithdrawSetting::where('status', 1)->first();
        $withdrawAble = $withdraw->amount / $setting->dollar_rate;

        $user = User::where('id', $withdraw->user_id)->first();
        $user->balance -= $withdrawAble;
        $user->save();
        return redirect()->back()->with('success', 'Withdraw Approved');
    }

    public function makeRejected($id)
    {
        $withdraw = Withdraw::find($id);
        $withdraw->status = 'rejected';
        $withdraw->save();
        return redirect()->back()->with('success', 'Withdraw Rejected');
    }
}
