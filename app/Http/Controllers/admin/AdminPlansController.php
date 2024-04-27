<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminPlans;
use Illuminate\Http\Request;

class AdminPlansController extends Controller
{
    public function add()
    {
        return view('admin.plans.add');
    }

    public function store(Request $request)
    {
        $plan = new AdminPlans();
        $plan->plan_name = $request->plan_name;
        $plan->invest = $request->invest;
        $plan->profit = $request->profit;
        $plan->expire = $request->expire;
        $plan->save();
        return redirect()->route('Admin.All.Plan')->with('success', 'Plan Added');
    }

    public function all()
    {
        $plans = AdminPlans::get();
        return view('admin.plans.all',compact('plans'));
    }
}
