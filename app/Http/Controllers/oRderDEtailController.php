<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class oRderDEtailController extends Controller
{
    //
    public function index($id)
    {
            $data=DB::table('orders')->where('id',$id)->get();
          foreach($data as $items){
                $orderid=$items->id;
          }
            $itemdata=DB::table('orderitems')->where('order_id',$orderid)->get();


            return view("orderdetail",["orders_data"=>$data,"item_data"=>$itemdata]);

    }


}
