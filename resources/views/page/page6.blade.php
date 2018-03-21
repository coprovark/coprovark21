@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<form action="/form_register_save" method="post">
  กรอกชื่อ:<br>
  <input type="text" name="กรอกชื่อ"><br>
  password:<br>
  <input type="password" name="passwordจ้า">
  <input type="submit" value="คลิก">

</form>

