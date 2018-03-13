@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

<h1>List user</h1>

<hr>

<!-- @foreach($data_list as $obj)
    <p>{{ $obj->id }}</p>
    @endforeach -->
<form class="form-inline" action="/list_users_find" method="post">
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-btn">
            <a href="/registerlogin">
                    <button class="btn btn-light" type="button">
                        <i class="glyphicon glyphicon-plus"></i> Add
                    </button>
            </a>   
            </span>
            <input type="text" class="form-control" placeholder="Information" name ="find" value="{{ $find }}" >  
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-search"></i> Search
                    </button>
                </span>
            
        </div>
    </div>

</form><br>

<table class="table">
    <tr>
        <td>ID</td>
        <td>Username</td>
        <td>Password</td>
        <td>Status</td>
        <td>Operation</td>
    </tr>
    @foreach($data_list as $obj)
    <tr>
        <td>{{ $obj->id }}</td>
        <td>{{ $obj->username }}</td>
        <td>{{ $obj->password }}</td>
        <td>{{ $obj->status }}</td>
        <td>
        <button class="btn btn-danger btn-xs" onclick="return _confirm('{{ $obj->id }}')">
                    <span class="glyphicon glyphicon-remove"></span>  
                     ลบรายการ
                </button>
            <!-- <div class="dropdown">
                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Dropdown
                    <span class="caret"></span>
                </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a href="#"><h4><p><ul class="glyphicon glyphicon-pencil"> Edit</ul></p></h4></a>
                        <hr>

                        <a href="#"><h4><p><ul class="glyphicon glyphicon-trash"> Delete</ul></p></h4></a>
                        
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
@endsection