<?php

namespace App\Http\Controllers;

use App\Models\Subscriptions;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'users' => User::latest()->get(),
            'subs' => Subscriptions::all(),
        ]);
    }
}
