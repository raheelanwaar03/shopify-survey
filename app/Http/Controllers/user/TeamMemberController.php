<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\LuckyDraw;
use App\Models\admin\Winner;
use App\Models\User;
use App\Models\user\luckyDrawWallet;
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
        $wallet = luckyDrawWallet::first();
        return view('user.luck.draw', compact('luck', 'wallet'));
    }

    public function investLucky(Request $request)
    {
        return redirect()->back()->with('success', 'You applied successfully! Winner will be announce soon.');
    }

    public function winner()
    {
        $winner = Winner::first();
        return view('user.luck.winer', compact('winner'));
    }
}
