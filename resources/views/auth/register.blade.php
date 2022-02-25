@extends('layouts.master-landing')

@section('title')
    @lang('translation.Register')
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
@endsection

    @section('content')

   
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Corporate Registration</h5>
                                            <p>Get your UNGC-MYB account now.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div>
                                    <a href="index">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ URL::asset('assets/images2/home2/corporate2.png') }}" alt=""
                                                    class="rounded-circle" height="100">
                                            </span>
                                        </div>
                                    </a>
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

                                        <!-- div class="mb-3">
                                            <label for="ssmnumber" class="form-label">SSM Number</label>
                                            <input type="text" class="form-control @error('ssmnumber') is-invalid @enderror" id="ssmnumber"
                                            value="{{ old('ssmnumber') }}" name="company_ssm" placeholder="Enter SSM Number" autofocus required>
                                            @error('ssmnumber')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                            
                                        <input type="hidden" name="access_level" value="3">
                                        <input type="hidden" name="access_group" value="company">
                                        <div class="mb-3">
                                            <label for="avatar">SSM File</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control @error('ssmfile') is-invalid @enderror" id="inputGroupFile02" name="ssmfile" autofocus required>
                                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                            </div>
                                            @error('ssmfile')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div -->


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
                                            <label for="industry" class="form-label">Industry</label>
                                            <select class="form-control" id="" name="company_industry">
                                                <option>Agribusiness</option>
                                                <option>Construction</option>
                                                <option>Consultancy & other services</option>
                                                <option>Energy</option>
                                                <option>Food</option>
                                                <option>Healthcare & Pharmaceutical</option>
                                                <option>Hospitality</option>
                                                <option>Manufacturing</option>
                                                <option>Media & ICT</option>
                                                <option>Transport & Logistics</option>
                                             
                                            </select>
                                        </div>
                                        <br>
                                        <h4>Contact Person (Primary Contact)</h4>
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

                                        <!-- <div class="mb-3">
                                            <label for="userdob">Date of Birth</label>
                                            <div class="input-group" id="datepicker1">
                                                <input type="text" class="form-control @error('dob') is-invalid @enderror" placeholder="dd-mm-yyyy"
                                                    data-date-format="dd-mm-yyyy" data-date-container='#datepicker1' data-date-end-date="0d" value="{{ old('dob') }}"
                                                    data-provide="datepicker" name="dob" autofocus required>
                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                @error('dob')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> -->

                                        <!-- <div class="mb-3">
                                            <label for="avatar">Profile Picture</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control @error('avatar') is-invalid @enderror" id="inputGroupFile02" name="avatar" autofocus required>
                                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                            </div>
                                            @error('avatar')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div> -->

                                        <div class="mt-4 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light"
                                                type="submit">Register</button>
                                        </div>

                                        <!-- <div class="mt-4 text-center">
                                            <h5 class="font-size-14 mb-3">Sign up using</h5>

                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#"
                                                        class="social-list-item bg-primary text-white border-primary">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"
                                                        class="social-list-item bg-info text-white border-info">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"
                                                        class="social-list-item bg-danger text-white border-danger">
                                                        <i class="mdi mdi-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> -->

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
                                <p>Already have an account ? <a href="{{ url('login') }}" class="fw-medium text-primary">
                                        Login</a> </p>
                            </div>
                        </div>

                    </div>
                </div>
    
    @endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endsection
