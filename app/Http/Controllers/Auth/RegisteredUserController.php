<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $avatar='https://www.gravatar.com/avatar/';
        $uuid=Str::random(10);

        $user = User::create([
            'uuid'=>$uuid,
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'country' => $request->country,
            'refer_code' => $request->refer_code,
            'addr1' => $request->addr1,
            'addr2' => $request->addr2,
            'city' => $request->city,
            'state' => $request->state,
            'postal' => $request->postal,
            'bday' => $request->bday,
            'phone' => $request->phone,
            'avatar' => $avatar,
            'balance' => 0,
            'self_refer_code'=>Str::random(6),
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
