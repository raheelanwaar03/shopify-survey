<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\ContactUs;
use App\Models\admin\referralLevel;
use App\Models\admin\VerificationText;
use App\Models\admin\Wallet;
use App\Models\admin\WithdrawSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function verificationText()
    {
        $text = VerificationText::first();
        return view('admin.setting.editText', compact('text'));
    }

    public function updateText(Request $request, $id)
    {
        $text = VerificationText::find($id);
        $text->text = $request->text;
        $text->save();
        return redirect()->back()->with('success', 'Text Updated');
    }

    public function editWallet()
    {
        $wallet = Wallet::first();
        return view('admin.setting.editWallet', compact('wallet'));
    }

    public function updateWallet(Request $request, $id)
    {
        $wallet = Wallet::find($id);
        $wallet->name = $request->name;
        $wallet->number = $request->number;
        $wallet->bank = $request->bank;
        $wallet->save();
        return redirect()->back()->with('success', 'Wallet Setting Updated');
    }

    public function editSetting()
    {
        $withdraw = WithdrawSetting::first();
        return view('admin.setting.withdraw', compact('withdraw'));
    }

    public function updateSetting(Request $request, $id)
    {
        $withdraw = WithdrawSetting::find($id);
        $withdraw->min_amount = $request->min_amount;
        $withdraw->max_amount = $request->max_amount;
        $withdraw->planA = $request->planA;
        $withdraw->planB = $request->planB;
        $withdraw->save();
        return redirect()->back()->with('success', 'Setting Updated');
    }

    public function editContact()
    {
        $contact = ContactUs::first();
        return view('admin.setting.contact', compact('contact'));
    }

    public function updateContact(Request $request, $id)
    {
        $contact = ContactUs::find($id);
        $contact->link = $request->link;
        $contact->number = $request->number;
        $contact->email = $request->email;
        $contact->save();
        return redirect()->back()->with('success', 'Contact Details Updated');
    }

    public function editLevel()
    {
        $level = referralLevel::first();
        return view('admin.setting.level', compact('level'));
    }

    public function updateLevel(Request $request, $id)
    {
        $level = referralLevel::find($id);
        $level->level1 = $request->level1;
        $level->level2 = $request->level2;
        $level->level3 = $request->level3;
        $level->level4 = $request->level4;
        $level->level5 = $request->level5;
        $level->level6 = $request->level6;
        $level->level7 = $request->level7;
        $level->level8 = $request->level8;
        $level->level9 = $request->level9;
        $level->level10 = $request->level10;
        $level->save();
        return redirect()->back()->with('success', 'Levels Setting Updated');
    }
}
