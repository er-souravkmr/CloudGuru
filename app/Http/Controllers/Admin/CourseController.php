<?php

namespace App\Http\Controllers\Admin;

use App\Models\Courses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class CourseController extends Controller
{
    public function index(){

        $data = Courses::get();

        return view('admin.course.course',['course'=>$data]);
    }
    
    public function create(){
        return view("admin.course.course_create");
    }

    public function store(Request $request){

        // dd($request);
        $request->validate([
            'title'=> 'required|max:32',
            'status'=> 'required'
        ]);

        $course = new Courses();

        $course->courses = $request->input('title');
        $course->status = $request->input('status');
        $course->save();

        return redirect('admin/course')->with("message","Saved Successfully");

    }

    public function edit($id){

        $course = Courses::where("id", $id)->first();
        // dd($course);
        return view('admin.course.course_edit',['course'=>$course]);
    }   

    public function update(Request $request){

        $request->validate([
            'title'=> 'required|max:32',
            'status'=> 'required'
        ]);
        
        $id = $request->id;

        $course =  Courses::where('id',$id)->first();

        $course->courses = $request->input('title');
        $course->status = $request->input('status');
        $course->save();   

        return redirect('admin/course')->with('message',"Updated Successfully");
    }

    public function delete($id){

        if($id != null){
            Courses::where('id',$id)->delete();
        }
        return redirect('admin/course')->with("message","Deleted Successfully");
    }

    
}
