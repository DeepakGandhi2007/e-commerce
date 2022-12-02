<?php

namespace App\Http\Controllers;

use App\Models\banner;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Image;
use DB;
use Illuminate\Support\Facades\URL;

class BannerController extends Controller
{
    //
    public function index()
    {
        return view("admin_panel/banner");
    }

    public function addbaner()
    {
        return view("admin_panel/add_banner");
    }

    public function add_banner(Request $request)
    {

    $file = $request->file('banner_pic');
    // dd($file);

    $name=$file->getClientOriginalName();
    $ext=$file->getClientOriginalExtension();
    if($ext=="png" or $ext=="jpg" or $ext=="PNG" or $ext=="jpeg")
    {
        $destinationPath = 'banner';

              $banner=new banner();
              $banner->banner_title=$request->input("banner_title");
              $banner->banner_img=$file->getClientOriginalName();
              $banner->save();
              $banner = Image::make($request->file("banner_pic"))->resize(200, 200, function ($constraint) {$constraint->aspectRatio();$constraint->upsize();})->save(public_path('/bannerthumbnail/'.$file->getClientOriginalName()));;
              // dd($gallery);
               // $query = DB::getQueryLog();
               // dd($query);

            $file->move($destinationPath,$file->getClientOriginalName());

              return redirect('/admin_panel/add_banner')->with("success","add brands successsfully");
    }
    else{
        return redirect("/admin_panel/add_banner")->with("Success","file extention not match");
    }

    }

    public function changeeeeStatus(Request $request)
    {
        DB::table('banners')->where('id', $request->bannerid)->update(['status' => $request->bannerstatus]);
    }
}
