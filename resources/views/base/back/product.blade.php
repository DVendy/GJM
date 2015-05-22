@extends('base.back.base')

@section('extraStyle')
	<title>GJM - Product</title>
@stop

@section('headerExtraScript')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
@stop

@section('pageTitle')
Product
@stop

@section('pageSubtitle')
Product list
@stop

@section('body')
<div class="breadcrumb-line">
	<ul class="breadcrumb">
		<li><a href="{{ URL('/') }}">Home</a></li>
		<li class="active">Product</li>
	</ul>
</div>
<ul class="info-blocks" style="text-align: left;">
	@if(Auth::user()->role == "admin")
	<li class="bg-primary">
		<div class="top-info"><a data-toggle="modal" role="button" href="#iconified_modal">Import Data</a><small>import excel data</small></div>
		<a data-toggle="modal" role="button" href="#iconified_modal"><i class="icon-download2"></i></a><span class="bottom-info bg-danger"></span>
	</li>
	@endif
	<li class="bg-info">
		<div class="top-info"><a data-toggle="modal" role="button" href="{{ URL('export') }}">Export Data</a><small>export excel data</small></div>
		<a data-toggle="modal" role="button" href="{{ URL('export') }}"><i class="icon-upload2"></i></a><span class="bottom-info bg-success"></span>
	</li>
</ul>
<div class="panel panel-default">
	<div class="panel-heading">
	<h6 class="panel-title panel-trigger"><a data-toggle="collapse" href="#question1"><i class="icon-search3"></i> Search</a></h6>
	</div>
	<div id="question1" class="panel-collapse collapse">
		<form method="post" action="{{URL('product')}}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="panel-body">
			<div class="form-group" style="margin-right: -15px; margin-bottom: 50px;">
				<div class="col-md-1">
					<input type="text" class="form-control" placeholder="Item Code" name="code">
				</div>
				<div class="col-md-2">
					<input type="text" class="form-control" placeholder="Description" name="description">
				</div>
				<div class="col-md-2">
					<input type="text" class="form-control" placeholder="Item Name" name="itemname">
				</div>
				<div class="col-md-1">
					<input type="text" class="form-control" placeholder="Model" name="model">
				</div>
				<div class="col-md-3">
					<input type="text" class="form-control" placeholder="Spec" name="spec">
				</div>
				<div class="col-md-1">
					<input type="text" class="form-control" placeholder="Registrasi" name="registrasi">
				</div>
				<div class="col-md-1">
					<input type="text" class="form-control" placeholder="Kurs" name="kurs">
				</div>
				<div class="col-md-1">
					<input type="text" class="form-control" placeholder="Price" name="price">
				</div>
			</div>
			<div class="form-actions text-right">
	            <button type="submit" class="btn btn-success"><i class="icon-search3"></i> Search</button>
            </div>
		</div>
		</form>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<h6 class="panel-title"><i class="icon-paragraph-justify"></i> Striped &amp; bordered datatable</h6>
	</div>
	<div class="datatable">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Item Code</th>
					<th>Description</th>
					<th>Item Name</th>
					<th>Model</th>
					<th>Spec</th>
					<th>Registrasi</th>
					<th>Kurs</th>
					<th>Price</th>
					<th>Last Updated</th>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $key)
				<tr>
					<td>{{ $key->id}}</td>
					<td>{{ $key->itemcode }}</td>
					<td>{{ $key->description }}</td>
					<td>{{ $key->itemname }}</td>
					<td>{{ $key->model }}</td>
					<td>{{ $key->spec }}</td>
					<td>{{ $key->registrasi }}</td>
					<td>{{ $key->kurs }}</td>
					<td>{{ $key->price }}</td>
					<td>{{ $key->lastupdate }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<div class="text-center block">
{!! $products->render() !!}
</div>
<!-- /striped and bordered datatable inside panel -->
<!-- Condensed datatable inside panel -->

<!-- Iconified modal -->
<div id="iconified_modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-download2"></i> Import Excel Data</h4>
			</div>
			<div class="modal-body with-padding">
				<h5><i class="icon-warning"></i> Sebelum import perhatikan:</h5>
				<ul>
					<li>Hanya terdiri dari satu sheet</li>
					<li>Tidak ada fungsi yang salah</li>
					<li>Tidak ada kolom kosong</li>
				</ul>
				<hr>
				<form action="{{URL::to('import')}}" method="post" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
					<div class="form-group">
						<label>File</label>
						<input name="file" id="file" type="file" class="file btn-success" accept=".xlsx; .xls"></input>
					</div>

				</div>
				<div class="modal-footer">
					<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Cancel</button>
					<button class="btn btn-primary" type="submit" value="Import" id="form-overview"><i class="icon-download2"></i> Import</button>
				</form>
				<div id="progress"></div>
			</div>
		</div>
	</div>
</div>
<!-- /iconified modal -->
@stop

@section('footerExtraScript')
<script type="text/javascript">
	$(document).ready(function() {
		$("#form-overview").click( function(){
			var element = document.getElementById("progress");
			setInterval(
				function(){
					$.get( "processing-status", function( data ) {
						element.innerHTML = data;
					});
				},500
			);
		});
	});
</script>
@stop