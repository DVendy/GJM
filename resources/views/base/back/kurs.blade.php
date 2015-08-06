@extends('base.back.base')

@section('extraStyle')
<title>GJM - Kurs</title>
@stop

@section('headerExtraScript')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script language=Javascript>
 function isNumberKey(txt, evt) {

    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode == 46) {
        //Check if the text already contains the . character
        if (txt.value.indexOf('.') === -1) {
            return true;
        } else {
            return false;
        }
    } else {
        if (charCode > 31
             && (charCode < 48 || charCode > 57))
            return false;
    }
    return true;
}
</script>

<style>
	.c_a{
		margin-bottom: 0px;
	}
	.c_b{
		margin: 20px 0px;
	}
</style>

@stop

@section('pageTitle')
Kurs
@stop

@section('pageSubtitle')
Kurs
@stop

@section('body')
<div class="breadcrumb-line">
	<ul class="breadcrumb">
		<li><a href="{{ URL('/') }}">Home</a></li>
		<li class="active">User</li>
	</ul>
</div>
@if(Auth::user()->role == "admin")
<ul class="info-blocks" style="text-align: left;">
	<li class="bg-primary">
		<div class="top-info"><a data-toggle="modal" role="button" href="#iconified_modal">New Kurs</a><small>create new kurs</small></div>
		<a data-toggle="modal" role="button" href="#iconified_modal"><i class="icon-tag5"></i></a><span class="bottom-info bg-danger"></span>
	</li>
</ul>
@endif
<div class="row">
	<div class="col-md-7">
		<form action="{{URL::to('kurs_update_mass')}}" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="panel panel-default c_a">
			<div class="panel-heading">
				<h6 class="panel-title"><i class="icon-paragraph-justify"></i> Kurs</h6>
			</div>
			<div class="datatable">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>Name</th>
							<th>Value</th>
							@if(Auth::user()->role == "admin")
								<th>Action</th>
							@endif
						</tr>
					</thead>
					<tbody>
						@foreach($kurs as $key)
						<tr>
							<td>{{ $key->id}}</td>
							<td>{{ $key->code }}</td>
							<td>{{ $key->name }}</td>
							<input type="hidden" name="edit_mass_id[]" value="{{ $key->id }}">
							<?php
								$noob = explode(".", $key->index);
								$s = $noob[0];

								$s = wordwrap(strrev($s) , 3 , ',' , true );
								$s = strrev($s);
								$s .= '.'.$noob[1];
							?>
							<td><input type="text" class="form-control i_value" name="edit_mass_value[]" id="edit_mass_value[]" value="{{ $s }}" onkeypress="return isNumberKey(this, event)"></td>
							@if(Auth::user()->role == "admin")
							<td> 
								<div class="pull-right">
									<a href="#" data-toggle="modal" data-target="#edit_modal" title="Delete"><i class="icon-pencil text-success edit_kurs" id="{{ $key->id }}"></i></a>
									&nbsp;
									<a href="#" data-toggle="modal" data-target="#delete_modal" title="Delete"><i class="icon-close text-danger delete_kurs" id="{{ $key->id }}"></i></a>		
								</div>
							</td>
							@endif
							
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
			<button class="btn btn-success pull-right c_b" type="submit" id="form-overview"><i class="icon-pencil4"></i> Update</button>
		</form>
	</div>
</div>

<div id="iconified_modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-tag5"></i> Create kurs</h4>
			</div>
			<form action="{{URL::to('kurs_create')}}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="modal-body">
				<div class="panel-body">
					<div class="form-group @if ($errors->has('code')) has-error @endif">
						<label class="col-sm-2 control-label">Code: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="code" value="{{ Input::old('code') }}">
							@if ($errors->has('code')) <p class="help-block">{{ $errors->first('code') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('name')) has-error @endif">
						<label class="col-sm-2 control-label">Name: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="name" value="{{ Input::old('name') }}">
							@if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('value')) has-error @endif">
						<label class="col-sm-2 control-label">Value: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control i_value" name="value" value="{{ Input::old('value') }}" onkeypress="return isNumberKey(this, event)">
							@if ($errors->has('value')) <p class="help-block">{{ $errors->first('value') }}</p> @endif
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" type="button" data-dismiss="modal"><i class="icon-cancel-circle"></i> Cancel</button>
				<button class="btn btn-primary" type="submit" value="Import" id="form-overview"><i class="icon-download2"></i> Create</button>
			</div>
			</form>
		</div>
	</div>
</div>

<div id="edit_modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-user-plus2"></i> Edit kurs</h4>
			</div>
			<form action="{{URL::to('kurs_update')}}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="edit_id" value="1" id="edit_id" value="{{ Input::old('edit_id') }}">
			<div class="modal-body">
				<div class="panel-body">
					<div class="form-group @if ($errors->has('edit_code')) has-error @endif">
						<label class="col-sm-2 control-label">Code: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="edit_code" id="edit_code" value="{{ Input::old('edit_code') }}">
							@if ($errors->has('edit_code')) <p class="help-block">{{ $errors->first('edit_code') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('edit_name')) has-error @endif">
						<label class="col-sm-2 control-label">Name: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="edit_name" id="edit_name" value="{{ Input::old('edit_name') }}">
							@if ($errors->has('edit_name')) <p class="help-block">{{ $errors->first('edit_name') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('edit_value')) has-error @endif">
						<label class="col-sm-2 control-label">Value: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control i_value" name="edit_value" id="edit_value" value="{{ Input::old('edit_value') }}" onkeypress="return isNumberKey(this, event)">
							@if ($errors->has('edit_value')) <p class="help-block">{{ $errors->first('edit_value') }}</p> @endif
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" type="button" data-dismiss="modal"><i class="icon-cancel-circle"></i> Cancel</button>
				<button class="btn btn-primary" type="submit" value="Import" id="form-overview"><i class="icon-pencil4"></i> Update</button>
			</div>
			</form>
		</div>
	</div>
</div>

<div id="delete_modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-warning"></i> Delete kurs</h4>
			</div>
			<div class="modal-body with-padding">
				Delete kurs?
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Cancel</button>
				<a href="#" class="btn btn-primary" id="delete_kurs"><i class="icon-remove3"></i> Delete</a>
			</div>
		</div>
	</div>
</div>

@stop

@section('footerExtraScript')
<script type="text/javascript">
	@if($errors->has('create'))
	$(window).load(function(){
        $('#iconified_modal').modal('show');
    });
	@endif
	@if($errors->has('update'))
	$(window).load(function(){
        $('#edit_modal').modal('show');
    });
	@endif
	$(document).ready(function() {
		$(".delete_kurs").click(function(event){
			$("#delete_kurs").prop('href', 'kurs/delete-' + event.target.id);
		});
		$(".edit_kurs").click(function(event){
			$.get('kurs/' + event.target.id + '/id', function( data ) {
				var elem = document.getElementById("edit_id");
				elem.value = data;
			});
			$.get('kurs/' + event.target.id + '/code', function( data ) {
				var elem = document.getElementById("edit_code");
				elem.value = data;
			});
			$.get('kurs/' + event.target.id + '/name', function( data ) {
				var elem = document.getElementById("edit_name");
				elem.value = data;
			});
			$.get('kurs/' + event.target.id + '/value', function( data ) {
				var elem = document.getElementById("edit_value");
				elem.value = data;
			});
		});
		$(document).on('focusin', function(e) {
		    if ($(event.target).closest(".mce-window").length) {
		        e.stopImmediatePropagation();
		    }
		});
	});

$('input.i_value').keyup(function(event) {

  // skip for arrow keys
  if(event.which >= 37 && event.which <= 40){
   event.preventDefault();
  }

  $(this).val(function(index, value) {
      value = value.replace(/,/g,'');
      return numberWithCommas(value);
  });
});

function numberWithCommas(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return parts.join(".");
}
</script>
@stop