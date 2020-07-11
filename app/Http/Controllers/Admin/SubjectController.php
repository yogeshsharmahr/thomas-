<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Subject;
use Illuminate\Support\Facades\DB;
class SubjectController extends Controller
{
    public function open_suject_form(){

   $added_subject= DB::table('subjects')->Paginate(3);

    	return view('Admin/subject/add_subject', compact('added_subject'));
    }
    public function add_subject(Request $request){
  
    	$validateData= $this->validate($request, [
    		'subjectname'=>'required',
    		'sbuject_type'=>'required',
    		'Teacher_name'=>'required',
    		'class'=>'required',
    		'subject_code'=>'required',
            
            
        ]);
 

     $new_subject= new Subject;

    $new_subject->subject_name=$request->subjectname;
    $new_subject->teacher_name=implode(',', $request->input('Teacher_name'));
    $new_subject->subject_type=implode(',', $request->input('sbuject_type'));
    $new_subject->class_name=implode(',', $request->input('class'));
    $new_subject->subject_code=implode(',', $request->input('subject_code'));
    
    $add_subject=$new_subject->save();
    if($add_subject){
    	return redirect()->back()->with('message','Hi There Thank You For add New Subject');
    }
    }
}
