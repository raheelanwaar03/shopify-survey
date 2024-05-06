<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\MarqueeText;
use App\Models\admin\Task;
use App\Models\admin\WithdrawSetting;
use App\Models\User;
use App\Models\user\TodayRewardCheck;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        $text = MarqueeText::where('status',1)->first();
        $setting = WithdrawSetting::where('status', 1)->first();
        $withdrawAble = $setting->dollar_rate * auth()->user()->balance;
        $user = User::where('id', auth()->user()->id)->with('trxIds')->first();
        return view('user.dashboard',compact('user','text','withdrawAble'));
    }

    public function tasks()
    {
        $user = User::where('id', auth()->user()->id)->with('trxIds')->first();
        $task = Task::where('level', auth()->user()->level)->where('plan', $user->trxIds->plan_name)->get();
        return view('user.tasks.new', compact('task'));
    }

    public function getReward($id)
    {
        $currentDate = Carbon::now();
        $tenDaysAgo = $currentDate->subDays(15);
        // checking user last 15 days referals
        $user = User::find(auth()->user()->id);

        if (!$user->isAccount15DaysOld()) {
            $task = Task::find($id);
            $taskRewarad = $task->earning;
            $task->save();

            $visitor = TodayRewardCheck::where('user_id', auth()->user()->id)->where('task_id', $id)->whereDate('created_at', '=', Carbon::today())->first();
            if (!$visitor) {
                // storing product
                $visitor = new TodayRewardCheck();
                $visitor->user_id = auth()->user()->id;
                $visitor->task_id = $id;
                $visitor->price = $taskRewarad;
                $visitor->save();

                $user->balance += $taskRewarad;
                $user->save();
                return redirect()->back()->with('success', 'Reward recived');
            }
            return redirect()->back()->with('error', 'already recived');
        } else {
            $userReferal = User::where('referral', auth()->user()->user_id)->whereDate('created_at', '>=', $tenDaysAgo)->where('status', 'approved')->get();
            if ($userReferal->isEmpty()) {
                return redirect()->route('User.Dashboard')->with('error', 'You have not add any user from last 15 days. Please add new user to get rewarded');
            } else {
                $task = Task::find($id);
                $taskRewarad = $task->earning;
                // check user
                $visitor = TodayRewardCheck::where('user_id', auth()->user()->id)->where('task_id', $id)->whereDate('created_at', '=', Carbon::today())->first();
                if (!$visitor) {
                    // storing product
                    $visitor = new TodayRewardCheck();
                    $visitor->user_id = auth()->user()->id;
                    $visitor->task_id = $id;
                    $visitor->price += $taskRewarad;
                    $visitor->save();
                    // add reward
                    $user->balance += $taskRewarad;
                    $user->save();
                    return redirect()->back()->with('success', 'Reward recived');
                }

                return redirect()->back()->with('error', 'You have been rewarded before for this link');
            }
        }
    }

    public function profile()
    {
        $user = User::where('id',auth()->user()->id)->with('trxIds')->first();
        return view('user.profile',compact('user'));
    }



}
