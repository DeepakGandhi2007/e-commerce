<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class BloglistController extends Controller
{
    //
    public function index()
    {
        $blog_data = DB::table('blogs')->paginate(10);
        return view("Admin_panel/blogs",["blog_data"=>$blog_data]);
    }
    public function edit($id)
    {
            $blog_data=DB::table('blogs')->where('id',$id)->get();

            return view("Admin_panel/edit_blogs",["blog_data"=>$blog_data]);
    }
    public function update_blog(Request $request,$id)
    {
        $file = $request->file('blog_pic');
        if($file=="")
        {
           DB::table('blogs')
              ->where('id', $id)
              ->update(['title' => $request->input("edit_title"),'h1' => $request->input("edit_h1"),'meta_description' => $request->input("edit_meta_desc"),'meta_title' => $request->input("edit_meta_title"),
              'description' => $request->input("blog_desc")]);
            return redirect("/admin_panel/blogs")->with('success',"Update blog Succesfully !");
        }
        else
        {
            $name=$file->getClientOriginalName();
            $ext=$file->getClientOriginalExtension();
            if($ext=="jpg" or $ext=="png" or $ext=="PNG" or $ext=="jpeg")
            {
                $destinationPath = 'blogs';
                if($file->move($destinationPath,$file->getClientOriginalName()))
                {

                    $old_pic_name=$request->input("old_pic");
                    //  echo $old_pic_name;
                    $pic_name=explode('/',$old_pic_name);

                    $f_pic_name=$pic_name[0];
                    unlink('blogs/'.$f_pic_name);

                     $url=URL::to("/").'/blogs/'.$file->getClientOriginalName();
                     DB::table('blogs')
                     ->where('id', $id)
                     ->update(['title' => $request->input("edit_title"),'h1' => $request->input("edit_h1"),'meta_description' => $request->input("edit_meta_desc"),'meta_title' => $request->input("edit_meta_title"),
                     'description' => $request->input("blog_desc"),'image' =>$file->getClientOriginalName()]);

                     return redirect("/admin_panel/blogs")->with('success',"Update Blog Succesfully !");

                   }
                   else{
                    return redirect("/Admin_panel/blogs")->with("Success","file extention not match");
                   }
            }
        }
    }

}
