<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MissionAndVissionController extends Controller
{
    public function index(){
        return view('survey.mission_and_vision');
    }
}
