<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Enquire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnquireController extends Controller
{
    public function index(){
        
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

        // dd($enquire);
        return redirect('/')->with('success','Enquired Successfully');

    }
}
