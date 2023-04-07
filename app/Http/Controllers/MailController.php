<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\NewsLetter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function create()
    {
        return view('admin.mailing.create');
    }

    public function sendMail(Request $request)
    {
        $users = User::where('email_verified_at', '!=', null)->get();

        $data = $request->validate([
            'title' => 'required|max:100',
            'content' => 'required'
        ]);

        try {
            foreach ($users as $user) {
                Mail::to($user->email)->send(new NewsLetter($data['title'], $data['content']));
            }
            return back()->with('status', 'Emails have been sent successfully');
        } catch (\Throwable $th) {
            return back()->with('error', "something went wrong \n $th");
        }

        // try {
        //     Mail::to("udwaghie@gmail.com")->send(new NewsLetter($data['title'], $data['content']));
        //     return back()->with('status', 'Emails have been sent successfully');
        // } catch (\Throwable $th) {
        //     return back()->with('error', "something went wrong \n $th");
        // }
    }
}
