<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class AdminBannerPhoto extends Model
{
    public $timestamps = false;
    protected $table = "banner_photo";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "photo",
        "active",
        "createTime"
    ];
}
