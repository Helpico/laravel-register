<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;


class ContactController extends Controller
{
    public function contact()
    {
        return view('contact-us');
    }


    
    public function sendEmail(Request $request)
    {
     
        $rules = [
            'first_name' => 'required',
            'email' => 'required|email',
            'msg' => 'required|max:255|min:5'
        ];

        $validatedData = $this->validate($request, $rules);
        
        $details = [
            'first_name' => $request->first_name,
            'email' => $request->email,
            'msg' => $request->msg
        ];

      


        Mail::to('functionnel.com@gmail.com')->send(new ContactMail($details));
        
        return redirect()->route('contact.create')
            ->with('message_sent', 'Thanks for contacting us!');
        
    }
         
}
