<?php

namespace App\Console\Commands;

use App\Models\admin\AdminPlans;
use App\Models\admin\ContactUs;
use App\Models\admin\referralLevel;
use App\Models\admin\VerificationText;
use App\Models\admin\Wallet;
use App\Models\admin\WithdrawSetting;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean app and inserting user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Artisan::call('migrate:fresh');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');

        $user = new User();
        $user->name = 'Admin';
        $user->referral = 'default';
        $user->balance = '0';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('asdfasdf');
        $user->status = 'approved';
        $user->role = 'admin';
        $user->user_id = 'SH123456';
        $user->save();

        $user = new User();
        $user->name = 'User';
        $user->referral = 'default';
        $user->balance = '1000';
        $user->email = 'user@gmail.com';
        $user->password = Hash::make('asdfasdf');
        $user->status = 'approved';
        $user->role = 'user';
        $user->user_id = 'SH123458';
        $user->save();

        $easyPaisa = new Wallet();
        $easyPaisa->name = 'test';
        $easyPaisa->number = '03123456789';
        $easyPaisa->bank = 'Easypaisa';
        $easyPaisa->status = 1;
        $easyPaisa->save();

        // referral limite
        $setting = new WithdrawSetting();
        $setting->min_amount = '50';
        $setting->max_amount = '500';
        $setting->planA = '10';
        $setting->planB = '20';
        $setting->status = 1;
        $setting->save();

        // Verification page text

        $verificationText = new VerificationText();
        $verificationText->text = 'Welcome to Name website we will approve your account after checking your given details';
        $verificationText->status = 1;
        $verificationText->save();

        // add marquee
        // $text = new MarqueeText();
        // $text->text = ' OmegaEarn is a very good platform to invest your time and money. Contact Us on this number
        // (0346-7805896) if any query. It is a real earning platform. Refere this to your friends and family.';
        // $text->status = 1;
        // $text->save();

        // Contact us
        $contact = new ContactUs();
        $contact->link = 'https://web.whatsapp.com/';
        $contact->number = '0311-2233444';
        $contact->email = 'test@email.com';
        $contact->status = 1;
        $contact->save();

        // set level according to thier referral

        $level = new referralLevel();
        $level->level1 = 1;
        $level->level2 = 2;
        $level->level3 = 3;
        $level->level4 = 4;
        $level->level5 = 5;
        $level->level6 = 6;
        $level->level7 = 7;
        $level->level8 = 8;
        $level->level9 = 9;
        $level->level10 = 10;
        $level->status = 1;
        $level->save();


        // adding plans

        $plan = new AdminPlans();
        $plan->plan_name = 'Silver';
        $plan->invest = '100';
        $plan->profit = 'Unlimited';
        $plan->expire = 'LifeTime';
        $plan->save();

        $plan = new AdminPlans();
        $plan->plan_name = 'Gold';
        $plan->invest = '200';
        $plan->profit = 'Unlimited';
        $plan->expire = 'LifeTime';
        $plan->save();
    }
}
