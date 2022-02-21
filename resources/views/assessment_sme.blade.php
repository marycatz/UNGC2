@extends('layouts.master')

@section('title') @lang('translation.Lending') @endsection


@section('content')
<div class="row"> <h1><b>New Assessment</b></h1></div>
<br>
<div class="row">
    <div >
        <!-- <label style="font-size: 20px"> The assessment consists of 45 questions covering the Environmental, Social and Governance areas.
        The assessment will take approximately 30 mins to complete. You may save your progress at any stage and return to
        complete the assessment at a later time.</label>
    </div>
    <br>
    <br>
    <br>
    <label style="font-size: 18px"> Certificate of incorporation (compulsory) </label>
    <label style="font-size: 18px">ISO 14046:2014. Environmental management — Water footprint — Principles, requirements and guidelines based on Lifecycle Assessment. </label></br>
    <label style="font-size: 18px">ISO 46001:2019. Water efficiency management systems.</label></br>
    <label style="font-size: 18px">ISO 14001:2015. Environmental management systems.</label></br>
    <label style="font-size: 18px">ISO 14006:2020. Environmental management systems.</label></br>
    <label style="font-size: 18px">ISO 30415:2021. Human resource management — Diversity and inclusion.</label></br>
    <label style="font-size: 18px">ISO 37001:2016. Anti-bribery management systems.</label></br> -->
    <label style="font-size:25px;">Welcome to the ESG assessment!</label>
            <ol>
                <li style="font-size:18px;padding-top: 3px;">The assessment consists of 40 questions covering the Environmental, Social and Governance areas.</li>
                <li style="font-size:18px;padding-top: 3px;">The assessment will take approximately 30 mins to complete. You may save your progress at any stage and return to complete the assessment at a later time.</li>
                <li style="font-size:18px;padding-top: 3px;">You may need to prepare the following documents (for upload) before starting (if applicable):
                    <ol style="list-style-type: lower-alpha;">
                        <li style="font-size:18px;padding-top: 3px;">SSM Certificate of incorporation (compulsory)</li>
                        <li style="font-size:18px;padding-top: 3px;">ISO 14046:2014. Environmental management — Water footprint — Principles, requirements and guidelines based on Lifecycle Assessment </li>
                        <li style="font-size:18px;padding-top: 3px;">ISO 46001:2019. Water efficiency management systems. </li>
                        <li style="font-size:18px;padding-top: 3px;">ISO 14001:2015. Environmental management systems.</li>
                        <li style="font-size:18px;padding-top: 3px;">ISO 14006:2020. Environmental management systems.</li>
                        <li style="font-size:18px;padding-top: 3px;">ISO 30415:2021. Human resource management — Diversity and inclusion.</li>
                        <li style="font-size:18px;padding-top: 3px;">ISO 37001:2016. Anti-bribery management systems </li>
                    </ol>
                </li>
                <li style="font-size:18px;padding-top: 3px;">You are allowed to complete the assessment once every 6 months. </li>
            </ol>
        

</div>
<!-- <p style="font-size:20px;">You are allowed to complete the assessment once every 6 months.</p> -->
<br><br>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div id="basic-example">
                    <!-- Seller Details -->
                    <h3>Demographics</h3>
                    <section>
                    
                        <h5><a style="font-size:22px; font-weight: bold; color:olivedrab">Demographics Question </a></h5>
                        <form>
                        @foreach($questions as $key => $p)
                            @if($p->survey->name == "Demographics")
                            <div class="row">
                                <div class="col-xl-12"> <a style="font-size:18px">{{ $p->content }}</a>
                                    @foreach($p->options as $key1 => $vl)
                                    @if($p->type == "radio")
                                        <div class="form-check mb-3" style="margin-left: 30px">
                                            <input class="form-check-input" type="{{ $p->type }}" name="{{ $key }}" id="{{ $key }}" required>
                                            <label class="form-check-label" for="{{ $key }}">
                                            {{ $vl }}
                                            </label>
                                        </div>
                                    @endif

                                    @if($p->type == "checkbox")
                                        <div class="form-check mb-3" style="margin-left: 30px">
                                            <input class="form-check-input" type="{{ $p->type }}" name="{{ $key }}" id="{{ $key }}" required>
                                            <label class="form-check-label" for="{{ $key }}">
                                            {{ $vl }}
                                            </label>
                                        </div>
                                    @endif
                                    @endforeach
                                   
                                </div>
                            </div>
                            @endif
                           
                        @endforeach
                            
                        </form>
                        
                    </section>
                    <h3>Environmental</h3>
                    <section>
   
                        <h5><a style="font-size:22px; font-weight: bold; color:olivedrab">Environmental Dimension > </a><a style="font-size:22px; font-weight: bold;  color:royalblue"> Water Consumption</a></h5>
                        <form>
                        @foreach($questions as $key => $p)
                            @if($p->survey->name == "Environment-Operations-Water_Consumption")
                            <div class="row">
                                <div class="col-xl-12"> <a style="font-size:18px">{{ $p->content }}</a>
                                    @foreach($p->options as $key1 => $vl)
                                    @if($p->type == "radio")
                                        <div class="form-check mb-3" style="margin-left: 30px">
                                            <input class="form-check-input" type="{{ $p->type }}" name="{{ $key }}" id="{{ $key }}" required>
                                            <label class="form-check-label" for="{{ $key }}">
                                            {{ $vl }}
                                            </label>
                                        </div>
                                    @endif

                                    @if($p->type == "checkbox")
                                        <div class="form-check mb-3" style="margin-left: 30px">
                                            <input class="form-check-input" type="{{ $p->type }}" name="{{ $key }}" id="{{ $key }}" required>
                                            <label class="form-check-label" for="{{ $key }}">
                                            {{ $vl }}
                                            </label>
                                        </div>
                                    @endif
                                    @endforeach
                                   
                                </div>
                            </div>
                            @endif
                           
                        @endforeach
                            
                        <h5><a style="font-size:22px; font-weight: bold; color:olivedrab">Environmental Dimension > </a><a style="font-size:22px; font-weight: bold;  color:royalblue"> Environmental Management</a></h5>
                        <form>
                        @foreach($questions as $key => $p)
                            @if($p->survey->name == "Environment-Operations-Environmental_Management")
                            <div class="row">
                                <div class="col-xl-12"> <a style="font-size:18px">{{ $p->content }}</a>
                                    @foreach($p->options as $key1 => $vl)
                                    @if($p->type == "radio")
                                        <div class="form-check mb-3" style="margin-left: 30px">
                                            <input class="form-check-input" type="{{ $p->type }}" name="{{ $key }}" id="{{ $key }}" required>
                                            <label class="form-check-label" for="{{ $key }}">
                                            {{ $vl }}
                                            </label>
                                        </div>
                                    @endif

                                    @if($p->type == "checkbox")
                                        <div class="form-check mb-3" style="margin-left: 30px">
                                            <input class="form-check-input" type="{{ $p->type }}" name="{{ $key }}" id="{{ $key }}" required>
                                            <label class="form-check-label" for="{{ $key }}">
                                            {{ $vl }}
                                            </label>
                                        </div>
                                    @endif
                                    @endforeach
                                   
                                </div>
                            </div>
                            @endif
                           
                        @endforeach
                        </form>
                        <br>
                        <h5><a style="font-size:22px; font-weight: bold; color:olivedrab">Environmental Dimension > </a><a style="font-size:22px; font-weight: bold;  color:royalblue"> Ecosystem Approach</a></h5>
                        <form>
                        @foreach($questions as $key => $p)
                            @if($p->survey->name == "Environment-Stakeholders-Ecosystems_Approach")
                            <div class="row">
                                <div class="col-xl-12"> <a style="font-size:18px">{{ $p->content }}</a>
                                    @foreach($p->options as $key1 => $vl)
                                    @if($p->type == "radio")
                                        <div class="form-check mb-3" style="margin-left: 30px">
                                            <input class="form-check-input" type="{{ $p->type }}" name="{{ $key }}" id="{{ $key }}" required>
                                            <label class="form-check-label" for="{{ $key }}">
                                            {{ $vl }}
                                            </label>
                                        </div>
                                    @endif

                                    @if($p->type == "checkbox")
                                        <div class="form-check mb-3" style="margin-left: 30px">
                                            <input class="form-check-input" type="{{ $p->type }}" name="{{ $key }}" id="{{ $key }}" required>
                                            <label class="form-check-label" for="{{ $key }}">
                                            {{ $vl }}
                                            </label>
                                        </div>
                                    @endif
                                    @endforeach
                                   
                                </div>
                            </div>
                            @endif
                           
                        @endforeach
                        </form>
                        <br>
                        <h5><a style="font-size:22px; font-weight: bold; color:olivedrab">Environmental Dimension > </a><a style="font-size:22px; font-weight: bold;  color:royalblue"> Carbon Foodprint (GHG Emissions)</a></h5>
                        <form>
                        @foreach($questions as $key => $p)
                            @if($p->survey->name == "Environment-Operations-Carbon_Footprint-GHG_Emissions")
                            <div class="row">
                                <div class="col-xl-12"> <a style="font-size:18px">{{ $p->content }}</a>
                                    @foreach($p->options as $key1 => $vl)
                                    @if($p->type == "radio")
                                        <div class="form-check mb-3" style="margin-left: 30px">
                                            <input class="form-check-input" type="{{ $p->type }}" name="{{ $key }}" id="{{ $key }}" required>
                                            <label class="form-check-label" for="{{ $key }}">
                                            {{ $vl }}
                                            </label>
                                        </div>
                                    @endif

                                    @if($p->type == "checkbox")
                                        <div class="form-check mb-3" style="margin-left: 30px">
                                            <input class="form-check-input" type="{{ $p->type }}" name="{{ $key }}" id="{{ $key }}" required>
                                            <label class="form-check-label" for="{{ $key }}">
                                            {{ $vl }}
                                            </label>
                                        </div>
                                    @endif
                                    @endforeach
                                   
                                </div>
                            </div>
                            @endif
                           
                        @endforeach
                        </form>
                    </section>

                    <!-- Company Document -->
                    <h3>Social</h3>
                    <section>
                        <h5><a style="font-size:22px; font-weight: bold; color:violet">Social > </a><a style="font-size:22px; font-weight: bold;  color:royalblue"> Inclusivity</a></h5>
                        <form>
                        @foreach($questions as $key => $p)
                            @if($p->survey->name == "Social-Human_Capital-Inclusivity")
                            <div class="row">
                                <div class="col-xl-12"> <a style="font-size:18px">{{ $p->content }}</a>
                                    @foreach($p->options as $key1 => $vl)
                                    @if($p->type == "radio")
                                        <div class="form-check mb-3" style="margin-left: 30px">
                                            <input class="form-check-input" type="{{ $p->type }}" name="{{ $key }}" id="{{ $key }}" required>
                                            <label class="form-check-label" for="{{ $key }}">
                                            {{ $vl }}
                                            </label>
                                        </div>
                                    @endif

                                    @if($p->type == "checkbox")
                                        <div class="form-check mb-3" style="margin-left: 30px">
                                            <input class="form-check-input" type="{{ $p->type }}" name="{{ $key }}" id="{{ $key }}" required>
                                            <label class="form-check-label" for="{{ $key }}">
                                            {{ $vl }}
                                            </label>
                                        </div>
                                    @endif
                                    @endforeach
                                   
                                </div>
                            </div>
                            @endif
                           
                        @endforeach
                        </form>
                        </br>
                        <h5><a style="font-size:22px; font-weight: bold; color:violet">Social > </a><a style="font-size:22px; font-weight: bold;  color:royalblue"> Wages</a></h5>
                        <form>
                        @foreach($questions as $key => $p)
                            @if($p->survey->name == "Social-Human_Capital-Wages")
                            <div class="row">
                                <div class="col-xl-12"> <a style="font-size:18px">{{ $p->content }}</a>
                                    @foreach($p->options as $key1 => $vl)
                                    @if($p->type == "radio")
                                        <div class="form-check mb-3" style="margin-left: 30px">
                                            <input class="form-check-input" type="{{ $p->type }}" name="{{ $key }}" id="{{ $key }}" required>
                                            <label class="form-check-label" for="{{ $key }}">
                                            {{ $vl }}
                                            </label>
                                        </div>
                                    @endif

                                    @if($p->type == "checkbox")
                                        <div class="form-check mb-3" style="margin-left: 30px">
                                            <input class="form-check-input" type="{{ $p->type }}" name="{{ $key }}" id="{{ $key }}" required>
                                            <label class="form-check-label" for="{{ $key }}">
                                            {{ $vl }}
                                            </label>
                                        </div>
                                    @endif
                                    @endforeach
                                   
                                </div>
                            </div>
                            @endif
                           
                        @endforeach
                        </form>
                    </section>

                    <!-- Bank Details -->
                    <h3>Governance</h3>
                    <section>
                        <h5><a style="font-size:22px; font-weight: bold; color:red">Governance > </a><a style="font-size:22px; font-weight: bold;  color:royalblue"> Anti Corruption Policies</a></h5>
                        <form>
                        @foreach($questions as $key => $p)
                            @if($p->survey->name == "Governance-Governance-Anti_Corruption_Policies")
                            <div class="row">
                                <div class="col-xl-12"> <a style="font-size:18px">{{ $p->content }}</a>
                                    @foreach($p->options as $key1 => $vl)
                                    @if($p->type == "radio")
                                        <div class="form-check mb-3" style="margin-left: 30px">
                                            <input class="form-check-input" type="{{ $p->type }}" name="{{ $key }}" id="{{ $key }}" required>
                                            <label class="form-check-label" for="{{ $key }}">
                                            {{ $vl }}
                                            </label>
                                        </div>
                                    @endif

                                    @if($p->type == "checkbox")
                                        <div class="form-check mb-3" style="margin-left: 30px">
                                            <input class="form-check-input" type="{{ $p->type }}" name="{{ $key }}" id="{{ $key }}" required>
                                            <label class="form-check-label" for="{{ $key }}">
                                            {{ $vl }}
                                            </label>
                                        </div>
                                    @endif
                                    @endforeach
                                   
                                </div>
                            </div>
                            @endif
                           
                        @endforeach
                        </form>
                        <h5><a style="font-size:22px; font-weight: bold; color:red">Governance > </a><a style="font-size:22px; font-weight: bold;  color:royalblue"> Climate Action</a></h5>
                        <form>
                        
                        @foreach($questions as $key => $p)
                            @if($p->survey->name == "Governance-Strategy-Climate_Action")
                            <div class="row">
                                <div class="col-xl-12"> <a style="font-size:18px">{{ $p->content }}</a>
                                    @foreach($p->options as $key1 => $vl)
                                    @if($p->type == "radio")
                                        <div class="form-check mb-3" style="margin-left: 30px">
                                            <input class="form-check-input" type="{{ $p->type }}" name="{{ $key }}" id="{{ $key }}" required>
                                            <label class="form-check-label" for="{{ $key }}">
                                            {{ $vl }}
                                            </label>
                                        </div>
                                    @endif

                                    @if($p->type == "checkbox")
                                        <div class="form-check mb-3" style="margin-left: 30px">
                                            <input class="form-check-input" type="{{ $p->type }}" name="{{ $key }}" id="{{ $key }}" required>
                                            <label class="form-check-label" for="{{ $key }}">
                                            {{ $vl }}
                                            </label>
                                        </div>
                                    @endif
                                    @endforeach
                                   
                                </div>
                            </div>
                            @endif
                           
                        @endforeach
                        </form>
                        
                    </section>
                    <h3>ISO Document</h3>
                    <section>
                        <h7><a style="font-size:22px;">Only PDF Files and a maximum size of 20MB are accepted</a></h5>
                            <br>
                        <form>
                            <div class="row">
                                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 50px;">ISO 14046:2014</a>
                                    <br>
                                    <div class="form-check mb-3" style="margin-left: 30px">
                                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 50px;">ISO 46000:2019</a>
                                    <br>
                                    <div class="form-check mb-3" style="margin-left: 30px">
                                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 50px;">ISO 14001:2015</a>
                                    <br>
                                    <div class="form-check mb-3" style="margin-left: 30px">
                                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 50px;">ISO 14006:2020</a>
                                    <br>
                                    <div class="form-check mb-3" style="margin-left: 30px">
                                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 50px;">ISO 30415:2021</a>
                                    <br>
                                    <div class="form-check mb-3" style="margin-left: 30px">
                                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12"> <a style="font-size:18px; padding-left: 50px;">ISO 37001:2016</a>
                                    <br>
                                    <div class="form-check mb-3" style="margin-left: 30px">
                                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                    
                </div>

            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection

@section('script')
<!-- apexcharts -->

<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

<!-- dashboard init -->

<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>

<script>
 
    function add(){
        window.location.href = "{{ route('assessment_detail')}}";
    }
</script>
@endsection
