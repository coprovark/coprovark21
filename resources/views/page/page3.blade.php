@extends('layouts.main')

@section('title', 'Page Title')
<!-- กรอกชื่อและรหัสผ่าน -->

@section('content')
<form action="/page11" method ="post">
<pasword name="password">
  กรอกชื่อ:<br>
  <input type="text" name="กรอกชื่อ"><br>
  password:<br>
  <input type="password" name="password">
  <input type="submit" value="คลิก">
  </password>

</form>


    
@endsection