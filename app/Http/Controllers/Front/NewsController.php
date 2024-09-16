<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\News\AdminNewsModel as News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function list(){
        $list = News::get();
        return view("front.news",compact("list"));
    }
}
