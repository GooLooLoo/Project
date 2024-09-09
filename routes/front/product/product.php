<?php

use App\Http\Controllers\Front\ProductController;
use Illuminate\Support\Facades\Route;

Route::get("/product",[ProductController::class,"list"]);