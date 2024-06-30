<?php

namespace App\Http\Controllers\Admin;

use App\Models\Enquire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class EnquireController extends Controller
{
    public function index(){

        $data = Enquire::get();

        return view('admin.enquire.enquire',['enquire'=>$data]);
    }
    public function edit(){

        // $data = Enquire::get();

        // return view('admin.enquire.enquire',['enquire'=>$data]);
    }
    public function show()
    {
        $query = Enquire::select('*');
      

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
            <a href="#"
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

            

            // ->editColumn('status', function ($raw) {

            //     return '<select onchange="changeStatus(' . $raw->id . ', this)" class="badge badge-glow badge-success">
            //             <option ' . ($raw->status == 1 ? "selected" : "") . ' value="1"> Active </option>
            //             <option ' . ($raw->status == 2 ? "selected" : "") . ' value="2"> InActive </option>
            //         </select>';
            // })

            ->rawColumns(['action',  'created_at'])
            ->make(true);
    }


    
}
