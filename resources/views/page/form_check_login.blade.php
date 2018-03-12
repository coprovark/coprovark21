@extends('layouts.main')

@section('title', 'Page Title')


@section('content')
<form class="form-inline" action="form_check_login" method="post">
 <center>
 <div class="form-group">
    <div class="form-group">
    <label for="exampleInputName">Username</label>
    <input type="name" name="username" class="form-control" id="exampleInputName" placeholder="@Username">
    </div>
    <label for="exampleInputName">password</label>
    <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">login</button>
  </center>
</form>
@endsection


@foreach ($users as $user) :
   {{ $user->username }}
@endforeach