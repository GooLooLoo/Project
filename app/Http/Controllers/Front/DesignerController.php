<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesignerController extends Controller
{
    public function list(){
        return view("front.designer");
    }
}
