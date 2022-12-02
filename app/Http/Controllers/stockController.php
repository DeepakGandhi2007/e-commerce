<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use App\Models\stock;

class stockController extends Controller
{
    //

    public function index()
    {
        $stock_data = DB::table('stocks')
        ->select('product_name','stocks.product_id','product_stock','id')
        ->join('products', 'stocks.product_id', '=', 'products.product_id')
        ->get();
        for($i=0; $i<count($stock_data); $i++){
          print_r($stock_data[$i]->product_id);
        }

        // $qty = DB::table('orderitems')->where('product_id','=',$prodid)->get();  
        // dd($qty);
        die();
//         $qtydata = DB::table('orderitems')
//         ->select('product_id')
//         ->join('stocks', 'orderitems.product_id', '=', 'stocks.product_id')
//         ->where('orderitems.product_id','=','stocks.product_id')
//         ->sum('item_qty');
//         // ->get();
// dd($qtydata);
            $qty=array($qtydata);
        return view("Admin_panel/stocks",["stock_data"=>$stock_data],compact('qty'));
    }
    public function addstock()
    {
        $product_data = DB::table('products')->get();
        // dd($product_data);
        return view("Admin_panel/add_stock",["product_data"=>$product_data]);
    }

    public function add_stock(Request $request)
    {
              $stock=new stock();
              $stock->product_id =$request->input("product_name");
              $stock->product_stock =$request->input("product_stock");
              $stock->save();
              return redirect('/admin_panel/add_stock')->with("success","add stock successsfully");
    }

    public function edit($id)
    {
            $data=DB::table('stock')->where('id',$id)->get();
            return view("admin_panel/edit_stock",["data"=>$data]);
    }


    }

