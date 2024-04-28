<?php

use App\Models\User;
use App\Models\user\Withdraw;

function total_team()
{
    $team = User::where('referral', auth()->user()->user_id)->where('status', 'approved')->get()->count();
    return $team;
}


function total_withdraw()
{
    $withdraw = Withdraw::where('user_id', auth()->user()->id)->where('status', 'approved')->get();
    $total_withdraw = 0;
    foreach ($withdraw as $item) {
        $total_withdraw += $item->amount;
    }

    return $total_withdraw;
}
