<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomainCheckerController extends Controller
{
    public function index(){
        return view('front.domain_checker');
    }
}