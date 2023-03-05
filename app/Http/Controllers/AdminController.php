<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use App\Models\Subscriptions;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        // dd(Matches::with(['user', 'matched_user'])->latest()->get());
        return view('admin.dashboard', [
            'users' => User::latest()->get(),
            'subs' => Subscriptions::all(),
            'matches' => Matches::with(['user', 'matched_user'])->latest()->get()
        ]);
    }
}
