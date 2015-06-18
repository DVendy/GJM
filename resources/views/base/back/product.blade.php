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
		<a data-toggle="modal" role="button" href="#iconified_modal"><i class="icon-download2"></i></a><span class="bottom-info bg-warning"></span>
	</li>
	@endif
	<li class="bg-info">
		<div class="top-info"><a data-toggle="modal" role="button" href="{{ URL('export') }}" id="form-export">Export Data</a><small>export excel data</small></div>
		<a data-toggle="modal" role="button" href="{{ URL('export') }}" id="form-export-2"><i class="icon-upload2"></i></a><span class="bottom-info bg-success"></span>
	</li>
	@if(Auth::user()->role == "admin")
	<li class="bg-danger pull-right">
		<div class="top-info"><a data-toggle="modal" role="button" href="#modal-delete">Empty Data</a><small>delete all data</small></div>
		<a data-toggle="modal" role="button" href="#modal-delete"><i class="icon-close"></i></a><span class="bottom-info bg-primary"></span>
	</li>
	<li class="bg-warning pull-right">
		<div class="top-info"><a data-toggle="modal" role="button" href="{{ URL('getLastUpload') }}">Get Last Upload</a><small>get last uploaded/imported excel</small></div>
		<a data-toggle="modal" role="button" href="{{ URL('getLastUpload') }}"><i class="icon-file-excel"></i></a><span class="bottom-info bg-primary"></span>
	</li>
	@endif
</ul>
<div class="panel panel-info">
	<div class="panel-heading">
	<h6 class="panel-title"><i class="icon-search3"></i> Search</a></h6>
	</div>
		<form method="post" action="{{URL('product')}}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="panel-body">
			<div class="form-group" style="margin-right: -15px; margin-bottom: 50px;">
				<div class="col-md-1">
					<input type="text" class="form-control" placeholder="Item Code" name="code" value="{{ $terms[0] }}">
				</div>
				<div class="col-md-2">
					<input type="text" class="form-control" placeholder="Item Name" name="itemname" value="{{ $terms[2] }}">
				</div>
				<div class="col-md-1">
					<input type="text" class="form-control" placeholder="Name" name="name" value="{{ $terms[3] }}">
				</div>
				<div class="col-md-2">
					<select data-placeholder="Pilih merek" class="form-control" name="merek" value="{{ $terms[8] }}">
						<option selected="selected" value="Merek">Merek (all)</option>
					@foreach($merek as $key)
						<option {{ $terms[8] == $key ? 'selected="selected"' : ''}}>{{ $key }}</option>
					@endforeach
					</select>
				</div>
				<div class="col-md-1">
					<input type="text" class="form-control" placeholder="Model" name="model" value="{{ $terms[4] }}">
				</div>
				<div class="col-md-2">
					<input type="text" class="form-control" placeholder="Spec" name="spec" value="{{ $terms[5] }}">
				</div>
				<div class="col-md-1">
					<input type="text" class="form-control" placeholder="Registrasi" name="registrasi" value="{{ $terms[6] }}">
				</div>
				<div class="col-md-1">
					<input type="text" class="form-control" placeholder="Kurs" name="kurs" value="{{ $terms[7] }}">
				</div>
				<div class="col-md-1">
					<input type="text" class="form-control" placeholder="Price" name="price" value="{{ $terms[1] }}">
				</div>
			</div>
			<div class="form-actions text-right">
	            <a href="{{URL('product')}}" class="btn btn-danger"><i class="icon-close"></i> Reset</a>
	            <button type="submit" class="btn btn-success"><i class="icon-search3"></i> Search</button>
            </div>

		</div>
		</form>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<h6 class="panel-title"><i class="icon-paragraph-justify"></i> Striped &amp; bordered datatable</h6>
		<h6 class="panel-title pull-right"><i class="icon-info"></i> {{ $jumlah }} data found</h6>
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
					<th>Last Updated</th>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $key)
				<tr>
					<td>{{ $key->id}}</td>
					<td>{{ $key->itemcode }}</td>
					<td>{{ $key->itemname }}</td>
					<td>{{ $key->name }}</td>
					<td>{{ $key->merek }}</td>
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
					<li>Tidak ada kolom/baris kosong</li>
				</ul>
				<hr>
				<form action="{{URL::to('import')}}" method="post" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
					<div class="form-group @if ($errors->has('error')) has-error @endif">
						<label>File</label>
						<input name="file" id="file" type="file" class="file btn-success" accept=".xlsx; .xls"></input>
						@if ($errors->has('file')) <p class="help-block">{{ $errors->first('file') }}</p> @endif
					</div>

				</div>
				<div class="modal-footer">
					<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Cancel</button>
					<button class="btn btn-primary" type="submit" value="Import" id="form-overview"><i class="icon-download2"></i> Import</button>
				</form>
			</div>
			<div id="progress" style="text-align: center;"></div>
		</div>
	</div>
</div>
<!-- /iconified modal -->
<div id="modal-delete" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-close"></i> Empty data</h4>
			</div>
			<div class="modal-body with-padding">
				<h5><i class="icon-warning"></i> Data akan dikosongkan, anda yakin?</h5>
				<ul>
					<li>Data pada database akan dihapus</li>
					<li>Pastikan telah melakukan backup/export data sekarang</li>
				</ul>
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Cancel</button>
				<a class="btn btn-primary" href="{{ URL('empty') }}"><i class="icon-close"></i> Empty</a>
			</div>
			<div id="progress" style="text-align: center;"></div>
		</div>
	</div>
</div>
@stop

@section('footerExtraScript')
<script type="text/javascript">
	@if (isset($asd))
		$.jGrowl('Data successfully deleted', { sticky: true, theme: 'growl-success', header: 'Success!' });
	@endif
	@if($errors->has('error'))
	$(window).load(function(){
        $('#iconified_modal').modal('show');
    });
	@endif
	$(document).ready(function() {
		$("#form-overview").click( function(){
			var element = document.getElementById("progress");
			setInterval(
				function(){
					$.get( "processing-status", function( data ) {
						element.innerHTML = "Status : "+data;
					});
				},500
			);
		});
		$("#form-export").click( function(){
			var element = document.getElementById("form-export");
			setInterval(
				function(){
					$.get( "progress_export", function( data ) {
						element.innerHTML = "Status : "+data;
					});
				},500
			);
		});
		$("#form-export-2").click( function(){
			var element = document.getElementById("form-export");
			setInterval(
				function(){
					$.get( "progress_export", function( data ) {
						element.innerHTML = "Status : "+data;
					});
				},500
			);
		});
	});
</script>
@stop