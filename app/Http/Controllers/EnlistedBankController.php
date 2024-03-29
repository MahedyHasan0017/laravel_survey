<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnlistedBankController extends Controller
{
    public function index(){
        return view('survey.enlisted_bank');
    }
}
