<?php

namespace App\Models\Admin\News;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminNewsModel extends Model
{
    public $timestamps = false;
    protected $table = "news";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "title",
        "content",
        "photo",
        "activeDate",
        "active",
        "createTime"
    ];

    public function getYearList()
    {

        $list = self::selectRaw("YEAR(activeDate) AS year")->where("active","Y")->distinct()->get();
        return $list;
    }

    public function getMonthList()
    {
        $list = self::selectRaw("MONTH(activeDate) AS month")->where("active","Y")->distinct()->get();
        return $list;
    }

    public function getDataList($year, $month)
    {
        // where 1 = 1 一定成立
        // 在尚未選年份或類別前, where 1 = 1 即表示全部

        // $sql = DB::table("news")
        $sql = DB::table("news AS a")
            ->selectRaw("a.*");
        // ->join("news_type AS b", "a.typeId", "b.id")->where("b.lan", session()->get("lan"));
        // $sql = self::whereRaw("1 , 1");

        // 如果有選年份
        if (!empty($year)) {
            // 查詢條件加上年份 whereYear =  select * from news where YEAR(dates) = 年
            $sql->whereYear("activeDate", $year);
        }

        if (!empty($month)) {
            // 查詢條件加上年份 whereYear =  select * from news where MONTH(dates) = 年
            $sql->whereMonth("activeDate", $month);
        }

        // // 如果有選類別
        // if (!empty($typeId)) {
        //     // 查詢條件加上類別
        //     $sql->where("typeId", $typeId);
        // }

        // 將查詢條件依日期新舊排序後,設定給list
        $list = $sql->where("active","Y")->orderby("activeDate", "DESC")->get();

        // 回傳查詢結果
        return $list;
    }
}
