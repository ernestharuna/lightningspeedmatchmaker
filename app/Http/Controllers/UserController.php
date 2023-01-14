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
        return view('user\questionnaire\form1');
    } 

    // Update Questionaire
    public function update(Request $request, User $user)
    {
        $validate = $request->validate([
            // form 1
            'dob' => 'sometimes|nullable',
            'gender' => 'sometimes|nullable',
            'orientation' => 'sometimes|nullable',
            'relationship_status' => 'sometimes|nullable',
            'looking_for' => 'sometimes|nullable',

            //form 2
            'height' => 'sometimes|nullable',
            'weight' => 'sometimes|nullable',
            'body_type' => 'sometimes|nullable',
            'hair_color' => 'sometimes|nullable',
            'eye_color' => 'sometimes|nullable',
            'ethnicity' => 'sometimes|nullable',
            'religion' => 'sometimes|nullable',
            'zodiac_sign' => 'sometimes|nullable',

            // form 3
            'first_language' => 'sometimes|nullable',
            'second_language' => 'sometimes|nullable',
            'employed' => 'sometimes|nullable',
            'income' => 'sometimes|nullable',
            'profession' => 'sometimes|nullable',

            // form 4
            'pets' => 'sometimes|nullable',
            'smokes' => 'sometimes|nullable',
            'drinks' => 'sometimes|nullable',
            'drugs' => 'sometimes|nullable',
            'date_drug' => 'sometimes|nullable',
            'country' => 'sometimes|nullable',
            'city' => 'sometimes|nullable',
            'extra' => 'sometimes|nullable',
        ]);

        if($request->hasFile('profile_pic')) {
            $validate['profile_pic'] = $request->file('profile_pic')->store('profile_pic', 'public');
        }

        $user->update($validate);

        return redirect('/')->with('status', 'We have stored your data');
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
