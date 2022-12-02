<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class ProductFilterController extends Controller
{
    //

    public function index(Request $request)
    {
        $cate_data = DB::table('categories')->get();
        $brand_data = DB::table('brands')->get();
        $product_data = DB::table('products')->paginate(10);
        return view("/productfilter",["cate_data"=>$cate_data,"brand_data"=>$brand_data,"product_data"=>$product_data]);
    }

    public function filter(Request $request)
    {
        if (isset($_POST['title'])) {
            $search=$_POST['title'];
        $sql = DB::select("SELECT products.product_id  FROM products
        INNER JOIN categories ON categories.id =products.cate_id INNER JOIN brands ON brands.id  = products.brand_id  WHERE  FIND_IN_SET(categories.cate_name,'$search') OR FIND_IN_SET(brands.brand_name,'$search')   group by products.product_id");
        foreach($sql as $key => $value)
        {
              $id=$value->product_id;


        }
        // dd($id);
        $product = DB::select("SELECT *  FROM products WHERE product_id=$id");
         foreach($product as $key => $value)
        {
              $productsdata=array(
              $name=$value->product_name,
              $price=$value->product_price,
              $image=$value->feature_img,
              $id=$value->product_id,
              );
        }


        // dd($data);
        $product_datas =array('products'=>$productsdata,'status'=>'success') ;

        return response()->json($product_datas);

        }
        else{
            dd("wrong");
        }

    }
}
