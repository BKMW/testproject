@extends('master')
@section('content')

<!====================START DISPLAY ALL NOTES OF CURRENT PAGE======================>
@foreach($page->notes as $note)
<p>{{$note->text}}<a href="{{$note->id}}/edit">Edit</a></p>
<br>
@endforeach
<!====================END DISPLAY ALL NOTES OF CURRENT PAGE========================>
<!====================START FORM NOTE ADD==========================================>
<form class="" method="POST" action="{{$page->id}}/storagenote">
  {{csrf_field()}}
  <input type="text" name="text" placeholder="add note">
  <input type="submit" name="add" value="ADD">
</form>
<!====================END FORM NOTE ADD============================================>
@stop
