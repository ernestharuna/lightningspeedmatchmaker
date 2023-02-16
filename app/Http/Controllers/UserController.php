<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.members.index', [
            'users' => User::latest()->paginate(15),
        ]);
    }
    
    public function sub_users()
    {
        $users = User::where('subscription', '!=', 'Free')->paginate(10);
        return view('admin.members.sub_users', [
            'users' => $users
        ]);
    }

    public function show(User $user)
    {
        return view('admin.members.show', [
            'user' => $user
        ]);
    }
}
