<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CloudHostingController;
use App\Http\Controllers\DomainCheckerController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\WebHostingController;
use App\Http\Controllers\WhoisController;
use App\Http\Controllers\WordPressHostingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.index');
});

Route::get('about-us',[AboutUsController::class,'index']);
Route::get('support',[SupportController::class,'index']);
Route::get('network',[NetworkController::class,'index']);
Route::get('web-hosting',[WebHostingController::class,'index']);
Route::get('cloud-hosting',[CloudHostingController::class,'index']);
Route::get('wordpress-hosting',[WordPressHostingController::class,'index']);
Route::get('domains',[DomainCheckerController::class,'index']);


Route::get('/whois', [WhoisController::class, 'index'])->name('whois.index');
Route::get('/check', [WhoisController::class, 'checkIndex']);
Route::post('check', [WhoisController::class, 'check']);