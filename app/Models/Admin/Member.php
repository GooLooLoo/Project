<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
