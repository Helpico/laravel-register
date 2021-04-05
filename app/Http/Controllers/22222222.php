<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailShipped;
use Mail;
use App\Jobs\BlogPostAfterCreateJob;


class ContactController extends Controller
{
    public function contact()
    {
        return view('contact-us');
    }


    
    public function shipEmail(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'email' => 'required|email',
            'msg' => 'required|max:255|min:5'
        ]);
    
        // The blog post is valid...

            $details = [
                'first_name' => $request->first_name,
                'email' => $request->email,
                'msg' => $request->msg,
                'asap' => $request->asap
            ];
            

            Mail::to('functionnel.com@gmail.com')->send(new MailShipped($details));

            return redirect()->route('contact.create')
                ->with('message_sent', 'Your message has been sent successfully!');
                
    }
}


// $job = new BlogPostAfterCreateJob($msg);
// $this->dispatch($job);