<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function allUsers()
    {
        $users = User::with('trxIds')->get();
        return view('admin.user.allUsers', compact('users'));
    }

    public function pendingUsers()
    {
        $users = User::where('status', 'pending')->has('trxIds')
            ->whereHas('trxIds', function ($query) {
                $query->whereNotNull('trx')->whereNotNull('img')
                    ->whereNotNull('user_name')->whereNotNull('account');
            })->get();

        return view('admin.user.pending', compact('users'));
    }

    public function approvedUsers()
    {
        $users = User::where('status', 'approved')->has('trxIds')
            ->whereHas('trxIds', function ($query) {
                $query->whereNotNull('trx')->whereNotNull('img')
                    ->whereNotNull('user_name')->whereNotNull('account');
            })->get();

        return view('admin.user.approved', compact('users'));
    }

    public function rejectedUsers()
    {
        $users = User::where('status', 'rejected')->has('trxIds')
            ->whereHas('trxIds', function ($query) {
                $query->whereNotNull('trx')->whereNotNull('img')
                    ->whereNotNull('user_name')->whereNotNull('account');
            })->get();

        return view('admin.user.rejected', compact('users'));
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->balance = $request->balance;
        $user->level = $request->level;
        $user->save();
        return redirect()->back()->with('success', 'User Updated successfully');
    }

    public function updatePassword(Request $request,$id)
    {
        $user = User::find($id);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('success','User Password Changed');
    }

}
