<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
<body  class="sidebar-wide">
    @include('base.back.header')

    @yield('body')

    @include('base.back.footer')

    @section('footerScript')
        {{ Theme::getFooterScript() }}
    @show
    
    @section('footerExtraScript')

    @show
</body>
</html>