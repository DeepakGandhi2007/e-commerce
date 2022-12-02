<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class CouponListController extends Controller
{
    //
    public function index()
    {

        $coupon_data = DB::table('coupons')->paginate(10);
        return view("admin_panel/coupon",["coupon_data"=>$coupon_data]);
    }

    public function edit($id)
    {
            $data=DB::table('coupons')->where('id',$id)->get();
            return view("admin_panel/edit_coupon",["coupon_data"=>$data]);
    }
    public function update_coupon(Request $request,$id)
    {
           DB::table('coupons')
              ->where('id', $id)
              ->update(['coupon_name' => $request->input("edit_coupon_name"),
              'coupon_code' => $request->input("edit_coupon_code"),
              'coupon_value' => $request->input("edit_coupon_value"),
              'start_time' => $request->input("start_time"),
              'start_date' => $request->input("start_date"),
              'expire_time' => $request->input("expire_time"),
              'expire_date' => $request->input("expire_date")]);

            return redirect("/admin_panel/coupon")->with('success',"Update coupon Succesfully !");
        }
        public function delete_coupon($id)
        {
            // return $id;
            $rec=DB::table('coupons')->where('id',$id)->delete();
            if($rec)
            {
                return redirect("/admin_panel/coupon")->with("success","coupon delete successfully !");
            }
            else{
                return redirect("/admin_panel/coupon")->with("success","coupon not delete successfully !");
            }
        }
}
