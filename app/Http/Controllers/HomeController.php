<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $sett = Setting::all() ; 
        $setting = "" ; 

        if(Setting::count() == 0){
            $setting = "set" ; 
        }
        else{

            $setting = $sett[0] ; 
        }


        return view('survey.home', compact('setting')) ; 
    }
}
