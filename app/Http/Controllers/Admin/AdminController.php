<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Student_Adminssion;
use App\Subject;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function StudentDetail(){
    	return view('Admin/StudentDetail');
    }
    
    public function All_Student_list(){
    	return view('Admin/All_student_list');
    }
    public function Studen_attendence(){
    	return view('Admin/Student_attendence');
    }
    public function Student_Message(){
    	return view('Admin/Student_message');
    }
    public function Student_Promotion(){
        return view('Admin/Student_Promotion');
    }
    public function Student_Contact(){
        return view('Admin/Student_Contact');
    }
    public function all_Post_Admin(){
        return view('Admin/All_blogs');
    }
    public function make_fees_structure(Request $request){
      
       
        return view('Admin/Make_fees_structure');
    }
}
