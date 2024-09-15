<?php

namespace App\Models\Admin\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminHomeModel extends Model
{
    public $timestamps = false;
    protected $table = "home";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "title",
        "titleEng",
        "photo",
        "url",
        "createTime"
    ];

    public function getList($id)
    {
        // self:此資料表, "::" : 表示static靜態
        $list = self::where("id", $id)->first();
        return $list;
    }
}
