@extends('base.back.base')

@section('extraStyle')
<title>GJM - Home</title>
@stop

@section('headerExtraScript')

@stop

@section('body')
<div class="breadcrumb-line">
	<ul class="breadcrumb">
		<li><a href="{{ URL('/') }}">Home</a></li>
		<li class="active">Dashboard</li>
	</ul>
</div>
@stop

@section('footerExtraScript')

@stop