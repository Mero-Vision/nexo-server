<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CloudHostingController extends Controller
{
    public function index(){
        return view('front.cloud_hosting');
    }
}