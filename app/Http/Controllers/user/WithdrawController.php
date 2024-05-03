<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\WithdrawSetting;
use App\Models\user\Withdraw;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function apply()
    {
        $setting = WithdrawSetting::where('status', 1)->first();
        // withdrawable
        $withdrawAble = $setting->dollar_rate * auth()->user()->balance;

        return view('user.withdraw.apply', compact('setting', 'withdrawAble'));
    }

    public function all()
    {
        $withdraw = Withdraw::where('user_id', auth()->user()->id)->get();
        return view('user.withdraw.all', compact('withdraw'));
    }

    public function storeWithdraw(Request $request)
    {
        $setting = WithdrawSetting::where('status', 1)->first();
        // withdrawable
        $withdrawAble = $setting->dollar_rate * auth()->user()->balance;

        $request_amount = $request->amount;
        if ($withdrawAble == null) {
            return redirect()->route('User.Dashboard')->with('error', 'Empty Balance');
        }

        if ($withdrawAble < $request_amount) {
            return redirect()->back()->with('error', 'Less Balance');
        }

        $adminWidthraw = WithdrawSetting::where('status', '1')->first();
        $adminWidthrawMini = $adminWidthraw->min_amount;
        $adminWidthrawMax = $adminWidthraw->max_amount;

        if ($adminWidthrawMini > $request_amount) {
            return redirect()->back()->with('error', 'Your Widthrawal amount is less than Admin Limite');
        }

        if ($request_amount > $adminWidthrawMax) {
            return redirect()->back()->with('error', 'Your Widthrawal amount is Greater than Admin Limite');
        }

        $widthrawRequest = Withdraw::where('status', 'pending')->where('user_id', auth()->user()->id)->first();
        if ($widthrawRequest) {
            return redirect()->back()->with('error', 'You already requested for widthraw please wait for approval');
        }

        $withdraw = new Withdraw();
        $withdraw->user_id = auth()->user()->id;
        $withdraw->name = $request->name;
        $withdraw->amount = $request->amount;
        $withdraw->account = $request->account;
        $withdraw->bank = $request->bank;
        $withdraw->pre_withdraw = total_withdraw();
        $withdraw->total_team = total_team();
        $withdraw->save();
        return redirect()->route('User.All.Withdraw')->with('success', 'Successfully Done!');
    }
}
