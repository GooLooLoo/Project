<?php

namespace App\Models\Admin\About;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAbout extends Model
{
    public $timestamps = false;
    protected $table = "about";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "title",
        "photo",
        "content",
        "createTime"
    ];

}
