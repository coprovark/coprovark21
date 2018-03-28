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

//  Route::get('/list_users', function () {
//     return view('page.list_users');
// });
//  Route::post('/list_users_find','UsersController@list_users_find');


 Route::get('/form2', function () {
    return view('page.form2');
});
Route::get('/pageuser', function () {
    return view('page.pageuser');
});
Route::get('/list_users1', function () {
    return view('page.list_users1');
});

Route::post('/list_user_update','UsersController@list_user_update');


Route::get('/formtitle', function () {
    return view('page.formtitle');
});

Route::get('/formtitle2', function () {
    return view('page.formtitle2');
});


Route::get('/new1_main', function () {
    return view('page.new1_main');
});

Route::get('/list_user_edit', function () {
    return view('page.list_user_edit');
});

// Route::get('/upload1', function () {
//     return view('file.upload');
//   });

// Route::post('/upload1','FileController@upload1');
Route::get('/upload1','FileController@show');
Route::post('/upload1','FileController@upload');

Route::get('/dl/{path}','FileController@dl');

Route::get('/rm/{ID}','FileController@rm');
Route::get('/dl/{path}/{name}','FileController@dl');
