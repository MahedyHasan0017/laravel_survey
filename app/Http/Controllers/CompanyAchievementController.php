<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyAchievementController extends Controller
{
    public function index(){
        return view('survey.company_achievement');
    }
}
