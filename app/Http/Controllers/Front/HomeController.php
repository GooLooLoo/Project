<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\AdminBannerPhoto;
use App\Models\Admin\Designer\AdminDesignerModal;
use App\Models\Admin\Home\AdminHomeModel;
use App\Models\Admin\News\AdminNewsModel;
use App\Models\Admin\Product\AdminProductModal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function list()
    {
        $home = AdminHomeModel::get();
        $BannerPhoto = AdminBannerPhoto::get();
        $about = (new AdminHomeModel)->getList(2);
        $news = (new AdminHomeModel)->getList(3);
        $newsContent = AdminNewsModel::get();
        $designer = (new AdminHomeModel)->getList(4);
        $designerContent = AdminDesignerModal::get()->take(3);
        $product = (new AdminHomeModel)->getList(5);
        $productContent = AdminProductModal::get()->take(5);
        $data = [
            "BannerPhoto",
            "about",
            "news",
            "newsContent",
            "designer",
            "designerContent",
            "product",
            "productContent"
        ];
        return view("front.homePage", compact($data));
    }
}
