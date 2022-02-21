@extends('layouts.master') @section('title') @lang('translation.Dashboards') @endsection @section('css')
<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" /> @endsection @section('content') @component('components.breadcrumb') @slot('li_1') Dashboards @endslot @slot('title') Home @endslot @endcomponent

<div class="row">
    <div class="col-xl-4">
    </div>
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <label class="form-label">Company Name</label>
                            <input class="form-control" type="text" id="company_name" name="company_name" placeholder="Default input">
                        </div>
                    </div>
                </div>
                </br>
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <label class="form-label">SSM Number</label>
                            <input class="form-control" type="text" id="ssm_number" name="ssm_number" placeholder="Default input">
                        </div>
                    </div>
                </div>
            </br>
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <label class="form-label">SSM Certificate</label>
                            <input class="form-control" type="text" id="ssm_cert" name="ssm_cert" placeholder="Default input">
                        </div>
                    </div>
                </div>
            </br>
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <label class="form-label">State</label>
                            <div class="">
                                <select class="form-select"  id="state" name="state">
                                    <option>Select</option>
                                    <option>Large select</option>
                                    <option>Small select</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </br>
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <label class="form-label">Industry</label>
                            <div class="">
                                <select class="form-select"  id="state" name="state">
                                    <option>Select</option>
                                    <option>Large select</option>
                                    <option>Small select</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                </br>
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <a href="{{route('view_company_profile')}}" class="btn btn-primary waves-effect waves-light btn-sm">Update</a>
              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
    </div>
</div>
<!-- end row -->

@endsection @section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
<script>
    // EDIT DATA
    

</script>

@endsection