<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $userId = Auth::id();
        // dd($userId);
      $rec=DB::table('users')->where('id',$userId)->get();
        $order = DB::table('orders')->get();
        return view('accounts',["order_data"=>$order,"user_data"=>$rec]);
        // return view("accounts");
    }

    public function general()
    {
       $userId = Auth::id();
        // dd($userId);
        $order = DB::table('orders')->get();
      $rec=DB::table('users')->where('id',$userId)->get();
    //   dd($rec);
    return view("generalinformation",["order_data"=>$order,"user_data"=>$rec]);
    }

    public function edit_data(Request $request)
    {
        $userId = Auth::id();
           DB::table('users')
              ->where('id', $userId)
              ->update(['name' => $request->input("user_name"),'email' => $request->input("email_id")]);
            return redirect("generalinformation")->with('success',"Edit information Succesfully !");
        }

        public function password()
        {
           $userId = Auth::id();
            // dd($userId);
          $rec=DB::table('users')->where('id',$userId)->get();
        //   dd($rec);
        return view("changepassword",["user_data"=>$rec]);
        }
        public function edit_pass(Request $request)
        {

            $userId = Auth::id();
            $pass= $request->input("pass");
            $confimrpass= $request->input("confirmpass");
            if($pass==$confimrpass){
               DB::table('users')
                  ->where('id', $userId)
                  ->update(['name' => $request->input("user_name"),'email' => $request->input("email_id"),'password' => $request->input("pass")]);
                return redirect("changepassword")->with('success',"Edit information Succesfully !");
            }
            else{
                return redirect("changepassword")->with('error',"confirm password not same to password !");
            }

        }
        public function address()
        {
           $userId = Auth::id();
           $rec1=DB::table('users')->where('id',$userId)->get();
            $order = DB::table('orders')->get();
          $rec=DB::table('orderadareess')->where('user_id',$userId)->get();
        //   dd($rec);
        return view("address",["address_data"=>$rec,"order_data"=>$order,"user_data"=>$rec1]);
        }


        public function edits($id)
        {
            $userId = Auth::id();
                $data=DB::table('orderadareess')->where('id',$id)->get();
                return view("edit_address",["address_data"=>$data]);
        }

        public function edit_shippingadd(Request $request)
        {
            // $billing=$request->input("billingadd");
             $add_array = array(
        'address' => $request->input("shippinadd"),
        'flat' =>$request->input("shippingflat"),
        'landmark' =>$request->input("shippngland"),
        'city' => $request->input("shippingcity"),
        'state' =>$request->input("shippingstate"),
        'zip' =>$request->input("shippingzip"),
    );
//  print_r($add_array);
    $serializedArr = serialize($add_array);

    \DB::table('orderadareess')->update([
        'shipping_address'=>$serializedArr,

    ]);
    return redirect("address")->with("sucess","done");

}

    public function editss($id)
    {
            $userId = Auth::id();
            $data=DB::table('orderadareess')->where('id',$id)->get();
            // dd($data);
            return view("edit_billlingaddress",["address_data"=>$data]);
    }

    public function edit_billingadd(Request $request)
    {
    // $shipping=$request->input("shippingadd");
    $add_array = array(
    'address' => $request->input("billingadd"),
    'flat' =>$request->input("billingflat"),
    'landmark' =>$request->input("billingland"),
    'city' => $request->input("billingcity"),
    'state' =>$request->input("billingstsate"),
    'zip' =>$request->input("billingzip"),
);
$serializedArr = serialize($add_array);
// dd($serializedArr);

\DB::table('orderadareess')->update([
    'billingadress' => $serializedArr,

]);
return redirect('address')->with("sucess","done");

}
public function delete_address($id)
{
    dd($id);
    $rec=DB::table('orderadareess')->where('id',$id)->delete();
    if($rec)
    {
        return redirect("address")->with("success","Product delete successfully !");
    }
    else{
        return redirect("address")->with("success","Product not delete successfully !");
    }
}
public function perform()
{
    Session::flush();

    Auth::logout();

    return redirect('login');
}
}
