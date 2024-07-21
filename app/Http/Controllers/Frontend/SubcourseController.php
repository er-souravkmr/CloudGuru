<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Company;
use App\Models\Subcourse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubcourseController extends Controller
{
    public function index(Request $request){
        $id = $request->id;
        $subcourse = Subcourse::where('id',$id)->first();
        $company = Company::get();
        // dd($company);

        return view('courses',['subcourse' => $subcourse ,'company'=>$company]);
    }
}
