<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function team()
    {
        $user = User::where('referral', auth()->user()->user_id)->where('status', 'approved')->get();
        return view('user.team.member', compact('user'));
    }
}
