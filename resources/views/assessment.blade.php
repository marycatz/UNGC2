@extends('layouts.master')

@section('title') @lang('translation.Orders') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Assessments @endslot
        @slot('title') Assessment @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <label>List of Assessment Results under this Corporate account</label>
            <div class="row">
                
            </div>
        </div>
    </div>
    <br>
    <br>
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
                                    <th class="align-middle">Assessment No</th>
                                    <th class="align-middle">Company</th>
                                    <th class="align-middle">Primary Contact</th>
                                    <th class="align-middle">E</th>
                                    <th class="align-middle">S</th>
                                    <th class="align-middle">G</th>
                                    <th class="align-middle">Overall</th>
                                    <th class="align-middle">Completion Date</th>
                                    <th class="align-middle"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>UNGCESG123202101</td>
                                    <td>Ali Resources Sdn Bhd</td>
                                    <td>Encik Ali</td>
                                    <td>44</td>
                                    <td>35</td>
                                    <td>35</td>
                                    <td>89 <b>[Advanced]</b></td>
                                    <td>10/12/2021</td>
                                    <td>
                                    <a href="{{ route('assessment_detail') }}"><button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Results"><img src="{{ URL::asset('/assets/images/view.png') }}" width="15px"></button></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>UNGCESG123202102</td>
                                    <td>Ali Resources Sdn Bhd</td>
                                    <td>Encik Ali</td>
                                    <td>57</td>
                                    <td>67</td>
                                    <td>45</td>
                                    <td>78 <b>[Advanced]</b></td>
                                    <td>10/06/2021</td>
                                    <td><a href="{{ route('assessment_detail') }}"><button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Results"><img src="{{ URL::asset('/assets/images/view.png') }}" width="15px"></button></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>UNGCESG234202102</td>
                                    <td>Caspian Resources Sdn Bhd</td>
                                    <td>Encik Caspian</td>
                                    <td>56</td>
                                    <td>68</td>
                                    <td>45</td>
                                    <td>78 <b>[Advanced]</b></td>
                                    <td>12/01/2022</td>
                                    <td><a href="{{ route('assessment_detail') }}"><button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Results"><img src="{{ URL::asset('/assets/images/view.png') }}" width="15px"></button></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>UNGCESG345202102</td>
                                    <td>Shazli KY Industries Sdn Bhd</td>
                                    <td>Encik Shazli</td>
                                    <td>56</td>
                                    <td>67</td>
                                    <td>45</td>
                                    <td>78 <b>[Advanced]</b></td>
                                    <td>12/01/2022</td>
                                    <td><a href="{{ route('assessment_detail') }}"><button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View Results"><img src="{{ URL::asset('/assets/images/view.png') }}" width="15px"></button></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>UNGCESG678202102</td>
                                    <td>Cathy Management Sdn Bhd</td>
                                    <td>Encik Ken</td>
                                    <td>57</td>
                                    <td>67</td>
                                    <td>45</td>
                                    <td>78 <b>[Advanced]</b></td>
                                    <td>13/02/2022</td>
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
    <!-- end row -->

    <!-- Modal -->
    
    <!-- end modal -->

@endsection
