<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\LuckyDraw;
use App\Models\User;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function team()
    {
        $user = User::where('referral', auth()->user()->user_id)->where('status', 'approved')->get();
        return view('user.team.member', compact('user'));
    }

    public function luckyDraw()
    {
        $luck = LuckyDraw::get();
        return view('user.luck.draw', compact('luck'));
    }

    public function investLucky($id)
    {
        $luck = LuckyDraw::find($id);
        $user = User::where('id', auth()->user()->id)->first();
        // checking balance
        if ($user->balance < $luck->invest) {
            return redirect()->back()->with('error', 'You have not enough balance');
        } else {
            $user->balance -= $luck->invest;
            $user->save();
            return redirect()->back()->with('success', 'Winner will be announce in few days');
        }
    }
}
