<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Gallery;
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
        $data = Gallery::where('status',1)->get();
        return view('gallery',['data'=>$data]);
    }
    public function certification(){
        $data = Certificate::where('status',1)->get();
        return view('certificate',['data'=>$data]);
    }
    public function course(){
        return view('courses');
    }

}
