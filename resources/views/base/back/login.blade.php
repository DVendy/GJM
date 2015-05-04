<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ Config::get('global.app_name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    @section('mainStyle')
        {{ Theme::getStyle() }}
    @show

    @section('extraStyle')
        
    @show
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">    
    @section('headerScript')
        {{ Theme::getHeaderScript() }}
    @show
    @section('headerExtraScript')

    @show         
</head>
<body class="full-width page-condensed">
    <!-- Navbar -->
    <div class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Londinium"></a>
        </div>
    </div>
    <!-- /navbar -->
    <!-- Login wrapper -->
    <div class="login-wrapper" style="top:35%;">
        {!! Form::open(['url' => action('AuthController@doLogin'), 'method' => 'post' ]) !!}
            <div class="popup-header">
                <span class="text-semibold">User Login</span>
            </div>
            <div class="well">           
            	<div style="text-align:center;">
            		<img src="{{ asset('images/logo-color.png') }}" alt="Londinium" style=" width:40%; margin:10px auto;">
            	</div>

            	<!-- Throw message here -->
				{!! Helper::throwMessage('messages', null, 'success') !!}
				{!! Helper::throwMessage('errors', null, 'danger') !!}

                <div class="form-group has-feedback">
                    <label>Username</label>
                    {!! Form::text('username', Request::old('username'), ['class' => 'form-control', 'placeholder' => 'Username']) !!}
                    <i class="icon-users form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback">
                    <label>Password</label>
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                    <i class="icon-lock form-control-feedback"></i>
                </div>
                <div class="row form-actions">
                    <div class="col-xs-6">
                        <div class="checkbox checkbox-success">
                            <label>
                            {!! Form::checkbox('remember', 'yes', false,['class' => 'styled']) !!}
                            Remember me</label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-warning pull-right"><i class="icon-menu2"></i> Sign in</button>
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
    <!-- /login wrapper -->
    <!-- Footer -->
    <div class="footer clearfix">
        <div class="pull-left">&copy; 2015. Kreasys</div>
    </div>
    <!-- /footer -->

    @section('footerScript')
        {{ Theme::getFooterScript() }}
    @show
    
    @section('footerExtraScript')

    @show
</body>
</html>