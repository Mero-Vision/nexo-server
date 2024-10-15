<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebHostingController extends Controller
{
    public function index(){
        return view('front.web_hosting');
    }
}