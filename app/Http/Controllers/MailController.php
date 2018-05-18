<?php

namespace App\Http\Controllers;

use App\Http\Middleware\language;
use App\Mail\ContactMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function SendMail(Request $request){
        $info = $request->validate([
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'mail1' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'messages' => 'required',
        ]);

        Mail::to(User::where('admin', '=', '1')->get())->send(new ContactMail($info));

        return redirect()->back()->with(['message'=>__('page.Email Succeeded')]);
    }
}
