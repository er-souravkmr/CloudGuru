<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Enquire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class EnquireController extends Controller
{
    public function index(){
        return  view("admin.enquire.enquire");
    }
    public function submit(Request $request){


        $request->validate([

            'name'=> 'required|max:32',
            'email'=> 'required|email',
            'phone'=> 'required|max:12',
            'course'=> 'required'

        ]);

        $enquire = new Enquire();

        $enquire->name = $request->input('name');
        $enquire->number = $request->input('phone');
        $enquire->email = $request->input('email');
        $enquire->course = $request->input('course');
        $enquire->save();

         // Gather the form data
         $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'course' => $request->input('course'),
        ];
  
        // Send the email
        Mail::send('mail_enquire', $data, function($message) use ($data) {
            $message->to('support@aarohitech.com') 
                    ->subject('Contact Form Submission');
            $message->from("training@cloudguru.co.in", "Cloud Guru");
        });


        // dd($enquire);
        return redirect('/')->with('success','Thanks for Contacting us. We will back to you Shortly.');

    }
}
