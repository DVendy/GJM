<!-- Navbar -->
<div class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="#"><h4><i>SysWear 2.0</i></h4></a>
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
    <?php $usr = null; ?>
    @if(Auth::user()->role=='admin' || Auth::user()->role=='employee')
        <div class="user-menu dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                @if(!empty(Auth::user()->employee->photo))
                <img src="{{ Helper::img('employee', Auth::user()->employee->photo, 'small') }}" alt="">
                @endif
                <div class="user-info">{{ Auth::user()->employee->name }} <span>{{ Auth::user()->employee->job_title }}</span></div>
            </a>
            <div class="popup dropdown-menu dropdown-menu-right">
                <div class="thumbnail">
                    <div class="thumb">
                        <img alt="" src="{{ Helper::img('employee', Auth::user()->employee->photo) }}">
                        <div class="thumb-options"><span><a href="#" class="btn btn-icon btn-success"><i class="icon-pencil"></i></a></span></div>
                    </div>
                    <div class="caption text-center">
                        <h6>{{ Auth::user()->employee->name }} <small>{{ Auth::user()->employee->job_title }}</small></h6>
                    </div>
                </div>
                <div class="user-logout">
                    <a href="{{ action('AuthController@logout') }}" class="btn btn-danger"><i class="icon-lock"></i> Logout</a>
                </div>
            </div>
        </div>        
    @else
        <div class="user-menu dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ Helper::img('brand', Auth::user()->brand->photo, 'small') }}" alt="">
                <div class="user-info">{{ Auth::user()->brand->name }} <span>{{ Auth::user()->brand->job_title }}</span></div>
            </a>
            <div class="popup dropdown-menu dropdown-menu-right">
                <div class="thumbnail">
                    <div class="thumb">
                        @if(!empty(Auth::user()->employee->photo))
                        <img alt="" src="{{ Helper::img('brand', Auth::user()->brand->photo) }}">
                        @endif
                        <div class="thumb-options"><span><a href="#" class="btn btn-icon btn-success"><i class="icon-pencil"></i></a></span></div>
                    </div>
                    <div class="caption text-center">
                        <h6>{{ Auth::user()->brand->name }} <small>{{ Auth::user()->brand->job_title }}</small></h6>
                    </div>
                </div>
                <div class="user-logout">
                    <a href="{{ action('AuthController@logout') }}" class="btn btn-danger"><i class="icon-lock"></i> Logout</a>
                </div>
            </div>
        </div>
    @endif
    <!-- /user dropdown -->

        <!-- Main navigation -->
        <ul class="navigation navigation-icons-left">
            <li @if( Request::is('dashboard*') ) class="active" @endif ><a href="{{ action('MainController@index') }}"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
            <li @if( Request::is('employee*') ) class="active" @endif ><a href="{{ action('EmployeeController@index') }}"><span>Karyawan</span> <i class="icon-user4"></i></a></li>
            <li @if( Request::is('brand*') ) class="active" @endif ><a href="{{ action('BrandController@index') }}"><span>Brand</span> <i class="icon-tag2"></i></a></li>
            <li @if( Request::is('material*') ) class="active" @endif ><a href="{{ action('MaterialController@index') }}"><span>Management Bahan</span> <i class="icon-archive"></i></a></li>
            <li @if( Request::is('po*') ) class="active" @endif ><a href="{{ action('PoController@index') }}"><span>Purchase Order</span> <i class="icon-cart"></i></a></li>
            <li @if( Request::is('task*') ) class="active" @endif ><a href="{{ action('TaskController@index') }}"><span>Tugas</span> <i class="icon-numbered-list"></i></a></li>
            <li>
                <a href="#" class="expand"><span>Pengaturan</span> <i class="icon-settings"></i></a>
                <ul>
                    <li><a href="#" class="expand"><span>PO</span></a>
                        <ul>
                            <li><a href="{{ action('FabricController@index') }}">Fabric</a></li>
                            <li><a href="{{ action('TypeController@index') }}">Type</a></li>
                            <li><a href="{{ action('TypeDetailController@index') }}">Type Detail</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="expand"><span>HPP</span></a>
                        <ul>
                            <li><a href="{{ action('FabricController@index') }}">Fabric</a></li>
                            <li><a href="{{ action('TypeController@index') }}">Type</a></li>
                            <li><a href="{{ action('TypeDetailController@index') }}">Type Detail</a></li>
                        </ul>
                    </li>
                </ul>
            </li>            
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