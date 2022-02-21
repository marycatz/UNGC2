<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route('landinghome') }}" class="">
                
                    <span class="logo-sm">
                        <img src="{{ asset ('/images/smelogonew.jpeg') }}" alt="" height="55px;">
                    </span>&nbsp;&nbsp;
                    <span class="logo-sm">
                        <img src="{{ asset ('/images/ungcmy-logo-w.png') }}" alt="" height="">
                    </span>
                </a>
            </div>
           
            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <!-- <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="@lang('translation.Search')">
                    <span class="bx bx-search-alt"></span>
                </div>
            </form> -->
              <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect">
                    <h2 style="color:white;margin-top:10px;">ACCESS : SME </h2>
                </button>
            </div>
            <!-- <div class="dropdown dropdown-mega d-none d-lg-block ml-2">
                <button type="button" class="btn header-item waves-effect" >
                    <span key="t-megamenu">Home</span>
                   
                </button>
                
            </div> -->
           

           
          
            <!-- <div class="dropdown dropdown-mega d-none d-lg-block ml-2">
                <button type="button" class="btn header-item waves-effect" >
                    <span key="t-megamenu">Result</span>
                   
                </button>
                
            </div> -->
           
        </div>

        <div class="d-flex">



<div class="dropdown d-inline-block">


    @if(url()->current() == "http://127.0.0.1:8000/pagesme")
        <a class="" style="color:White;" href="{{ route('landinghome') }}">Home2</a>&nbsp;&nbsp;&nbsp;
    @else
    <a class="" style="color:White;" href="{{ route('pagesme') }}">Home2</a>&nbsp;&nbsp;&nbsp;
    @endif
     
    <a class="" style="color:White;" href="{{ route('loginsme') }}">Login</a>
        
    <!-- <a class="dropdown-item text-danger" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">@lang('translation.Logout')</span></a> -->

</div>


</div>
    </div>
</header>
    
