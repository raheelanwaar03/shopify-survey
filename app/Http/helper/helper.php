<?php

use App\Models\admin\Task;
use App\Models\admin\WithdrawSetting;
use App\Models\User;
use App\Models\user\ExtraMoney;
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

function total_withdraw_pkr()
{
    $setting = WithdrawSetting::where('status', 1)->first();

    $withdraw = Withdraw::where('user_id', auth()->user()->id)->get();
    $total_withdraw = 0;
    foreach ($withdraw as $item) {
        $total_withdraw += $item->amount / $setting->dollar_rate;
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

function pending_withdraw_pkr()
{
    $setting = WithdrawSetting::where('status', 1)->first();

    $withdraw = Withdraw::where('user_id', auth()->user()->id)->where('status', 'pending')->get();
    $total_withdraw = 0;
    foreach ($withdraw as $item) {
        $total_withdraw += $item->amount / $setting->dollar_rate;
    }

    return $total_withdraw;
}

function user_tasks()
{
    $user = User::where('id', auth()->user()->id)->with('trxIds')->first();
    $tasks = Task::where('plan',$user->trxIds->plan_name)->where('level',$user->level)->count();
    return $tasks;

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
        $total_withdraw += $item->amount / $setting->dollar_rate;
    }

    return $total_withdraw;
}

function Today_task()
{
    $user = User::where('id', auth()->user()->id)->with('trxIds')->first();
    $task = Task::where('level', auth()->user()->level)->where('plan', $user->trxIds->plan_name)->get();
    $total_task = $task->count();
    return $total_task;
}

// admin side

function all_users()
{
    $user = User::get()->count();
    return $user;
}

function paid_users()
{
    $user = User::where('status', 'approved')->get()->count();
    return $user;
}

function unpaid_users()
{
    $user = User::where('status', 'pending')->get()->count();
    return $user;
}

function all_withdraw()
{
    $withdraw = Withdraw::get()->sum('amount');
    return $withdraw;
}

function all_pending_withdraw()
{
    $withdraw = Withdraw::where('status', 'pending')->get()->sum('amount');
    return $withdraw;
}

function all_approved_withdraw()
{
    $withdraw = Withdraw::where('status', 'approved')->get()->sum('amount');
    return $withdraw;
}

function extraBalance()
{
    $balance = ExtraMoney::where('user_id', auth()->user()->id)->get()->sum('balance');
    return $balance;
}


function extraBalance_inPkr()
{
    $setting = WithdrawSetting::where('status', 1)->first();
    $balance = ExtraMoney::where('user_id', auth()->user()->id)->get()->sum('balance');
    return $balance * $setting->dollar_rate;
}
