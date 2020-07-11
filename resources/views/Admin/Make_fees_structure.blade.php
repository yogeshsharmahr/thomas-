@extends('layouts.admin')

@section('content')
<div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Students</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Add Student Fee Structure</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
                <!-- Student Promotion Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add Student Fee Structure</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" action="{{ route('make.fee.structure')}}" method="post">
                        	@csrf
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class *</label>
                                    <select class="select2" name="class[]">
                                        <option value=""disabled selected>Please Select *</option>
                                        <option value="1">Class I</option>
                                        <option value="2">Class II</option>
                                        <option value="3">Class III</option>
                                        <option value="3">Class IV</option>
                                        <option value="3">Class V</option>
                                        <option value="3">Class VI</option>
                                    </select>
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Month *</label>
                                    <select class="select2" name="month[]">
                                        <option value=""disabled selected>Please Select *</option>
                                        <option value="1">Jan</option>
                                        <option value="2">feb</option>
                                        <option value="3">Mar</option>
                                        <option value="3">Apr</option>
                                        <option value="3">May</option>
                                        <option value="3">June</option>
                                        <option value="3">July</option>
                                        <option value="2">Auj</option>
                                        <option value="3">Sept</option>
                                        <option value="3">Oct</option>
                                        <option value="3">Nov</option>
                                        <option value="3">Dec</option>
                                    </select>
                                </div>
                               <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> Session *</label>
                                    <input type="text" placeholder="" class="form-control" name="year">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> Tution fee *</label>
                                    <input type="text" placeholder="" class="form-control" name="tution_fee">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Eaxm Fee </label>
                                    <input type="text" placeholder="" class="form-control" name="exam_fee">
                                </div>
                             
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Transport fee </label>
                                    <input type="text" placeholder="" class="form-control"name="transport_fee">
                                </div>
                              
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> Hostel fee</label>
                                    <input type="text" placeholder="" class="form-control" name="hostel_fee">
                                </div>
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Extra curricular fee </label>
                                    <input type="text" placeholder="" class="form-control"name="extra_cur_fee">
                                </div>
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Library Fee *</label>
                                    <input type="text" placeholder="" class="form-control" name="Library_fee">
                                </div>
                              
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Event Fee</label>
                                    <input type="text" placeholder="" class="form-control"name="event_fee">
                                </div>
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Other fee</label>
                                    <input type="text" placeholder="" class="form-control" name="other_fee">
                                </div>
                            </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
@endsection
