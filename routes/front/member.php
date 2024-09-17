<?php

use App\Http\Controllers\Front\MemberController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix"=>"member"],function(){
    Route::post("login",[MemberController::class,"login"]);
    Route::post("logout",[MemberController::class,"logout"]);
    Route::post("chkUserName",[MemberController::class,"chkUserName"]);
    Route::post("register",[MemberController::class,"register"]);
    Route::post("reserve",[MemberController::class,"reserve"]);
});