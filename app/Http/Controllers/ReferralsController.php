<?php

namespace App\Http\Controllers;

use App\Models\Referrals;
use Illuminate\Http\Request;

class ReferralsController extends Controller
{
    public function index()
    {
        return view('admin.referrals.index', [
            'refs' => Referrals::with('user')->latest()->paginate(10),
        ]);
    }

    public function create()
    {
        return view('user.referrals.index');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'ref_name' => ['required', 'min:5'],
            'ref_gender' => 'required'
        ]);

        $request->user()->referrals()->create($credentials);
        return redirect(route('user.refs'))->with('status', 'Referral has been submitted');
    }

    public function delete(Referrals $ref)
    {
        $ref->delete();
        return redirect(route('user.refs'))->with('status', 'Referral deleted');

    }
}
