<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\UserController;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home_page() {
        return view('templates.home');
    }

    public function signup() {
        return view('pages.signup');
    }

    public function landing_page() {
        return view('pages.index');
    }

    public function registered() {
        return view('pages.registered');
    }

    public function signin() {
        return view('pages.login');
    }

    public function about() {
        return view('templates.about');
    }

    public function about_out() {
        return view('templates.about_out');
    }

    public function store(Request $request) {
        $validated = $request -> validate([
            "name" => ['required', 'min:4'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => 'required|confirmed|min:6'
        ]);
        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        auth()->login($user);

        return redirect()->intended('/registered');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('home');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout() {
        auth()->logout();
        return redirect()->intended('/');
    }
}
