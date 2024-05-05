<?php

use App\Models\admin\WithdrawSetting;
use App\Models\User;
use App\Models\user\Withdraw;

function total_team()
{
    $team = User::where('referral', auth()->user()->user_id)->get()->count();
    return $team;
}

function pending_team()
{
    $team = User::where('referral', auth()->user()->user_id)->where('status', 'pending')->get()->count();
    return $team;
}

function approved_team()
{
    $team = User::where('referral', auth()->user()->user_id)->where('status', 'approved')->get()->count();
    return $team;
}

function total_withdraw()
{
    $withdraw = Withdraw::where('user_id', auth()->user()->id)->get();
    $total_withdraw = 0;
    foreach ($withdraw as $item) {
        $total_withdraw += $item->amount;
    }

    return $total_withdraw;
}

function pending_withdraw()
{
    $withdraw = Withdraw::where('user_id', auth()->user()->id)->where('status', 'pending')->get();
    $total_withdraw = 0;
    foreach ($withdraw as $item) {
        $total_withdraw += $item->amount;
    }

    return $total_withdraw;
}

function approved_withdraw()
{
    $withdraw = Withdraw::where('user_id', auth()->user()->id)->where('status', 'approved')->get();
    $total_withdraw = 0;
    foreach ($withdraw as $item) {
        $total_withdraw += $item->amount;
    }

    return $total_withdraw;
}

function approved_withdraw_pkr()
{
    $setting = WithdrawSetting::where('status', 1)->first();

    $withdraw = Withdraw::where('user_id', auth()->user()->id)->where('status', 'approved')->get();
    $total_withdraw = 0;
    foreach ($withdraw as $item) {
        $total_withdraw += $item->amount * $setting->dollar_rate;
    }

    return $total_withdraw;
}
