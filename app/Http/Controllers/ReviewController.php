<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\URL;

class ReviewController extends Controller
{
    //
    public function index()
    {
        $review_data = DB::table('reviews')->paginate(10);
        return view("admin_panel/Reviews",["review_data"=>$review_data]);
    }

    public function statuschange(Request $request)
    {
        DB::table('reviews')->where('id', $request->reviewid)->update(['status' => $request->reviewststus]);
    }

}
