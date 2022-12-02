<?php

namespace App\Http\Controllers;

use App\Models\coupon;
use App\Models\product;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Image;
use DB;
use Illuminate\Support\Facades\URL;

class CouponController extends Controller
{
    //
    public function index()
    {
        return view("admin_panel/coupon");
    }

    public function addcopuon()
    {
        $product=product::All();
        return view("admin_panel/add_copuon",["product_data"=>$product]);
    }

    public function add_coupon(Request $request)
    {

            $coupon=new coupon();
            $coupon->coupon_name=$request->input("coupon_name");
            $coupon->coupon_code=$request->input("coupon_code");
            $coupon->coupon_value=$request->input("coupon_value");
            $coupon->product_id=$request->input("product_name");
            $coupon->start_time=$request->input("start_time");
            $coupon->start_date=$request->input("start_date");
            $coupon->expire_time=$request->input("expire_time");
            $coupon->expire_date=$request->input("expire_date");
              $coupon->save();
            return redirect("/admin_panel/coupon")->with('success',"add coupon Succesfully !");
    }

    public function changgeStatus(Request $request)
    {
        DB::table('coupons')->where('id', $request->couponid)->update(['status' => $request->couponstatus]);
    }
}
