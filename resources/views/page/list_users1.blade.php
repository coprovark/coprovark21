@extends('layouts.main')
 
 @section('title', 'Page Title')
 
 @section('content')
 
 <!-- <h1>List user</h1>
 
 <hr>
 
 <!-- @foreach($data_list as $obj)
     <p>{{ $obj->id }}</p>
     @endforeach -->
 
 <form class="form-inline" action="/list_users_find" method="post"> 
 
         <a href="/form2">
                     <button class="btn btn-light" type="button">
                         <i class="glyphicon glyphicon-plus"></i> Add
                     </button>
             </a>
 
     <div class="form-group">
         <div class="input-group">
             <span class="input-group-btn">      
             <input type="text" class="form-control" name="find" placeholder="Information" value="{{ $find }}">
 
             <button class="btn btn-primary" type="submit">
                         <i class="fa fa-search"></i> Search
             </button></span>
         </div>
     </div>
 
 </form><br>
 
 <table class="table">
     <tr>
        <td>ID</td>
        <td>Username</td>
        <td>Password</td>
        <td>Status</td>
        <td>รหัสนักศึกษา</td>
        <td>ชื่อ-สกุล</td>
        <td>วัน เดือน ปีเกิด</td>
        <td>สังกัดคณะ</td>
         <td>Operation</td>
     </tr>
     @foreach($data_list as $obj)
     <tr>
        <td>{{ $obj->id }}</td>
        <td>{{ $obj->username }}</td>
        <td>{{ $obj->password }}</td>
        <td>{{ $obj->status }}</td>
        <td>{{ $obj->sid }}</td>
        <td>{{ $obj->fullName }}</td>
        <td>{{ $obj->birthDay }}</td>
        <td>{{ $obj->facultyID }}</td>
         <td>
                 <button class="btn btn-danger btn-xs" onclick="return _confirm('{{ $obj->id }}')">
                     <span class="glyphicon glyphicon-remove"></span>  
                      ลบรายการ
                 </button>
         
                 <button type="button" class="btn btn-danger" onclick="return _confirm('{{ $obj->id }}')">
                 a href=
                                      <span class="glyphicon glyphicon-pencil"></span>  
                      แก้ไขข้อมูล
                 </button>
          
         </td>
     </tr>
     @endforeach
 </table>
 <script>
     function _confirm(id){
         if(confirm('ยืนยันการลบข้อมูล')){
             window.location.href = '/delete_user/'+id;
                                 
     }
 </script> -->
 
 @endsection