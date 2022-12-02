<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\add;
use App\Models\order;
use App\Models\selectadd;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Mail;

class CheckoutController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
         $cart_data = json_decode($cookie_data, true);
        $shipping_address = DB::table('orderadareess')->get();
        $coupon = DB::table('coupons')->get();
        $users = DB::select('select * from users');
        foreach($users as $key){
            $usersrid=$key->id;

        }
// dd($usersrid);
        // dd($selected_address);
        return view('checkout',["cart_data"=>$cart_data,"addressdata"=>$shipping_address,"coupon_data"=>$coupon]);
        ;

    }

    public function addaddress(Request $request)
    {
        $add_array=array(
            "address"=>$request->add,
            "flat"=>$request->flat,
            "land"=>$request->land,
            "city"=>$request->city,
            "state"=>$request->state,
            "zip"=>$request->zip,
        );
            $address = $request->add;
            $flat =$request->flat;
            $landmark=$request->land;
            $city = $request->city;
            $state =$request->state;
            $zip=$request->zip;
            $serializedArr = $address.",".$flat.",".$landmark.",".$city.",".$state.",".$zip.",";
        // dd($add_array);
        \DB::table('orderadareess')->insert([
            'user_id' => $request->user_id,
            'shippijng_id' => rand(1,100),
            'shipping_address' => $serializedArr,

        ]);
        if($add_array){
            $adress_data =array('address'=>$add_array,'status'=>'success') ;

            return response()->json($adress_data);
         }
        else{
            return redirect('checkout')->with("error","something went wrong");
        }

    }

    public function addbilling(Request $request)
    {
        $add_array=array(
            "address"=>$request->addd,
            "flat"=>$request->flatd,
            "land"=>$request->landd,
            "city"=>$request->cityd,
            "state"=>$request->stated,
            "zip"=>$request->zipd,
        );

            $address = $request->addd;
            $flat =$request->flatd;
            $landmark=$request->landd;
            $city = $request->cityd;
            $state =$request->stated;
            $zip= $request->zipd;
        $serializedArr = $address.",".$flat.",".$landmark.",".$city.",".$state.",".$zip.",";
        // dd($string_add);
        \DB::table('orderadareess')->insert([
            'user_id' => $request->user_idd,
            'shippijng_id' =>$request->shipping_id,
            'billing_id' => rand(1,100),
            'billingadress' => $serializedArr,
        ]);
        if($add_array){
            $adressd_data =array('addressd'=>$add_array,'status'=>'success') ;

            return response()->json($adressd_data);
         }
        else{
            return redirect('checkout')->with("error","something went wrong");
        }

    }

    public function add_coupon(Request $request)
    {
        $input_code=$request->couponcode;
        // print_r($input_code);
        $coupon = DB::select('select coupon_code,coupon_value,concat(start_date, " ", start_time) as statrt,concat(expire_date, " ", expire_time) as expire from coupons');
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        foreach($coupon as $key => $value)
        {
            // print_r($value->statrt);
          $couponprice= $value->coupon_value;
          $couponcode=$value->coupon_code;
          $starttime=$value->statrt;
          $expiretime=$value->expire;

        }
        date_default_timezone_set('Asia/Kolkata');
        $code=$couponcode;
        $start=$starttime;
        $couponprice= $couponprice;
        $expire=$expiretime;
        $newstrat=strtotime($start);
        $newexpire=strtotime($expire);
        $date = date('Y-m-d H:i:s');
        $newdate=strtotime($date);
        // dd($couponprice);
        if($input_code==$couponcode)
        {
            if ($newstrat<=$newdate and $newexpire>$newdate)
            {
                $totalAll = 0;
                foreach($cart_data as $key => $value){
                $sr=$key+1;
                $totalprice=$totalprice=$value['item_quantity']*$value['item_price'];
                $totalAll = $totalAll +($value['item_quantity']*$value['item_price']);
                $total= $totalAll-$couponprice;
                }
                session()->put('total', $total);
               session()->put('discount', $couponprice);

            }

            else{
                print_r("invalid");
            }
        }
        else{
            print_r("false");

        }


    }
    public function selectedadd(Request $request)
    {
        $add_array=array(
            "userid"=>$request->userid,
            "address"=>$request->address,
            "flat"=>$request->flat,
            "landmark"=>$request->landmark,
        );


        $userid=$request->userid;
        $saddress= $request->address;
        // dd($saddress);
        $sflat= $request->flat;
        $sstate= $request->state;
        $slandmark= $request->landmark;
        $sessiondata= Session::put('shippingaddress', ['shippingadd' => $saddress, 'shipingflat' => $sflat, 'shippingsttae' => $sstate,'shippingland' => $slandmark]);
    //    dd("ok");
        return response()->json($add_array);

    }
    public function selectedbadd(Request $request)
    {
        $add_array=array(
            "userid"=>$request->userid,
            "address"=>$request->baddress,
            "flat"=>$request->bflat,
            "landmark"=>$request->blandmark,
        );

        $userid=$request->userid;
        $baddress= $request->baddress;
        $bflat= $request->bflat;
        $bstate= $request->bstate;
        $blandmark= $request->blandmark;
        Session::put('billingaddress', ['billingadd' => $baddress, 'billingflat' => $bflat, 'billingstate' => $bstate,'billingland' => $blandmark]);
        return response()->json($add_array);


    }
    public function addorder(Request $request)
    {
        if(Session::has('total')){
            $totalsession=$request->session()->get('total');
        }
        else{
            $totalsession=$request->subtotal;
        }
        $shippingaddress = $request->session()->get('shippingaddress');
        $shippingaddress=implode("`",$shippingaddress);
        $discount = $request->session()->get('discount');

        $billingaddress = $request->session()->get('billingaddress');
        $billingaddress=implode("`",$billingaddress);
        $order_id=rand(1,100);
        $userid=$request->userid;
        $cartsubtotal=$request->subtotal;
        $discount=$discount;
        $couponcode=$request->couponcode;
        $couponvalue=$request->couponvalue;
        $Totalamount=$totalsession;
        $order=new order();
        $order->order_id=$order_id;
        $order->user_id=$userid;
        $order->cart_subtotal=$cartsubtotal;
        $order->discount=$discount;
        $order->coupon_code=$couponcode;
        $order->coupon_value=$couponvalue;
        $order->total_amount=$Totalamount;
        $order->shipping_address=$shippingaddress;
        $order->billing_adress=$billingaddress;
        $order->save();
        $items = DB::select('select * from orders');
        foreach($items as $data){
        $orderid=$data->id;
        }
        $cookie_data = Cookie::get('shopping_cart');
        // dd($cookie_data);
        $cart_data = json_decode($cookie_data,true);
        for($i = 0; $i < count($cart_data); ++$i) {
         $item_name=$cart_data[$i];
         $name=$item_name['item_name'];
         $price=$item_name['item_price'];
         $quantity=$item_name['item_quantity'];
         $img=$item_name['item_image'];
         $product_id=$item_name['item_id'];
         DB::insert('insert into orderitems (order_id,item_name,item_price,item_qty,item_img,product_id) values (?, ?,?,?,?,?)', [$orderid,$name,$price,$quantity,$img,$product_id]);
        }
        // die();
        return redirect('homepage')->with("success","order successsfully");


     }


    public function basic_email() {
        $data = array('name'=>"Virat Gandhi");

        Mail::send(['text'=>'mail'], $data, function($message) {
           $message->to('deepakgandhi2007@gmail.com', 'Tutorials Point')->subject
              ('Laravel Basic Testing Mail');
           $message->from('deepak.gandhi@signtific.co.in.com','Virat Gandhi');
        });
        echo "Basic Email Sent. Check your inbox.";
     }


}
