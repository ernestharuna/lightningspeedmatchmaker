<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $matches = Matches::where('matchedUser_id', Auth::id())->count();
        return view('user.home', [
            'user' => $user,
            'matches' => $matches
        ]);
    }
}
