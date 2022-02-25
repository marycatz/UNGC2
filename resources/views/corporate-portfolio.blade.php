@extends('layouts.master')

@section('title') @lang('Portfolio') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Portfolio @endslot
        @slot('title') Portfolio List @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <label>List of SMEs under this Corporate account</label>
        </div>
    </div>
    </br>
    </br>
    <div class="row">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#sme" role="tab">
                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                    <span class="d-none d-sm-block">Request Connections</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " data-bs-toggle="tab" href="#home" role="tab">
                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                    <span class="d-none d-sm-block">Pending Connections</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " data-bs-toggle="tab" href="#profile" role="tab">
                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                    <span class="d-none d-sm-block">SMEs Currently Connected</span>
                </a>
            </li>
           
        </ul>
        <!-- Tab panes -->
        <div class="tab-content text-muted">
        <div class="tab-pane active" id="sme" role="tabpanel">
                </br>
                <div class="col-12">
                    <h5>List of SMEs to request</h5>
                </div>
                </br>
                <div class="row">
               
               
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
               
                                <div class="row mb-2">
                                    
                                    <div class="col-sm-4">
                                        <label><b>SSM</b></label> &nbsp
                                        <div class="me-2 mb-2 d-inline-block">
                                            <div class="position-relative">
                                            <form action="{{ route('corporateportfolio') }}" method="GET">
                                                <input type="text" name="search"/>
                                                <button type="submit" class="btn btn-sm btn-primary">Search</button>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        
                                    </div><!-- end col-->
                                </div>
                                <table id="tech-companies-1" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th data-priority="1">Company Name</th>
                                        <th data-priority="3">Company SSM</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @if($listsme->isNotEmpty())
                                            @foreach($listsme as $key => $lstsme)
                                                <tr style="">
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $lstsme->company_name }}</td>
                                                    <td>{{ $lstsme->company_ssm }}</td>
                                                </tr>
                                            @endforeach
                                            @else 
                                            <tr>
                                                <td colspan="3">No Results Found, please reach out to prospective connection to register to UNGC-MYB: CONNECT </td>
                                            </tr>
                                            @endif
                                         
                                </tbody>
                            </table>
                                
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
            <div class="tab-pane" id="home" role="tabpanel">
                </br>
                <div class="col-12">
                    <h5>List of SMEs that this corporate account requesting to share</h5>
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
                                        
                                    </div><!-- end col-->
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap table-check">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="align-middle">No</th>
                                                <th class="align-middle">Company</th>
                                                <th class="align-middle">SSM</th>
                                                <!-- <th class="align-middle">Primary Contact</th>
                                                <th class="align-middle">Date Requested</th> -->
                                                <th class="align-middle"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Caspian Resources Sdn Bhd</td>
                                                <td>12345678</td>
                                                 <!-- <td>Encik Caspian</td> -->
                                                <!-- <td><center>-</center></td>  -->
                                                <!-- <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light" style="height: 33px;">View Profile</button>  -->
                                                <td><button type="button" class="btn btn-danger btn-rounded waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Disconnect"><img src="{{ URL::asset('/assets/images/disconnect.png') }}" width="15px"></button> </td>
                                            </tr>
                                            <tr  style="background-color: rgb(233, 233, 233);">
                                                <td>2</td>
                                                <td>Ali Resources Sdn Bhd</td>
                                                 <td>12345678</td>
                                               <!-- <td>Encik Ali</td>
                                                <td><center>-</center></td> -->
                                                <td><button type="button" class="btn btn-danger btn-rounded waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Disconnect"><img src="{{ URL::asset('/assets/images/disconnect.png') }}" width="15px"></button></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Cathy Management Sdn Bhd</td>
                                                <td>12345678</td>
                                                <!-- <td>Encik Ken</td>
                                                <td><center>-</center></td> -->
                                                <td><button type="button" class="btn btn-danger btn-rounded waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Disconnect"><img src="{{ URL::asset('/assets/images/disconnect.png') }}" width="15px"></button></td>
                                            </tr>
                                            <tr  style="background-color: rgb(233, 233, 233);">
                                                <td>4</td>
                                                <td>Shazli Resources Sdn Bhd</td>
                                                <td>12345678</td>
                                                 <!--<td>Encik Shazli</td>
                                                <td><center>-</center></td> -->
                                                <td><button type="button" class="btn btn-danger btn-rounded waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Disconnect"><img src="{{ URL::asset('/assets/images/disconnect.png') }}" width="15px"></button></td>
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
                    <h5>List of SMEs currently connected</h5>
                </div>
                </br>
                <div class="row">
                    <div class="col-12">
                        <div class="card" >
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
                                        <div class="text-sm-end">
                                            <!-- <button type="button" class="btn btn-info btn-rounded waves-effect waves-light mb-2 me-2">Request SME Access</button> -->
                                        </div>
                                    </div><!-- end col-->
                                </div>
                                <div class="table-responsive" >
                                    <table class="table align-middle table-nowrap table-check">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="align-middle">No</th>
                                                <th class="align-middle">Company</th>
                                                <th class="align-middle">SSM</th>
                                                <th class="align-middle">Primary Contact</th>
                                                <th class="align-middle">Date Shared</th>
                                                <th class="align-middle">Status</th>
                                                <th class="align-middle"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>XYZ Resources Sdn Bhd</td>
                                                <td>12345678</td>
                                                <td>Encik Caspian</td>
                                                <td>10/12/2021</td>
                                                <td>Shared</td>
                                                <td><button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">Assessments</button>
                                                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Assessments</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- <p style="color: mediumblue">UNGCESG678202101</p> -->
                                                                    <a href="{{ route('assessment_detail') }}">UNGCESG678202101</a>
                                                                    
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Profile"><img src="{{ URL::asset('/assets/images/view.png') }}" width="15px"></button>
                                                    <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Disconnect"><img src="{{ URL::asset('/assets/images/disconnect.png') }}" width="15px"></button></td>
                                            </tr>
                                            <tr  style="background-color: rgb(233, 233, 233);">
                                                <td>2</td>
                                                <td>Mark Resources Sdn Bhd</td>
                                                <td>12345678</td>
                                                <td>Encik Ali</td>
                                                <td>10/12/2021</td>
                                                <td>Shared</td>
                                                <td><button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">Assessments</button>
                                                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Assessments</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p style="color: mediumblue">UNGCESG678202101</p>
                                                                    
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Profile"><img src="{{ URL::asset('/assets/images/view.png') }}" width="15px"></button>
                                                    <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Disconnect"><img src="{{ URL::asset('/assets/images/disconnect.png') }}" width="15px"></button></td></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Gomez Food Manufacturing Sdn Bhd</td>
                                                <td>12345678</td>
                                                <td>Encik Ken</td>
                                                <td>10/12/2021</td>
                                                <td>Shared</td>
                                                <td><button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">Assessments</button>
                                                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Assessments</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p style="color: mediumblue">UNGCESG678202101</p>
                                                                    
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Profile"><img src="{{ URL::asset('/assets/images/view.png') }}" width="15px"></button>
                                                    <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Disconnect"><img src="{{ URL::asset('/assets/images/disconnect.png') }}" width="15px"></button></td></td>
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
    
    <!-- end row -->

    <!-- Modal -->
    
    <!-- end modal -->

@endsection
