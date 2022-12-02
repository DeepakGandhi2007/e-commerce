<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class ProductDetailController extends Controller
{
    //
    public function index($product_id)
    {
        $data=DB::table('products')->where('product_id',$product_id)->get();
        $stock_data=DB::table('stocks')->where('product_id',$product_id)->get();
        $users = DB::table('products')->where('product_id',$product_id)->get();
        foreach($users as $key){
            $cateid=$key->cate_id;
        }
        $relatedpro=DB::table('products')->where('cate_id',$cateid)->get();
        $review=DB::table('reviews')->where('product_id',$product_id)->get();
        $countreview=DB::table('reviews')->where('product_id',$product_id)->count();
        return view("product_detail",["product_data"=>$data],["review_data"=>$review,"relatedpro"=>$relatedpro,"countreview"=>$countreview,"stock_data"=>$stock_data]);
        // dd($data);
        return view("product_detail",["banner_data"=>$banner,"product_data"=>$featured_product,"product_value"=>$latest_product,"cart_data"=>$cart_data,"seller_product"=>$best_seller,"sale_data"=>$sale,"countreview"=>$countreview,"stock_data"=>$stock_data]);
    }
    public function review(Request $request)
    {
                 $star=$request->rating;
                //  dd($star);
                $review=new review();
                  $review->name=$request->input("name");
                  $review->email=$request->input("email");
                  $review->review=$request->input("review");
                  $review->product_id=$request->input("product_id");
                  $review->stars=$star;
                  $review->save();
                return redirect("homepage")->with('success',"add Catgeory Succesfully !");


    }
}
