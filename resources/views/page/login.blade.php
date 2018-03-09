@extends('layouts.main')

@section('title', 'Page Title')


@section('content')
<form class="form-inline">
 <center>
 <div class="form-group">
    <div class="form-group">
    <label for="exampleInputName">Username</label>
    <input type="name" class="form-control" id="exampleInputName" placeholder="@Username">
    </div>
    <label for="exampleInputName">password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">login</button>
  </center>
</form>
@endsection