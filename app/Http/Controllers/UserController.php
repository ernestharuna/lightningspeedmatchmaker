<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show register form
    public function create()
    {
        return view('user.auth.signup');
    }

    // Register New User
    public function store(Request $request)
    {
        $validate = $request->validate([
            'first_name' => ['required', 'min:3', 'max:20'],
            'last_name' => ['required', 'min:3', 'max:20'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        $validate['password'] = bcrypt($validate['password']);

        $user = User::create($validate);
        auth()->login($user);

        return redirect('/')->with('status', 'Account created!');
    }

    // Show login form
    public function login()
    {
        return view('user.auth.login');
    }

    // Login user
    public function authenticate(Request $request)
    {
        $validate = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($validate)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('status', 'You\'re now logged in');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ])->onlyInput('email');
    }

    // Show Questionaire
    public function questionForm()
    {
        return view('user.question');
    } 
    // Update Questionaire
    public function update(Request $request, User $user)
    {
        
    }

    // Logout User
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('status', 'You have been logged out');
    }
}
