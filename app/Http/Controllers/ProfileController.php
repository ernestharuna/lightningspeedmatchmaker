<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('user.profile.index')->with([
            'user' => $user
        ]);
    }
    // Show Form 1
    public function edit()
    {
        return view('user.profile.form1');
    }

    // Update Forms
    public function update(User $user, Request $request)
    {
        $validate = $request->validate([
            // form 1
            'date_of_birth' => 'sometimes|nullable',
            'gender' => 'sometimes|nullable',
            'orientation' => 'sometimes|nullable',
            'relationship_status' => 'sometimes|nullable',
            'looking_for' => 'sometimes|nullable',

            //form 2
            'height' => 'sometimes|nullable',
            'weight' => 'sometimes|nullable',
            'body_type' => 'sometimes|nullable',
            'hair_color' => 'sometimes|nullable',
            'eye_color' => 'sometimes|nullable',
            'ethnicity' => 'sometimes|nullable',
            'religion' => 'sometimes|nullable',
            'zodiac_sign' => 'sometimes|nullable',

            // form 3
            'first_language' => 'sometimes|nullable',
            'second_language' => 'sometimes|nullable',
            'employed' => 'sometimes|nullable',
            'income' => 'sometimes|nullable',
            'profession' => 'sometimes|nullable',

            // form 4
            'pets' => 'sometimes|nullable',
            'smokes' => 'sometimes|nullable',
            'drinks' => 'sometimes|nullable',
            'phone_number' => 'sometimes|nullable',
            'drugs' => 'sometimes|nullable',
            'country' => 'sometimes|nullable',
            'city' => 'sometimes|nullable',
            'extra' => 'sometimes|nullable',
            'subscription' => 'sometimes|nullable',
            'updated_at' => now()
        ]);

        if ($request->hasFile('profile_pic')) {
            $validate['profile_pic'] = $request->file('profile_pic')->store('profile_pic', 'public');
        };

        // dd($validate);
        $user->update($validate);

        return redirect()->back()->with('status', 'Saved');
    }

    public function destroy(Request $request)
    {
        $user = $request->user();
        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
