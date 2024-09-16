<?php

use App\Http\Controllers\Admin\News\AdminNewsController;
use Illuminate\Support\Facades\Route;

Route::group(["middleware" => "manager", "prefix" => "admin/news"], function () {
    Route::get("list", [AdminNewsController::class, "list"]);
    Route::get("add", [AdminNewsController::class, "add"]);
    Route::get("edit/{id}", [AdminNewsController::class, "edit"]);
    Route::post("insert", [AdminNewsController::class, "insert"]);
    Route::post("update", [AdminNewsController::class, "update"]);
    Route::post("delete", [AdminNewsController::class, "delete"]);
    Route::post("saveImg", [AdminNewsController::class, "saveImg"]);
});
