<?php

namespace App\Http\Controllers\Admin\Designer;

use App\Http\Controllers\Controller;
use App\Models\Admin\Designer\AdminDesignerModal as designer;
use Illuminate\Support\Facades\Session;
use App\Models\Admin\Photo\Upload;
use Illuminate\Http\Request;

class AdminDesignerController extends Controller
{
    public function list()
    {
        $list = designer::get();
        return view("admin.designer.list", compact("list"));
    }

    public function add()
    {
        return view("admin.designer.add");
    }

    public function edit(Request $req)
    {
        $designer = designer::find($req->id);

        return view("admin.designer.edit", compact("designer"));
    }
    public function insert(Request $req)
    {
        $designer = new designer();
        $introduce = $req->introduce;
        // 如果有內容，將\n轉換為<br>
        if (!empty($introduce)) {
            $introduce = str_replace("\n", "<br>", $introduce);
        }
        if (!empty($req->photo)) {
            $fileName = (new Upload())->uploadPhoto($req->photo, "images/designer", false, true);
            $designer->photo = $fileName;
        }
        $designer->expertise = $req->expertise;
        $designer->name = $req->name;
        $designer->introduce = $introduce;

        $designer->save();
        Session::flash("message", "已新增");
        return redirect("/admin/designer/list");
    }

    public function update(Request $req)
    {
        $designer = designer::find($req->id);
        $introduce = $req->introduce;
        $expertise= $req->expertise;
        if (!empty($introduce)) {
            $introduce = str_replace("\n", "<br>", $introduce);
            $designer->introduce = $introduce;
        }

        if (!empty($expertise)) {
            $expertise = str_replace("\n", "<br>", $expertise);
            $designer->expertise = $expertise;
        }
        $photo = $req->photo;
        if (!empty($photo)) {
            $fileName = (new Upload())->uploadPhoto($req->photo, "images/designer", false, true);
            if (!empty($designer->photo)) {
                @unlink("images/designer" . $designer->photo);
                @unlink("images/designer/S/" . $designer->photo);
                @unlink("images/designer/M/" . $designer->photo);
            }
            $designer->photo = $fileName;
        }

        $designer->name = $req->name;

        $designer->update();

        Session::flash("message", "已修改");
        return redirect("/admin/designer/list");
    }

    public function delete(Request $req)
    {
        $id = $req->id;
        if (!empty($id) && sizeof($id) > 0) {
            foreach ($id as $ids) {
                $designer = designer::find($ids);
                if (!empty($designer->photo)) {
                    @unlink("images/designer/" . $designer->photo);
                    @unlink("images/designer/S/" . $designer->photo);
                    @unlink("images/designer/M/" . $designer->photo);
                }
                $designer->delete();
            }
        }
        Session::flash("message", "已刪除");
        return redirect("/admin/designer/list");
    }

    // 照片處理
    public function saveImg()
    {
        $times = explode(" ", microtime());
        $fileName = session()->get("manager") . "_" . $times[1];
        $data = $_REQUEST["data"];
        $photo = explode("base64", $data);
        file_put_contents("images/designer/" . $fileName . ".png", base64_decode($photo[1]));
    }
}
