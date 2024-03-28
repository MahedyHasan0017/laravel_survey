<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return "dashboard"; 
    }
    public function login_view(){
        return "login"; 
    }
    public function login_store(){
        return "login"; 
    }
    public function register_view(){
        return "register"; 
    }
    public function register_store(){
        return "register"; 
    }
}
