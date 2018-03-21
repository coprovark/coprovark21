<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 Route::get('/page1', function () {

    $array = [
        "NAME" =>"",
        "ID" =>"",
         "GEN" =>""
     ];
     return view('page.page1', $array);
 });

 Route::get('/page2', function () {
     return view('page.page2');
 });

 Route::get('/page3', function () {
     return view('page.page3');
 });
 Route::get('/page4', function () {
     return view('page.page4');
 });

 Route::post('/page','PageController@show');


 Route::get('/page10/{id}', function ($id) {
     $array = [
         "ID" => $id
     ];
     return view('page.page10',$array);
 });

 Route::post('/page12','PageController@show_select');
 Route::post('/page11','PageController@show_password');


 Route::get('/form', function () {
     return view('page.form');
 });


 Route::get('/login', function () {
     return view('page.login');
 });


 Route::post('/form_check_login','PageController@form_check_login');
  Route::get('/form_check_login',function () {
     $data = [
         "users" => [],
     ];
    return view('page.form_check_login',$array01);
});


 Route::get('/list_users','UsersController@list_users');


 Route::get('delete_user/{id}', function ($id) {
     return 'User '.$id;
 });
Route::get('/delete_user/{id}','UsersController@delete_users');

 Route::post('/form_register_save','UsersController@form_register_save');

 Route::get('/registerlogin', function () {
     return view('page.registerlogin');
 });
 Route::post('/list_users_find','UsersController@list_users_find');


 Route::get('/form2', function () {
    return view('page.form2');
});
