@extends('layouts.master')

@section('title') @lang('translation.Lending') @endsection


@section('content')

@component('components.breadcrumb')
@slot('li_1') Assessment @endslot
@slot('title') Governance Detail Breakdown @endslot
@endcomponent

<div class="row">
<h5></h5>
<div class="col-xl-3">
        <div class="card overflow-hidden">
            <div class="bg-primary bg-soft">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-primary">Welcome Back !</h5>
                            <p>Alliance Bank Sdn Bhd</p>
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
                        <h5 class="font-size-15 text-truncate">Mary</h5>
                        <p class="text-muted">Corporate Communication</p>
                    </div>

                    <div class="col-sm-6">
                        <div class="pt-4">

                            <div class="row">
                                <div class="col-6">
                                    <h5 class="font-size-15">4</h5>
                                    <p class="text-muted mb-0">Request</p>
                                </div>
                                <div class="col-6">
                                    <h5 class="font-size-15">4</h5>
                                    <p class="text-muted mb-0">Sharing</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <h5><center>ESG Rating Summary by Number of Assessments</center></h5>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
                <div class="avatar-xs align-self-center me-3">
                    <span class="avatar-title rounded-circle" style="background-color: green; color: white">
                        E
                    </span>
                </div>
                <h4 class="card-title mb-4"><center>Environmental</center></h4>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                 
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                            <p class="text-muted mb-2">Respondents</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                            <h5>Leadership</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>10</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                            <h5>Average</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>20</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                            <h5>Laggard</h5>
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
                    <div class="col-sm-12">
                        <center>
                        <!-- <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center4" style="height: 33px;">Share</button> -->
                            <a href="{{  route('environmental_detail') }}" class="btn btn-primary btn-rounded waves-effect waves-light">Detail Breakdown</a>
                        </center>
                    </div>
                   
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
            <div class="avatar-xs align-self-center me-3">
                                        <span class="avatar-title rounded-circle " style="background-color: orchid; color: white">
                                            S
                                        </span>
                                    </div>
                <h4 class="card-title mb-4"><center>Social</center></h4>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                       
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                            <p class="text-muted mb-2">Respondents</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                            <h5>Leadership</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>10</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                            <h5>Average</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>20</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                            <h5>Laggard</h5>
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
                    <div class="col-sm-12">
                        <center>
                        <!-- <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center4" style="height: 33px;">Share</button> -->
                            <a href="{{  route('social_detail') }}" class="btn btn-primary btn-rounded waves-effect waves-light">Detail Breakdown</a>
                        </center>
                    </div>
                   
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
            <div class="avatar-xs align-self-center me-3">
                                        <span class="avatar-title rounded-circle" style="background-color: red; color: white">
                                            G
                                        </span>
                                    </div>
                <h4 class="card-title mb-4"><center>Governance</center></h4>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                       
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                            <p class="text-muted mb-2">Respondents</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                            <h5>Leadership</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>10</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                            <h5>Average</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>20</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                            <h5>Laggard</h5>
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
                    <div class="col-sm-12">
                        <center>
                        <!-- <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center4" style="height: 33px;">Share</button> -->
                            <a href="{{  route('governance_detail') }}" class="btn btn-primary btn-rounded waves-effect waves-light">Detail Breakdown</a>
                        </center>
                    </div>
                   
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
            <div class="avatar-xs align-self-center me-3">
                                        <span class="avatar-title rounded-circle " style="background-color: rgb(42, 134, 255); color: white">
                                            ESG
                                        </span>
                                    </div>
                <h4 class="card-title mb-4"><center>Score</center></h4>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                       
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                            <p class="text-muted mb-2">Respondents</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                            <h5>Leadership</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>10</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                            <h5>Average</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>45</h5>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                          
                            <h5>Laggard</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-4 mt-sm-0">
                           
                            <h5>5</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9" style="background-color: #f8f8fb">
    
        <div class="card" style="background-color: #f8f8fb">
        <div class="row">
                <div class="col-xl-10"> <a style="font-size:22px; font-weight: bold; color:red">Governance > </a><a style="font-size:22px; font-weight: bold;  color:royalblue"> Climate Action</a>
                </div>
            </div>
            &nbsp
        <div class="row">
                <div class="col-xl-12"> <a style="font-size:18px">31. Over the past year, my company has addressed corruption issues</a>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;"> % Respondents Answered:</a>
                </div>
                <div class="col-xl-12" style="margin-left: 15px;">
                    <div class="progress col-xl-8">
                        <div class="progress bg-primary" role="progressbar" style="width: 35%; color:violet" aria-valuenow="35" aria-valuemin="0" aria-valuemax="50"></div>
                        <div class="progress bg-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="50"></div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3"> 
                            TRUE 60%
                        </div>
                        <div class="col-xl-3">
                            FALSE 40%
                        </div>
                        <div class="col-xl-6">
                        </div>
                        
                    </div>
                </div>
            </div>
            &nbsp
            <div class="row">
                <div class="col-xl-12"> <a style="font-size:18px">32. My company leverages on technology to proactively prevent, detect and respond to bribery, extortion</a>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;"> % Respondents Answered:</a>
                </div>
                <div class="col-xl-12" style="margin-left: 15px;">
                    <div class="progress col-xl-8">
                        <div class="progress bg-primary" role="progressbar" style="width: 30%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="50"></div>
                        <div class="progress bg-warning" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="50"></div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3"> 
                            TRUE 60%
                        </div>
                        <div class="col-xl-3">
                            FALSE 40%
                        </div>
                        <div class="col-xl-6">
                        </div>
                    </div>
                </div>
            </div>
            &nbsp
            <div class="row">
                <div class="col-xl-12"> <a style="font-size:18px">33. My company has a structured approach to collect, monitor and report data, internally and exernally, on corruption related
                    issues and uses that data to meet quality standards.</a>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;"> % Respondents Answered:</a>
                </div>
                <div class="col-xl-12" style="margin-left: 15px;">
                    <div class="progress col-xl-8">
                        <div class="progress bg-primary" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="50"></div>
                        <div class="progress bg-warning" role="progressbar" style="width: 17%" aria-valuenow="17" aria-valuemin="0" aria-valuemax="50"></div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3"> 
                            TRUE 62%
                        </div>
                        <div class="col-xl-3">
                            FALSE 38%
                        </div>
                        <div class="col-xl-6">
                        </div>
                        
                    </div>
                </div>
            </div>
            &nbsp
            <div class="row">
                <div class="col-xl-12"> <a style="font-size:18px">34. My company has a guideline, process, or policy (in accordance to Malaysian legislation) that seeks to detect and respond
                    to bribery, extortion and other forms of corruption.</a>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;"> % Respondents Answered:</a>
                </div>
                <div class="col-xl-12" style="margin-left: 15px;">
                    <div class="progress col-xl-8">
                        <div class="progress bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="50"></div>
                        <div class="progress bg-warning" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="50"></div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3"> 
                            TRUE 54%
                        </div>
                        <div class="col-xl-3">
                            FALSE 46%
                        </div>
                        <div class="col-xl-6">
                        </div>
                        
                    </div>
                </div>
            </div>
            &nbsp
            <div class="row">
                <div class="col-xl-12"> <a style="font-size:18px">35. My company engages with internal and external stakeholders to address the main risks from bribery, extortion and other
                    forms of corruption, and to implement best practices.</a>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;"> % Respondents Answered:</a>
                </div>
                <div class="col-xl-12" style="margin-left: 15px;">
                    <div class="progress col-xl-8">
                        <div class="progress bg-primary" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="50"></div>
                        <div class="progress bg-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="50"></div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3"> 
                            TRUE 60%
                        </div>
                        <div class="col-xl-3">
                            FALSE 40%
                        </div>
                        <div class="col-xl-6">
                        </div>
                        
                    </div>
                </div>
            </div>
            &nbsp
            <br>
            &nbsp
            <div class="row">
                <div class="col-xl-10"> <a style="font-size:22px; font-weight: bold; color:red">Governance > </a><a style="font-size:22px; font-weight: bold;  color:royalblue"> Anti Corruption Policies</a>
                </div>
            </div>
            &nbsp
            <div class="row">
                <div class="col-xl-12"> <a style="font-size:18px">36. Over the past year, my company has addressed business issues related to climate change.</a>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;"> % Respondents Answered:</a>
                </div>
                <div class="col-xl-12" style="margin-left: 15px;">
                    <div class="progress col-xl-8">
                        <div class="progress bg-primary" role="progressbar" style="width: 35%; color:violet" aria-valuenow="35" aria-valuemin="0" aria-valuemax="50"></div>
                        <div class="progress bg-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="50"></div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3"> 
                            TRUE 60%
                        </div>
                        <div class="col-xl-3">
                            FALSE 40%
                        </div>
                        <div class="col-xl-6">
                        </div>
                        
                    </div>
                </div>
            </div>
            &nbsp
            <div class="row">
                <div class="col-xl-12"> <a style="font-size:18px">37. My company uses technology to capture and quantify relevant data on the potential risks posed by climate change
                    on our business.</a>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;"> % Respondents Answered:</a>
                </div>
                <div class="col-xl-12" style="margin-left: 15px;">
                    <div class="progress col-xl-8">
                        <div class="progress bg-primary" role="progressbar" style="width: 30%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="50"></div>
                        <div class="progress bg-warning" role="progressbar" style="width: 20%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="50"></div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3"> 
                            TRUE 60%
                        </div>
                        <div class="col-xl-3">
                            FALSE 40%
                        </div>
                        <div class="col-xl-6">
                        </div>
                    </div>
                </div>
            </div>
            &nbsp
            <div class="row">
                <div class="col-xl-12"> <a style="font-size:18px">38. My company is committed to Net-zero carbon and systematically collects, monitors, and reports data to ensure it GHG
                    reduction goals are met in line with international standards and frameworks.</a>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;"> % Respondents Answered:</a>
                </div>
                <div class="col-xl-12" style="margin-left: 15px;">
                    <div class="progress col-xl-8">
                        <div class="progress bg-primary" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="50"></div>
                        <div class="progress bg-warning" role="progressbar" style="width: 17%" aria-valuenow="17" aria-valuemin="0" aria-valuemax="50"></div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3"> 
                            TRUE 62%
                        </div>
                        <div class="col-xl-3">
                            FALSE 38%
                        </div>
                        <div class="col-xl-6">
                        </div>
                        
                    </div>
                </div>
            </div>
            &nbsp
            <div class="row">
                <div class="col-xl-12"> <a style="font-size:18px">39. My company has a guideline, process, or policy to address climate change.</a>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;"> % Respondents Answered:</a>
                </div>
                <div class="col-xl-12" style="margin-left: 15px;">
                    <div class="progress col-xl-8">
                        <div class="progress bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="50"></div>
                        <div class="progress bg-warning" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="50"></div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3"> 
                            TRUE 54%
                        </div>
                        <div class="col-xl-3">
                            FALSE 46%
                        </div>
                        <div class="col-xl-6">
                        </div>
                        
                    </div>
                </div>
            </div>
            &nbsp
            <div class="row">
                
                <div class="col-xl-12"> <a style="font-size:18px">40. My company engages with internal and external stakeholders to address business issues on climate change and has set
                    carbon reduction targets</a>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;"> % Respondents Answered:</a>
                </div>
                <div class="col-xl-12" style="margin-left: 15px;">
                    <div class="progress col-xl-8">
                        <div class="progress bg-primary" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="50"></div>
                        <div class="progress bg-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="50"></div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3"> 
                            TRUE 60%
                        </div>
                        <div class="col-xl-3">
                            FALSE 40%
                        </div>
                        <div class="col-xl-6">
                        </div>
                        
                    </div>
                </div>
            </div>
            &nbsp
            <br>
            &nbsp
           
        </div>
    </div>
</diiv>
<!-- end row -->

@endsection

@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>


@endsection
