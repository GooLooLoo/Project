<?php

namespace App\Models\Admin\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProductModal extends Model
{
    public $timestamps = false;
    protected $table = "product";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "name",
        "introduceShort",
        "introduce",
        "photo",
        "number",
        "price",
        "active",
        "createTime"
    ];
}
