<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class BannerlistController extends Controller
{
    //
    public function index()
    {

        $banner_data = DB::table('banners')->paginate(10);
        return view("admin_panel/banner",["banner_data"=>$banner_data]);
    }

    public function eddddit($id)
    {
            $data=DB::table('banners')->where('id',$id)->get();
            return view("admin_panel/edit_banner",["banner_data"=>$data]);
    }

    public function update_banner(Request $request,$id)
    {
        $file = $request->file('banner_pic');
        if($file=="")
        {
           DB::table('banners')
              ->where('id', $id)
              ->update(['banner_title' => $request->input("edit_name")]);
            return redirect("/admin_panel/banner")->with('success',"edit banner Succesfully !");
        }
        else
        {
            $name=$file->getClientOriginalName();
            $ext=$file->getClientOriginalExtension();
            if($ext=="jpg" or $ext=="png" or $ext=="PNG" or $ext=="jpeg")
            {
                $destinationPath = 'banner';
                if($file->move($destinationPath,$file->getClientOriginalName()))
                {

                    $old_pic_name=$request->input("old_pic");
                    $pic_name=explode('/',$old_pic_name);
                    $f_pic_name=$pic_name[0];
                    unlink('banner/'.$f_pic_name);
                     $url=URL::to("/").'/banner/'.$file->getClientOriginalName();
                     DB::table('banners')
                     ->where('id', $id)
                     ->update(['banner_title' => $request->input("edit_name")
                     ,'banner_img' =>$file->getClientOriginalName()]);
                     return redirect("/admin_panel/banner")->with('success',"Update brand Succesfully !");
                   }
                   else{
                    return redirect("/admin_panel/banner")->with("Success","file extention not match");
                   }
            }
        }
    }
    public function delete_banner($id)
    {
        // return $id;
        $rec=DB::table('banners')->where('id',$id)->delete();
        if($rec)
        {
            return redirect("/admin_panel/banner")->with("success","banner delete successfully !");
        }
        else{
            return redirect("/admin_panel/banner")->with("success","banner not delete successfully !");
        }
    }
}
