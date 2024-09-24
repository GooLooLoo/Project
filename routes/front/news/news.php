<?php

use App\Http\Controllers\Front\NewsController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix"=>"news"],function(){
    Route::get("/",[NewsController::class,"list"]);
    Route::post("getNews",[NewsController::class,"getNews"]);
    Route::get("detail/{id}",[NewsController::class,"detail"]);

});
// Route::get("/news",[NewsController::class,"list"]);
// Route::get("/news/getNews",[NewsController::class,"getNews"]);
