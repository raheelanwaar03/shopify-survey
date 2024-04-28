<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\referralLevel;
use App\Models\admin\WithdrawSetting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserMangementController extends Controller
{
    public function approveUser(Request $request)
    {
        $id = $request->input('user_id');

        $levelCheck = referralLevel::where('status', 1)->first();
        $level1 = $levelCheck->level1;
        $level2 = $levelCheck->level2;
        $level3 = $levelCheck->level3;
        $level4 = $levelCheck->level4;
        $level5 = $levelCheck->level5;
        $level6 = $levelCheck->level6;
        $level7 = $levelCheck->level7;
        $level8 = $levelCheck->level8;
        $level9 = $levelCheck->level9;
        $level10 = $levelCheck->level10;

        // Taking the admin commission
        $setting = WithdrawSetting::where('status', '1')->first();
        $silver = $setting->planA;
        $silver_Second_Commission = $silver * 5 / 100;
        $silver_Third_Commission = $silver * 1.5 / 100;
        // getting gold commission
        $gold = $setting->planB;
        $gold_Second_Commission = $gold * 5 / 100;
        $gold_Third_Commission = $gold * 1.5 / 100;


        $user = User::where('id', $id)->with('trxIds')->first();
        $user->status = 'approved';
        $user->created_at = Carbon::today();
        $user->save();
        // getting user package
        $userPlan = $user->trxIds->plan_name;

        if ($userPlan == 'silver') {
            $firstUpliner = User::where('user_id', $user->referral)->where('status', 'approved')->first();
            if ($firstUpliner != '') {
                $firstUpliner->balance += $silver;
                // giving upliner his level
                $allUsers = User::where('referral', $firstUpliner->user_id)->where('status', 'approved')->get();
                $referCount = $allUsers->count();

                if ($allUsers != '') {
                    if ($referCount <= 1) {
                        $firstUpliner->level = 'Level 0';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level1) {
                        $firstUpliner->level = 'Level 1';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level2) {
                        $firstUpliner->level = 'Level 2';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level3) {
                        $firstUpliner->level = 'Level 3';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level4) {
                        $firstUpliner->level = 'Level 4';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level5) {
                        $firstUpliner->level = 'Level 5';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level6) {
                        $firstUpliner->level = 'Level 6';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level7) {
                        $firstUpliner->level = 'Level 7';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level8) {
                        $firstUpliner->level = 'Level 8';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level9) {
                        $firstUpliner->level = 'Level 9';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level10) {
                        $firstUpliner->level = 'Level 10';
                        $firstUpliner->save();
                    }
                }

                //  Second Upliner
                $indirectCommission1 = $silver_Second_Commission;
                // getting user
                $secondUpliner = User::where('user_id', $firstUpliner->referral)->where('status', 'approved')->first();
                if ($secondUpliner == '') {
                    return response()->json(['message' => 'User Approved Successfully', 'tr' => 'tr_' . $id]);
                } else {
                    $secondUpliner->balance += $indirectCommission1;
                    $secondUpliner->save();
                }
                // Third UPliner
                $indirectCommission2 = $silver_Third_Commission;
                // getting third person;
                $thirdUpliner = User::where('user_id', $secondUpliner->referral)->where('status', 'approved')->first();
                if ($thirdUpliner == '') {
                    return response()->json(['message' => 'User Approved Successfully', 'tr' => 'tr_' . $id]);
                } else {
                    $thirdUpliner->balance += $indirectCommission2;
                    $thirdUpliner->save();
                }
            } else {
                return response()->json(['message' => 'User Approved Successfully', 'tr' => 'tr_' . $id]);
            }
        }

        if ($userPlan == 'gold') {
            $firstUpliner = User::where('user_id', $user->referral)->where('status', 'approved')->first();
            if ($firstUpliner != '') {
                $firstUpliner->balance += $gold;
                // giving upliner his level
                $mainUser = User::where('referral', $firstUpliner->user_id)->where('status', 'approved')->get();
                $referCount = $mainUser->count();

                if ($mainUser != '') {
                    if ($referCount <= 1) {
                        $firstUpliner->level = 'Level 0';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level1) {
                        $firstUpliner->level = 'Level 1';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level2) {
                        $firstUpliner->level = 'Level 2';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level3) {
                        $firstUpliner->level = 'Level 3';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level4) {
                        $firstUpliner->level = 'Level 4';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level5) {
                        $firstUpliner->level = 'Level 5';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level6) {
                        $firstUpliner->level = 'Level 6';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level7) {
                        $firstUpliner->level = 'Level 7';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level8) {
                        $firstUpliner->level = 'Level 8';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level9) {
                        $firstUpliner->level = 'Level 9';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level10) {
                        $firstUpliner->level = 'Level 10';
                        $firstUpliner->save();
                    }
                }

                //  Second Upliner
                $indirectCommission1 = $gold_Second_Commission;
                // getting user
                $secondUpliner = User::where('user_id', $firstUpliner->referral)->where('status', 'approved')->first();
                if ($secondUpliner == '') {
                    return response()->json(['message' => 'User Approved Successfully', 'tr' => 'tr_' . $id]);
                } else {
                    $secondUpliner->balance += $indirectCommission1;
                    $secondUpliner->save();
                }
                // Third UPliner
                $indirectCommission2 = $gold_Third_Commission;
                // getting third person;
                $thirdUpliner = User::where('user_id', $secondUpliner->referral)->where('status', 'approved')->first();
                if ($thirdUpliner == '') {
                    return response()->json(['message' => 'User Approved Successfully', 'tr' => 'tr_' . $id]);
                } else {
                    $thirdUpliner->balance += $indirectCommission2;
                    $thirdUpliner->save();
                }
            } else {
                return response()->json(['message' => 'User Approved Successfully', 'tr' => 'tr_' . $id]);
            }
        }
        return response()->json(['message' => 'User Approved Successfully', 'tr' => 'tr_' . $id]);
    }


    public function rejectUser(Request $request)
    {
        // Get user ID from the request
        $userId = $request->input('user_id');

        // Update user status from pending to reject
        $user = User::findOrFail($userId);
        $user->status = 'rejected';
        $user->save();
        // Return a JSON response indicating success
        return response()->json(['message' => 'User Rejected', 'tr' => 'tr_' . $userId]);
    }


    public function pendingUser(Request $request)
    {
        $userId = $request->input('user_id');

        // Update user status from pending to reject
        $user = User::findOrFail($userId);
        $user->status = 'pending';
        $user->save();
        // Return a JSON response indicating success
        return response()->json(['message' => 'User Pending', 'tr' => 'tr_' . $userId]);
    }
}
