<?php

namespace App\Http\Controllers;

use App\Models\category;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Image;
use DB;
use Illuminate\Support\Facades\URL;


class CategoryController extends Controller
{
    //
    public function index()
    {
        return view("admin_panel/category");
    }

    public function addcate()
    {
        return view("admin_panel/add_cate");
    }

    public function add_cate(Request $request)
    {

            $cate=new category();
              $cate->cate_name=$request->input("cate_name");
              $cate->save();
            return redirect("/admin_panel/category")->with('success',"add Catgeory Succesfully !");
    }

    public function changeStatus(Request $request)
    {
        DB::table('categories')->where('id', $request->id)->update(['status' => $request->status]);
    }
}
