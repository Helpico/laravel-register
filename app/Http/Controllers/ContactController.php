<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\MailShipped;
use App\Jobs\BlogPostAfterCreateJob;
use App\Jobs\SendNotification;

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
            'email_contact' => 'required|email',
            'msg_contact' => 'required|max:255|min:5'
        ]);
    
        // The blog post is valid...
        
            $details = [
                'first_name' => $request->first_name,
                'email_contact' => $request->email_contact,
                'msg_contact' => $request->msg_contact,
                'asap' => $request->asap
            ];
            
            $contactInfo = new MailShipped($details);

            // $this->dispatch(new BlogPostAfterCreateJob($contactInfo));
            // BlogPostAfterCreateJob::dispatch($contactInfo)->delay(now()->addMinutes(1));
            BlogPostAfterCreateJob::dispatchAfterResponse($contactInfo);
            
            return redirect()->route('contact.create')
                ->with('message_sent', 'Your message has been sent successfully!');

    }
}
