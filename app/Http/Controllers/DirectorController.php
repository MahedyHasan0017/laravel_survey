<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function index(){
        $sett = Setting::all() ; 

        $setting = $sett[0] ; 
        return view('survey.director_panel', compact('setting'));
    }
}
