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
            'phone_number' => 'sometimes|nullable',
            'date_of_birth' => 'sometimes|nullable',
            'gender' => 'sometimes|nullable',
            'orientation' => 'sometimes|nullable',
            'relationship_status' => 'sometimes|nullable',
            'children' => 'sometimes|nullable',
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
            'activity_level' => 'sometimes|nullable',
            'employed' => 'sometimes|nullable',
            'education' => 'sometimes|nullable',
            'profession' => 'sometimes|nullable',
            'extra' => 'sometimes|nullable',

            // form 4
            'pets' => 'sometimes|nullable',
            'smokes' => 'sometimes|nullable',
            'drinks' => 'sometimes|nullable',
            'drugs' => 'sometimes|nullable',
            'profile_pic' => 'sometimes|nullable',
            'dp_1' => 'sometimes|nullable',
            'dp_2' => 'sometimes|nullable',
            'how_jelly' => 'sometimes|nullable',
            'country' => 'sometimes|nullable',
            'city' => 'sometimes|nullable',
            
            'subscription' => 'sometimes|nullable',
            'updated_at' => now()
        ]);

        if ($request->hasFile('profile_pic')) {
            $validate['profile_pic'] = $request->file('profile_pic')->store('user_pics', 'public');
        };
        if ($request->hasFile('dp_1')) {
            $validate['dp_1'] = $request->file('dp_1')->store('user_pics', 'public');
        };
        if ($request->hasFile('dp_2')) {
            $validate['dp_2'] = $request->file('dp_2')->store('user_pics', 'public');
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
