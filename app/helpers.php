<?php

use App\Models\Courses;

if(!function_exists('getCoursesWithSubCourses')){
    function getCoursesWithSubCourses(){
        $course =Courses::with('subcourses')->get();
        return $course ;
    }
}