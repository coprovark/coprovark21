<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{

    public function list_users()
    {
        $users = DB::table('coprovark')->select('*')->get();
        return view('page.list_users',['data_list'=>$users]);
    }
}