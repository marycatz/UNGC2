@extends('layouts.master')

@section('title') @lang('translation.Orders') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Assessment @endslot
        @slot('title') Assessment Report @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <label>This is the Assessment Done on 21/12/2021</label>
        </div>
    </div>
    </br>
    </br>
    <div class="row">
        <h3> ESG Rating Summary by Number of Surveys </h3>
        
        <div class="tab-content text-muted">
            <div class="tab-pane active" id="home" role="tabpanel">
                </br>
                <div class="col-12">
                    <h5>List of SMEs that this corporate account requesting to share</h5>
                </div>
                </br>
                <div class="row">
                    <div class="card col-lg-3">
                        <div class="card-body">
                            <div>
                                <div class="d-flex">
                                    <div class="avatar-sm align-self-center me-3">
                                        <span class="avatar-title rounded-circle" style="background-color: green; color: white">
                                            E
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 align-self-center overflow-hidden">
                                        <h4 class="font-size-18 mb-1">Environmental</h4>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-12">
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
                            </div>
                        </div>
                    </div>
                    <div class="card col-lg-3">
                        <div class="card-body">
                            <div>
                                <div class="d-flex">
                                    <div class="avatar-sm align-self-center me-3">
                                        <span class="avatar-title rounded-circle" style="background-color: orchid; color: white">
                                            S
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 align-self-center overflow-hidden">
                                        <h4 class="font-size-18 mb-1">Social</h4>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-12">
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
                            </div>
                        </div>
                    </div>
                    <div class="card col-lg-3">
                        <div class="card-body">
                            <div>
                                <div class="d-flex">
                                    <div class="avatar-sm align-self-center me-3">
                                        <span class="avatar-title rounded-circle" style="background-color: red; color: white">
                                            G
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 align-self-center overflow-hidden">
                                        <h4 class="font-size-18 mb-1">Governance</h4>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-12">
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
                            </div>
                        </div>
                    </div>
                    <div class="card col-lg-3">
                        <div class="card-body">
                            <div>
                                <div class="d-flex">
                                    <div class="avatar-sm align-self-center me-3">
                                        <span class="avatar-title rounded-circle" style="background-color: rgb(42, 134, 255); color: white">
                                            ESG
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 align-self-center overflow-hidden">
                                        <h4 class="font-size-18 mb-1">Score</h4>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-12">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h3> Summary of this report </h3>
                    <div class="col-7"> 
                        <label class="font-size-18"> Ali Resources Sdn. Bhd. shows Leadership in the Environmental Dimension.
                        This is especially evident for Water Consumption Indicator which scores X %
                        higher than average. Further improvement should be done in the area of
                        Ecosystem Approach. </label>
                        <label class="font-size-18"> Additionally Ali Resources Sdn. Bhd. shows Average capability in the Social Dimension.
                        This is especially evident for Inclusivity Indicator which scores Y % higher than average.
                        Further improvement should be done in the area of Wages. </label>
                        <label class="font-size-18">  Futhermore, Ali Resources Sdn. Bhd. shows Laggard capability in the Governance
                        Dimension. This is especially evident for Climate Action Indicator which scores Y % higher
                        than average. Further improvement should be done in the area of Anti Corruption Policies. </label>
                        <label class="font-size-18">  Ali Resources Sdn. Bhd garnered an ESG rating of score 52, which is
                        considered Average. </label>
                    </div>
                </div>
                <br>
                <label >You can share Assessment Result with selected Corporate </label>
                <br>
                <br>
                <button type="button" class="btn btn-info">Share Result</button>
                <br>
                <br>
                <div class="row">
                    <h3>Share with corporate </h3>
                    <label>This result share with: </label>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap table-check font-size-16">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="align-middle">Corporate Company</th>
                                                <th class="align-middle">Industry</th>
                                                <th class="align-middle">Grant Access</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Maybank Berhad Cawangan Imbi</td>
                                                <td>Finance</td>
                                                <td><input class="form-check-input" type="checkbox" id="formCheck1"></td>
                                            </tr>
                                            <tr>
                                                <td>Maybank Berhad Cawangan Pudu</td>
                                                <td>Finance</td>
                                                <td><input class="form-check-input" type="checkbox" checked id="formCheck1"></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
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
