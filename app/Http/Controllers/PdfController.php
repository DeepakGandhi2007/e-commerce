<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Models\order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{

// public function index($id){
//     $data=DB::table('orders')->where('id',$id)->get();
//     foreach($data as $items){
//           $orderid=$items->id;
//     }
//       $itemdata=DB::table('orderitems')->where('order_id',$orderid)->get();
//       return view("pdf",["orders_data"=>$data,"item_data"=>$itemdata]);
//     // return view('pdf', compact('order'));
//   }
  public function createPDF($id) {
    $data=DB::table('orders')->where('id',$id)->get();
    foreach($data as $items){
          $orderid=$items->id;
    }
    // dd($data);
      $itemdata=DB::table('orderitems')->where('order_id',$orderid)->get();
    //   return view("pdf",["orders_data"=>$data,"item_data"=>$itemdata]);
    //   dd($itemdata);
    $image = base64_encode(file_get_contents(public_path('/logo.png')));
    // view()->share('pdf',$itemdata,$data);
    $pdf = PDF::setOptions([
        'isHtml5ParserEnabled' => true,
        'isRemoteEnabled' => true,
        'debugPng'=> true,
        'chrootValid' =>true
    ])->loadView('pdf', compact('data', 'itemdata','image'))->setOptions(['defaultFont' => 'sans-serif']);
// dd($pdf);
// print_r($pdf);

    return $pdf->download('report.pdf');
    // $pdf = PDF::loadView('pdf',compact($data,$itemdata));

    // dd($pdf);
    // return $pdf->download('pdf_file.pdf');
}
}
