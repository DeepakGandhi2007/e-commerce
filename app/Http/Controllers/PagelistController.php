<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class PagelistController extends Controller
{
    //
    public function index()
    {

        $page_data = DB::table('pages')->paginate(10);
        return view("admin_panel/page",["page_data"=>$page_data]);
    }

    public function edddddit($id)
    {
            $data=DB::table('pages')->where('id',$id)->get();
            return view("admin_panel/edit_page",["page_data"=>$data]);
    }

    public function update_page(Request $request,$id)
    {
        $file = $request->file('page_pic');
        if($file=="")
        {
           DB::table('pages')
              ->where('id', $id)
              ->update(['page_name' => $request->input("edit_name"),
              'page_title' => $request->input("page_title"),
              'page_description' => $request->input("page_description")]);
            //   return redirect("/admin_panel/admin_blog_list")->with('success',"update blog successfully !");
            return redirect("/admin_panel/page")->with('success',"Update page Succesfully !");
        }
        else
        {
            $name=$file->getClientOriginalName();
            $ext=$file->getClientOriginalExtension();
            if($ext=="jpg" or $ext=="png" or $ext=="PNG" or $ext=="jpeg")
            {
                $destinationPath = 'pagepic';
                if($file->move($destinationPath,$file->getClientOriginalName()))
                {

                    $old_pic_name=$request->input("old_pic");
                    //  echo $old_pic_name;
                    $pic_name=explode('/',$old_pic_name);
                    // echo "<pre>";
                    // print_r($pic_name);
                    //  echo $pic_name;
                    $f_pic_name=$pic_name[0];
                    // unlink('pagepic/'.$f_pic_name);
                    // echo $f_pic_name;
                     $url=URL::to("/").'/pagepic/'.$file->getClientOriginalName();
                     DB::table('pages')
                     ->where('id', $id)
                     ->update(['page_name' => $request->input("edit_name"),
                     'page_title' => $request->input("page_title"),
                     'page_description' => $request->input("page_description")
                     ,'images' =>$file->getClientOriginalName()]);

                     return redirect("/admin_panel/page")->with('success',"Update Blog Succesfully !");

                   }
                   else{
                    return redirect("/admin_panel/page")->with("Success","file extention not match");
                   }
            }
        }
    }
    public function delete_page($id)
    {
        // return $id;
        $rec=DB::table('pages')->where('id',$id)->delete();
        if($rec)
        {
            return redirect("/admin_panel/page")->with("success","page delete successfully !");
        }
        else{
            return redirect("/admin_panel/page")->with("success","pagfe not delete successfully !");
        }
    }
}
