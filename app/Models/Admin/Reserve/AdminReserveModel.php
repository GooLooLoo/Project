<?php

namespace App\Models\Admin\Reserve;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminReserveModel extends Model
{
    public $timestamps = false;
    protected $table = "reserve";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "date",
        "designer",
        "phone",
        "remark",
        "createTime"
    ];

    public function getCreateTime(){
        // selet createTime from reserve where createTime = to_days(now()),Carbon::now()

        $date = self::selectRaw("YEAR(createTime) AS year,MONTH(createTime) AS month,DAY(createTime) as day")->orderby("createTime", "DESC")->get();
        // $date = self::selectRaw("YEAR(createTime) AS year,MONTH(createTime) AS month,DAY(createTime) as day")->orderby("day", "DESC")->get();
        // $date = self::whereYear('createTime','=',$year)->whereMonth('createTime','=',$month)->get();
        // $num= self::selectRaw("COUNT(createTime)")->where(,"DAY(createTime)")->get();
        return $date;
    }
}
