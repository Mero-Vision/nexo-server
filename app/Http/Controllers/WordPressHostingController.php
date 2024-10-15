<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordPressHostingController extends Controller
{
    public function index(){
        return view('front.wordpress_hosting');
    }
}