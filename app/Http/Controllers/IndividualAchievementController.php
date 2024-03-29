<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndividualAchievementController extends Controller
{
    public function index(){
        return view('survey.individual_achievement');
    }
}
