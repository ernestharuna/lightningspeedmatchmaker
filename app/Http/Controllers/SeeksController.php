<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Seeks;
use Illuminate\Http\Request;

class SeeksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = auth()->user();
        $seeks = $user->seeks;
        return view('user.seeks.index', compact('seeks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $user = auth()->user()->users;
        return view('user.part-2.form5', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'gender' => 'sometimes|nullable',
            'sexual_orientation' => 'sometimes|nullable',
            'height' => 'sometimes|nullable',
            'body_type' => 'sometimes|nullable',
            'hair_color' => 'sometimes|nullable',
            'eye_color' => 'sometimes|nullable',
            'ethnicity' => 'sometimes|nullable',
            'religion' => 'sometimes|nullable',
            'zodiac_sign' => 'sometimes|nullable',
            'date_pet_owner' => 'sometimes|nullable',
            'date_drug' => 'sometimes|nullable',
            'date_drink' => 'sometimes|nullable',
            'date_smoker' => 'sometimes|nullable',
            'income' => 'sometimes|nullable',
        ]);

        $request->user()->seeks()->create($validate);
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seeks  $seek
     * @return \Illuminate\Http\Response
     */
    public function show(Seeks $seek)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seeks  $seek
     * @return \Illuminate\Http\Response
     */
    public function edit(Seeks $seek)
    {
        // return view('part-2.edit-form5');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seeks  $seek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seeks $seek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seeks  $seek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seeks $seek)
    {
        //
    }
}
