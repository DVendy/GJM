<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Syswear 2.0</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    @section('mainStyle')
        {{ Theme::getStyle() }}
    @show
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>       
    @section('extraStyle')
        
    @show
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">    
    @section('headerScript')
        {{ Theme::getHeaderScript() }}
    @show
    @section('headerExtraScript')

    @show         
</head>
<body  class="sidebar-narrow">
    @include('main.header')

    @yield('body')

    @include('main.footer')

    @section('footerScript')
        {{ Theme::getFooterScript() }}
    @show
    
    @section('footerExtraScript')

    @show
</body>
</html>