<?php

use App\Http\Controllers\Admin\About\AboutController;
use Illuminate\Support\Facades\Route;

Route::group(["middleware" => "manager", "prefix" => "admin/about"], function () {
    Route::get("list", [AboutController::class, "list"]);
    Route::get("add", [AboutController::class, "add"]);
    Route::get("edit/{id}", [AboutController::class, "edit"]);
    Route::post("insert", [AboutController::class, "insert"]);
    Route::post("update", [AboutController::class, "update"]);
    Route::post("delete", [AboutController::class, "delete"]);
    Route::post("saveImg", [AboutController::class, "saveImg"]);
});
