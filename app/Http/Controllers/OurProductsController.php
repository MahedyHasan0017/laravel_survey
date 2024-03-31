<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OurProductsController extends Controller
{
    public function index(){

        $sett = Setting::all() ; 
        $setting = $sett[0] ; 
        return view('survey.our_products', compact('setting'));
    }

    public function our_product(){

        $id = Auth::guard('admin')->id() ; 
        $user = Admin::find($id) ; 

        return view('survey_admin.admin_our_product' , compact('user')) ; 

    }

}
