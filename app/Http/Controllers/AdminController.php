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

    public function manageSubs()
    {
        return view('admin.user-subscriptions', [
            'users' => User::latest()->get(),
            'subs' => Subscriptions::all(),
        ]);
    }
    public function edit(Subscriptions $subscriptions)
    {
        return view('admin.edit-subscription', [
            'sub' => $subscriptions,
        ]);
    }

    public function update(Request $request)
    {
        
    }
}
