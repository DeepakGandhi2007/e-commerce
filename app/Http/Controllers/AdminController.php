<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    //
    public function index()
    {

        return view('admin_panel/auth/login');
    }
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $admin_data = DB::table('admins')->get();
        foreach($admin_data as $data){
        $adminemail=$data->email;
        $adminpass=$data->password;
        }
        // dd($adminpass);
        $email=$request->input("email");
        $password=$request->input("password");
        if($email== $adminemail && $adminpass==$password){
          $test=  Session::put('login', ['email' => $email, 'password' => $password]);

            // dd("ok");
            return redirect("/admin_panel/admin-dashboard")->with('success',"edit brand Succesfully !");

        }
        else{
            dd("false");
            // return redirect("admin_panel/auth/login")->withSuccess('Login details are not  valid');
        }


    }
    public function dashboard()
    {
        $userId = Auth::id();
        $order = DB::table('orders')->paginate(5);
        $sum = DB::table('orders')->sum('cart_subtotal');
        $totalorder = DB::table('orders')->count('id');
        // dd($test);

        $itemdata=[];
        foreach($order as $data){
            $userid=$data->user_id;
            $orderid=$data->id;
            $rec=DB::table('users')->where('id',$userid)->get();
            $itemdata[]=DB::table('orderitems')->where('order_id',$orderid)->paginate(5);

            // dd($rec);
            // print_r($orderid);
        }

        return view("admin_panel/admin-dashboard",["order_data"=>$order,"user_data"=>$rec,"itemdata"=>$itemdata,"orderid"=>$orderid,"sum"=>$sum,"totalorder"=>$totalorder]);


        // return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function modaldata(Request $request)
    {
       $test=$request->fired_button;
       $itemdata=DB::table('orderitems')->where('order_id',$test)->get();
    //    dd($itemdata);
       return response()->json($itemdata);
    }

    public function orders()
    {
       return view("admin_panel/orders");
    }

    public function ordersdetails()
    {
        $userId = Auth::id();
        $order = DB::table('orders')->get();
        $sum = DB::table('orders')->sum('cart_subtotal');
        $totalorder = DB::table('orders')->count('id');
        // dd($test);

        $itemdata=[];
        foreach($order as $data){
            $userid=$data->user_id;
            $orderid=$data->id;
            $rec=DB::table('users')->where('id',$userid)->get();
            $itemdata[]=DB::table('orderitems')->where('order_id',$orderid)->get();

            // dd($rec);
            // print_r($orderid);
        }

        return view("admin_panel/orders",["order_data"=>$order,"user_data"=>$rec,"itemdata"=>$itemdata,"orderid"=>$orderid,"sum"=>$sum,"totalorder"=>$totalorder]);

    }

    public function updatestatus(Request $request)
    {
        $order_id=$request->id;
        $value=$request->value;
        DB::table('orders')
        ->where('order_id', $order_id)
        ->update(['status' => $value]);
      return redirect("/admin_panel/orders")->with('success',"edit banner Succesfully !");
    }
}
