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
    	@if(Session::has('fail'))
    	<div class="alert alert-danger fade in block-inner">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <i class="icon-closeicon"></i> Username atau Password salah.
        </div>
        @endif
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
		<div class="top-info"><a data-toggle="modal" role="button" href="#modal-rollback">Rollback</a><small>rollback data</small></div>
		<a data-toggle="modal" role="button" href="#modal-rollback"><i class="icon-spinner8"></i></a><span class="bottom-info bg-primary"></span>
	</li>
	<li class="bg-success pull-right">
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
				<div class="col-md-2">
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
				<div class="col-md-1">
					<input type="text" class="form-control" placeholder="Stok" name="spec" value="{{ $terms[5] }}">
				</div>
				<div class="col-md-2">
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
		<h6 class="panel-title"><i class="icon-paragraph-justify"></i> Product</h6>
		<h6 class="panel-title pull-right"><i class="icon-info"></i> {{ $jumlah }} data found</h6>
	</div>
	<div class="datatable table-responsive">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Item Code</th>
					<th>Item Name</th>
					<th>Name</th>
					<th>Merek</th>
					<th>Model</th>
					<th>Stok</th>
					<th>Kurs</th>
					<th>Price</th>
					<th>Registrasi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$i = 1;
				?>
				@foreach($products as $key)
				<tr>
					<td>{{ $i }}</td>
					<td>{{ $key->itemcode }}</td>
					<td>{{ $key->itemname }}</td>
					<td>{{ $key->name }}</td>
					<td>{{ $key->merek }}</td>
					<td>{{ $key->model }}</td>
					<td>{{ $key->spec }}</td>
					<td>{{ $key->kurs }}</td>
					<td>{{ $key->price }}</td>
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
@if(isset($new) && isset($update) && isset($salah))
<div id="modal-info" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-sm" style="width: 350px;">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><i class="icon-info"></i> Import result</h4>
			</div>
			<div class="modal-body with-padding">
				<h4><i class="icon-info"></i> Berikut hasil dari import:</h4>
				<ul>
					<li>Data baru : {{ $new }}</li>
					<li>Data terupdate : {{ $update }}</li>
					@if(count($salah) > 0)
					<li>Jumlah data salah : {{ count($salah) }}</li>
					<li>Baris salah : mengandung karakter ilegal
						<ul>
						@foreach($salah as $key)
							<li>{{ $key[0] }} : <b>{{ $key[1] }}</b></li>
						@endforeach
						</ul>
					</li>
					&nbsp
					<li>Karakter ilegal :
						<ul>
							<li><b>'</b> : Petik satu</li>
							<li><b>"</b> : Petik dua</li>
							<li><b>\</b> : Backslash</li>
						</ul>
					</li>
					@endif
				</ul>
			</div>
			<div class="modal-footer">
				<a class="btn btn-warning" href="{{ URL('product') }}"><i class="icon-checkmark"></i> Ok</a>
			</div>
			<div id="progress" style="text-align: center;"></div>
		</div>
	</div>
</div>
@endif

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

<div id="modal-rollback" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-spinner8"></i> Rollback data</h4>
			</div>
			<div class="modal-body with-padding">
			@if($canRollback != 0)
				<h5><i class="icon-warning"></i> Data akan dikembalikan ke terakhir upload, anda yakin?</h5>
			@else
				<h5><i class="icon-warning"></i> Data tidak dapat dikembalikan ke terakhir upload.</h5>
			@endif
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Close</button>
				@if($canRollback != 0)
				<a class="btn btn-primary" href="{{ URL('rollback') }}"><i class="icon-spinner8"></i> Rollback</a>
				@endif
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

	@if (isset($success))
	$(window).load(function(){
        $('#modal-info').modal('show');
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