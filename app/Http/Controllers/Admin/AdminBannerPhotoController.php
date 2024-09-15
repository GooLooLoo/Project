<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AdminBannerPhoto;
use App\Models\Admin\Photo\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminBannerPhotoController extends Controller
{
    public function list()
    {
        $list = AdminBannerPhoto::get();
        return view("admin.home.bannerPhoto.list", compact("list"));
    }

    public function add()
    {
        return view("admin.home.bannerPhoto.add");
    }

    public function insert(Request $req)
    {
        $BannerPhoto = new AdminBannerPhoto();

        if (!empty($req->photo)) {
            $fileName = (new Upload())->uploadPhoto($req->photo, "images/home/bannerPhoto", true, false);
        }
        $BannerPhoto->photo = $fileName;
        $BannerPhoto->save();
        Session::flash("message", "已新增");
        return redirect("/admin/home/bannerPhoto/list");
    }

    public function status(Request $req)
    {
        $BannerPhoto = AdminBannerPhoto::find($req->id);
        $active = $BannerPhoto->active;
        if ($active == "Y") {
            $active = "N";
        } else {
            $active = "Y";
        }
        $BannerPhoto->active = $active;
        $BannerPhoto->update();
    }

    public function delete(Request $req)
    {
        $id = $req->id;
        if (!empty($id) && sizeof($id) > 0) {
            foreach ($id as $ids) {
                $BannerPhoto = AdminBannerPhoto::find($ids);
                if (!empty($BannerPhoto->photo)) {
                    @unlink("images/home/bannerPhoto/" . $BannerPhoto->photo);
                    @unlink("images/home/bannerPhoto/S/" . $BannerPhoto->photo);
                    @unlink("images/home/bannerPhoto/M/" . $BannerPhoto->photo);
                }
                $BannerPhoto->delete();
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
