<?php

use App\Http\Controllers\Admin\Reserve\AdminReserveController;
use Illuminate\Support\Facades\Route;

Route::group(["middleware" => "manager", "prefix" => "admin/reserve"], function () {
    Route::get("getDateNum", [AdminReserveController::class, "getDateNum"]);
});