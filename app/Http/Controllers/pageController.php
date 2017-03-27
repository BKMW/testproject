<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Page;

class pageController extends Controller
{
  /*========DISPLAY ALL TITLE OF PAGES FROM DB::PAGES=================*/
public function show(){
  $pages= DB::table('pages')->get();
      return view('show',compact('pages'));
}
/*========INSERT TITLE OF PAGE INTO DB::PAGES=========================*/
public function store(Request $request){
  $page= new Page;
  $page->title=$request->title;
  $page->save();
      return back();
}
/*========DELETE PAGE FROM DB::PAGES==================================*/
public function delete(Page $page){
  $page->delete();
  return back();
}
/*========DISPLAY CONTENT OF ONE PAGE FROM DB::NOTES=================*/ 
public function onepage(Page $page){
      return view('onepage',compact('page'));
}
}
