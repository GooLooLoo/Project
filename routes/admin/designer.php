<?php

use App\Http\Controllers\Admin\Designer\AdminDesignerController;
use Illuminate\Support\Facades\Route;

Route::group(["middleware" => "manager", "prefix" => "admin/designer"], function () {
    Route::get("list", [AdminDesignerController::class, "list"]);
    Route::get("add", [AdminDesignerController::class, "add"]);
    Route::get("edit/{id}", [AdminDesignerController::class, "edit"]);
    Route::post("insert", [AdminDesignerController::class, "insert"]);
    Route::post("update", [AdminDesignerController::class, "update"]);
    Route::post("delete", [AdminDesignerController::class, "delete"]);
    Route::post("saveImg", [AdminDesignerController::class, "saveImg"]);
});
