@extends('layouts.master-sme')

@section('title')
    @lang('translation.Register')
@endsection


 

    @section('content')

       
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="text-primary p-4">
                                            
                                            <h5 class="text-primary">SME Registration</h5>
                                            <p>SME registration is FREE for Lifetime. Some instructions here (TBA)</p>
                                        </div>
                                    </div>
                                    <!-- div class="col-5 align-self-end">
                                        <img src="{{ URL::asset('/assets/images/profile-img.png') }}" alt=""
                                            class="img-fluid">
                                    </div -->
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div>
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ asset ('assets/images2/home2/sme-register.png') }}" alt=""
                                                    class="rounded-circle" height="100">
                                            </span>
                                        </div>
                                </div>
                                <div class="p-2">
                                    
                              
                                
                                    <form method="POST" class="form-horizontal" action="{{ route('register') }}" enctype="multipart/form-data">
                                        @csrf
                                        <h4>Company Info</h4>
                                        <br>
                                        <div class="mb-3">
                                            <label for="companyname" class="form-label">Company Name</label>
                                            <input type="text" class="form-control @error('companyname') is-invalid @enderror" id="companyname"
                                            value="{{ old('companyname') }}" name="company_name" placeholder="Enter Company Name" autofocus required>
                                            @error('companyname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="ssmnumber" class="form-label">SSM Number</label>
                                            <input type="text" class="form-control @error('ssmnumber') is-invalid @enderror" id="ssmnumber"
                                            value="{{ old('ssmnumber') }}" name="company_ssm" placeholder="Enter SSM Number" autofocus required>
                                            @error('ssmnumber')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                            
                                        <input type="hidden" name="access_level" value="2">
                                        <input type="hidden" name="access_group" value="company">
                                        <div class="mb-3">
                                            <label for="avatar">SSM File</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control @error('ssmfile') is-invalid @enderror" id="inputGroupFile02" name="ssmfile" autofocus required>
                                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                            </div>
                                            <i style="font-size:12px">Suruhanjaya Syarikat Malaysia (Companies Commission of Malaysia) - Sijil Pendaftaran Syarikat <b>Form 9</b> or <b>Section 17</b></i> 
                                            @error('ssmfile')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="ssmnumber" class="form-label">SME Corp Registration Number</label>
                                            <input type="text" class="form-control @error('ssmnumber') is-invalid @enderror" id="ssmnumber"
                                            value="{{ old('ssmnumber') }}" name="company_ssm" placeholder="Enter SME Corp Registration Number (optional)" autofocus required>
                                            @error('ssmnumber')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>                                        


                                        <div class="mb-3">
                                            <label for="ssmnumber" class="form-label">State</label>
                                            <select class="form-control" id="" name="company_state">
                                                <option>Johor</option>
                                                <option>Melaka</option>
                                                <option>Negeri Sembilan</option>
                                                <option>Selangor</option>
                                                <option>Kuala Lumpur</option>
                                                <option>Perak</option>
                                                <option>Pahang</option>
                                                <option>Kelantan</option>
                                                <option>Terengganu</option>
                                                <option>Kedah</option>
                                                <option>Perlis</option>
                                                <option>Pulau Pinang</option>
                                                <option>Sabah</option>
                                                <option>Sarawak</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="postcode" class="form-label">Postcode</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" id="username" name="name" autofocus required
                                                placeholder="Enter postcode">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="sector" class="form-label">Sector</label>
                                            <select class="form-control" id="" name="company_industry">
                                                <option>- Please Select -</option>
                                                <option>Services</option>
                                                <option>Manufacturing</option>
                                                <option>Construction</option>
                                                <option>Agriculture, forestry and fishing</option>
                                                <option>Mining and quarrying</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="industry" class="form-label">Industry</label>
                                            <select class="form-control" id="" name="company_industry">
                                                <option>- Please Select -</option>
                                                <option>D 35 : Electricity, gas, steam and air conditioning supply</option>
                                                <option>E 36-39 : Water supply; sewerage, waste management and remediation activities</option>
                                                <option>G 45 : Wholesale & retail trade and repair of motor vehicles & motorcycles</option>
                                                <option>G 46 : Wholesale trade (except motor vehicles & motorcycles)</option>
                                                <option>G 47 : Retail trade (except motor vehicles & motorcycles)</option>
                                                <option>H 49-53 : Transportation and storage (incl. land, water & air transport; warehousing and postal / courier activities)</option>
                                            </select>
                                        </div>
                                        <br>
                                        <h4>Owner Information</h4>
                                        <br>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Full Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" id="username" name="name" autofocus required
                                                placeholder="Enter username">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="username" class="form-label">IC / Passport Number</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" id="username" name="name" autofocus required
                                                placeholder="Enter ic/passport number">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>                                        

                                        <div class="mb-3">
                                            <label for="position" class="form-label">Role/Position in Company</label>
                                            <input type="text" class="form-control @error('position') is-invalid @enderror"
                                            value="{{ old('position') }}" id="position" name="position" autofocus required
                                                placeholder="Enter Position">
                                            @error('position')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <br>
                                        <h4>Login Credentials</h4>
                                        <br>
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="useremail"
                                            value="{{ old('email') }}" name="email" placeholder="Enter email" autofocus required>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                       

                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Password (At least 6 characters)</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="userpassword" name="password"
                                                placeholder="Enter password" autofocus required>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="confirmpassword" class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="confirmpassword" name="password_confirmation"
                                            name="password_confirmation" placeholder="Enter Confirm password" autofocus required>
                                            @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                         

                                        <div class="mt-4 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light"
                                                type="submit">Register</button>
                                        </div>

           

                                        <div class="mt-4 text-center">
                                            <p class="mb-0">By registering you agree to the UNGC-MYB <a href="#"
                                                    class="text-primary">Terms of Use</a></p>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="mt-5 text-center">

                            <div>
                                <p>Already have an account ? <a href="{{ url('loginsme') }}" class="fw-medium text-primary">
                                        Login</a> </p>
                            </div>
                        </div>

                    </div>
                </div>
 
    @endsection
