<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    

     public function store(Request $request)
     {
         $request->validate([
             'email' => 'required|email',
             'password' => 'required',
         ]);
     
         $credentials = $request->only('email', 'password');
     
         if (Auth::attempt($credentials)) {
             $user = Auth::user();
     
             if ($user->status === 'activate') {
                 switch ($user->role) {
                     case 'admin':
                         return redirect()->route('admin.dashboard');
                         break;
                     case 'company':
                         return redirect()->route('company.dashboard');
                         break;
                     case 'employee':
                         return redirect()->route('employee.dashboard');
                         break;
                     default:
                         // Handle other roles or fallback
                         return redirect()->route('home');
                         break;
                 }
             } else {
                 Auth::logout();
                 Session::flash('message2', 'Your account is deactivated.');
                 return back()->withErrors([
                     'email' => 'Your account is deactivated.',
                 ]);
             }
         }
     
         Session::flash('message2', 'The provided credentials do not match our records.');
     
         return back()->withErrors([
             'email' => 'The provided credentials do not match our records.',
         ]);
     }
     

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
