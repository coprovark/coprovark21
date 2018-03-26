@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

<h1>List user</h1>

<hr>


<form class="form-inline" action="/list_users_find" method="post"> 

        <a href="/form2">
                    <button class="btn btn-light" type="button">
                        <i class="glyphicon glyphicon-plus"></i> Add
                    </button>
            </a>

    <div class="form-group">
        <div class="input-group">
            <span class="input-group-btn">      
            <input type="text" class="form-control" name="find" placeholder="Information" value="">

            <button class="btn btn-primary" type="submit">
                        <i class="fa fa-search"></i> Search
            </button></span>
        </div>
    </div>

</form><br>

<table class="table">
    <tr>
        <td>รหัสนักศึกษา</td>       
        <td>ชื่อ-สกุล</td>
        <td>วัน เดือน ปีเกิด</td>
        <td>สังกัดคณะ</td>
        <td>Operation</td>
    </tr>

    @foreach($data_list as $obj)
    <tr>
        <td>{{ $obj->sid }}</td>
        <td>{{ $obj->fullName }}</td>
        <td>{{ $obj->birthDay }}</td>
        <td>{{ $obj->facultyID }}</td>
        <td>
            
                <button class="btn btn-danger btn-xs" onclick="return _confirm('{{ $obj->id }}')">
                    <span class="glyphicon glyphicon-remove"></span>  
                     ลบรายการ
                </button>
        
                <button class="btn btn-warning btn-xs">
                    <span class="glyphicon glyphicon-pencil"></span>  
                     แก้ไข
                </button>
            <!-- <div class="dropdown">
                <button class="btn btn-danger dropdown-toggle btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Dropdown
                    <span class="caret"></span>
                </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a href="#"><h5><p><ul class="glyphicon glyphicon-pencil"> Edit</ul></p></h5></a>
                        <hr>
                        <a href=""><h5><p><ul class="glyphicon glyphicon-trash" onclick="return _confirm('{{ $obj->id }}')"> Delete</ul></p></h5></a>
                    </ul>
            </div> -->
        </td>
    </tr>
    @endforeach
</table>
<script>
    function _confirm(id){
        if(confirm('ยืนยันการลบข้อมูล')){
            window.location.href = '/delete_user/'+id;
                                    //'/delete_user/15';
        }
    }
</script>
<!-- <script>
    function _confirm(id){
        if(confirm('ยืนยันการลบข้อมูล')){
            window.location.href = '/delete_user?ID'=+id;
        }
    }
</script> -->
@endsection