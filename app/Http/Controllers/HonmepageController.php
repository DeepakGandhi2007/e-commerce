<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Category;
use App\Models\wishlist;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class HonmepageController extends Controller
{
    //

    public function index()
    {
        $banner = DB::table('banners')->get();
        $featured_product = DB::table('products')->get();
        $bottomfeatured_product = DB::table('products')->paginate(4);
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
         $cart_data = json_decode($cookie_data, true);
        $latest_product = DB::table('products')->orderBy('product_id', 'DESC')->get();
        $bottomlatest_product = DB::table('products')->orderBy('product_id', 'DESC')->paginate(4);
        $sale = DB::table('products')->orderBy('product_price', 'ASC')->get();
        $bottomsale = DB::table('products')->orderBy('product_price', 'ASC')->paginate(4);
        $best_seller = DB::table('orderitems')
        ->select('product_id','item_name','item_price','item_img',DB::raw('COUNT(*) as `count`'))
        ->groupBy('product_id','item_name','item_price','item_img')
        ->having('count', '>', 1)
        ->get();
        return view("homepage",["banner_data"=>$banner,"product_data"=>$featured_product,"product_value"=>$latest_product,"cart_data"=>$cart_data,"sale_data"=>$sale,"seller_product"=>$best_seller,"bottomfeatured_product"=>$bottomfeatured_product,"bottomlatest_product"=>$bottomlatest_product,"bottomsale"=>$bottomsale]);
    }

    public function setData(Request $request)
    {

        $prod_id = $request->dataid;
        $quantity = 1;
        $pro_name = $request->dataname;
        $pro_img = $request->dataimg;
        $pro_price = $request->dataprice;
        // dd($prod_id);
        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            // print_r($cart_data);
        }
        else
        {
            $cart_data = array();
        }

        $item_id_list = array_column($cart_data, 'item_id');
        $prod_id_is_there = $prod_id;

        if(in_array($prod_id_is_there, $item_id_list))
        {
            foreach($cart_data as $keys => $values)
            {
                if($cart_data[$keys]["item_id"] == $prod_id)
                {
                    $cart_data[$keys]["item_quantity"] = $request->input('quantity');
                    $item_data = json_encode($cart_data);
                    $minutes = 4320;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return response()->json(['status'=>"Already Added to Cart"]);
                }
            }
        }
            $item_array = array(
                'item_id' => $request->dataid,
                'item_name' =>$request->dataname,
                'item_quantity' =>1,
                'item_price' => $request->dataprice,
                'item_image' =>$request->dataimg,

            );
            $cart_data[] = $item_array;
            $item_data = json_encode($cart_data);
            $count=count($cart_data);
            // dd($count);
            $minutes = 1;
            Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
            return response()->json(['status'=>" Added to Cart",'data'=>$cart_data,'count'=>$count]);
        }


        public function search(Request $request){
            if($request->ajax()) {
                $data = DB::table('products')
                ->select('product_name')
                ->join('categories','products.cate_id','=','categories.id')
                ->where('categories.cate_name','LIKE', $request->search.'%')
                ->get();
                if (count($data)>0) {
                    $output = '<ul class="list-group" style="  list-style-type: none;
                    padding: 0;
                    margin: 0;float:left">';
                    foreach ($data as $row){

                        $output .= '<li style="style=" border: 1px solid white;
                        margin-top: -1px; /* Prevent double borders */
                        background-color: #282928;
                        width:730px;
                        margin-right:50px;
                        padding-top: 12px;
                        text-decoration: none;
                        font-size: 18px;
                        color: white;
                        display: block;""><a href="#" style=" border: 1px solid white;
                        margin-top: -1px; /* Prevent double borders */
                        background-color: #282928;
                        text-align:left;
                        padding-left:15px;
                        width:730px;
                        margin-right:50px;
                        padding-top: 12px;
                        padding-right:55px;
                        text-decoration: none;
                        font-size: 18px;
                        color: white;
                        display: block;">'.$row->product_name.'</a></li>';
                    }
                    $output .= '</ul>';
                }
                $data = product::where('product_name', 'LIKE', $request->search.'%')
                ->get();
                if(count($data)>0){


                if (count($data)>0) {
                    $output = '<ul class="list-group" style="  list-style-type: none;
                    padding: 0;
                    margin: 0;float:left">';
                    foreach ($data as $row){

                        $output .= '<li style="style=" border: 1px solid white;
                        margin-top: -1px; /* Prevent double borders */
                        background-color: #282928;
                        width:730px;
                        margin-right:50px;
                        padding-top: 12px;
                        text-decoration: none;
                        font-size: 18px;
                        color: white;
                        display: block;""><a href="#" style=" border: 1px solid white;
                        margin-top: -1px; /* Prevent double borders */
                        background-color: #282928;
                        text-align:left;
                        padding-left:15px;
                        width:730px;
                        margin-right:50px;
                        padding-top: 12px;
                        padding-right:55px;
                        text-decoration: none;
                        font-size: 18px;
                        color: white;
                        display: block;">'.$row->product_name.'</a></li>';
                    }
                    $output .= '</ul>';
                }

            }
            else {

                $output .= '<li class="list-group-item">'.'No results'.'</li>';
            }
                return $output;

            }

        }

        public function searchresult(Request $request){
                $ddddddddddddddd = product::where('product_name', 'LIKE', $request->search.'%')
                ->get();
                $data = DB::table('products')
                ->select('product_name','product_id','product_price','feature_img','optional_img')
                ->join('categories','products.cate_id','=','categories.id')
                ->where('categories.cate_name','LIKE',$request->search.'%')
                ->get();
              if(count($data)>0){

                for($i = 0; $i < count($data); $i++) {
                    $item_name=$data->toArray();
                    $item_name=$item_name;
                }
                $cate_data = DB::table('categories')->get();
                $brand_data = DB::table('brands')->get();
                return view("searchpage",["ddddddddddddddd"=>$ddddddddddddddd,"cate_data"=>$cate_data,"brand_data"=>$brand_data,"item_name"=>$item_name]);
            }
            $cate_data = DB::table('categories')->get();
            $brand_data = DB::table('brands')->get();
            return view("searchpage",["ddddddddddddddd"=>$ddddddddddddddd,"cate_data"=>$cate_data,"brand_data"=>$brand_data]);

        }

        public function wish(Request $request)
        {
            if(Auth::user()){
            $prod_id = $request->dataid;
            $pro_name = $request->dataname;
            $pro_img = $request->dataimg;
            $pro_price = $request->dataprice;
            $user_id = $request->userid;

              if (wishlist::where('prod_id', '=', $prod_id)->where('userid','=',$user_id)->exists()) {
              return response()->json(['status'=>"product already added to wishlist"]);   
                 }
            else{
                $wishlist=new wishlist();
                $wishlist->userid=$user_id;
                $wishlist->prod_id=$prod_id;
                $wishlist->pro_name=$pro_name;
                $wishlist->pro_img=$pro_img;
                $wishlist->pro_price=$pro_price;
                $wishlist->save();
                return response()->json(['status'=>"product added to wishlist"]);   
            }
        }
        else{
            $this->middleware('auth');
        }
        
    
    }
}