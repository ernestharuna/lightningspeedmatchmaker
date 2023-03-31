<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MatchesController extends Controller
{
    public function index()
    {
        return view('user.match.index', [
            // 'matches' => Auth::user()->matches,
            'matches' => Matches::where('user_id', Auth::id())->with(['user', 'matched_user'])->get(),
            'requests' => Matches::where('matchedUser_id', Auth::id())->with(['user', 'matched_user'])->get()
        ]);
    }

    public function show(Matches $match)
    {
        return view('user.match.show', [
            'match' => $match
        ]);
    }

    public function showUser(Matches $profile)
    {
        return view('user.match.template_show', [
            'match' => $profile
        ]);
    }

    // public function searchProfile(Matches $searchProfile)
    // {
    //     return view('user.match.search_show', [
    //         'match' => $searchProfile
    //     ]);
    // }

    public function store(Request $request)
    {
        try {
            $credentials = $request->validate([
                'matchedUser_id' => 'required',
                'match_info' => 'required',
            ]);

            $request->user()->matches()->create($credentials);
            return redirect(route('match.index'))->with('status', 'Match Made!');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request, Matches $match)
    {
        try {
            $credentials = $request->validate([
                'status' => "required",
            ]);
            $match->update($credentials);
            return back();
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function match(User $user)
    {
        $gender = Auth::user()->seeks->gender;
        $orientation = Auth::user()->seeks->sexual_orientation;
        $height = Auth::user()->seeks->height;
        $body_type = Auth::user()->seeks->body_type;
        $hair_color = Auth::user()->seeks->hair_color;
        $eye_color = Auth::user()->seeks->eye_color;

        $how_pa = Auth::user()->seeks->how_pa;
        $education = Auth::user()->seeks->education;
        $looking_for = Auth::user()->seeks->rel_type;
        $how_jelly = Auth::user()->seeks->how_jelly;
        $ethnicity = Auth::user()->seeks->ethnicity;

        $religion = Auth::user()->seeks->religion;
        $zodiac_sign = Auth::user()->seeks->zodiac_sign;
        $children = Auth::user()->seeks->children;

        $date_pet_owner = Auth::user()->seeks->date_pet_owner;
        $date_drug = Auth::user()->seeks->date_drug;
        $date_drink = Auth::user()->seeks->date_drink;
        $date_smoker = Auth::user()->seeks->date_smoker;
        $country = Auth::user()->seeks->country;

        // 100% Match
        $userQuery_1 = User::where('orientation', $orientation)
            ->where('gender', $gender)
            ->where('height', $height)
            ->where('body_type', $body_type)
            ->where('hair_color', $hair_color)
            ->where('eye_color', $eye_color)
            ->where('activity_level', $how_pa) //check view for matching data
            ->where('education', $education)
            ->where('looking_for', $looking_for)
            ->where('how_jelly', $how_jelly)
            ->where('ethnicity', $ethnicity)
            ->where('religion', $religion)
            ->where('zodiac_sign', $zodiac_sign)
            ->where('children', $children)
            ->where('pets', $date_pet_owner)
            ->where('drugs', $date_drug)
            ->where('drinks', $date_drink)
            ->where('smokes', $date_smoker)
            ->where('country', $country)
            ->where('email_verified_at', '!=', null)
            ->where('id', '!=', $user->id);

        // Removed - Education, eye_color
        // 90% match
        $userQuery_2 = User::where('orientation', $orientation)
            ->where('gender', $gender)
            ->where('height', $height)
            ->where('body_type', $body_type)
            ->where('hair_color', $hair_color)
            ->where('activity_level', $how_pa)
            ->where('looking_for', $looking_for)
            ->where('how_jelly', $how_jelly)
            ->where('ethnicity', $ethnicity)
            ->where('religion', $religion)
            ->where('zodiac_sign', $zodiac_sign)
            ->where('children', $children)
            ->where('pets', $date_pet_owner)
            ->where('drugs', $date_drug)
            ->where('drinks', $date_drink)
            ->where('smokes', $date_smoker)
            ->where('email_verified_at', '!=', null)
            ->where('id', '!=', $user->id);

        // Removed - Education, eye_color, hair_color, zodiac_sign,
        // 80%
        $userQuery_3  = User::where('orientation', $orientation)
            ->where('gender', $gender)
            ->where('height', $height)
            ->where('body_type', $body_type)
            ->where('activity_level', $how_pa)
            ->where('looking_for', $looking_for)
            ->where('how_jelly', $how_jelly)
            ->where('ethnicity', $ethnicity)
            ->where('religion', $religion)
            ->where('children', $children)
            ->where('pets', $date_pet_owner)
            ->where('drugs', $date_drug)
            ->where('drinks', $date_drink)
            ->where('smokes', $date_smoker)
            ->where('email_verified_at', '!=', null)
            ->where('id', '!=', $user->id);

        // Removed - Education, eye_color, hair_color, zodiac_sign, activity_level, body_type,
        // 70%
        $userQuery_4  = User::where('orientation', $orientation)
            ->where('gender', $gender)
            ->where('height', $height)
            ->where('looking_for', $looking_for)
            ->where('how_jelly', $how_jelly)
            ->where('ethnicity', $ethnicity)
            ->where('religion', $religion)
            ->where('children', $children)
            ->where('pets', $date_pet_owner)
            ->where('drugs', $date_drug)
            ->where('drinks', $date_drink)
            ->where('smokes', $date_smoker)
            ->where('email_verified_at', '!=', null)
            ->where('id', '!=', $user->id);

        // Removed - Education, eye_color, hair_color, zodiac_sign, activity_level, body_type, height, religion,
        //60%
        $userQuery_5  = User::where('orientation', $orientation)
            ->where('gender', $gender)
            ->where('looking_for', $looking_for)
            ->where('how_jelly', $how_jelly)
            ->where('ethnicity', $ethnicity)
            ->where('children', $children)
            ->where('pets', $date_pet_owner)
            ->where('drugs', $date_drug)
            ->where('drinks', $date_drink)
            ->where('smokes', $date_smoker)
            ->where('email_verified_at', '!=', null)
            ->where('id', '!=', $user->id);

        // Removed - Education, eye_color, hair_color, zodiac_sign, activity_level, body_type, height, religion, drinks, how_jelly
        // 60% 
        $userQuery_6  = User::where('orientation', $orientation)
            ->where('gender', $gender)
            ->where('looking_for', $looking_for)
            ->where('ethnicity', $ethnicity)
            ->where('children', $children)
            ->where('pets', $date_pet_owner)
            ->where('drugs', $date_drug)
            ->where('smokes', $date_smoker)
            ->where('email_verified_at', '!=', null)
            ->where('id', '!=', $user->id);

        // Removed - Education, eye_color, hair_color, zodiac_sign, activity_level, body_type, height, religion, drinks, how_jelly, ethnicity, pets
        // 33
        $userQuery_7  = User::where('orientation', $orientation)
            ->where('gender', $gender)
            ->where('looking_for', $looking_for)
            ->where('children', $children)
            ->where('drugs', $date_drug)
            ->where('smokes', $date_smoker)
            ->where('email_verified_at', '!=', null)
            ->where('id', '!=', $user->id);

        // Removed - Education, eye_color, hair_color, zodiac_sign, activity_level, body_type, height, religion, drinks, how_jelly, ethnicity, pets, smokes
        // 28 %
        $userQuery_8  = User::where('orientation', $orientation)
            ->where('gender', $gender)
            ->where('looking_for', $looking_for)
            ->where('children', $children)
            ->where('drugs', $date_drug)
            ->where('email_verified_at', '!=', null)
            ->where('id', '!=', $user->id);

        // Removed - Education, eye_color, hair_color, zodiac_sign, activity_level, body_type, height, religion, drinks, how_jelly, ethnicity, pets, smokes, drugs
        // 22%
        $userQuery_9  = User::where('orientation', $orientation)
            ->where('gender', $gender)
            ->where('looking_for', $looking_for)
            ->where('children', $children)
            ->where('email_verified_at', '!=', null)
            ->where('id', '!=', $user->id);

        // Removed - Education, eye_color, hair_color, zodiac_sign, activity_level, body_type, height, religion, drinks, how_jelly, ethnicity, pets, smokes, drugs, children
        //17%
        $userQuery_10  = User::where('orientation', $orientation)
            ->where('gender', $gender)
            ->where('looking_for', $looking_for)
            ->where('email_verified_at', '!=', null)
            ->where('id', '!=', $user->id);

        // Removed - Education, eye_color, hair_color, zodiac_sign, activity_level, body_type, height, religion, drinks, how_jelly, ethnicity, pets, smokes, drugs, children, looking_for
        // 11%
        $userQuery_11  = User::where('orientation', $orientation)
            ->where('gender', $gender)
            ->where('email_verified_at', '!=', null)
            ->where('id', '!=', $user->id);

        $userQuery_12  = User::where('orientation', $orientation)
            ->where('gender', $gender)
            ->where('country', $country)
            ->where('email_verified_at', '!=', null)
            ->where('id', '!=', $user->id);

        // Checker
        if ($userQuery_1->exists()) {
            return view('user.match.matches', [
                'matches' => $userQuery_1->inRandomOrder()->get(),
                'accuracy' => '100%'
            ]);
        } elseif ($userQuery_2->exists()) {
            return view('user.match.matches', [
                'matches' => $userQuery_2->inRandomOrder()->get(),
                'accuracy' => '90%'
            ]);
        } elseif ($userQuery_3->exists()) {
            return view('user.match.matches', [
                'matches' => $userQuery_3->inRandomOrder()->get(),
                'accuracy' => '80%'
            ]);
        } elseif ($userQuery_4->exists()) {
            return view('user.match.matches', [
                'matches' => $userQuery_4->inRandomOrder()->get(),
                'accuracy' => '70%'
            ]);
        } elseif ($userQuery_5->exists()) {
            return view('user.match.matches', [
                'matches' => $userQuery_5->inRandomOrder()->get(),
                'accuracy' => '60%'
            ]);
        } elseif ($userQuery_6->exists()) {
            return view('user.match.matches', [
                'matches' => $userQuery_6->inRandomOrder()->get(),
                'accuracy' => '44%'
            ]);
        } elseif ($userQuery_7->exists()) {
            return view('user.match.matches', [
                'matches' => $userQuery_7->inRandomOrder()->get(),
                'accuracy' => '33%'
            ]);
        } elseif ($userQuery_8->exists()) {
            return view('user.match.matches', [
                'matches' => $userQuery_8->inRandomOrder()->get(),
                'accuracy' => '28%'
            ]);
        } elseif ($userQuery_9->exists()) {
            return view('user.match.matches', [
                'matches' => $userQuery_9->inRandomOrder()->get(),
                'accuracy' => '22%'
            ]);
        } elseif ($userQuery_10->exists()) {
            return view('user.match.matches', [
                'matches' => $userQuery_10->inRandomOrder()->get(),
                'accuracy' => '17%'
            ]);
        } elseif ($userQuery_11->exists()) {
            return view('user.match.matches', [
                'matches' => $userQuery_11->inRandomOrder()->get(),
                'accuracy' => '11%'
            ]);
        } elseif ($userQuery_12->exists()) {
            return view('user.match.matches', [
                'matches' => $userQuery_12->inRandomOrder()->get(),
                'accuracy' => '13%'
            ]);
        } else {
            return view('user.match.matches', [
                'matches' => [],
                'accuracy' => '0%'
            ]);
        }
    }

    public function delete(Matches $match)
    {
        $match->delete();
        return redirect(route('admin.dashboard'))->with('error', 'Match deleted');
    }
}
