<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use App\Fees_structure;
class StudentFeeController extends Controller
{
    public function Add_fee_structure(Request $request){

    	$validateData= $this->validate($request, [
    		'class'=>'required',
    		'month'=>'required',
    		'year'=>'required',
            'tution_fee' => 'required|numeric',
            'exam_fee' => 'required|numeric',
            'transport_fee' => 'required|numeric',
            'hostel_fee' => 'required|numeric',
            'extra_cur_fee' => 'required|numeric',
           'Library_fee' => 'required|numeric',
           'event_fee' => 'required|numeric',
          'other_fee' => 'required|numeric',
        ]);

        
     
        $admin_fees_structure= new Fees_structure;

        $admin_fees_structure->year=$request->year;
        $admin_fees_structure->tution_fee=$request->tution_fee;
        $admin_fees_structure->exam_fee=$request->exam_fee;
        $admin_fees_structure->transport_fee=$request->transport_fee;
        $admin_fees_structure->hostel_fee=$request->hostel_fee;
        $admin_fees_structure->libray_fee=$request->Library_fee;
        $admin_fees_structure->event_fee=$request->event_fee;
        $admin_fees_structure->extra_cur_act_fee=$request->extra_cur_fee;
        $admin_fees_structure->other=$request->other_fee;
        $admin_fees_structure->class_id=implode(',', $request->input('class'));
        $admin_fees_structure->month=implode(',', $request->input('month'));
        $is_saved=$admin_fees_structure->save();
        if($is_saved){
        	return redirect()->back()->with('message','Hi There Thank You For add fees structure');
        }
    }
}
