<?php

use App\Http\Controllers\Admin\Member\AdminMemberController;
use Illuminate\Support\Facades\Route;

Route::group(["middleware" => "manager", "prefix" => "admin/member"], function () {
    Route::get("list", [AdminMemberController::class, "list"]);
    Route::get("add", [AdminMemberController::class, "add"]);
    Route::get("edit/{id}", [AdminMemberController::class, "edit"]);
    Route::post("insert", [AdminMemberController::class, "insert"]);
    Route::post("update", [AdminMemberController::class, "update"]);
    Route::post("saveImg", [AdminMemberController::class, "saveImg"]);
    Route::get("getLocationNum", [AdminMemberController::class, "getLocationNum"]);
    
});