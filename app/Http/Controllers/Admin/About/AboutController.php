<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\Admin\About\AdminAbout;
use App\Models\Admin\Photo\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    public function list()
    {
        $list = AdminAbout::get();
        return view("admin.about.list", compact("list"));
    }

    public function add()
    {
        return view("admin.about.add");
    }

    public function edit(Request $req)
    {
        $about = AdminAbout::find($req->id);

        return view("admin.about.edit", compact("about"));
    }
    public function insert(Request $req)
    {
        $about = new AdminAbout();
        $content = $req->content;
        // 如果有內容，將\n轉換為<br>
        if (!empty($content)) {
            $content = str_replace("\n", "<br>", $content);
        }
        if (!empty($req->photo)) {
            $fileName = (new Upload())->uploadPhoto($req->photo, "images/about", false, true);
        }
        $about->title = $req->title;
        $about->photo = $fileName;
        $about->content = $content;

        $about->save();
        Session::flash("message", "已新增");
        return redirect("/admin/about/list");
    }

    public function update(Request $req)
    {
        $about = AdminAbout::find($req->id);
        $content = $req->content;
        if (!empty($content)) {
            $content = str_replace("\n", "<br>", $content);
        }
        $photo = $req->photo;
        if (!empty($photo)) {
            $fileName = (new Upload())->uploadPhoto($req->photo, "images/about", false, true);
            if (!empty($about->photo)) {
                @unlink("images/about" . $about->photo);
                @unlink("images/about/S/" . $about->photo);
                @unlink("images/about/M/" . $about->photo);
            }
            $about->photo = $fileName;
        }

        $about->title = $req->title;
        $about->content = $content;
        $about->update();

        Session::flash("message", "已修改");
        return redirect("/admin/about/list");
    }

    public function delete(Request $req)
    {
        $id = $req->id;
        if (!empty($id) && sizeof($id) > 0) {
            foreach ($id as $ids) {
                $about = AdminAbout::find($ids);
                if (!empty($about->photo)) {
                    @unlink("images/about/" . $about->photo);
                    @unlink("images/about/S/" . $about->photo);
                    @unlink("images/about/M/" . $about->photo);
                }
                $about->delete();
            }
        }
        Session::flash("message", "已刪除");
        return redirect("/admin/about/list");
    }

    // 照片處理
    public function saveImg()
    {
        $times = explode(" ", microtime());
        $fileName = session()->get("manager") . "_" . $times[1];
        $data = $_REQUEST["data"];
        $photo = explode("base64", $data);
        file_put_contents("images/about/" . $fileName . ".png", base64_decode($photo[1]));
    }
}
