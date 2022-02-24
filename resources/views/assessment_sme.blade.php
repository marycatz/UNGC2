@extends('layouts.master')

@section('title') @lang('translation.Lending') @endsection


@section('content')
@component('components.breadcrumb')
        @slot('li_1')  @endslot
        @slot('title') New Assessment @endslot
    @endcomponent
<div class="row">
    <div >

    <label><h3>Welcome to the ESG assessment!</h3></label>

        

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
                        <span style="color:#6e3b79;"><i>Monitoring, measuring and assessing water consumption within the business operations to ensure sustainable and efficient usage of water.</i></span><br /><br /><br />
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
                            
                        <h5><a style="font-size:22px; font-weight: bold; color:olivedrab">Environmental Dimension > </a><a style="font-size:22px; font-weight: bold;  color:royalblue"> Environmental Management</a></h5><span style="color:#6e3b79;"><i>Business management processes and practices aimed towards the protection and conservation of the environment by reducing negative and harmful impacts on the ecology.</i></span><br /><br /><br />
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
                        <span style="color:#6e3b79;"><i>A framework of business management strategies that are aimed towards the conservation of land, water and living resources to maintain a balanced ecosystem that is sustainable.</i>
</span><br /><br /><br />
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
                        <h5><a style="font-size:22px; font-weight: bold; color:olivedrab">Environmental Dimension > </a><a style="font-size:22px; font-weight: bold;  color:royalblue"> Carbon Foodprint (GHG Emissions)</a></h5><span style="color:#6e3b79;"><i>Measures and strategies to monitor the impact of business activities on its emission of carbon and harmful air pollutants released in the environment.</i></span><br /><br /><br />
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
                        <span style="color:#6e3b79;"><i>Initiatives to actively advocate for a safe, just and fair treatment among all employees within the
organization regardless of race, sex, and disability. Preventing discrimination also includes
implementing measures that encourage and include employees’ diverse backgrounds in the
workplace.</i>
</span><br /><br /><br />
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
                        <span style="color:#6e3b79;"><i>Remuneration guidelines and structures set by an organization to ensure wages and salaries are.</i>
</span><br /><br /><br />
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
