<?php

use App\Models\Company;
use App\Models\Courses;
use App\Models\Subcourse;

if(!function_exists('getCoursesWithSubCourses')){
    function getCoursesWithSubCourses(){
        $course =Courses::with('subcourses')->get();
        return $course ;
    }
}
if(!function_exists('getCourse')){
    function getCourse(){
        $course = Subcourse::where('status',1)->limit(8)->get();
        return $course ;
    }
}

if(!function_exists('getPartner')){
    function getPartner(){
        $course = Company::where('status',1)->limit(8)->get();
        return $course ;
    }
}
