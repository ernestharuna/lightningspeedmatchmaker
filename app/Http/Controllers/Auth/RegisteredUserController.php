<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
    }

    public function adminRegisterForm()
    {
        return view('admin.auth.register', [
            'url' => 'Admin'
        ]);
    }
    
    public function createAdmin(Request $request)
    {
        $credentials = $request->validate([
            'first_name' => ['required', 'min:2', 'max:20'],
            'last_name' => ['required', 'min:2', 'max:20'],
            'email' => ['required', 'email', Rule::unique('admins', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        $credentials['password'] = bcrypt($credentials['password']);
        $admin = Admin::create($credentials);

        Auth::login($admin);

        return redirect(route('admin.dashboard'))->with('status', 'You\'re now logged in as Administrator');
    }

    // show register form
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
        Auth::login($user);

        return redirect()->intended('/')->with('status', 'Account created!');
    }
}
