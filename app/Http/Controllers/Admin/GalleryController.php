<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index()
    {
        $data = Gallery::get();
        return view('admin.gallery.gallery',['gallery'=>$data]);
    }

    public function create()
    { 
        return view("admin.gallery.gallery_create");
    }

    public function store(Request $request)
    {

        $request->validate([
            'status' => 'required',
        ]);

        $gallery = new Gallery();
        $gallery->status = $request->input('status');


        if ($request->hasFile('gallery_image')) {
            $file = $request->file('gallery_image');
            $fileName = time() . rand(1, 999999) . '.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/gallery');
            $file->move($path, $fileName);
            $gallery->image = $fileName;
        }

        $gallery->save();

        return redirect('admin/gallery')->with("message", "Saved Successfully");

    }
    public function edit($id)
    {
        $gallery = Gallery::where("id", $id)->first();
        return view('admin.gallery.gallery_edit', ['gallery' => $gallery]);
    }

    public function update(Request $request)
    {        
        $request->validate([
            'status' => 'required',
        ]);

        $gallery =  Gallery::find($request->id);


        $gallery->status = $request->input('status');

        if ($request->hasFile('gallery_image')) {

            $oldFilePath = public_path('uploads/gallery/' . $gallery->image);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }

            $file = $request->file('gallery_image');
            $fileName = time() . rand(1, 999999) . '.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/gallery');
            $file->move($path, $fileName);
            $gallery->image = $fileName;
        }

        if(isset($gallery->image)){
            $oldFilePath = public_path('uploads/gallery' . $gallery->image);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        $gallery->save();

        return redirect('admin/gallery')->with("message", "Updated Successfully");
    }

    public function delete(Request $request)
    {
        Gallery::where('id', $request->id)->delete();
        return redirect('admin/gallery')->with("message", "Deleted Successfully");
    }
}
