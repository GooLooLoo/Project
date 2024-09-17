<?php

namespace App\Http\Controllers\Admin\Member;

use App\Http\Controllers\Controller;
use App\Models\Admin\Member;
use App\Models\Admin\Photo\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminMemberController extends Controller
{
    public function list()
    {
        $list = Member::get();
        return view("admin.member.list", compact("list"));
    }

    public function add()
    {
        return view("admin.member.add");
    }

    public function edit(Request $req)
    {
        $member = Member::find($req->id);

        return view("admin.member.edit", compact("member"));
    }
    public function insert(Request $req)
    {
        $member = new Member();
        $member->username = $req->username;
        $member->password = $req->password;
        $member->email = $req->email;
        $member->active = "N";

        $member->save();
        Session::flash("message", "已新增");
        return redirect("/admin/member/list");
    }

    public function update(Request $req)
    {
        $member = (new Member)->find($req->id);

        $member->password = $req->password;
        $member->level = $req->level;
        $member->active = $req->active;

        $member->update();

        Session::flash("message", "已修改");
        return redirect("/admin/member/list");
    }


    // 照片處理
    public function saveImg()
    {
        $times = explode(" ", microtime());
        $fileName = session()->get("manager") . "_" . $times[1];
        $data = $_REQUEST["data"];
        $photo = explode("base64", $data);
        file_put_contents("images/member/" . $fileName . ".png", base64_decode($photo[1]));
    }
}
