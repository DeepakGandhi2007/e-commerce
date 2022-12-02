<?php

namespace App\Http\Controllers;

use App\Models\page;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Image;
use DB;
use Illuminate\Support\Facades\URL;

class PageController extends Controller
{
    //
    public function index()
    {
        return view("admin_panel/page");
    }

    public function addpage()
    {
        return view("admin_panel/add_page");
    }

    public function add_page(Request $request)
    {

        $file = $request->file('page_pic');

    $name=$file->getClientOriginalName();
    $ext=$file->getClientOriginalExtension();
    if($ext=="png" or $ext=="jpg" or $ext=="PNG" or $ext=="jpeg")
    {
        $destinationPath = 'pagepic';
        //  if( $file->move($destinationPath,$file->getClientOriginalName()))
        //  {
            //   $url=URL::to("/").'/uploads/'.$file->getClientOriginalName();
              $page=new page();
              $page->page_name=$request->input("page_name");
              $page->page_title=$request->input("page_title");
              $page->page_description=$request->input("page_description");
              $page->images=$file->getClientOriginalName();
              $page->save();
              $page = Image::make($request->file("page_pic"))->resize(200, 200, function ($constraint) {$constraint->aspectRatio();$constraint->upsize();})->save(public_path('/pagethumbnail/'.$file->getClientOriginalName()));;
              // dd($gallery);
               // $query = DB::getQueryLog();
               // dd($query);

            $file->move($destinationPath,$file->getClientOriginalName());

              return redirect('/admin_panel/add_page')->with("success","add page successsfully");
        //  }
        //  else{
        //     return redirect('/admin_panel/add_upvcspage')->with("success","uploads a pic");

        //  }



    }
    else{
        return redirect("/admin_panel/add_page")->with("Success","file extention not match");
    }


    }

    public function changeeeeeStatus(Request $request)
    {
        DB::table('pages')->where('id', $request->pageid)->update(['status' => $request->pagestatus]);
    }

}
