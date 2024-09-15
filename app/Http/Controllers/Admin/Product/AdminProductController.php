<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product\AdminProductModal as product;
use Illuminate\Support\Facades\Session;
use App\Models\Admin\Photo\Upload;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function list()
    {
        $list = product::get();
        return view("admin.product.list", compact("list"));
    }

    public function add()
    {
        return view("admin.product.add");
    }

    public function edit(Request $req)
    {
        $product = product::find($req->id);

        return view("admin.product.edit", compact("product"));
    }
    public function insert(Request $req)
    {
        $product = new product();

        $introduceShort = $req->introduceShort;
        if (!empty($introduceShort)) {
            $introduceShort = str_replace("\n", "<br>", $introduceShort);
            $product->introduceShort = $introduceShort;
        }

        $introduce = $req->introduce;
        // 如果有內容，將\n轉換為<br>
        if (!empty($introduce)) {
            $introduce = str_replace("\n", "<br>", $introduce);
            $product->introduce = $introduce;
        }

        if (!empty($req->photo)) {
            $fileName = (new Upload())->uploadPhoto($req->photo, "images/product", true, true);
            $product->photo = $fileName;
        }
        $product->name = $req->name;
        $product->number = $req->number;
        $product->price = $req->price;


        $product->save();
        Session::flash("message", "已新增");
        return redirect("/admin/product/list");
    }

    public function update(Request $req)
    {
        $product = product::find($req->id);
        $introduceShort = $req->introduceShort;
        $introduce = $req->introduce;
        if (!empty($introduce)) {
            $introduce = str_replace("\n", "<br>", $introduce);
            $product->introduce = $introduce;
        }

        if (!empty($introduceShort)) {
            $introduceShort = str_replace("\n", "<br>", $introduceShort);
            $product->introduceShort = $introduceShort;
        }

        $photo = $req->photo;
        if (!empty($photo)) {
            $fileName = (new Upload())->uploadPhoto($req->photo, "images/product", false, true);
            if (!empty($product->photo)) {
                @unlink("images/product" . $product->photo);
                @unlink("images/product/S/" . $product->photo);
                @unlink("images/product/M/" . $product->photo);
            }
            $product->photo = $fileName;
        }

        $product->name = $req->name;
        $product->number = $req->number;
        $product->price = $req->price;
        $product->active = $req->active;
        $product->update();

        Session::flash("message", "已修改");
        return redirect("/admin/product/list");
    }

    public function delete(Request $req)
    {
        $id = $req->id;
        if (!empty($id) && sizeof($id) > 0) {
            foreach ($id as $ids) {
                $product = product::find($ids);
                if (!empty($designer->photo)) {
                    @unlink("images/product/" . $product->photo);
                    @unlink("images/product/S/" . $product->photo);
                    @unlink("images/product/M/" . $product->photo);
                }
                $product->delete();
            }
        }
        Session::flash("message", "已刪除");
        return redirect("/admin/product/list");
    }

    // 照片處理
    public function saveImg()
    {
        $times = explode(" ", microtime());
        $fileName = session()->get("manager") . "_" . $times[1];
        $data = $_REQUEST["data"];
        $photo = explode("base64", $data);
        file_put_contents("images/product/" . $fileName . ".png", base64_decode($photo[1]));
    }
}
