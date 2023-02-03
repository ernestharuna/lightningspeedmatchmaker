<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller { 
    public function index()
    {
        return view('admin.members.index', [
            'users' => User::latest()->paginate(15),
        ]);
    }
}
