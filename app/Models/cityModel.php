<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cityModel extends Model
{
    public $timestamps = false;
    protected $table = "city";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "name",
        "locationX",
        "locationy",
    ];

}
