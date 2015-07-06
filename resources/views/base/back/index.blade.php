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
	<div class="col-md-4">
		<div class="panel panel-primary">
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
<div class="tabbable page-tabs">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#activity" data-toggle="tab"><i class="icon-info"></i> Barang baru dalam 6 bulan terakhir <span class="label label-success">{{ $cNew }}</span></a></li>
		<li><a href="#contacts" data-toggle="tab"><i class="icon-warning"></i> Barang yang akan kadaluarsa dalam 6 bulan <span class="label label-warning">{{ $cExpired6 }}</span></a></li>
		<li><a href="#tasks" data-toggle="tab"><i class="icon-close"></i> Barang yang sudah kadaluarsa <span class="label label-danger">{{ $cExpired }}</span></a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active fade in" id="activity">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h6 class="panel-title"><i class="icon-paragraph-justify"></i></h6>
					<h6 class="panel-title pull-right"><i class="icon-info"></i> {{ $cNew }} data found</h6>
				</div>
				<div class="datatable">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Item Code</th>
								<th>Item Name</th>
								<th>Name</th>
								<th>Merek</th>
								<th>Model</th>
								<th>Spec</th>
								<th>Registrasi</th>
								<th>Kurs</th>
								<th>Price</th>
								<th>Created At</th>
								<th>Last Updated</th>
								<th>Expired</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$i = 1;
						?>
							@foreach($new as $key)
							<tr>
								<td>{{ $i}}</td>
								<td>{{ $key->itemcode }}</td>
								<td>{{ $key->itemname }}</td>
								<td>{{ $key->name }}</td>
								<td>{{ $key->merek }}</td>
								<td>{{ $key->model }}</td>
								<td>{{ $key->spec }}</td>
								<td>{{ $key->registrasi }}</td>
								<td>{{ $key->kurs }}</td>
								<td>{{ $key->price }}</td>
								<td>{{ $key->created_at }}</td>
								<td>{{ $key->lastupdate }}</td>
								<td>{{ $key->expired }}</td>
							</tr>
							<?php
								$i++;
							?>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="text-center block">
				{!! $new->render() !!}
			</div>
		</div>
		<div class="tab-pane fade" id="contacts">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h6 class="panel-title"><i class="icon-paragraph-justify"></i></h6>
					<h6 class="panel-title pull-right"><i class="icon-info"></i> {{ $cExpired6 }} data found</h6>
				</div>
				<div class="datatable">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Item Code</th>
								<th>Item Name</th>
								<th>Name</th>
								<th>Merek</th>
								<th>Model</th>
								<th>Spec</th>
								<th>Registrasi</th>
								<th>Kurs</th>
								<th>Price</th>
								<th>Created At</th>
								<th>Last Updated</th>
								<th>Expired</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$i = 1;
						?>
							@foreach($expired6 as $key)
							<tr>
								<td>{{ $i}}</td>
								<td>{{ $key->itemcode }}</td>
								<td>{{ $key->itemname }}</td>
								<td>{{ $key->name }}</td>
								<td>{{ $key->merek }}</td>
								<td>{{ $key->model }}</td>
								<td>{{ $key->spec }}</td>
								<td>{{ $key->registrasi }}</td>
								<td>{{ $key->kurs }}</td>
								<td>{{ $key->price }}</td>
								<td>{{ $key->created_at }}</td>
								<td>{{ $key->lastupdate }}</td>
								<td>{{ $key->expired }}</td>
							</tr>
							<?php
								$i++;
							?>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="text-center block">
			{!! $expired6->render() !!}
			</div>
		</div>
		<div class="tab-pane fade" id="tasks">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h6 class="panel-title"><i class="icon-paragraph-justify"></i></h6>
					<h6 class="panel-title pull-right"><i class="icon-info"></i> {{ $cExpired }} data found</h6>
				</div>
				<div class="datatable">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Item Code</th>
								<th>Item Name</th>
								<th>Name</th>
								<th>Merek</th>
								<th>Model</th>
								<th>Spec</th>
								<th>Registrasi</th>
								<th>Kurs</th>
								<th>Price</th>
								<th>Created At</th>
								<th>Last Updated</th>
								<th>Expired</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$i = 1;
						?>
							@foreach($expired as $key)
							<tr>
								<td>{{ $i}}</td>
								<td>{{ $key->itemcode }}</td>
								<td>{{ $key->itemname }}</td>
								<td>{{ $key->name }}</td>
								<td>{{ $key->merek }}</td>
								<td>{{ $key->model }}</td>
								<td>{{ $key->spec }}</td>
								<td>{{ $key->registrasi }}</td>
								<td>{{ $key->kurs }}</td>
								<td>{{ $key->price }}</td>
								<td>{{ $key->created_at }}</td>
								<td>{{ $key->lastupdate }}</td>
								<td>{{ $key->expired }}</td>
							</tr>
							<?php
								$i++;
							?>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="text-center block">
			{!! $expired->render() !!}
			</div>
		</div>
	</div>
</div>
@stop

@section('footerExtraScript')

@stop