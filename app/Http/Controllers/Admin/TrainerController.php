<?php

namespace App\Http\Controllers\Admin;

use App\Models\Trainer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class TrainerController extends Controller
{
    public function index()
    {
        $data = Trainer::get();
        return view('admin.trainer.trainer',['trainer'=>$data]);
    }

    public function create()
    { 
        return view("admin.trainer.trainer_create");
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:32',
            'designation' => 'required|max:32',
            'status' => 'required',
        ]);

        $course = new Trainer();

        $course->name = $request->input('name');
        $course->designation = $request->input('designation');
        $course->status = $request->input('status');


        if ($request->hasFile('trainer_image')) {
            $file = $request->file('trainer_image');
            $fileName = time() . rand(1, 999999) . '.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/trainer');
            $file->move($path, $fileName);
            $course->image = $fileName;
        }

        $course->save();

        return redirect('admin/trainer')->with("message", "Saved Successfully");

    }
    public function edit($id)
    {
        $trainer = Trainer::where("id", $id)->first();
        return view('admin.trainer.trainer_edit', ['trainer' => $trainer]);
    }

    public function update(Request $request)
    {        
        $request->validate([
            'name' => 'required|max:32',
            'designation' => 'required|max:32',
            'status' => 'required',
        ]);

        $course =  Trainer::find($request->id);

        $course->name = $request->input('name');
        $course->designation = $request->input('designation');
        $course->status = $request->input('status');

        if ($request->hasFile('trainer_image')) {

            $oldFilePath = public_path('uploads/trainer/' . $course->image);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }

            $file = $request->file('trainer_image');
            $fileName = time() . rand(1, 999999) . '.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/trainer');
            $file->move($path, $fileName);
            $course->image = $fileName;
        }

        if(isset($course->image)){
            $oldFilePath = public_path('uploads/trainer' . $course->image);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        $course->save();

        return redirect('admin/trainer')->with("message", "Updated Successfully");
    }

    public function delete(Request $request)
    {
        Trainer::where('id', $request->id)->delete();
        return redirect('admin/trainer')->with("message", "Deleted Successfully");
    }

}
