@extends('layouts.main')

@section('title', 'Page Title')
<!-- post -->

@section('content')
<form action="/page12" method="POST">
  <select name="select">
  <option value="sunday">sunday</option>
  <option value="monday">monday</option>
  <option value="tueday">tueday</option>
  <option value="weneday">weneday</option>
  <option value="tuesday">tuesday</option>
  <option value="friday">friday</option>
  <option value="satday">satday</option>
  </select>
  <br>
  <textarea name="txt_textarea"></textarea>
  <input type="submit" value="sent">

</form>


    
@endsection