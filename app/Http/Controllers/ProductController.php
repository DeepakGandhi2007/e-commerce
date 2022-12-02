<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\brand;
use App\Models\product;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Image;
use DB;
use Illuminate\Support\Facades\URL;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view("admin_panel/product");
    }

    public function addproduct()
    {
        $cate=Category::All();
        $brand=brand::All();
        return view("admin_panel/add_product",["cate_data"=>$cate],["brand_data"=>$brand]);
    }
    public function add_product(Request $request)
    {
        if($request->hasfile('filenames'))
        {
           foreach($request->file('filenames') as $file)
           {
               $name =$file->getClientOriginalName();
               $file->move(public_path().'/products/', $name);
               $data[] = $name;
           }
        }

        $file = $request->file('product_pic');
     $name=$file->getClientOriginalName();
     $ext=$file->getClientOriginalExtension();
     if($ext=="jpg" or $ext=="png" or $ext=="PNG" or $ext=="jpeg")
     {
          $destinationPath = 'products';

                $product=new product();
                $product->product_name=$request->input("product_name");
                $product->cate_id =$request->input("cate_name");
                $product->brand_id =$request->input("brand_name");
                $product->product_price=$request->input("product_price");
                $product->product_discount_rs=$request->input("product_disc_rs");
                $product->product_discount_perc=$request->input("product_disc_per");
                $product->feature_img=$file->getClientOriginalName();
                $product->optional_img=json_encode($data);
                $product->product_description=$request->input("product_description");
                $product->product_feature=$request->input("product_feature");
                $product->save();
                $product = Image::make($request->file("product_pic"))->resize(600, 600, function ($constraint) {$constraint->aspectRatio();$constraint->upsize();})->save(public_path('/productthumbnail/'.$file->getClientOriginalName()));;
                 $file->move($destinationPath,$file->getClientOriginalName());
                  return redirect("/admin_panel/add_product")->with("success","Add product Succesfully !");
     }
     else{
         return redirect("/admin_panel/add_product")->with("success","File extenstion does not match");
     }

    }

    public function changeeeStatus(Request $request)
    {
        DB::table('products')->where('product_id', $request->productid)->update(['status' => $request->productstatus]);
    }
}
