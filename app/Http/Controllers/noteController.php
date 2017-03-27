<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Page;
use App\Note;
class noteController extends Controller
{
  /*========INSERT TEXT OF INTO DB::NOTES=============================*/
  public function store(Request $request,Page $page){
    $note= new Note;
    $note->text=$request->text;
    $page->notes()->save($note);
        return back();
  }
  /*========UPDATE TEXT INTO DB::NOTES================================*/
  public function edit(Note $note){

        return view('edit',compact('note'));
  }
  /*========UPDATE TEXT INTO DB::NOTES================================*/
  public function update(Request $request,Page $page){
    $note= new Note;
    $note->text=$request->text;
    $page->notes()->save($note);
        return back();
  }
  /*========DELETE TEXT OF FROM DB::NOTES=============================*/
  public function delete(Request $request,Page $page){
    $note= new Note;
    $note->text=$request->text;
    $page->notes()->save($note);
        return back();
  }
}
