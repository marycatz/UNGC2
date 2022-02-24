@extends('layouts.master')

@section('title') @lang('translation.Orders') @endsection
<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" /> 
    <link href="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/css/SME.css') }}" rel="stylesheet" type="text/css" />

@section('content')
    
    @component('components.breadcrumb')
        @slot('li_1')  @endslot
        @slot('title') Assessment @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <label>List of Assessment Results under this Corporate account</label>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-md-4">
            <label>
            <img src="{{ URL::asset('/assets/images/assessmentsme.png') }}" alt="" class="img-fluid" style="border-radius:20px;">
            </label>
        </div>
        <div class="col-md-8">
            
            <label>Welcome to the ESG assessment!</label>
            <ol>
                <li>The assessment consists of 40 questions covering the Environmental, Social and Governance areas.</li>
                <li>The assessment will take approximately 30 mins to complete. You may save your progress at any stage and return to complete the assessment at a later time.</li>
                <li>You may need to prepare the following documents (for upload) before starting (if applicable):
                    <ol style="list-style-type: lower-alpha;">
                        <li>SSM Certificate of incorporation (compulsory)</li>
                        <li>ISO 14046:2014. Environmental management — Water footprint — Principles, requirements and guidelines based on Lifecycle Assessment </li>
                        <li>ISO 46001:2019. Water efficiency management systems. </li>
                        <li>ISO 14001:2015. Environmental management systems.</li>
                        <li>ISO 14006:2020. Environmental management systems.</li>
                        <li>ISO 30415:2021. Human resource management — Diversity and inclusion.</li>
                        <li>ISO 37001:2016. Anti-bribery management systems </li>
                    </ol>
                </li>
                <li>You are allowed to complete the assessment once every 6 months. </li>
            </ol>
        
                <button class="btn btn-info" type="button"><span key="t-megamenu">  <a href="{{ route('assessment_sme') }}" style="color:white;">Create New Assessment</a></span></button>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="tab-content text-muted">
            <div class="tab-pane active" id="home" role="tabpanel">
                </br>
                <div class="col-12">
                    <h5>Assessments & Reports</h5>
                </div>
                </br>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap table-check">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="align-middle">No</th>
                                                <th class="align-middle">Serial No</th>
                                                <th class="align-middle">Completion Date</th>
                                                <th class="align-middle">E</th>
                                                <th class="align-middle">S</th>
                                                <th class="align-middle">G</th>
                                                <th class="align-middle">Overall Score</th>
                                                <th class="align-middle">Shared to Corporate</th>
                                                <th class="align-middle"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>UNGCESG123202101</td>
                                                <td>12/12/2021</td>
                                                <td>100</td>
                                                <td>60</td>
                                                <td>50</td>
                                                <td>78 <span class="advanced">Advanced</span></td>
                                                <td>4</td>
                                                <td><a href="{{ route('assessment_detail') }}"><button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Results"><img src="{{ URL::asset('/assets/images/view.png') }}" width="15px"></button></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>UNGCESG123202202</td>
                                                <td>01/06/2022</td>
                                                <td>50</td>
                                                <td>40</td>
                                                <td>60</td>
                                                <td>50 <span class="intermediate">Intermediate</span></td>
                                                <td>3</td>
                                                <td><a href="{{ route('assessment_detail') }}"><button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Results"><img src="{{ URL::asset('/assets/images/view.png') }}" width="15px"></button></a></td>
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
        </div>
    </div>
    
    <!-- end row -->

    <!-- Modal -->
    
    <!-- end modal -->

@endsection
