<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }
    public function trainers(){
        return view('trainers');
    }
    public function gallery(){
        return view('gallery');
    }
    public function certification(){
        return view('certificate');
    }
    public function course(){
        return view('courses');
    }

}
