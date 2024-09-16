<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Home\AdminHomeModel;
use App\Models\Admin\Photo\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminHomeController extends Controller
{
    public function list()
    {
        $list = (new AdminHomeModel)->orderby("id", "ASC")->get();
        return view("admin.home.title.list", compact("list"));
    }

    public function add()
    {
        return view("admin.home.title.add");
    }

    public function edit(Request $req)
    {
        $home = AdminHomeModel::find($req->id);

        return view("admin.home.title.edit", compact("home"));
    }
    public function insert(Request $req)
    {
        $home = new AdminHomeModel();
        if (!empty($req->photo)) {
            $fileName = (new Upload())->uploadPhoto($req->photo, "images/home/title", true, true);
            $home->photo = $fileName;
        }
        $content = $req->content;
        if (!empty($content)) {
            $content = str_replace("\n", "<br>", $content);
            $home->content = $content;
        }
        $home->title = $req->title;
        $home->titleEng = $req->titleEng;
        $home->save();
        Session::flash("message", "已新增");
        return redirect("/admin/home/title/list");
    }

    public function update(Request $req)
    {
        $home = AdminHomeModel::find($req->id);


        $photo = $req->photo;
        if (!empty($photo)) {
            $fileName = (new Upload())->uploadPhoto($req->photo, "images/home/title", false, true);
            if (!empty($home->photo)) {
                @unlink("images/home/title" . $home->photo);
                @unlink("images/home/title/S/" . $home->photo);
                @unlink("images/home/title/M/" . $home->photo);
            }
            $home->photo = $fileName;
        }

        $content=$req->content;
        if (!empty($content)) {
            $content = str_replace("\n", "<br>", $content);
            $home->content = $content;
        }

        $home->title = $req->title;
        $home->titleEng = $req->titleEng;
        $home->update();

        Session::flash("message", "已修改");
        return redirect("/admin/home/title/list");
    }

    public function delete(Request $req)
    {
        $id = $req->id;
        if (!empty($id) && sizeof($id) > 0) {
            foreach ($id as $ids) {
                $home = AdminHomeModel::find($ids);
                if (!empty($home->photo)) {
                    @unlink("images/home/title/" . $home->photo);
                    @unlink("images/home/title/S/" . $home->photo);
                    @unlink("images/home/title/M/" . $home->photo);
                }
                $home->delete();
            }
        }
        Session::flash("message", "已刪除");
        return redirect("/admin/home/title/list");
    }

    // 照片處理
    public function saveImg()
    {
        $times = explode(" ", microtime());
        $fileName = session()->get("manager") . "_" . $times[1];
        $data = $_REQUEST["data"];
        $photo = explode("base64", $data);
        file_put_contents("images/home/title/" . $fileName . ".png", base64_decode($photo[1]));
    }
}
