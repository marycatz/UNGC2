@extends('layouts.master')

@section('title') @lang('translation.Dashboards') @endsection


@section('css')
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/css/SME.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Dashboards @endslot
@slot('title') Home @endslot
@endcomponent

<div class="row">
    <div class="col-xl-3">
        <div class="card overflow-hidden">
            <div class="bg-primary bg-soft">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            @php
                            $companyinfo = App\Models\Companies::where('id',Auth::user()->company_id)->first();
                            @endphp
                          
                            <h5 class="text-primary">Welcome {{ Str::ucfirst(Auth::user()->name) }}!</h5>
                            <p>{{ $companyinfo->company_name }}</p>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="{{ URL::asset('/assets/images/profile-img.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="avatar-md profile-user-wid mb-4">
                            <img src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/download.jpeg') }}" alt="" class="img-thumbnail rounded-circle">
                        </div>
                        <h5 class="font-size-15 text-truncate">{{ Str::ucfirst(Auth::user()->name) }}</h5>
                        <!-- <h5 class="font-size-15 text-truncate">Mary</h5> -->
                        <p class="text-muted">{{ Str::ucfirst(Auth::user()->position) }}</p>
                       
                    </div>

                    <div class="col-sm-6">
                        <div class="pt-4">

                            <div class="row">
                                <div class="col-6">
                                    <!-- <h5 class="font-size-15">4</h5>
                                    <p class="text-muted mb-0">Request</p> -->
                                </div>
                                <div class="col-6">
                                    <!-- <h5 class="font-size-15">4</h5>
                                    <p class="text-muted mb-0">Sharing</p> -->
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                   
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <p class=""><b>Subscription: </b></p><p style="color:green;">25/01/2022 - 25/01/2023</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <h4>Linked Corporate Users</h4>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-wrap align-middle mb-0">
                        <tbody>
                            @foreach($linkeduser as $lu)
                            @if(!empty($lu->id)) 
                                <tr>
                                    <td style="width: 40px;">
                                        <div class="avatar">
                                            <div class="avatar-item">
                                                <a href="javascript: void(0);" class="d-inline-block">
                                                    <img src="{{ URL::asset('/assets/images/users/avatar-4.jpg') }}" alt="" class="avatar-xs">
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="text font-size-14 m-0"><a href="#" class="text-dark">
                                                    {{ $lu->name }}</a></h6>
                                        <p>{{ $lu->position }}</p>
                                    </td>
                                    <td>
                                        
                                        <a href="#" data-bs-toggle="modal" data-bs-target=".bs-example-modal-edituser" data-userid="{{ $lu->id }}" id="editLinkedUser" class="editLinkedUserClass"><i class="fas fa-edit"></i> </a>
                                        <div class="modal fade bs-example-modal-edituser" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Linked User</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="{{route('edit_linked_user_process_corp')}}" id="form"  enctype="multipart/form-data">
                                                            {{csrf_field()}}
                                                            <h4>Personal Information</h4>
                                                            <input type="hidden" id="company_id" name="company_id" value="{{(Auth::user()->company_id);}}">
                                                            <input type="hidden" id="access_level" name="access_level" value="{{(Auth::user()->access_level);}}">
                                                            <input type="hidden" name="user_id" id="user_id">
                                                            <div class="mb-3">
                                                                <label for="formrow-firstname-input" class="form-label">Full Name</label>
                                                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Your Full Name">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label for="formrow-email-input" class="form-label">Role/Position</label>
                                                                        <input type="text" class="form-control" id="position" name="position" placeholder="Enter Your Role/Position">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="formrow-password-input" class="form-label">Email</label>
                                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="formrow-password-input" class="form-label">Phone(Optional)</label>
                                                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </br>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    {{-- <button type="submit" class="btn btn-danger w-md delete_linked_user">Delete</button> --}}
                                                                </div>
                                                                <div class="col-lg-6" style="text-align: right" >
                                                                    <button type="submit"  class="btn btn-primary w-md">Save</button>
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- <a href="" onclick="deleteusercoperate({{ $lu->id }})"> <i class="fas fa-trash"></i> </a> -->
                                        <!-- <a href="" data-bs-toggle="modal" data-bs-target="" data-userid="{{ $lu->id }}" id="DeleteUser"><i class="fas fa-trash"></i> </a> -->
                                    
                                    </td>
                                </tr>
                            @endif
                            @endforeach
                            @if($linkeduser->count() < 3)
                                <tr>
                                    <td style="width: 40px;">
                                        <div class="avatar">
                                            <div class="avatar-item">
                                                <a href="javascript: void(0);" class="d-inline-block">
                                                    <img src="{{ URL::asset('/assets/images/users/default-avatar.png') }}" alt="" class="avatar-xs">
                                                </a>
                                            </div>

                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <a href="" data-bs-toggle="modal" data-bs-target=".bs-example-modal-adduser"><i class="fas fa-plus"></i> </a>
                                        <div class="modal fade bs-example-modal-adduser" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Add Linked User</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="{{route('add_linked_user_corp')}}" id="form"  enctype="multipart/form-data">
                                                            {{csrf_field()}}
                                                            <h4>Personal Information</h4>
                                                            <input type="hidden" id="company_id" name="company_id" value="{{(Auth::user()->company_id);}}">
                                                            <input type="hidden" id="access_level" name="access_level" value="{{(Auth::user()->access_level);}}">
                                                            <div class="mb-3">
                                                                <label for="formrow-firstname-input" class="form-label">Full Name</label>
                                                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Your Full Name">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label for="formrow-email-input" class="form-label">Role/Position</label>
                                                                        <input type="text" class="form-control" id="position" name="position" placeholder="Enter Your Role/Position">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="formrow-password-input" class="form-label">Email</label>
                                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="formrow-password-input" class="form-label">Phone(Optional)</label>
                                                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <h4>Personal Information</h4>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="formrow-password-input" class="form-label">Password</label>
                                                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="formrow-password-input" class="form-label">Re-confirm Password</label>
                                                                        <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Enter Your Re-confirm Password">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12" style="text-align: right" >
                                                                    <button type="submit" class="btn btn-primary w-md">Create User</button>
                                                                </div>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->

                                    </td>

                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

       
    </div>
    <div class="col-xl-9">
        <div class="row">
           
           
        <div class="">
            <div class="">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#portfolio-report" role="tab">
                            <span class="d-none d-sm-block">Portfolio Report</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile-1" role="tab">
                            <span class="d-none d-sm-block">Individual SME Report</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#home-1" role="tab">
                            <span class="d-none d-sm-block">Analytics</span>
                        </a>
                    </li>

                
                  
                </ul>

                <!-- Tab panes -->
  

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">

                <div class="tab-pane active" id="portfolio-report" role="tabpanel">
                <iframe src="{{url('doc/Corporate_Assessment_Report.pdf')}}" width="100%" height="1000px">Your browser isn't compatible</iframe>
                </div>

                
                    <div class="tab-pane" id="home-1" role="tabpanel">
                       <br>
                       <form>
                        <div class="row">
                        
                        <div class="d-flex justify-content-between">
                                <div>
                                    <p></p>
                                </div>
                                <div>
                                    <!-- Download PDF version -->
                                    
                                    
                                    <a href="{{ asset('doc/Overall_Assessment_Report_pdf_version.pdf')}}" rel="noopener" target="_blank"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class='fas fa-file-pdf' style='font-size:15px; color: red;'></i> Download PDF version</button></a>
                                </div>
                            </div>
                    
                        </div>
                        <br>
                        <div class="col-md-12" style="text-align: justify;">
                        <div class="row">

                    <div class="col-9"> 
                            <p>
                            For <b>Environmental</b> Domain, most of the respondents are in <b>Laggard</b> status. Overall for this domain it can be considered as holding <b>Average</b> standing. For <b>Social</b> Domain, most of the respondents are in <b>Average</b> status. Overall for this domain it can be considered as holding <b>Average</b> standing.
For <b>Governance</b> Domain, most of the respondents are in <b>Leadership</b> status. Overall for this domain it can be considered as holding <b>Leadership</b> standing. For <b>Overall ESG</b> Domain, most of the respondents are in <b>Average</b> status. Overall it can be considered as holding <b>Average</b> standing.
                            </p></div>

                            <div class="col-3">    
                        <div class="avatar-xl align-self-center me-3">
                        <span class="avatar-title rounded-circle " style="background-color: blue; font-size: 22px; text-align: center; border-end-end-radius: 50px; border: black; border-width: 50px;">
                            <div class="row"> <a style="color: white">61</a><br><a style="color: #FF0; font-size: 14px;"><b>Intermediate </b></a> </div>
                            
                            
                        </span>
                    </div></div>
                        </div>

                    <br>
                        
                        <div class="row">
    <div class="col-lg-3">
    <div class="card border border-dark btn-rounded">
            <div class="card-body">
                <div>
                <div class="flex-grow-1 align-self-center overflow-hidden" style="background-color:#ddeffc; padding:5px 5px 5px 15px; border-radius : 20px; margin-bottom:10px;">
                                        <h5 class="font-size-14 mb-1"><b style="font-size:20px">E</b>nvironmental</h5>
                                    </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div>
                 
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                            <p class="text-nowrap">Respondents</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                            <h5 class="text-nowrap">Advanced</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                        <h5 class="text-nowrap">10</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Intermediate</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                        <h5 class="text-nowrap">30</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Beginner</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>30</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Laggard</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>15</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <center>
                        <!-- <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center4" style="height: 33px;">Share</button> -->
                            <a href="{{  route('environmental_detail') }}" class="btn btn-primary btn-rounded waves-effect waves-light">Detail Breakdown</a>
                        </center>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end col -->
    <div class="col-md-3">
    <div class="card border border-dark btn-rounded">
            <div class="card-body">
                <div>
                <div class="flex-grow-1 align-self-center overflow-hidden" style="background-color:#ddeffc; padding:5px 5px 5px 15px; border-radius : 20px; margin-bottom:10px;">
                                        <h5 class="font-size-14 mb-1"><b style="font-size:20px">S</b>ocial</h5>
                                    </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div>
                 
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                            <p class="text-nowrap">Respondents</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                            <h5 class="text-nowrap">Advanced</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                        <h5 class="text-nowrap">12</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Intermediate</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                        <h5 class="text-nowrap">17</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Beginner</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>23</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Laggard</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>16</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <center>
                        <!-- <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center4" style="height: 33px;">Share</button> -->
                            <a href="{{  route('social_detail') }}" class="btn btn-primary btn-rounded waves-effect waves-light">Detail Breakdown</a>
                        </center>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="col-md-3">

    <div class="card border border-dark btn-rounded">
            <div class="card-body">
                <div>
                <div class="flex-grow-1 align-self-center overflow-hidden" style="background-color:#ddeffc; padding:5px 5px 5px 15px; border-radius : 20px; margin-bottom:10px;">
                                        <h5 class="font-size-14 mb-1"><b style="font-size:20px">G</b>overnance</h5>
                                    </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div>
                 
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                            <p class="text-nowrap">Respondents</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                            <h5 class="text-nowrap">Advanced</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                        <h5 class="text-nowrap">15</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Intermediate</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                        <h5 class="text-nowrap">37</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Beginner</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>44</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Laggard</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>27</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <center>
                        <!-- <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center4" style="height: 33px;">Share</button> -->
                            <a href="{{  route('governance_detail') }}" class="btn btn-primary btn-rounded waves-effect waves-light">Detail Breakdown</a>
                        </center>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- end here -->
    </div>

    <div class="col-md-3">

    <div class="card border border-dark btn-rounded">
            <div class="card-body">
                <div>
                <div class="flex-grow-1 align-self-center overflow-hidden" style="background-color:#ddeffc; padding:5px 5px 5px 15px; border-radius : 20px; margin-bottom:10px;">
                                        <h5 class="font-size-14 mb-1"><b style="font-size:20px">ESG</b> score</h5>
                                    </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div>
                 
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                            <p class="text-nowrap">Respondents</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                            <h5 class="text-nowrap">Advanced</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                        <h5 class="text-nowrap">39</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Intermediate</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                        <h5 class="text-nowrap">75</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Beginner</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>122</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Laggard</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>58</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <center>
                            <a href="{{  route('governance_detail') }}" class="btn btn-rounded waves-effect waves-light">&nbsp;</a>
                        </center>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- end here -->
    </div>


</div>
                    
                  <br /><br />      
                           
                        <div class="row">
                            <div class="col-lg-3">
                                
                                <div class="mb-3">
                                <label for="industry" class="form-label">By Company<br /> Size</label>
                                    <select class="form-control select2" placeholder="By Company Size" id="companysize">
                                        <option value="0">Turnover RM < 300,000 or < 5 employees</option>
                                        <option value="1">Turnover RM 300,000 - 15Mil, or 5 - 75 employees</option>
                                        <option value="2">Turnover RM 15 Mil - 50 Mil, or 75 - 200 employees</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                <label for="industry" class="form-label">By State</label>
                                    <select class="form-control select2" id="state">
                                                <option value="allstates">All States</option>
                                                <option value="johor">Johor</option>
                                                <!-- <option>Melaka</option>
                                                <option>Negeri Sembilan</option>
                                                <option>Selangor</option>
                                                <option>Kuala Lumpur</option>
                                                <option>Perak</option>
                                                <option>Pahang</option>
                                                <option>Kelantan</option>
                                                <option>Terengganu</option>
                                                <option>Kedah</option>
                                                <option>Perlis</option>
                                                <option>Pulau Pinang</option>
                                                <option>Sabah</option>
                                                <option>Sarawak</option> -->
                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                <label for="industry" class="form-label">Industry</label>
                                    <select class="form-control select2" id="industry">
                                 
                                                <option value="allindustry">All Industry</option>
                                                <option value="agribusiness">Agribusiness</option>
                                                <!-- <option>Construction</option>
                                                <option>Consultancy & other services</option>
                                                <option>Energy</option>
                                                <option>Food</option>
                                                <option>Healthcare & Pharmaceutical</option>
                                                <option>Hospitality</option>
                                                <option>Manufacturing</option>
                                                <option>Media & ICT</option>
                                                <option>Transport & Logistics</option> -->
                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                <label for="industry" class="form-label">Maturity Level</label>
                                    <select class="form-control select2" id="industry">
                                 
                                                <option value="allindustry">Level</option>
                                                <option value="agribusiness">Beginner</option>
                                                <option value="agribusiness">Intermediate</option>
                                                <option value="agribusiness">Laggard</option>
                                                <option value="agribusiness">Advanced</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-2">
                                <!-- <p style="color:blue;">Only for Corporate SME under them</p> -->
                            </div>

                           
                        </div>
                        <br>
                        The below overall breakdown shows that, for company size turnover less than RM 300,000 or less than 5 employees in Johor state for agribusiness. <br /><br />

                        <div class="row">
    <div class="col-lg-3">
    <div class="card border border-dark btn-rounded">
            <div class="card-body">
                <div>
                <div class="flex-grow-1 align-self-center overflow-hidden" style="background-color:#ddeffc; padding:5px 5px 5px 15px; border-radius : 20px; margin-bottom:10px;">
                                        <h5 class="font-size-14 mb-1"><b style="font-size:20px">E</b>nvironmental</h5>
                                    </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div>
                 
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                            <p class="text-nowrap">Respondents</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                            <h5 class="text-nowrap">Advanced</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                        <h5 class="text-nowrap">10</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Intermediate</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                        <h5 class="text-nowrap">30</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Beginner</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>30</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Laggard</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>15</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end col -->
    <div class="col-md-3">
    <div class="card border border-dark btn-rounded">
            <div class="card-body">
                <div>
                <div class="flex-grow-1 align-self-center overflow-hidden" style="background-color:#ddeffc; padding:5px 5px 5px 15px; border-radius : 20px; margin-bottom:10px;">
                                        <h5 class="font-size-14 mb-1"><b style="font-size:20px">S</b>ocial</h5>
                                    </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div>
                 
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                            <p class="text-nowrap">Respondents</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                            <h5 class="text-nowrap">Advanced</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                        <h5 class="text-nowrap">12</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Intermediate</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                        <h5 class="text-nowrap">17</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Beginner</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>23</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Laggard</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>16</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="col-md-3">

    <div class="card border border-dark btn-rounded">
            <div class="card-body">
                <div>
                <div class="flex-grow-1 align-self-center overflow-hidden" style="background-color:#ddeffc; padding:5px 5px 5px 15px; border-radius : 20px; margin-bottom:10px;">
                                        <h5 class="font-size-14 mb-1"><b style="font-size:20px">G</b>overnance</h5>
                                    </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div>
                 
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                            <p class="text-nowrap">Respondents</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                            <h5 class="text-nowrap">Advanced</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                        <h5 class="text-nowrap">15</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Intermediate</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                        <h5 class="text-nowrap">37</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Beginner</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>44</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Laggard</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>27</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end here -->
    </div>

    <div class="col-md-3">

    <div class="card border border-dark btn-rounded">
            <div class="card-body">
                <div>
                <div class="flex-grow-1 align-self-center overflow-hidden" style="background-color:#ddeffc; padding:5px 5px 5px 15px; border-radius : 20px; margin-bottom:10px;">
                                        <h5 class="font-size-14 mb-1"><b style="font-size:20px">ESG</b> score</h5>
                                    </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div>
                 
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                            <p class="text-nowrap">Respondents</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                            <h5 class="text-nowrap">Advanced</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                        <h5 class="text-nowrap">39</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Intermediate</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                        <h5 class="text-nowrap">75</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Beginner</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>122</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                        <h5 class="text-nowrap">Laggard</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>58</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end here -->
    </div>


</div>

        <h4>Portfolio Description</h4>                   <!-- <h2>Charts</h2> -->
        <div class="card" style="background-color: #f8f8fb">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-4">
                         <label><center>State</center></label>
                        <div id="pie_state" class="apex-charts" dir="ltr"></div>
                      
                    </div>
                    <div class="col-xl-4">
                        <label><center>Size</center></label>
                        <div id="pie_size" class="apex-charts" dir="ltr"></div>
                       
                    </div>
                    <div class="col-xl-4">
                        <label><center>Industry</center></label>
                        <div id="pie_industry" class="apex-charts" dir="ltr"></div>
                       
                    </div>
                </div>
            </div>
        </div>

                    The below industry breakdown shows that, for company size turnover less than RM 300,000 or less than 5 employees in Johor state for agribusiness.<br /><br />            
                  
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body" id="statesDisplay">

                <h4 class="card-title mb-4"><center>SME By State</center></h4>
                <div id="sme-by-state" class="apex-charts" dir="ltr"></div>

                    <!-- <div id="smestatessingle" class="apex-charts" dir="ltr"></div> -->
                </div>
            </div>
        </div>
        <!-- end col -->
            

        <div class="col-xl-12">
            <div class="card">
                <div class="card-body" id="industryDisplay">

                <h4 class="card-title mb-4"><center>SME by Industry</center></h4>
                <div id="sme-by-industry" class="apex-charts" dir="ltr"></div>



                </div>
            </div>
        </div> <!-- end col -->
 
        <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                <h4 class="card-title mb-4"><center>Number of Companies by size</center></h4>

                    <div id="bar_chart" class="apex-charts" dir="ltr"></div>


                </div>
            </div>
        </div> <!-- end col -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                <h4 class="card-title mb-4"><center>Number of Respondent, Industry</center></h4>

<div id="bar_chart1" class="apex-charts" dir="ltr"></div>


                </div>
            </div>
        </div> <!-- end col -->
        
        </div>
 
        </div>

</div>
        <div class="tab-pane" id="profile-1" role="tabpanel">
        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-8">
                            <div class="search-box me-2 mb-2 d-inline-block">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <i class="bx bx-search-alt search-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap table-check">
                            <thead class="table-light">
                                <tr>
                                   
                                    <th class="align-middle">No</th>
                                    <th class="align-middle">Assessment No</th>
                                    <th class="align-middle">Company</th>
                                    <th class="align-middle">E</th>
                                    <th class="align-middle">S</th>
                                    <th class="align-middle">G</th>
                                    <th class="align-middle">Overall</th>
                                    <th class="align-middle">Completion <br />Date</th>
                               
                                    <th class="align-middle"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                       1
                                    </td>
                                    <td>UNGCESG123202101</td>
                                    <td>Ali Resources <br />Sdn Bhd <br />SSM Reg <br />No:00000000</td>
                                    <td>
                                        34
                                    </td>
                                    <td>
                                        45
                                    </td>
                                    <td>
                                        35
                                    </td>
                                    <td>
                                        38 <span class="beginner">Beginner</span> </b>
                                    </td>
                                    <td>
                                       10/12/2021
                                    </td>
                                
                                    <td>

                                        <a href="{{ route('assessment_detail') }}"><button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Results"><img src="{{ URL::asset('/assets/images/view.png') }}" width="15px"></button></a>
                                    </td>
                                   
                                </tr>

                               
                                
                            

                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                        <div class="p-3">
                            <p>A warning message, with a function attached to the "Confirm"-button...</p>
                            <button type="" class="" id="DeleteUser" data-userid="{{ $lu->id }}"><i class="fas fa-trash"></i></button>
                        </div>
                    </div> -->
                    <ul class="pagination pagination-rounded justify-content-end mb-2">
                        <li class="page-item disabled">
                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                <i class="mdi mdi-chevron-left"></i>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                <i class="mdi mdi-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
                    </div>
                    
                    
                </div>

                

            </div>
        </div>
        </div>
        <!-- end row -->

      
    </div>
</div>
<!-- end row -->


@endsection
@section('script')
<script>

$('body').on('click', '#editLinkedUser', function (event) {

event.preventDefault();
var id = $(this).data('userid');

$.get('/edit_linked_users_corp/'+id+'/edit', function (data) {

    
    $('#user_id').val(data.data.id);
    $('#fullname').val(data.data.name);
    $('#phone').val(data.data.phone);
    $('#position').val(data.data.position);
    $('#email').val(data.data.email);

})
});

</script>
<!-- apexcharts -->
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/apexcharts.init.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>

<script>

$(document).ready(function () {

    $.ajaxSetup({
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
    
});
   
function test(){
   
}
function deleteusercoperate(id){
  
         $.ajax(
             {
             url: '/delete_linked_user_corp/'+id,
             type: 'DELETE',
             data: {
                     id: id
             },
             success: function (response){
             
                 Swal.fire(
                 'Remind!',
                 'User deleted successfully!',
                 'success'
                 )
                 // get_company_data()
             }
         
         });
        //  return false;
    //  });
 }


</script>


@endsection
