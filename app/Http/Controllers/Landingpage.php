<?php

namespace App\Http\Controllers;

use App\Models\admin\AdminPlans;
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
        return view('auth.plans',compact('plans'));
    }

}
