<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create($referral = 'default'): View
    {
        return view('auth.register', compact('referral'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $referral = $request->referral;
        if($referral == 'default')
        {
            return redirect()->back()->with('error','Please make account with sponsor link.');
        }

        // giving user new Id
        $user_id = "SH" . rand(11111, 99999);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'referral' => $request->referral,
            'country' => $request->country,
            'user_id' => $user_id,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('Plans', absolute: false));
    }
}
