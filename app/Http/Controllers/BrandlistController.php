<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class BrandlistController extends Controller
{
    //
    public function index()
    {

        $brand_data = DB::table('brands')->paginate(10);
        return view("admin_panel/brands",["brand_data"=>$brand_data]);
    }

    public function eddit($id)
    {
            $data=DB::table('brands')->where('id',$id)->get();
            return view("admin_panel/edit_brand",["brand_data"=>$data]);
    }
    public function update_brand(Request $request,$id)
    {
        $file = $request->file('brand_pic');
        if($file=="")
        {
           DB::table('brands')
              ->where('id', $id)
              ->update(['brand_name' => $request->input("edit_name")]);
            return redirect("/admin_panel/brands")->with('success',"edit brand Succesfully !");
        }
        else
        {
            $name=$file->getClientOriginalName();
            $ext=$file->getClientOriginalExtension();
            if($ext=="jpg" or $ext=="png" or $ext=="PNG" or $ext=="jpeg")
            {
                $destinationPath = 'brandpic';
                if($file->move($destinationPath,$file->getClientOriginalName()))
                {

                    $old_pic_name=$request->input("old_pic");
                    $pic_name=explode('/',$old_pic_name);
                    $f_pic_name=$pic_name[0];
                    unlink('brandpic/'.$f_pic_name);
                     $url=URL::to("/").'/brandpic/'.$file->getClientOriginalName();
                     DB::table('brands')
                     ->where('id', $id)
                     ->update(['brand_name' => $request->input("edit_name")
                     ,'brand_img' =>$url]);
                     return redirect("/admin_panel/brands")->with('success',"Update brand Succesfully !");
                   }
                   else{
                    return redirect("/admin_panel/UPVCS")->with("Success","file extention not match");
                   }
            }
        }
    }
    public function delete_brand($id)
    {
        // return $id;
        $rec=DB::table('brands')->where('id',$id)->delete();
        if($rec)
        {
            return redirect("/admin_panel/brands")->with("success","brands delete successfully !");
        }
        else{
            return redirect("/admin_panel/brands")->with("success","brands not delete successfully !");
        }
    }
}
