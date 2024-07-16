<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Trainer;
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
        $data = Trainer::where('status',1)->get();
        return view('trainers',['data'=>$data]);
    }
    public function gallery(){
        return view('gallery');
    }
    public function certification(){
        $data = Certificate::where('status',1)->get();
        return view('certificate',['data'=>$data]);
    }
    public function course(){
        return view('courses');
    }

}
