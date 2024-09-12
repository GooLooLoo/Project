<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\BannerPhoto;
use App\Models\Admin\Photo\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BannerPhotoController extends Controller
{
    public function list()
    {
        $list = (new BannerPhoto())->get();
        return view("admin.home.bannerPhoto.list", compact("list"));
    }

    public function add()
    {
        return view("admin.home.bannerPhoto.add");
    }

    public function insert(Request $req)
    {
        $BannerPhoto = new BannerPhoto();

        if (!empty($req->photo)) {
            $fileName = (new Upload())->uploadPhoto($req->photo, "images/home/bannerPhoto", true, true);
        }
        $BannerPhoto->photo = $fileName;
        $BannerPhoto->save();
        Session::flash("message", "已新增");
        return redirect("/admin/home/bannerPhoto/list");
    }

    public function delete(Request $req)
    {
        $id = $req->id;
        if (!empty($id) && sizeof($id) > 0) {
            foreach ($id as $ids) {
                $about = BannerPhoto::find($ids);
                if (!empty($about->photo)) {
                    @unlink("images/home/bannerPhoto/" . $about->photo);
                    @unlink("images/home/bannerPhoto/S/" . $about->photo);
                    @unlink("images/home/bannerPhoto/M/" . $about->photo);
                }
                $about->delete();
            }
        }
        Session::flash("message", "已刪除");
        return redirect("/admin/home/bannerPhoto/list");
    }

    // 照片處理
    public function saveImg()
    {
        $times = explode(" ", microtime());
        $fileName = session()->get("manager") . "_" . $times[1];
        $data = $_REQUEST["data"];
        $photo = explode("base64", $data);
        file_put_contents("images/home/bannerPhoto/" . $fileName . ".png", base64_decode($photo[1]));
    }
}
