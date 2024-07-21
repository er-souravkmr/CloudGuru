<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function index()
    {
        $data = Company::get();
        return view('admin.company.company',['company'=>$data]);
    }

    public function create()
    { 
        return view("admin.company.company_create");
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:32',
            'status' => 'required',
        ]);

        $cert = new Company();
        $cert->name = $request->input('name');
        $cert->status = $request->input('status');


        if ($request->hasFile('company_image')) {
            $file = $request->file('company_image');
            $fileName = time() . rand(1, 999999) . '.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/company');
            $file->move($path, $fileName);
            $cert->image = $fileName;
        }

        $cert->save();

        return redirect('admin/company')->with("message", "Saved Successfully");

    }
    public function edit($id)
    {
        $company = Company::where("id", $id)->first();
        return view('admin.company.company_edit', ['company' => $company]);
    }

    public function update(Request $request)
    {        
        $request->validate([
            'name' => 'required|max:32',
            'status' => 'required',
        ]);

        $cert =  Company::find($request->id);

        $cert->name = $request->input('name');
        $cert->status = $request->input('status');

        if ($request->hasFile('company_image')) {

            $oldFilePath = public_path('uploads/company/' . $cert->image);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }

            $file = $request->file('company_image');
            $fileName = time() . rand(1, 999999) . '.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/company');
            $file->move($path, $fileName);
            $cert->image = $fileName;
        }

        if(isset($cert->image)){
            $oldFilePath = public_path('uploads/company' . $cert->image);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        $cert->save();

        return redirect('admin/company')->with("message", "Updated Successfully");
    }

    public function delete(Request $request)
    {
        Company::where('id', $request->id)->delete();
        return redirect('admin/company')->with("message", "Deleted Successfully");
    }
}
