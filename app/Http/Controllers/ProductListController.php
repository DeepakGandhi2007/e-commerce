<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class ProductListController extends Controller
{
    //
    public function index()
    {

        $product_data = DB::table('products')->paginate(10);
        return view("admin_panel/product",["product_data"=>$product_data]);
    }

    public function edddit($product_id)
    {
            $data=DB::table('products')->where('product_id',$product_id)->get();
            return view("admin_panel/edit_product",["product_data"=>$data]);
    }
    public function update_product(Request $request,$product_id)
    {
        if($request->hasfile('imagenames'))
        {
           foreach($request->file('imagenames') as $file)
           {
               $name =$file->getClientOriginalName();
               $file->move(public_path().'/products/', $name);
               $data[] = $name;
           }
        }
        $file = $request->file('product_pic');
        $file2 = $request->file('product_img');
        if($file=="" or $file2="")
        {
           DB::table('products')
              ->where('product_id', $product_id)
              ->update(['product_name' => $request->input("edit_name"),'product_price' => $request->input("product_price"),'product_feature' => $request->input("product_feature"),'product_description' => $request->input("product_description")]);
            return redirect("/admin_panel/product")->with('success',"edit Product Succesfully !");
        }
        else
        {
            $name=$file->getClientOriginalName();
            $ext=$file->getClientOriginalExtension();
            if($ext=="jpg" or $ext=="png" or $ext=="PNG" or $ext=="jpeg")
            {
                $destinationPath = 'products';
                if($file->move($destinationPath,$file->getClientOriginalName()))
                {

                    $old_pic_name=$request->input("old_pic");
                    $old_pic_name1=$request->input("old_pic1");
                    $pic_name=explode('/',$old_pic_name);
                    $f_pic_name=$pic_name[0];
                    // unlink('products/'.$f_pic_name);
                     $url=URL::to("/").'/products/'.$file->getClientOriginalName();
                     DB::table('products')
                     ->where('product_id', $product_id)
                     ->update(['product_name' => $request->input("edit_name"),'product_price' => $request->input("product_price"),'product_feature' => $request->input("product_feature"),'product_description' => $request->input("product_description"),'feature_img' =>$file->getClientOriginalName(),'optional_img'=>json_encode($data)]);
                     return redirect("/admin_panel/product")->with('success',"Update Product Succesfully !");
                   }
                   else{
                    return redirect("/admin_panel/product")->with("Success","file extention not match");
                   }
            }
        }
    }

    public function delete_product($product_id)
    {
        // return $id;
        $rec=DB::table('products')->where('product_id',$product_id)->delete();
        if($rec)
        {
            return redirect("/admin_panel/product")->with("success","Product delete successfully !");
        }
        else{
            return redirect("/admin_panel/product")->with("success","Product not delete successfully !");
        }
    }

}
