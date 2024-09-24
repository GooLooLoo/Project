<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\News\AdminNewsModel as News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function list()
    {
        $year = (new News())->getYearList();
        $month = (new News())->getMonthList();
        // $list = News::get();
        return view("front.news", compact("year","month"));
    }

    public function getNews(Request $req)
    {
        // 依查詢條件取得最新消息
        $list = (new News())->getDataList($req->year,$req->month);
        return view("front.news.news", compact("list"));
    }

    public function detail(Request $req){
        $news = News::find($req->id);

        return view("front.news.detail",compact("news"));
    }
}
