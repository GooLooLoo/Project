<?php

use App\Http\Controllers\Front\DesignerController;
use Illuminate\Support\Facades\Route;
Route::group(["prefix"=>"designer"],function(){
    Route::get("/",[DesignerController::class,"list"]);
    Route::get("detail/{id}",[DesignerController::class,"detail"]);
    // Route::post("getNews",[NewsController::class,"getNews"]);
    // Route::get("detail/{id}",[NewsController::class,"detail"]);

});
// Route::get("/designer", [DesignerController::class, "list"]);
