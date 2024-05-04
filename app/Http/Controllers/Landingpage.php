<?php

namespace App\Http\Controllers;

use App\Models\admin\AdminPlans;
use App\Models\admin\ContactUs;
use App\Models\admin\VerificationText;
use App\Models\admin\Wallet;
use App\Models\user\BuyPlan;
use Illuminate\Http\Request;

class Landingpage extends Controller
{
    public function index()
    {
        $plan = AdminPlans::get();
        $contact = ContactUs::where('status',1)->first();
        return view('welcome', compact('plan', 'contact'));
    }

    public function plans()
    {
        $plans = AdminPlans::get();
        $wallet = Wallet::where('status', 1)->first();
        return view('auth.plans', compact('plans', 'wallet'));
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
        return redirect()->route('Verification.Page')->with('success', 'Buy successfull! Wait For Admin Approval');
    }

    public function okay()
    {
        $verificationText = VerificationText::where('status', 1)->first();
        return view('auth.okay', compact('verificationText'));
    }
}
