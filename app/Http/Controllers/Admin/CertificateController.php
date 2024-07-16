<?php

namespace App\Http\Controllers\Admin;

use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CertificateController extends Controller
{
    public function index()
    {
        $data = Certificate::get();
        return view('admin.certificate.certificate',['certificate'=>$data]);
    }

    public function create()
    { 
        return view("admin.certificate.certificate_create");
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:32',
            'status' => 'required',
        ]);

        $cert = new Certificate();
        $cert->name = $request->input('name');
        $cert->status = $request->input('status');


        if ($request->hasFile('certificate_image')) {
            $file = $request->file('certificate_image');
            $fileName = time() . rand(1, 999999) . '.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/certificate');
            $file->move($path, $fileName);
            $cert->image = $fileName;
        }

        $cert->save();

        return redirect('admin/certificate')->with("message", "Saved Successfully");

    }
    public function edit($id)
    {
        $certificate = Certificate::where("id", $id)->first();
        return view('admin.certificate.certificate_edit', ['certificate' => $certificate]);
    }

    public function update(Request $request)
    {        
        $request->validate([
            'name' => 'required|max:32',
            'status' => 'required',
        ]);

        $cert =  Certificate::find($request->id);

        $cert->name = $request->input('name');
        $cert->status = $request->input('status');

        if ($request->hasFile('certificate_image')) {

            $oldFilePath = public_path('uploads/certificate/' . $cert->image);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }

            $file = $request->file('certificate_image');
            $fileName = time() . rand(1, 999999) . '.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/certificate');
            $file->move($path, $fileName);
            $cert->image = $fileName;
        }

        if(isset($cert->image)){
            $oldFilePath = public_path('uploads/certificate' . $cert->image);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        $cert->save();

        return redirect('admin/certificate')->with("message", "Updated Successfully");
    }

    public function delete(Request $request)
    {
        Certificate::where('id', $request->id)->delete();
        return redirect('admin/certificate')->with("message", "Deleted Successfully");
    }
}
