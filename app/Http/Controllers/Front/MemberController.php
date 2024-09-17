<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Member;
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
            return "Y";
        }
    }

    public function logout(Request $req){
        session()->forget("username");
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
        $member->save();
        Session::flash("message", "已註冊");
        return redirect("/");
    }
}
