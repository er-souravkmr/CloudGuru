<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Gather the form data
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];
        // dd($data);
        // Send the email
        Mail::send('mail_view', $data, function($message) use ($data) {
            $message->to('er.souravkmr@gmail.com') 
                    ->subject('Contact Form Submission');
            $message->from("training@cloudguru.co.in", "Cloud Guru");
        });

        // Redirect back with a success message
        return redirect()->route('contact.submit')->with('success', 'Thank you for contacting us!');
    }
}
