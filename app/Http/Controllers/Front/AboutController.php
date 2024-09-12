<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\About\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function list(){
        $about= About::get();
        return view("front.about",compact("about"));
    }

}
