<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
class UsersController extends Controller
{
    public function show_users(){
     $users = DB::table('users')->get();
   
     return view('Admin/users/all_user',compact('users'));

    }
}
