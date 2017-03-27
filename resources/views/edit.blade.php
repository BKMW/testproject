@extends('master')
@section('content')
<!====================START FORM NOTE UPDATE==========================================>
<form class="" method="POST" action="">
  {{csrf_field()}}
  <input type="text" name="text" value="{{$note->text}}" placeholder="update">
  <input type="submit" name="update" value="UPDATE">
</form>
<!====================END FORM NOTE ADD============================================>
@stop
