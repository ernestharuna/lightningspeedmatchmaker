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
            'users' => User::latest()->filter(request(['orientation', 'gender', 'country', 'search']))->paginate(15),
        ]);
    }

    public function sub_users()
    {
        $users = User::where('subscription', '!=', 'Free')->paginate(10);
        return view('admin.members.index', [
            'users' => $users
        ]);
    }

    // public function search(Request $request)
    // {
    //     $query = $request->input('query');
    //     $tusers = User::where('first_name', '==', "$query")->orWhere('last_name', '==', "$query")->paginate(10);
    //     dd($tusers);
    //     return view('admin.members.index', [
    //         'users' => $tusers
    //     ]);

    // }

    public function show(User $user)
    {
        return view('admin.members.show', [
            'user' => $user
        ]);
    }
}
