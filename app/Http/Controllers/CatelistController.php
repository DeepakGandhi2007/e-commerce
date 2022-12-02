<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class CatelistController extends Controller
{
    //
    public function index()
    {

        $cate_data = DB::table('categories')->paginate(10);
        return view("admin_panel/category",["cate_data"=>$cate_data]);
    }

    public function edit($id)
    {
            $data=DB::table('categories')->where('id',$id)->get();
            return view("admin_panel/edit_cate",["cate_data"=>$data]);
    }

    public function update_cate(Request $request,$id)
    {
           DB::table('categories')
              ->where('id', $id)
              ->update(['cate_name' => $request->input("edit_name")]);
            return redirect("/admin_panel/category")->with('success',"Edit Category Succesfully !");
        }

        public function delete_cate($id)
        {
            // return $id;
            $rec=DB::table('categories')->where('id',$id)->delete();
            if($rec)
            {
                return redirect("/admin_panel/category")->with("success","Category delete successfully !");
            }
            else{
                return redirect("/admin_panel/category")->with("success","Category not delete successfully !");
            }
        }
}
