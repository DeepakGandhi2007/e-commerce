<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class blogcontroller extends Controller
{
    //
     public function index()
    {
        return view("admin_panel/blogs");
    }
    public function addblogs()
    {
        return view("admin_panel/add_blogs");
    }
    public function add_blog(Request $request)
    {

        $file = $request->file('blog_pic');

    $name=$file->getClientOriginalName();
    $ext=$file->getClientOriginalExtension();
    if($ext=="png" or $ext=="jpg" or $ext=="PNG" or $ext=="jpeg")
    {
        $destinationPath = 'blogs';

              $blog=new blog();
              $blog->title=$request->input("blog_title");
              $blog->h1=$request->input("blog_h1");
              $blog->meta_description=$request->input("metadesc");
              $blog->meta_title=$request->input("metatitle");
              $blog->description=$request->input("blog");
              $blog->slugs=Str::slug($request->input("blog_title"));
              $blog->image=$file->getClientOriginalName();
              $blog->save();
              $blog = Image::make($request->file("blog_pic"))->resize(100, 100, function ($constraint) {$constraint->aspectRatio();$constraint->upsize();})->save(public_path('/thumbnail/'.$file->getClientOriginalName()));;
             $file->move($destinationPath,$file->getClientOriginalName());

              return redirect('/admin_panel/add_blogs')->with("success","add blog successsfully");


    }
    else{
        return redirect("/admin_panel/add_blogs")->with("Success","file extention not match");
    }


    }
    public function delete_blog($id)
    {
        // return $id;
        $rec=DB::table('blogs')->where('id',$id)->delete();
        if($rec)
        {
            return redirect("/admin_panel/blogs")->with("success","Blog delete successfully !");
        }
        else{
            return redirect("/admin_panel/blogs")->with("success","Blog not delete successfully !");
        }
    }

}
