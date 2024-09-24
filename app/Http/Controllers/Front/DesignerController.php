<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Designer\AdminDesignerModal as Designer;
use Illuminate\Http\Request;

class DesignerController extends Controller
{
    public function list()
    {
        $list = Designer::get();
        return view("front.designer", compact("list"));
    }

    public function detail(Request $req)
    {
        $designer = Designer::find($req->id);

        return view("front.designer.detail", compact("designer"));
    }
}
