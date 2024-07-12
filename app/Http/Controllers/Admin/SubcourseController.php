<?php

namespace App\Http\Controllers\Admin;

use App\Models\Courses;
use App\Models\Subcourse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class SubcourseController extends Controller
{
    public function index()
    {
        return view('admin.subcourse.subcourse');
    }

    public function create()
    {
        $data = Courses::get();
        return view("admin.subcourse.subcourse_create", ['data' => $data]);
    }

    public function store(Request $request)
    {

        // dd($request);
        $request->validate([
            'name' => 'required|max:32',
            'description' => 'required',
            'sub_description' => 'required',
            'course_id' => 'required',
            'status' => 'required',
            'course_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $course = new Subcourse();

        $course->course = $request->input('name');
        $course->description = $request->input('description');
        $course->subdesc = $request->input('sub_description');
        $course->course_id = $request->input('course_id');
        $course->status = $request->input('status');


        if ($request->hasFile('course_image')) {
            $file = $request->file('course_image');
            $fileName = time() . rand(1, 999999) . '.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/subcourse');
            $file->move($path, $fileName);
            $course->image = $fileName;
        }

        $course->save();

        return redirect('admin/subcourse')->with("message", "Saved Successfully");

    }

    public function show()
    {
        $query = Subcourse::select('*');
        $data = $query->get();

        return DataTables::of($data)
            ->addColumn('action', '
            <div class="d-inline-flex">
                <a class="pr-1 dropdown-toggle hide-arrow text-primary" data-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" style="color:#28C76F" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-small-4">
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="5" r="1"></circle>
                        <circle cx="12" cy="19" r="1"></circle>
                    </svg>
                </a>
            <div class="dropdown-menu dropdown-menu-right">
            <a href="{{route("subcourse.edit" ,["id" => $id])}}"
            <button  class="dropdown-item w-100">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text mr-50 font-small-4">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                    <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
                    Edit
            </button> </a>
            <a href="javascript:;" class="dropdown-item delete-record" onclick="deleteItem({{$id}})">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 mr-50 font-small-4">
                    <polyline points="3 6 5 6 21 6"></polyline>
                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    <line x1="10" y1="11" x2="10" y2="17"></line>
                    <line x1="14" y1="11" x2="14" y2="17"></line>
                </svg>
                    Delete
            </a> 
        </div>
    </div>')

            ->addColumn('created_at', function ($raw) {
                return $raw->created_at->diffForHumans();
            })

            ->editColumn('status', function ($raw) {

                return '<select onchange="changeStatus(' . $raw->id . ', this)" class="badge badge-glow badge-success">
                        <option ' . ($raw->status == 1 ? "selected" : "") . ' value="1"> Active </option>
                        <option ' . ($raw->status == 0 ? "selected" : "") . ' value="0"> InActive </option>
                    </select>';
            })

            ->rawColumns(['action', 'status', 'created_at'])
            ->make(true);
    }

    public function edit($id)
    {

        $course = Subcourse::where("id", $id)->first();
        $data = Courses::get();
        return view('admin.subcourse.subcourse_edit', ['course' => $course, 'data' => $data]);
    }

    public function update(Request $request)
    {        
        $request->validate([
            'name' => 'required|max:32',
            'description' => 'required',
            'sub_description' => 'required',
            'course_id' => 'required',
            'status' => 'required',
        ]);

        $course =  Subcourse::find($request->id);

        $course->course = $request->input('name');
        $course->description = $request->input('description');
        $course->subdesc = $request->input('sub_description');
        $course->course_id = $request->input('course_id');
        $course->status = $request->input('status');

        
        
        if ($request->hasFile('course_image')) {

            $oldFilePath = public_path('uploads/subcourse/' . $course->image);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }

            $file = $request->file('course_image');
            $fileName = time() . rand(1, 999999) . '.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/subcourse');
            $file->move($path, $fileName);
            $course->image = $fileName;
        }

        if(isset($course->image)){
            $oldFilePath = public_path('uploads/subcourse' . $course->image);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        $course->save();

        return redirect('admin/subcourse')->with("message", "Updated Successfully");
    }

    public function delete(Request $request)
    {
        Subcourse::where('id', $request->id)->delete();
        return redirect('admin/subcourse')->with("message", "Deleted Successfully");
    }


    public function changeStatus(Request $request)
    {
        $status = SubCourse::where('id', $request->id)->first();
        $status->status = $request->status;
        $status->save();
        return redirect(route('subcourse'))->with('message', 'Status Changed');
    }
}
