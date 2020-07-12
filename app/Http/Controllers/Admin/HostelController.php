<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\model\Hostel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HostelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hostel_by_admin()
    {
        $hostel =DB::table('hostels')->paginate(3);
        return view ('Admin/hostel/hostel',compact('hostel'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add_hostel = new Hostel;
        $add_hostel->hostel_name=implode(',', $request->input('Hostel_name'));
        $add_hostel->room_number= $request->room_number;
        $add_hostel->room_type=implode(',', $request->input('room_type'));
        $add_hostel->number_of_bed=implode(',', $request->input('bed_in_room'));
        $add_hostel->room_cost= $request->bed_cost;
        $hostel=$add_hostel->save();
        if($hostel){
            return redirect()->back()->with('message','Hi There Thank You For adding New Room or Hostel');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\Hostel  $hostel
     * @return \Illuminate\Http\Response
     */
    public function show(Hostel $hostel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\Hostel  $hostel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hostel $hostel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\Hostel  $hostel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hostel $hostel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\Hostel  $hostel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hostel $hostel)
    {
        //
    }
}
