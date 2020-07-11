<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subject;
use Illuminate\Support\Facades\DB;
class ClassController extends Controller
{
   public function OpenAdd_new_class_from(Request $request){
     $subject=DB::table('subjects')->get();
        
   	return view('Admin/class/add_class',compact('subject'));
   }
}
