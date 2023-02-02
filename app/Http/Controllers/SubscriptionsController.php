<?php

namespace App\Http\Controllers;

use App\Models\Subscriptions;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    public function index()
    {
        return view('user.subscriptions.index', [
            'subs' => Subscriptions::all(),
        ]);
    }
}
