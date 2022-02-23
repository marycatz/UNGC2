@extends('layouts.master') 
@section('title') 
@lang('translation.Dashboards') @endsection 
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
                    <div class="col-12">
                        <div class="text-primary p-3">
                           
                            @php
                            $companyinfo = App\Models\Companies::where('id',Auth::user()->company_id)->first();
                            @endphp
                          
                            <h5 class="text-primary">Welcome {{ Str::ucfirst(Auth::user()->name) }}!</h5>
                            <p>{{ $companyinfo->company_name }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="avatar-md profile-user-wid mb-4">
                            <img src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-4.jpg') }}" alt="" class="img-thumbnail rounded-circle">
                        </div>
                        <h5 class="font-size-15 text-truncate">{{ Str::ucfirst(Auth::user()->name) }}</h5>
                        <!-- <h5 class="font-size-15 text-truncate"></h5> -->
                        <p class="text-muted">{{ Str::ucfirst(Auth::user()->position) }}</p>
                      
                    </div>

                    <div class="col-sm-12">
                        <div>

                            <div class="row">
                                <div class="col-5">
                                    <span class="" style="color:red;">Unverified</span>
                                </div>
                                <div class="col-7">
                                Current ACCESS index level<br /><span class=" advanced">Advanced</span>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="" class="btn btn-primary waves-effect waves-light btn-sm">View Profile<i class="mdi mdi-arrow-right ms-1"></i></a>
                                {{-- <a href="" data-bs-toggle="modal" data-bs-target=".bs-example-modal-editViewProfile" data-userid="{{ $lu->id }}" id="editViewProfile">View Profile<i class="mdi mdi-arrow-right ms-1"></i> </a> --}}
                                        
                                <div class="modal fade bs-example-modal-editViewProfile" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Linked User</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="{{route('edit_linked_user_process_sme')}}" id="form"  enctype="multipart/form-data">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <h4>Linked SME Users</h4>
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
                                        <p style="">{{ $lu->position }}</p>
                                    </td>
                                    <td>
                                        <a href="" data-bs-toggle="modal" data-bs-target=".bs-example-modal-edituser" data-userid="{{ $lu->id }}" id="editLinkedUser"><i class="fas fa-edit"></i> </a>
                                        <div class="modal fade bs-example-modal-edituser" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Linked User</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="{{route('edit_linked_user_process_sme')}}" id="form"  enctype="multipart/form-data">
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
                                        <a href="" data-bs-toggle="modal" data-bs-target="" data-userid="{{ $lu->id }}" id="DeleteUser"><i class="fas fa-trash"></i> </a>
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
                                                    <form method="post" action="{{route('add_linked_user_sme')}}" id="form"  enctype="multipart/form-data">
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
        <div class="card text-center">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-4 col-sm-6">

                        <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Current Assessment</a></h5>
                        <p class="text-muted">Assessment Progress</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: %;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                        </div>
                        <br>
                        <a href="">Continue Assessment</a>
                        <div>
                            Note: You need to complete your current assessment before you can receive your result.
                        </div>

                    </div>
                    <div class="col-xl-3 col-sm-6">
                        
                    
                        <h5 class="font-size-15 mb-1"><a href="{{ route('assessment_sme') }}" class="text-dark">New Assessment</a></h5>
                        <p class="text-muted"></p>
                        <a href="{{ route('assessment_sme') }}" class="btn btn-primary waves-effect waves-light w-sm">
                            <i class="mdi mdi-plus d-block font-size-16"></i> Add
                        </a>

                      
                        <!-- <div class="mb-4">

                        </div>
                        <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Company Profile</a></h5>
                        <p class="text-muted">Company Progress</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                        <br>
                        <a href="">Continue Key-in</a>
                        <div>
                            Note: You need to complete your current company profile before you can receive your result.
                        </div> -->

                    </div>
                    <!--end div col-5-->
                    <div class="col-xl-5 col-sm-6">
                        <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Company Profile</a></h5>
                        <p class="text-muted">Profile Completion</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                        <br>
                        <a href=""><!-- Continue Key-in --></a>
                        <div>
                            Note: You need to complete your current company profile before you can receive your result.
                        </div> 
                    </div>
                </div>

            </div>

        </div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                    <span class="d-none d-sm-block">Assessment Reports</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " data-bs-toggle="tab" href="#profile" role="tab">
                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                    <span class="d-none d-sm-block">Corporates</span>
                </a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content text-muted">
            <div class="tab-pane active" id="home" role="tabpanel">
                </br>
                <div class="col-12">
                    <h5>List of your completed assessment reports</h5>
                </div>
                </br>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-4">
                                        <label><b>Search</b></label> &nbsp
                                        <div class="me-2 mb-2 d-inline-block">
                                            <div class="position-relative">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">

                                    </div>
                                    <!-- end col-->
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap table-check">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="align-middle">No</th>
                                                <th class="align-middle">Serial No</th>
                                                <th class="align-middle">Completion <br />Date</th>
                                                <th class="align-middle">Validity <br />Date</th>
                                                <th class="align-middle">Overall (%)</th>
                                                <th class="align-middle">Shared</th>
                                                <th class="align-middle"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>UNGCESG123202202</td>
                                                <td>01/06/2022</td>
                                                <td>01/06/2023</td>
                                                <td>61 <span class="intermediate">Intermediate</span></td>
                                                <td><a href="" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center1">3</a>

                                                    <div class="modal fade bs-example-modal-center1" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Current Shared</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p style="color: mediumblue">Alliance Bank Sdn Bhd</p>
                                                                    <p style="color: mediumblue">Maybank Sdn Bhd</p>
                                                                    <p style="color: mediumblue">RHB Bank Sdn Bhd</p>

                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->
                                                </td>
                                                <td>
                                                <a href="{{ route('assessment_detail') }}"><button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Results"><img src="{{ URL::asset('/assets/images/view.png') }}" width="15px"></button></a>
                                                <span data-bs-toggle="modal" data-bs-target=".bs-example-modal-center2"><button type="button" class="btn btn-warning btn-rounded waves-effect waves-light"  style="height: 33px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Share Report"><img src="{{ URL::asset('/assets/images/share.png') }}" width="15px"></button></span>
                                                    <div class="modal fade bs-example-modal-center2" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Shared to corporate</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <table border="0" width="100%">
                                                                        <tr>
                                                                            <td>
                                                                                <p style="color: mediumblue">Alliance Bank Sdn Bhd</p>
                                                                            </td>
                                                                            <td> <input class="form-check-input" type="checkbox" id="orderidcheck01" checked></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p style="color: mediumblue">Maybank Sdn Bhd</p>
                                                                            </td>
                                                                            <td> <input class="form-check-input" type="checkbox" id="orderidcheck01" checked></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p style="color: mediumblue">Hong Leong Bank Sdn bhd</p>
                                                                            </td>
                                                                            <td> <input class="form-check-input" type="checkbox" id="orderidcheck01"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p style="color: mediumblue">RHB Bank Sdn Bhd</p>
                                                                            </td>
                                                                            <td> <input class="form-check-input" type="checkbox" id="orderidcheck01" checked></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p style="color: mediumblue">Cimb Bank Sdn Bhd</p>
                                                                            </td>
                                                                            <td> <input class="form-check-input" type="checkbox" id="orderidcheck01"></td>
                                                                        </tr>

                                                                    </table>

                                                                    <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light" data-bs-dismiss="modal" style="height: 33px;">Share</button>
                                                                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->

                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>UNGCESG123202101</td>
                                                <td>12/12/2021</td>
                                                <td>12/12/2022</td>
                                                <td>43 <span class="beginner">Beginner</span></td>
                                                <td><a href="" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center3">1</a>

                                                    <div class="modal fade bs-example-modal-center3" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Current Shared</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p style="color: mediumblue">RHB Bank Sdn Bhd</p>

                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->
                                                </td>
                                                <td>
                                                <a href="{{ route('assessment_detail') }}"><button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Results"><img src="{{ URL::asset('/assets/images/view.png') }}" width="15px"></button></a>
                                                <span data-bs-toggle="modal" data-bs-target=".bs-example-modal-center4"><button type="button" class="btn btn-warning btn-rounded waves-effect waves-light"  style="height: 33px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Share Report"><img src="{{ URL::asset('/assets/images/share.png') }}" width="15px"></button></span>
                                                    <div class="modal fade bs-example-modal-center4" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Shared to corporate</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <table border="0" width="100%">
                                                                        <tr>
                                                                            <td>
                                                                                <p style="color: mediumblue">Alliance Bank Sdn Bhd</p>
                                                                            </td>
                                                                            <td> <input class="form-check-input" type="checkbox" id="orderidcheck01"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p style="color: mediumblue">Maybank Sdn Bhd</p>
                                                                            </td>
                                                                            <td> <input class="form-check-input" type="checkbox" id="orderidcheck01"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p style="color: mediumblue">Hong Leong Bank Sdn bhd</p>
                                                                            </td>
                                                                            <td> <input class="form-check-input" type="checkbox" id="orderidcheck01"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p style="color: mediumblue">RHB Bank Sdn Bhd</p>
                                                                            </td>
                                                                            <td> <input class="form-check-input" type="checkbox" id="orderidcheck01" checked></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p style="color: mediumblue">Cimb Bank Sdn Bhd</p>
                                                                            </td>
                                                                            <td> <input class="form-check-input" type="checkbox" id="orderidcheck01"></td>
                                                                        </tr>

                                                                    </table>
                    
                                                                    <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light" style="height: 33px;">Shared now</button>

                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
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
            <div class="tab-pane" id="profile" role="tabpanel">
                </br>
                <div class="col-12">
                    <h5>List of corporates that request to share your assessment report</h5>
                </div>
                </br>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" style="background-color:#f8f8fb">
                                <div class="row mb-2">
                                    <div class="col-sm-4">
                                        <label><b>Search</b></label> &nbsp
                                        <div class="me-2 mb-2 d-inline-block">
                                            <div class="position-relative">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">

                                    </div>
                                    <!-- end col-->
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap table-check">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="align-middle">No</th>
                                                <th class="align-middle">Company Name</th>
                                                <th class="align-middle">Contact Person</th>
                                                <th class="align-middle">Request Status</th>
                                                <th class="align-middle">Date Connected</th>
                                                <th class="align-middle">Request Date</th>
                                                <th class="align-middle"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Alliance Bank Sdn Bhd</td>
                                                <td>Mary Michael</td>
                                                <td>Pending</td>
                                                <td>-</td>
                                                <td>1/06/2022</td>
                                                <td>
                                            
                                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Allow"><img src="{{ URL::asset('/assets/images/connect.png') }}" width="15px"></button></td>

                                            </tr>
                                            <tr style="background-color: rgb(233, 233, 233);">
                                                <td>2</td>
                                                <td>Maybank Sdn Bhd</td>
                                                <td>Jon Steward</td>
                                                <td>Allowed</td>
                                                <td>10/11/2021</td>
                                                <td>12/12/2021</td>
                                                <td>
                                            
                                                <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Disallow"><img src="{{ URL::asset('/assets/images/disconnect.png') }}" width="15px"></button></td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <ul class="pagination pagination-rounded justify-content-end mb-2">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                            <b><i class="mdi mdi-chevron-left"></i></b>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                            <b><i class="mdi mdi-chevron-right"></i></b>
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
<!-- end row -->

@endsection @section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<!-- Sweet Alerts js -->

<script src="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>


<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
<script>
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
    // EDIT DATA

    $('body').on('click', '#editLinkedUser', function (event) {

    event.preventDefault();
    var id = $(this).data('userid');

    $.get('/edit_linked_users_sme/'+id+'/edit', function (data) {
    
        
        $('#user_id').val(data.data.id);
        $('#fullname').val(data.data.name);
        $('#phone').val(data.data.phone);
        $('#position').val(data.data.position);
        $('#email').val(data.data.email);
    
    })
    });

    // DELETE DATA
    //DeleteUser
    $('body').on('click', '#DeleteUser', function (event) {
       
        // event.preventDefault();
        var id = $(this).data('userid');

        Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonColor: "#34c38f",
        cancelButtonColor: "#f46a6a",
        confirmButtonText: "Yes, delete it!"
        }).then(function (t) {
            $.ajax(
                {
                url: '/delete_linked_user_sme/'+id,
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
            return false;
        });
    });
});

</script>

@endsection