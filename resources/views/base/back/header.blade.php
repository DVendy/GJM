<!-- Navbar -->
<div class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="#" style="padding: 10px 15px 0px 0px; width: 215px;"><h4><i><img src="images/logo-white.png" alt="Londinium" style="width: 10%;"> GJM</i></h4></a>
        <a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar"><span class="sr-only">Toggle navigation</span><i class="icon-paragraph-justify2"></i></button>
    </div>
</div>
<!-- /navbar -->
<!-- Page container -->
<div class="page-container">

<!-- Sidebar -->
<div class="sidebar collapse">
    <div class="sidebar-content">

        <!-- User dropdown -->
        <div class="user-menu dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <div class="user-info">{{ Auth::user()->name }} <span>{{ Auth::user()->role }}</span></div>
            </a>
            <div class="popup dropdown-menu dropdown-menu-right">
                <div class="thumbnail" style="padding-bottom: 0px;">
                    <div class="caption text-center">
                        <h6 style="text-transform: capitalize;">{{ Auth::user()->name }} <small>{{ Auth::user()->role }} - <span style="text-transform: none;">{{ Auth::user()->email }}</span></small></h6>
                    </div>
                    <hr style="margin-bottom: 0;">
                </div>
                <div class="row">
                    <div class="user-logout col-md-6" style="padding:10px; padding-left: 22px;">
                        <a href="{{ action('AuthController@editProfile') }}" class="btn btn-success"><i class="icon-pencil3"></i> Update</a>
                    </div>
                    <div class="user-logout col-md-6" style="padding:10px;">
                        <a href="{{ action('AuthController@doLogout') }}" class="btn btn-danger"><i class="icon-lock"></i> Logout</a>
                    </div>
                </div>
            </div>
        </div> 
        <!-- /user dropdown -->

        <!-- Main navigation -->
        <ul class="navigation">
            <li @if(Request::is('/')) class="active" @endif ><a href="{{ action('BackController@index') }}"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>  
            <li @if(Request::is('user*')) class="active" @endif ><a href="{{ action('BackController@user') }}"><span>User</span> <i class="icon-user"></i></a></li>  
            <li @if(Request::is('product*')) class="active" @endif ><a href="{{ URL('product') }}"><span>Product</span> <i class="icon-list"></i></a></li>  
            <li @if(Request::is('news*')) class="active" @endif ><a href="{{ action('BackController@news') }}"><span>News</span> <i class="icon-newspaper"></i></a></li>  
            <li @if(Request::is('kurs*')) class="active" @endif ><a href="{{ URL('kurs') }}"><span>Kurs</span> <i class="icon-tag5"></i></a></li>  
        </ul>
        <!-- /main navigation -->
    </div>
</div>
<!-- /sidebar -->

<!-- Page content -->
<div class="page-content">
    <!-- Page header -->
    <div class="page-header">
        <div class="page-title">
            <h3>@section('pageTitle') Dashboard @show<small>@section('pageSubtitle') Statistik @show</small></h3>
        </div>
        @section('headerPanelRight')

        @show
    </div>
    <!-- /page header -->

    @section('breadcrumb')

    @show