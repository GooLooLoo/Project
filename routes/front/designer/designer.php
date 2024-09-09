<?php

use App\Http\Controllers\Front\DesignerController;
use Illuminate\Support\Facades\Route;

Route::get("/designer", [DesignerController::class, "list"]);
