<?php

namespace App\Models\Admin\Designer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminDesignerModal extends Model
{
    public $timestamps = false;
    protected $table = "designer";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "name",
        "photo",
        "expertise",
        "introduce",
        "createTime"
    ];
}
