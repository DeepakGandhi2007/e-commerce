<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class wishlistcontroller extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user_id= Auth::user()->id;
        $wishlist_data = DB::table('wishlists')->where('userid','=',$user_id)->get();
    
        // dd($wishlist_data);
        return view("wishlist",["wishlist_data"=>$wishlist_data]);
        
    }

    public function deletefromwish(Request $request)
    {
        $id=$request->product_id;
        // dd($id);
        $rec=DB::table('wishlists')->where('id',$id)->delete();
        if($rec)
        {
            return response()->json(['status'=>'Item Removed from Cart']);        }
        // else{
        //     return redirect("wishlist")->with("success","Blog not delete successfully !");
        // }
}
}