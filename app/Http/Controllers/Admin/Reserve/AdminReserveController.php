<?php

namespace App\Http\Controllers\Admin\Reserve;

use App\Http\Controllers\Controller;
use App\Models\Admin\Reserve\AdminReserveModel as reserve;
use Illuminate\Http\Request;

class AdminReserveController extends Controller
{
    public function getDateNum(){
        $list = (new reserve())->getCreateTime();
        return $list;
    }
}
