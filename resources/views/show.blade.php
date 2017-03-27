@extends('master')
@section('content')

<h2>ALL PAGES</h2>
<!====================START DISPLAY ALL TITLE PAGES======================>
@foreach($pages as $page)
<a href="{{$page->id}}">
<span>{{$page->title}}</span>
<a href="pages/{{$page->id}}/delete">Delete</a>
</a>
<br>
@endforeach
<!====================END DISPLAY ALL TITLE PAGES========================>
<!====================START FORM PAGES ADD===============================>
<form class="" action="storagepage" method="post">
  {{csrf_field()}}
  <input type="text" name="title" placeholder="Title Of Page">
  <input type="submit" name="add" value="ADD">
</form>
<!====================END FORM PAGES ADD=================================>

@stop
