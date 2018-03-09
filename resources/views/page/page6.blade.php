@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<form action="/page" ="password">
  กรอกชื่อ:<br>
  <input type="text" name="กรอกชื่อ"><br>
  password:<br>
  <input type="password" name="password">
  <input type="submit" value="คลิก">

</form>

