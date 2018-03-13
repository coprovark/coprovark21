<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{

  public function list_users()
  {
      $find='';
      $users = DB::table('coprovark')->select('*')->get();
      return view('page.list_users',[
          'data_list'=>$users,
          'find'     =>$find
      ]);
  }

  public function list_users_find(Request $req)
  {
      $find=$req->find;
      $users = DB::table('coprovark')
                          ->select('*')
                          ->where('id','=',$find)
                          ->get();
      return view('page.list_users',[
          'data_list'=>$users,
          'find'     =>$find
      ]);
  }
    
  

    public function delete_users($id){ 
        DB::table('coprovark')->where('id', '=', $id)->delete();
        return redirect('list_users');
     }

      public function form_register_save(Request $req){

        $status = DB::table('coprovark')->insert(
          [
            'id'      => $req->ID,
            'username'=> $req->USERNAME,
            'password'=> $req->PASSWORD,
            'status'  => $req->STATUS
          ]
        );
        if($status){
           return redirect('list_users');
        }else{
           return "เกิดข้อผิดพลาด";
        }
       
      }
        
        
}

 