<?php

use App\Http\Controllers\Admin\About\AboutController;
use App\Http\Controllers\Admin\BannerPhotoController;
use Illuminate\Support\Facades\Route;

Route::group(["middleware" => "manager", "prefix" => "admin/home/bannerPhoto"], function () {
    Route::get("list", [BannerPhotoController::class, "list"]);
    Route::get("add", [BannerPhotoController::class, "add"]);
    Route::post("insert", [BannerPhotoController::class, "insert"]);
    Route::post("delete", [BannerPhotoController::class, "delete"]);
    Route::post("saveImg", [BannerPhotoController::class, "saveImg"]);
});