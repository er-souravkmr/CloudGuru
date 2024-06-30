<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Auth;

class AdminController extends Controller
{
    public function index(){
        return redirect('admin/dashboard');
    }
    public function login(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
                return view('admin.layouts.app');
            }else{
                return redirect()->back()->with("message","Invalid Email or Password");
            }
        }

        return view('auth.login');
    }
   
    public function register(Request $request){

        if($request->isMethod('post')){
            $request->validate([
                'name'=> 'required|max:32',
                'email'=> 'required|email',
                'password'=> 'required|min:8|max:12',
                'password_confirmation'=> 'required|min:8|max:12|same:password',
            ],[
                'name.required' =>'The name field is required',
                'email.required' =>'The email field is required',
                'password.required' =>'Password field is required and must be in between 8-12 characters',
                'password_confirmation.required' =>'Confirm Passsword should be same as Password',
            ]);
    
            $admin = new Admin();

            // dd($admin);
    
            $admin->name = $request->input('name');
            $admin->email = $request->input('email');
            $admin->password = Hash::make($request->input('password'));
            $admin->save();
    
            // dd($enquire);
            return view('auth.login');
        }

        return view('auth.register');
    }

    public function logout(){
        Auth::guard('admin')->logout(); // Logout from the 'admin' guard
        return redirect('admin/login');
    }
}