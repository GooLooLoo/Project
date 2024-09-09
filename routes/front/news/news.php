<?php

use App\Http\Controllers\Front\NewsController;
use Illuminate\Support\Facades\Route;

Route::get("/news",[NewsController::class,"list"]);