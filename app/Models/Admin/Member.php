<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Member extends Model
{
    public $timestamps = false;
    protected $table = "member";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "userName",
        "password",
        "email",
        "location",
        "level",
        "active",
        "createTime"
    ];

    public function getMember($userName, $password)
    {
        $mamber = self::where("userName", $userName)->where("password", $password)->first();
        return $mamber;
    }
    // 確認使用者名稱是否存在
    public function getUserName($req)
    {
        $list = self::where("userName", $req)->get();
        return $list;
    }

    public function getLocation()
    {
        $list = DB::table('member')
            ->join('city', 'member.location', '=', 'city.name')
            ->select('city.name as location', DB::raw('count(*) as count'), 'city.locationX', 'city.locationY')
            ->groupBy('city.name', 'city.locationX', 'city.locationY')
            ->get();
        return $list;
    }
}
