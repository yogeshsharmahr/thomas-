<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\model\Addmission;
use Illuminate\Http\Request;

class AddmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        
    
    public function Student_Adminssion()
    {
       return view('Admin/Student_Admission');
    }
    public function StudentDetail(){
        return view('Admin/StudentDetail');
    }
    
    public function All_Student_list(){
        return view('Admin/All_student_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\Addmission  $addmission
     * @return \Illuminate\Http\Response
     */
    public function show(Addmission $addmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\Addmission  $addmission
     * @return \Illuminate\Http\Response
     */
    public function edit(Addmission $addmission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\Addmission  $addmission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Addmission $addmission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\Addmission  $addmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Addmission $addmission)
    {
        //
    }
}
