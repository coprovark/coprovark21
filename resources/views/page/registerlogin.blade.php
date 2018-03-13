@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

<form action="/form_register_save" method="post">
                            <div class="form-group">
                              <label for="exampleInputid">id</label>
                              <input type="id" class="form-control" name="ID" placeholder="xxxx">
                            </div>


                            <div class="form-group">
                              <label for="exampleInputusername">username</label>
                              <input type="username" class="form-control" name="USERNAME" placeholder="username">
                            </div>

                            </div>
                             <label for="exampleInputName">password</label>
                            <input type="password" class="form-control" name="PASSWORD" placeholder="Password">
                             </div>

                             <div class="form-group">
                              <label for="exampleInputstetus">stetus</label>
                              <input type="number" class="form-control" name="STATUS" placeholder="x">
                            </div>

                      <button class="btn btn-danger btn-xs" >
                    <span class="glyphicon glyphicon-remove"></span>  
                     บันทึก
                </button>

                           
                          @endsection