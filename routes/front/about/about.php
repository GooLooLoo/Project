<?php

use App\Http\Controllers\Front\AboutController;
use Illuminate\Support\Facades\Route;

Route::get("/about",[AboutController::class,"list"]);