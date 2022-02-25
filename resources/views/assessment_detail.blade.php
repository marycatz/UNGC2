@extends('layouts.master')

@section('title') @lang('translation.Lending') @endsection


@section('content')

@component('components.breadcrumb')
        @slot('li_1')  @endslot
        @slot('title') Assessment > UNGCESG123202101 @endslot
    @endcomponent

<br>
<div class="row">
    <div class="col-xl-5">
        <!-- <div class="row">SME</div> -->
        <div class="row"> <h5>ESG Report Serial No: <b>UNGCESG123202101</b></h5></div>
    </div>
    <div class="col-xl-7">
        <div class="row">
            <div style="text-align : right;">
                <!-- <a href=""></a> -->
                <a href="{{ asset('doc/Assessment_Report_pdf_version.pdf')}}" rel="noopener" target="_blank"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class='fas fa-file-pdf' style='font-size:15px; color: red;'></i> Download PDF version</button></a>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="row">
    <div class="col-xl-3">
        <h2>SME Details</h2>
        <div class="card border border-dark btn-rounded">
            <div class="card-body ">
                <div>
                    <div class="mb-4 me-3">
                        <i class="mdi mdi-account-circle text-primary h3">Logo</i>
                    </div>
                    <div>
                    <h6 class="text-muted mb-1">Company Name:</h6>
                        <h5 class="">Ali Resources Sdn Bhd</h5>
                        <br>
                        <h6 class="text-muted mb-1">Industry:</h6>
                        <h5 class="">Construction</h5>
                        <br>
                        <h6 class="text-muted mb-1">Contact Person:</h6>
                        <h5 class="">Encik Ali</h5>
                        <br>
                        <h6 class="text-muted mb-1">Designation:</h6>
                        <h5 class="">General Manager</h5>
                        <br>
                        <h6 class="text-muted mb-1">Report Date:</h6>
                        <h5 class="">26/01/2022</h5>
                        <br>
                        <h6 class="text-muted mb-1">Assessment Completion Date:</h6>
                        <h5 class="">20/01/2022</h5>
                        <br>
                        <h6 class="text-muted mb-1">Validity Period:</h6>
                        <h5 class="">20/01/2022 - 20/01/2023</h5>
                    </div>
                </div>
            </div>
        </div>
        <h2>ESG Rating</h2>
        <div class="card border border-dark btn-rounded">
            <div class="card-body">
                <div>
                    <div><h5 class="card-title mb-4" style="text-align: right">Score</h5></div>
                    <ul class="verti-timeline list-unstyled">
                        <li>
                            <a>
                                <div class="d-flex">
                                    <div class="flex-grow-1 align-self-center overflow-hidden">
                                        <h5 class="font-size-14 mb-1"><b style="font-size:20px">E</b>nvironmental</h5>
                                    </div>
                                    <div class="font-size-14 mb-1 align-self-center"><span class="avatar-title rounded-circle" style="background-color: #FFBF00; color: white; padding:8px;">30</span></div>
                                </div>
                            </a>
                        </li>
                        &nbsp;
                        <li>
                            <a>
                                <div class="d-flex">
                                    <div class="flex-grow-1 align-self-center overflow-hidden">
                                        <h5 class="font-size-14 mb-1"><b style="font-size:20px">S</b>ocial</h5>
                                    </div>
                                    <div class="font-size-14 mb-1 align-self-center"><span class="avatar-title rounded-circle" style="background-color: green; color: white; padding:8px;">85</span></div>
                                </div>
                            </a>
                        </li>
                        &nbsp;
                        <li>
                            <a>
                                <div class="d-flex">
                                    <div class="flex-grow-1 align-self-center overflow-hidden">
                                        <h5 class="font-size-14 mb-1"><b style="font-size:20px">G</b>overnance</h5>
                                    </div>
                                    <div class="font-size-14 mb-1 align-self-center"><span class="avatar-title rounded-circle" style="background-color: blue; color: white; padding:8px;">70</span></div>
                                </div>
                            </a>
                        </li>
                        &nbsp;
                        <li>
                            <a>
                                <div class="d-flex">
                                    <div class="flex-grow-1 align-self-center overflow-hidden">
                                        <h5 class="font-size-14 mb-1"><b style="font-size:20px">ESG</b>-Score</h5>
                                    </div>
                                    <div class="font-size-14 mb-1 align-self-center"><span class="avatar-title rounded-circle" style="background-color: blue; color: white; padding:8px 10px 8px 10px;">61</span></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9" style="background-color: #f8f8fb">
    <div class="row">

            <div class="col-10" style="text-align:justify;"> 
                <h3>Executive Summary</h3>
                    <a><b>Ali Resources Sdn. Bhd.</b> shows <b>Leadership</b> in the <b>Environmental</b> Dimension. This is especially evident for <b>Water Consumption</b> Indicator which scores <b>30</b> % <b>higher</b> than average. Further improvement should be done in the area of
                    <b>Ecosystem Approach</b>. </a><br /><br />

                    <a>Additionally <b>Ali Resources Sdn. Bhd.</b> shows <b>Average</b> capability in the <b>Social</b> Dimension. This is especially evident for Inclusivity Indicator which scores <b>40</b> % <b>higher</b> than <b>average</b>. Further improvement should be done in the area of <b>Wages</b>.</a><br /><br />

                    <a>Furthermore <b>Ali Resources Sdn. Bhd.</b> shows <b>Average</b> capability in the <b>Governance</b> Dimension. This is especially evident for <b>Climate Action</b> Indicator which scores <b>20</b> % <b>higher</b> than <b>average</b>. Further improvement should be done in the area of <b>Anti Corruption Policies</b>.</a><br /><br />

                    <a>Overall <b>Ali Resources Sdn. Bhd.</b> garnered an ESG rating of score <b>61</b>, which is considered <b>Intermediate</b>.</a>

            </div>

                            <div class="col-2">    
                        <div class="avatar-xl align-self-center me-3">
                        <span class="avatar-title rounded-circle " style="background-color: blue; font-size: 22px; text-align: center; border-end-end-radius: 50px; border: black; border-width: 50px;">
                            <div class="row"> <a style="color: white">61</a><br><a style="color: #FF0; font-size: 14px;"><b>Intermediate </b></a> </div>
                            
                            
                        </span>
                    </div>
                </div>
</div>    
<br /><br /><h3>Comparison To Peers By Indicators</h3>       
<div id="comparison-peers" class="apex-charts" dir="ltr"></div>
        <br>

        <br>
        <div class="card" style="background-color: #f8f8fb">
            <div class="row">
                <div class="col-xl-6">
                    <div class="col-xl-10"> <a style="font-size:22px; font-weight: bold;">Supporting ISO Documents</a>
                    </div>
                    <div class="col-xl-10"> <a style="font-size:16px;">This is where the ISO documents resides</a>
                    </div>
                    <div class="col-xl-5">
                        <textarea id="message" class="form-control" style="box-sizing: border-box" disabled></textarea>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="col-xl-10"> <a style="font-size:22px; font-weight: bold;">Recommended Learning Modules</a>
                    </div>
                    <div class="col-xl-10"> <a style="font-size:16px;">List Of learning modules documents</a>
                    </div>
                    <div class="col-xl-5">
                        <textarea id="message" class="form-control" style="box-sizing: border-box" disabled></textarea>
                    </div>
                </div>
            </div>
        
            <br>
        </div>
        <div class="row">
            <div class="col-xl-10"><h2>Assess Details</h2> </div>
            <div class="col-xl-2"> Filter (Drop Down)</div>
        </div>
        <div class="card" style="background-color: #f8f8fb">
            <div class="row">
                <div class="col-xl-10"> <a style="font-size:22px; font-weight: bold; color:olivedrab">Environmental Dimension > </a><a style="font-size:22px; font-weight: bold;  color:royalblue"> Water Consumption</a>
                </div>
                <div class="col-xl-2">
                    <div class="avatar-xl me-3">
                        <select class="form-control select2-search-disable">
                            <option value="BU" selected>All</option>
                            <option value="SE">Same Industry</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12"> <a style="font-size:18px">1. Over the past year, my company has minimized or reduced water comsumption.</a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>False</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>False</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-10"> <a style="font-size:22px; font-weight: bold; color:violet">Social > </a><a style="font-size:22px; font-weight: bold;  color:royalblue"> Inclusivity</a>
                </div>
            </div>
            &nbsp
            <div class="row">
                <div class="col-xl-12"> <a style="font-size:18px">21. Over the past year, my company has addressed issues on discriminatory hiring practices.</a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>False</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px">22. My company takes affirmative action (e.g outreach and training programs) to recruit minorities (such as
                    disabled persons/OKU, ethnic minorities, and others)</a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px">23. My company has a structured approach to collect, monitor, and report data on discrimination and inclusivity,
                    and uses that data to meet quality standards</a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px">24. My company determines and pays wages according to market rates.</a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px">25. My company adopts a living wage framework.</a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-10"> <a style="font-size:22px; font-weight: bold; color:violet">Social > </a><a style="font-size:22px; font-weight: bold;  color:royalblue"> Wages</a>
                </div>
            </div>
            &nbsp
            <div class="row">
                <div class="col-xl-12"> <a style="font-size:18px">26. Over the past year, my company had a minimum wage policy.</a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>False</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px">27. My company reviews wage payments periodically to ensure they are aligned with market rates and adjusted for inflation.</a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px">28. My company has a structured approach to collect, monitor and report data on wages/salaries, and uses that data to
                    balance the wage ratio between top management and all its other employees.</a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px">29. My company determines and pays wages acording to market rates.</a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px">30. My company adopts a living wage framework.</a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-10"> <a style="font-size:22px; font-weight: bold; color:red">Governance > </a><a style="font-size:22px; font-weight: bold;  color:royalblue"> Climate Action</a>
                </div>
            </div>
            &nbsp
            <div class="row">
                <div class="col-xl-12"> <a style="font-size:18px">31. Over the past year, my company has addressed corruption issues</a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Answer: <b>True</b></a>
                </div>
                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 15px;">  Your Peers:</a>
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
         
  
        </div>
    </div>
</div>
<!-- end row -->

@endsection

@section('script')
<!-- apexcharts -->
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/apexcharts.init.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>


@endsection
