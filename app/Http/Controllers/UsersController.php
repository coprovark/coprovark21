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
                $users = DB::table('coprovark_21')->select('*')->get();
                return view('page.list_users',[
                    'data_list'=>$users,
                    'find'     =>$find
                ]);
                //print_r($users);
            }

        public function list_users_find(Request $req)
            {
                $find=$req->find;
                $users = DB::table('coprovark_21')
                                    ->select('*')
                                    ->where('sid','=',$find)
                                    ->get();
                return view('page.list_users',[
                    'data_list'=>$users,
                    'find'     =>$find
                ]);
            }
            
        

            public function delete_users($id){ 
                DB::table('coprovark_21')->where('id', '=', $id)->delete();
                return redirect('list_users');
            }

            public function form_register_save(Request $req){

                $status = DB::table('coprovark_21')->insert(
                ['id'      => $req->ID,
                'username'=> $req->USER,
                'password'=> $req->PASSWORD,
                'status'  => $req->STATUS,
                'sid'       => $req->sid,
                'titleName' => $req->titleName,
                'fullName'  => $req->fullName,
                'gender'    => $req->gender,
                'birthDay'  => $req->birthDay,
                'facultyID'  => $req->facultyID,
                'majorID'  => $req->majorID,
                'address'  => $req->address,
                'mobile'  => $req->mobile,
                'food1'  => $req->food1,
                'food2'  => $req->food2,
                'food3'  => $req->food3,
                'food4'  => $req->food4,
                'username'  => $req->username,
                'password'  => $req->password
                    
                ]
                );
                if($status){
                return redirect('list_users');
                }else{
                return "เกิดข้อผิดพลาด";
                }
            }
        }
            
            //    return $req;
        //     public function list_users()
        //     {
        //     $find='';
        //     $users = DB::table('coprovark_21')->select('*')->get();
        //     return view('page.list_users',[
        //         'data_list'=>$users,
        //         'find'     =>$find
        //     ]);
        //     }
        // }
    
            // แก้ไข user
        // public function list_user_edit(Request $req){
        //     $find = $req->id;
        //     $user = DB::table('coprovark_21')
        //                     ->select('*')
        //                     ->where('id','=',$find)
        //                     ->get();
        //     return view('page.list_user_edit',[
        //             'user'=>$user
        //     ]);
        // }


        // //  <!-- Bootstrap Core CSS -->
        //     <link rel="stylesheet" href="{{ URL::asset('asset/css/bootstrap/css/bootstrap.min.css') }}">

        //     <!-- MetisMenu CSS -->
        //     <link rel="stylesheet" href="{{ URL::asset('asset/css/metisMenu/metisMenu.min.css') }}">

        //     <!-- Custom CSS -->
        //     <link rel="stylesheet" href="{{ URL::asset('asset/css/sb-admin-2.css') }}">

        //     <!-- Custom Fonts -->
        //     <link rel="stylesheet" href="{{ URL::asset('asset/css/font-awesome/css/font-awesome.min.css') }}">







        // //===================Controller  UserControllers.php====================
            //อัพเดทข้อมูล user
        //     public function list_user_update(Request $req){
        //         $user_code      = $req->user_code;
        //         $user_name      = $req->user_name;
        //         $user_password  = $req->user_password;
        //         $data = [
        //             'username'=>$user_name,
        //             'password'=>$user_password,
        //         ];
        //         $status = DB::table('users')
        //                     ->where('id', $user_code)
        //                     ->update($data);
        //         return redirect('list_users');
        //     }
