<?php

use App\Http\Controllers\Admin\AdminBannerPhotoController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\BannerPhotoController;
use Illuminate\Support\Facades\Route;

Route::group(["middleware" => "manager", "prefix" => "admin/home/"], function () {
    Route::group(["prefix" => "title"], function () {
        Route::get("list", [AdminHomeController::class, "list"]);
        Route::get("add", [AdminHomeController::class, "add"]);
        Route::get("edit/{id}", [AdminHomeController::class, "edit"]);
        Route::post("insert", [AdminHomeController::class, "insert"]);
        Route::post("delete", [AdminHomeController::class, "delete"]);
        Route::post("saveImg", [AdminHomeController::class, "saveImg"]);
    });

    Route::group(["prefix" => "bannerPhoto"], function () {
        Route::get("list", [AdminBannerPhotoController::class, "list"]);
        Route::get("add", [AdminBannerPhotoController::class, "add"]);
        Route::post("insert", [AdminBannerPhotoController::class, "insert"]);
        Route::post("delete", [AdminBannerPhotoController::class, "delete"]);
        Route::post("status", [AdminBannerPhotoController::class, "status"]);
        Route::post("saveImg", [AdminBannerPhotoController::class, "saveImg"]);
    });
});
