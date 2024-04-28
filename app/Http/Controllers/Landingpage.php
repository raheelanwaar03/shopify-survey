<?php

namespace App\Http\Controllers;

use App\Models\admin\AdminPlans;
use App\Models\user\BuyPlan;
use Illuminate\Http\Request;

class Landingpage extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function plans()
    {
        $plans = AdminPlans::get();
        return view('auth.plans', compact('plans'));
    }

    public function buyPlan(Request $request)
    {
        $image = $request->img;
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);


        $user_plan = new BuyPlan();
        $user_plan->user_id = auth()->user()->id;
        $user_plan->plan_name = $request->plan_name;
        $user_plan->trx = $request->trx;
        $user_plan->account = $request->account;
        $user_plan->user_name = $request->user_name;
        $user_plan->img = $imageName;
        $user_plan->save();
        return redirect()->route('Welcome')->with('success', 'Buy successfull! Wait For Admin Approval');
    }
}
