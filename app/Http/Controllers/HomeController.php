<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Gallery;
use App\Models\Subcourse;
use App\Models\Trainer;
use App\Models\Certificate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = Subcourse::where('status',1)->limit(8)->get();
        $trainer = Trainer::where('status',1)->limit(4)->get();
        return view('index',['data'=>$data , 'trainer'=>$trainer]);
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
    public function placement(){
        $data = Company::where('status',1)->get();
        return view('certificate',['data'=>$data]);
    }
    public function contact(){
        return view('contact');
    }

}
