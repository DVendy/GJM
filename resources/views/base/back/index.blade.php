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
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title"><i class="icon-user4"></i> Top 10 Marketing</h6>
			</div>
			<div class="datatable">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Login count</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$ii = 1;
					?>
						@foreach($top as $i => $key)
						<tr>
							<td>{{ $ii }}</td>
							<td>{{ $i }}</td>
							<td>{{ $key }}</td>
						</tr>
						<?php
							$ii++;
						?>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title"><i class="icon-database2"></i> Database</h6>
			</div>
			<div class="datatable">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Jumlah data</th>
							<th>Terakhir diperbaharui</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>{{ $product }}</td>
							<td>{{ date_format($update, "l, d F Y") }}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@stop

@section('footerExtraScript')

@stop