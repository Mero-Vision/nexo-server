<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\SupportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.index');
});

Route::get('about-us',[AboutUsController::class,'index']);
Route::get('support',[SupportController::class,'index']);
Route::get('network',[NetworkController::class,'index']);