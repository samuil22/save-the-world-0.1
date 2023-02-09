<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;
class ContactController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function sendEmail(Request $request){
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];
        Mail::to('samiulofficial22@gmail.com')->send(new ContactMail($details));
        return back()->with('message_send','your message has been send successfully');
    }
}
