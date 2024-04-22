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
use Illuminate\Support\Facades\Session;

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
        'username' => ['required', 'string', 'max:255'],
        'organization_num' => ['required', 'string', 'max:255'],
        'dealer_name' => ['required', 'string', 'max:255'],
        'phone_num' => ['required', 'string', 'max:255'],
        'address' => ['required', 'string', 'max:255'],
        'post_num' => ['required', 'string', 'max:255'],
        'city' => ['required', 'string', 'max:255'],
        'licenses' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    $user = User::create([
        'name' => $request->name,
        'username' => $request->username,
        'organization_num' => $request->organization_num,
        'dealer_name' => $request->dealer_name,
        'phone_num' => $request->phone_num,
        'address' => $request->address,
        'post_num' => $request->post_num,
        'city' => $request->post_num,
        'licenses' => $request->licenses,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    event(new Registered($user));

    Session::flash('message', 'Account created successfully. Please login.');

    return redirect()->route('login');
    }   
}
