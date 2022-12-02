<?php

namespace App\Http\Controllers;

use App\Models\brand;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Image;
use DB;
use Illuminate\Support\Facades\URL;

class BrandController extends Controller
{
    //
    public function index()
    {
        return view("admin_panel/brands");
    }

    public function addbrand()
    {
        return view("admin_panel/add_brand");
    }

    public function add_brand(Request $request)
    {

    $file = $request->file('brand_pic');
    // dd($file);

    $name=$file->getClientOriginalName();
    $ext=$file->getClientOriginalExtension();
    if($ext=="png" or $ext=="jpg" or $ext=="PNG" or $ext=="jpeg")
    {
        $destinationPath = 'brandpic';

              $brand=new brand();
              $brand->brand_name=$request->input("brand_name");
              $brand->brand_img=$file->getClientOriginalName();
              $brand->save();
              $brand = Image::make($request->file("brand_pic"))->resize(200, 200, function ($constraint) {$constraint->aspectRatio();$constraint->upsize();})->save(public_path('/brandthumbnail/'.$file->getClientOriginalName()));;
              // dd($gallery);
               // $query = DB::getQueryLog();
               // dd($query);

            $file->move($destinationPath,$file->getClientOriginalName());

              return redirect('/admin_panel/add_brand')->with("success","add brands successsfully");
    }
    else{
        return redirect("/admin_panel/add_upvcspage")->with("Success","file extention not match");
    }

    }
    public function changeeStatus(Request $request)
    {
        DB::table('brands')->where('id', $request->brandid)->update(['status' => $request->brandstatus]);
    }
}
