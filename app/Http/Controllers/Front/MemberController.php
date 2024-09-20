<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Member;
use App\Models\Admin\Reserve\AdminReserveModel as Reserve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
    public function login(Request $req)
    {

        $member = (new Member())->getMember($req->userName, $req->password);
        if (empty($member)) {
            return "N";
        } else {
            session()->put("username", $member->userName);
            session()->put("level", $member->level);
            return "Y";
        }
    }

    public function logout(Request $req)
    {
        session()->forget("username");
        session()->forget("level");
        return "Y";
    }

    public function chkUserName(Request $req)
    {
        $member = (new Member)->getUserName($req->userName);
        if (count($member->all()) == 0) {
            return "Y";
        } else {
            return "N";
        }
    }

    public function register(Request $req)
    {
        $member = new Member();
        $member->userName = $req->rModal_username;
        $member->password = $req->rModal_password;
        $member->email = $req->rModal_email;
        $member->location = $req->rModal_location;
        $member->save();
        Session::flash("message", "已註冊");
        return redirect("/");
    }

    public function reserve(Request $req)
    {
        $reserve = new Reserve();
        $remark = $req->r_modal_remark;
        $designer = $req->r_modal_designer;
        if (!empty($remark)) {
            $remark = str_replace("\n", "<br>", $remark);
            $reserve->remark = $remark;
        }
        // 不指定就不須寫入
        if (!empty($designer)) {
            $reserve->designer = $designer;
        }
        $reserve->date = $req->r_modal_date;
        $reserve->phone = $req->r_modal_phone;

        $reserve->save();
        Session::flash("message", "完成預約，請注意來電");
        return redirect("/");
    }
}
