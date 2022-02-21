@extends('layouts.master')

@section('title') @lang('translation.Lending') @endsection


@section('content')

@component('components.breadcrumb')
@slot('li_1') Assessment @endslot
@slot('title') Environmental Detail Breakdown @endslot
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
                <div class="col-xl-10"> <a style="font-size:22px; font-weight: bold; color:olivedrab">Environmental Dimension > </a><a style="font-size:22px; font-weight: bold;  color:royalblue">Water Cosumption</a>
                </div>
            </div>
            For water consumption, these following are the breakdown of industry in Johor with size of company turnover less than RM300,000 or 5 employees. <br /><br />
            <div class="row">
                <div class="col-xl-12"> <a style="font-size:18px">1. Over the past year, my company has minimized or reduced water comsumption.</a>
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
                            TRUE 64%
                        </div>
                        <div class="col-xl-3">
                            FALSE 36%
                        </div>
                        <div class="col-xl-6">
                        </div>
                        
                    </div>
                </div>
            </div>
            &nbsp
            <div class="row">
                <div class="col-xl-12"> <a style="font-size:18px">2. My company adopts technologies to minimize or reduce water
                    consumption (e.g. water recycling, rainwater harvesting)</a>
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
                <div class="col-xl-12"> <a style="font-size:18px">3. My company has a structured approach to collect, monitor, and report
                    data on water management and uses that data to meet quality standards.</a>
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
                <div class="col-xl-12"> <a style="font-size:18px">4. My company has a guideline, process, or policy to minimize or reduce water
                    consumption in its operations</a>
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
                <div class="col-xl-12"> <a style="font-size:18px">5. My company engages with internal and external stakeholders to address issues and to implement
                    best practices on water consumption.</a>
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
                            TRUE 61%
                        </div>
                        <div class="col-xl-3">
                            FALSE 39%
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
                <div class="col-xl-10"> <a style="font-size:22px; font-weight: bold; color:olivedrab">Environmental Dimension > </a><a style="font-size:22px; font-weight: bold;  color:royalblue"> Environmental Management</a>
                </div>
            </div>
            &nbsp
            <div class="row">
                <div class="col-xl-12"> <a style="font-size:18px">6. Over the past year, my company has minimized or reduced its environmental impact.
                    (e.g, reduction of paper, plastics, carbon emissions, conserve natural habitat).</a>
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
            <div class="row">
                <div class="col-xl-12"> <a style="font-size:18px">7. My company provides financial/non-financial resources for activities related to environmental
                    management.</a>
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
                <div class="col-xl-12"> <a style="font-size:18px">8. My company has a structured approach to collect, monitor, and report data on environmental management
                    to meet quality standards.</a>
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
                <div class="col-xl-12"> <a style="font-size:18px">9. My company has a guideline, process, or policy to be eco-efficient in its operations and minimize its
                    environmental impact.</a>
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
                <div class="col-xl-12"> <a style="font-size:18px">10. My company engages with internal and external stakeholders to find solutions that issues environmental
                    issues (e.g., deforestation)</a>
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
                <div class="col-xl-10"> <a style="font-size:22px; font-weight: bold; color:olivedrab">Environmental Dimension > </a><a style="font-size:22px; font-weight: bold;  color:royalblue"> Carbon Foodprint (GHG Emissions)</a>
                </div>
            </div>
            &nbsp
            <div class="row">
                <div class="col-xl-12"> <a style="font-size:18px">11. Over the past year, my company has minimized or reduced its carbon footprint.</a>
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
            <div class="row">
                <div class="col-xl-12"> <a style="font-size:18px">12. My company has a guideline, process, or policy to minimize or reduce its carbon footprint/GHG
                    emissions from our direct operartions.</a>
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
                <div class="col-xl-12"> <a style="font-size:18px">13. My company has a structured approach to collect, monitor, and report data on GHG emissions and has set
                    ambititous GHG reduction goals.</a>
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
                <div class="col-xl-12"> <a style="font-size:18px">14. My company uses renewable energy or technologies to minimize or reduce its carbon footprint/GHG emissions.</a>
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
                <div class="col-xl-12"> <a style="font-size:18px">15. My company engages with external stakeholders to address issues on GHG emissions and set GHG
                    reduction targets from its support.</a>
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
                <div class="col-xl-10"> <a style="font-size:22px; font-weight: bold; color:olivedrab">Environmental Dimension > </a><a style="font-size:22px; font-weight: bold;  color:royalblue"> Ecosystem Approach</a>
                </div>
            </div>
            &nbsp
            <div class="row">
                <div class="col-xl-12"> <a style="font-size:18px">16. Over the past year, my company has minized or reducted its effect on the ecosystem in which it operates.</a>
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
            <div class="row">
                <div class="col-xl-12"> <a style="font-size:18px">17. My company uses engineering or technology to integrate nature-based solutions in our business model.</a>
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
                <div class="col-xl-12"> <a style="font-size:18px">18. My company has a structured approach to collect, monitor, and report data on eco-design and nature-based solutions,
                    and uses that data to meet quality standards.</a>
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
                <div class="col-xl-12"> <a style="font-size:18px">19. My company has a guideline, process or policy to adopt nature-based solutions or to manage bioversity and ecosystems.</a>
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
                <div class="col-xl-12"> <a style="font-size:18px">20. My company engages with internal and external stakeholders to address issues and to implement best practices on
                    promoting biodiversity and maintaining the ecosystem.</a>
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
</div>
<!-- end row -->

@endsection

@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>


@endsection
