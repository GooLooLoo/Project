<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product\AdminProductModal as product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
        $list = product::get();
        return view("front.product",compact("list"));
    }
}
