<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\Admin\News\AdminNewsModel as news;
use Illuminate\Support\Facades\Session;
use App\Models\Admin\Photo\Upload;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    public function list()
    {
        $list = news::get();
        return view("admin.news.list", compact("list"));
    }

    public function add()
    {
        return view("admin.news.add");
    }

    public function edit(Request $req)
    {
        $news = news::find($req->id);

        return view("admin.news.edit", compact("news"));
    }
    public function insert(Request $req)
    {
        $news = new news();

        $content = $req->content;
        if (!empty($content)) {
            $content = str_replace("\n", "<br>", $content);
            $news->content = $content;
        }

        if (!empty($req->photo)) {
            $fileName = (new Upload())->uploadPhoto($req->photo, "images/news", true, true);
            $news->photo = $fileName;
        }
        $news->title = $req->title;
        $news->activeDate = $req->activeDate;


        $news->save();
        Session::flash("message", "已新增");
        return redirect("/admin/news/list");
    }

    public function update(Request $req)
    {
        $news = news::find($req->id);
        $content = $req->content;
        if (!empty($content)) {
            $content = str_replace("\n", "<br>", $content);
            $news->content = $content;
        }

        $photo = $req->photo;
        if (!empty($photo)) {
            $fileName = (new Upload())->uploadPhoto($req->photo, "images/news", false, true);
            if (!empty($news->photo)) {
                @unlink("images/news" . $news->photo);
                @unlink("images/news/S/" . $news->photo);
                @unlink("images/news/M/" . $news->photo);
            }
            $news->photo = $fileName;
        }

        $news->title = $req->title;
        $news->activeDate = $req->activeDate;
        $news->active = $req->active;

        $news->update();

        Session::flash("message", "已修改");
        return redirect("/admin/news/list");
    }

    public function delete(Request $req)
    {
        $id = $req->id;
        if (!empty($id) && sizeof($id) > 0) {
            foreach ($id as $ids) {
                $news = news::find($ids);
                if (!empty($news->photo)) {
                    @unlink("images/news/" . $news->photo);
                    @unlink("images/news/S/" . $news->photo);
                    @unlink("images/news/M/" . $news->photo);
                }
                $news->delete();
            }
        }
        Session::flash("message", "已刪除");
        return redirect("/admin/news/list");
    }

    // 照片處理
    public function saveImg()
    {
        $times = explode(" ", microtime());
        $fileName = session()->get("manager") . "_" . $times[1];
        $data = $_REQUEST["data"];
        $photo = explode("base64", $data);
        file_put_contents("images/news/" . $fileName . ".png", base64_decode($photo[1]));
    }
}
