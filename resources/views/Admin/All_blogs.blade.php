@extends('layouts.admin')

@section('content')
 <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Students Data</h3>
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
                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Roll ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Name ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Class ..." class="form-control">
                                </div>
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
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
                                                <label class="form-check-label">Post Id</label>
                                            </div>
                                        </th>
                                        <th>Post title</th>
                                        <th>Categries</th>
                                        <th>Photo</th>
                                        <th>Short Description</th>
                                        <th>Post By</th>
                                        <th>Post date</th>
                                        <th>Post comments</th>
                                        <th>Approved</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0030</label>
                                            </div>
                                        </td>
                                        
                                        <td>Jessia Rose</td>
                                        <td>Education</td>
                                        <td class="text-center"><img src="{{ asset('public/admin/img/figure/student6.png') }}" alt="student"></td>
                                        <td>This is my new post</td>
                                        <td>Admin</td>
                                        <td>01/05/2019</td>
                                        <td align="center">50</td>
                                        <td>pendding</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    
                                                            <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i> Refresh</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i> Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                            class="fas fa-trash text-orange-peel"></i> Delete</a>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                      <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0030</label>
                                            </div>
                                        </td>
                                        
                                        <td>Jessia Rose</td>
                                        <td>Sports</td>
                                        <td class="text-center"><img src="{{ asset('public/admin/img/figure/student6.png') }}" alt="student"></td>
                                        <td>This is my new post</td>
                                        <td>Admin</td>
                                        <td>01/05/2019</td>
                                        <td align="center">50</td>
                                        <td>pendding</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    
                                                            <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i> Refresh</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i> Edit</a>
                                                <a class="dropdown-item" href="#"><i
                                                            class="fas fa-trash text-orange-peel"></i> Delete</a>
                                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
       
@endsection
