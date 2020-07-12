@extends('layouts.admin')

@section('content')
<!-- Sidebar Area End Here -->
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Hostel List</h3>
        <ul>
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>Hostel</li>
        </ul>

    </div>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    <!-- Breadcubs Area End Here -->
    <div class="row">
        <!-- Add Room Area Start Here -->
        <div class="col-4-xxxl col-12">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Add New Room</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-times text-orange-red"></i>Close</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                            </div>
                        </div>
                    </div>
                    <form class="new-added-form" action="{{ route('add.room') }}" method="Post">
                        @csrf
                        <div class="row">
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <label>Select Hostel</label>
                                <select class="select2" name="Hostel_name[]">
                                    <option selected disabled >Please Select</option>
                                    <option value="BH-101">BH-101</option>
                                    <option value="BH-102">BH-102</option>
                                    <option value="BH-103">BH-103</option>
                                    <option value="GH-201">GH-201</option>
                                    <option value="GH-202">GH-202</option>

                                </select>
                            </div>
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <label>Room Number</label>
                                <input type="text" placeholder="" class="form-control" name="room_number">
                            </div>
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <label>Room Type</label>
                                <select class="select2" name="room_type[]">
                                    <option selected disabled>Please Select</option>
                                    <option value="AC">AC</option>
                                    <option value="Duplex">Duplex</option>
                                    <option value="Non AC">Non AC</option>
                                </select>
                            </div>
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <label>Number Of Bed</label>
                                <select class="select2" name="bed_in_room[]">
                                    <option selected disabled >Please Select</option>
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">05</option>
                                </select>
                            </div>
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <label>Cost Per Bed</label>
                                <input type="text" placeholder="RS 00.00" class="form-control" name="bed_cost">
                            </div>
                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Add Room Area End Here -->
        <!-- All Room List Area Start Here -->
        <div class="col-8-xxxl col-12">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Hostel Room Lists</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-times text-orange-red"></i>Close</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                            </div>
                        </div>
                    </div>
                    <form class="mg-b-20">
                        <div class="row gutters-8">
                            <div class="col-lg-4 col-12 form-group">
                                <input type="text" placeholder="Search by Hostel ..." class="form-control">
                            </div>
                            <div class="col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by Room ..." class="form-control">
                            </div>
                            <div class="col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by Bed ..." class="form-control">
                            </div>
                            <div class="col-lg-2 col-12 form-group">
                                <button type="submit"
                                    class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input checkAll">
                                            <label class="form-check-label">Hostel Name</label>
                                        </div>
                                    </th>
                                    <th>Room No</th>
                                    <th>Room Type</th>
                                    <th>No Of Bed</th>
                                    <th>Cost Per Bed</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($hostel as $hostel_detail)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">{{ $hostel_detail->hostel_name }}</label>
                                        </div>
                                    </td>
                                    <td>{{ $hostel_detail->room_number }}</td>
                                    <td>{{ $hostel_detail->room_type }}</td>
                                    <td>{{ $hostel_detail->number_of_bed }}</td>
                                    <td>Rs :{{ $hostel_detail->room_cost}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i
                                                        class="fas fa-times text-orange-red"></i>Close</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- All Room List Area End Here -->
    </div>

@endsection
