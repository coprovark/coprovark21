@extends('layouts.main')

@section('title', 'Page Title')


@section('content')
 <form action="/page" method="post">
    <input type="text" name="name">
    <input type="hidden" name="hidden" value="เจ้าเห็นอะไรไหม55555555555555555555">

    <input type="radio" name="radio" value="เจ้าเป็นหญิงแท้ทรู"> หญิง
    <input type="radio" name="radio" value="เจ้าเป็นชายเพศไหน">ชาย
    <br>

    <input type="submit" value="ออเจ้าชื่ออะไร">

</form>
<h2>ดูที่ออเจ้าตอบ</h2>
ชื่อ = {{$NAME}};<br>
เลขอะไร = {{$ID}};<br>
ตอบบบบบบ = {{$GEN}};<br>
    
    
@endsection