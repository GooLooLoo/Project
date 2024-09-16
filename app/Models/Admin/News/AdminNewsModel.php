<?php

namespace App\Models\Admin\News;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
