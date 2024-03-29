<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurProductsController extends Controller
{
    public function index(){
        return view('survey.our_products');
    }
}
