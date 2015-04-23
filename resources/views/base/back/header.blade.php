<!-- Navbar -->
<div class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="#"><h4><i>{{ Config::get('global.app_name') }}</i></h4></a>
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
                <div class="user-info">{{ Auth::user()->name }} <span>{{ Auth::user()->name }}</span></div>
            </a>
            <div class="popup dropdown-menu dropdown-menu-right">
                <div class="thumbnail">
                    <div class="thumb">
                        <div class="thumb-options"><span><a href="#" class="btn btn-icon btn-success"><i class="icon-pencil"></i></a></span></div>
                    </div>
                    <div class="caption text-center">
                        <h6>{{ Auth::user()->name }} <small>{{ Auth::user()->name }}</small></h6>
                    </div>
                </div>
                <div class="user-logout" style="padding:10px; text-align:center;">
                    <a href="{{ action('AuthController@doLogout') }}" class="btn btn-danger"><i class="icon-lock"></i> Logout</a>
                </div>
            </div>
        </div> 
        <!-- /user dropdown -->

        <!-- Main navigation -->
        <ul class="navigation">
            <li @if(Request::is('/')) class="active" @endif ><a href="{{ action('BackController@index') }}"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>  
            <li @if(Request::is('user*')) class="active" @endif ><a href="{{ action('BackController@user') }}"><span>User</span> <i class="icon-user"></i></a></li>  
            <li @if(Request::is('product*')) class="active" @endif ><a href="{{ action('BackController@product') }}"><span>Product</span> <i class="icon-list"></i></a></li>  
            <li @if(Request::is('news*')) class="active" @endif ><a href="{{ action('BackController@news') }}"><span>News</span> <i class="icon-newspaper"></i></a></li>  
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