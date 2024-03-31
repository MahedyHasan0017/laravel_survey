<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class EnlistedBankController extends Controller
{
    public function index(){
        $sett = Setting::all() ; 

        $setting = $sett[0] ; 
        return view('survey.enlisted_bank', compact('setting'));
    }
}
