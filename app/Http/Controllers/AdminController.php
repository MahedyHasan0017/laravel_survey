<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminLogin;
use App\Http\Requests\AdminRegister;
use App\Models\Admin;
use App\Models\Setting;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){

        $id = Auth::guard('admin')->id() ; 

        $user = Admin::find($id) ; 
        return view('survey_admin.admin_dashboard' , compact('user')); 
    }
    public function login_view(){

        $sett = Setting::all() ; 

        $setting = $sett[0] ; 
        return view('survey.login', compact('setting'));
       
    }
    public function login_store(Request $request){

        $check = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

       
        
        if(Auth::guard('admin')->attempt($check)){
            return redirect()->route('admin_dashboard') ;
        }
        else{
            toastr()->error('Invalid Credentials');
            return back();
            // return redirect()->route('admin_register_view');
        }


    }
    public function register_view(){
        $sett = Setting::all() ; 

        $setting = $sett[0] ; 
        return view('survey.register', compact('setting')); 
    }
    public function register_store(AdminRegister $request){
       
        // dd($request->all());

        $validatedData = $request->validated() ; 

        Admin::insert([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'] ,
            'password' => Hash::make($validatedData['password'] )
        ]);

        toastr()->success('User Register Successfully');

        return redirect()->route('admin_login_view');

    }


    public function logout(){

        Auth::guard('admin')->logout();
        toastr()->success("Logged out");
        return redirect()->route('admin_login_view');
       
    }
}
