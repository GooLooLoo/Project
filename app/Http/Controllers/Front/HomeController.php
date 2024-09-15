<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\AdminBannerPhoto;
use App\Models\Admin\Home\AdminHomeModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function list()
    {
        $BannerPhoto = AdminBannerPhoto::get();
        $about = (new AdminHomeModel)->getList(2);
        $news = (new AdminHomeModel)->getList(3);
        $desinger = (new AdminHomeModel)->getList(4);
        $product = (new AdminHomeModel)->getList(5);
        $data = [
            "BannerPhoto",
            "about",
            "news",
            "desinger",
            "product"
        ];
        return view("front.homePage", compact($data));
    }
}
