@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

<h1>List user</h1>

<hr>

<!-- @foreach($data_list as $obj)
    <p>{{ $obj->id }}</p>
    @endforeach -->
<form class="form-inline">
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-btn">
            <a href="#">
                    <button class="btn btn-light" type="button">
                        <i class="glyphicon glyphicon-plus"></i> Add
                    </button>
            </a>   
            </span>
            <input type="text" class="form-control" placeholder="Information">  
                <span class="input-group-btn">
                <a href="#">
                    <button class="btn btn-primary" type="button">
                        <i class="fa fa-search"></i> Search
                    </button>
                </a>
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
        <!-- <div class="btn-group">
                <button type="button" class="btn btn-danger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Dropdown <i class="glyphicon glyphicon-chevron-down"></i>
                </button>
                
                <div class="dropdown-menu">
                <br>
                <div><a class="dropdown-item" href="#"><P Align=center><i class="glyphicon glyphicon-pencil"></i> Edit</p></a></div>
                <hr>
                <div><a class="dropdown-item" href="#"><P Align=center><i class="glyphicon glyphicon-erase"></i> Delete</p></a></div>
            </div>
        </div> -->
            <div class="dropdown">
                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Dropdown
                    <span class="caret"></span>
                </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a href="#"><h4><p><ul class="glyphicon glyphicon-pencil"> Edit</ul></p></h4></a>
                        <hr>
                        <a href="#"><h4><p><ul class="glyphicon glyphicon-trash"> Delete</ul></p></h4></a>
                    </ul>
            </div>
        </td>
    </tr>
    @endforeach
</table>

@endsection