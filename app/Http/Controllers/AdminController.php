<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
class AdminController extends Controller
{
    public function index(){
        return view('survey_admin.admin_dashboard'); 
    }
    public function login_view(){
        return view('survey.login'); 
    }
    public function login_store(){
        return "login"; 
    }
    public function register_view(){
        return view('survey.register'); 
    }
    public function register_store(){
        return "register"; 
    }
}
