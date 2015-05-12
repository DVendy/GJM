@extends('base.back.base')

@section('extraStyle')

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
<ul class="info-blocks" style="text-align: left;">
  <li class="bg-primary">
    <div class="top-info"><a data-toggle="modal" role="button" href="#iconified_modal">Import Data</a><small>import excel data</small></div>
    <a data-toggle="modal" role="button" href="#iconified_modal"><i class="icon-download2"></i></a><span class="bottom-info bg-danger"></span></li>
</ul>
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
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
{!! $products->render() !!}
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
        <form action="{{URL::to('product')}}" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>File</label>
				<input name="file" id="file" type="file" class="file btn-success" accept=".xlsx; .xls"></input>
			</div>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			
      </div>
      <div class="modal-footer">
        <button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Cancel</button>
        <button class="btn btn-primary" type="submit" value="Import" id="form-overview"><i class="icon-download2"></i> Import</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /iconified modal -->
@stop

@section('footerExtraScript')

@stop