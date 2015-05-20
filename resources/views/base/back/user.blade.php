@extends('base.back.base')

@section('extraStyle')
<title>GJM - Users</title>
@stop

@section('headerExtraScript')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

@stop

@section('pageTitle')
User
@stop

@section('pageSubtitle')
User list
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
		<div class="top-info"><a data-toggle="modal" role="button" href="#iconified_modal">New User</a><small>create new user</small></div>
		<a data-toggle="modal" role="button" href="#iconified_modal"><i class="icon-user-plus2"></i></a><span class="bottom-info bg-danger"></span>
	</li>
</ul>
@endif
<div class="panel panel-default">
	<div class="panel-heading">
		<h6 class="panel-title"><i class="icon-paragraph-justify"></i> Striped &amp; bordered datatable</h6>
	</div>
	<div class="datatable">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Username</th>
					<th>Name</th>
					<th>Phone</th>
					<th>Email</th>
					@if(Auth::user()->role == "admin")
						<th>Action</th>
					@endif
				</tr>
			</thead>
			<tbody>
				@foreach($users as $key)
				<tr>
					<td>{{ $key->id}}</td>
					<td>{{ $key->username }}</td>
					<td>{{ $key->name }}</td>
					<td>{{ $key->hp }}</td>
					<td>{{ $key->email }}</td>
					@if(Auth::user()->role == "admin")
					<td> 
						<div class="pull-right">
							<a href="#" data-toggle="modal" data-target="#edit_modal" title="Delete"><i class="icon-pencil text-success edit_user" id="{{ $key->id }}"></i></a>
							&nbsp;
							<a href="#" data-toggle="modal" data-target="#delete_modal" title="Delete"><i class="icon-close text-danger delete_user" id="{{ $key->id }}"></i></a>		
						</div>
					</td>
					@endif
					
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

<div id="iconified_modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-user-plus2"></i> Create new user</h4>
			</div>
			<form action="{{URL::to('user_create')}}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="modal-body">
				<div class="panel-body">
					<div class="form-group @if ($errors->has('username')) has-error @endif">
						<label class="col-sm-2 control-label">Username: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="username" value="{{ Input::old('username') }}">
							@if ($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('password')) has-error @endif">
						<label class="col-sm-2 control-label">Password: </label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="password">
							@if ($errors->has('username')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('name')) has-error @endif">
						<label class="col-sm-2 control-label">Name: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="name" value="{{ Input::old('name') }}">
							@if ($errors->has('username')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('phone')) has-error @endif">
						<label class="col-sm-2 control-label">Phone: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="phone" value="{{ Input::old('phone') }}">
							@if ($errors->has('username')) <p class="help-block">{{ $errors->first('phone') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('email')) has-error @endif">
						<label class="col-sm-2 control-label">Email: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="email" value="{{ Input::old('email') }}">
							@if ($errors->has('username')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group">
						<label class="col-sm-2 control-label">Role: </label>
						<div class="col-sm-10">
							<label class="radio-inline radio-success">
							<input type="radio" name="roles" class="styled" value="admin">
							Admin</label>
							<label class="radio-inline radio-success">
							<input type="radio" name="roles" class="styled" checked="checked" value="marketing">
							Marketing</label>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Cancel</button>
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
				<h4 class="modal-title"><i class="icon-user-plus2"></i> Edit user</h4>
			</div>
			<form action="{{URL::to('user_update')}}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="edit_id" value="1" id="edit_id" value="{{ Input::old('edit_id') }}">
			<div class="modal-body">
				<div class="panel-body">
					<div class="form-group @if ($errors->has('edit_username')) has-error @endif">
						<label class="col-sm-2 control-label">Username: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" readonly name="edit_username" id="edit_username" value="{{ Input::old('edit_username') }}">
							@if ($errors->has('edit_username')) <p class="help-block">{{ $errors->first('edit_username') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('edit_password')) has-error @endif">
						<label class="col-sm-2 control-label">Password: </label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="edit_password" id="edit_password" value="{{ Input::old('edit_password') }}">
							@if ($errors->has('edit_password')) <p class="help-block">{{ $errors->first('edit_password') }}</p> @endif
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
					<div class="form-group @if ($errors->has('edit_phone')) has-error @endif">
						<label class="col-sm-2 control-label">Phone: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="edit_phone" id="edit_phone" value="{{ Input::old('edit_phone') }}">
							@if ($errors->has('edit_phone')) <p class="help-block">{{ $errors->first('edit_phone') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group @if ($errors->has('edit_email')) has-error @endif">
						<label class="col-sm-2 control-label">Email: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="edit_email" id="edit_email" value="{{ Input::old('edit_email') }}">
							@if ($errors->has('edit_email')) <p class="help-block">{{ $errors->first('edit_email') }}</p> @endif
						</div>
					</div>
					&nbsp;
					<div class="form-group">
						<label class="col-sm-2 control-label">Role: </label>
						<div class="col-sm-10">
							<label class="radio-inline radio-success">
							<input type="radio" name="edit_roles" class="styled" value="admin">
							Admin</label>
							<label class="radio-inline radio-success">
							<input type="radio" name="edit_roles" class="styled" checked="checked" value="marketing">
							Marketing</label>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Cancel</button>
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
				<h4 class="modal-title"><i class="icon-warning"></i> Delete user</h4>
			</div>
			<div class="modal-body with-padding">
				Delete user?
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" data-dismiss="modal"><i class="icon-cancel-circle"></i> Cancel</button>
				<a href="#" class="btn btn-primary" id="delete_user"><i class="icon-remove3"></i> Delete</a>
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
		$(".delete_user").click(function(event){
			$("#delete_user").prop('href', 'user/delete-' + event.target.id);
		});
		$(".edit_user").click(function(event){
			$.get('user/' + event.target.id + '/id', function( data ) {
				var elem = document.getElementById("edit_id");
				elem.value = data;
			});
			$.get('user/' + event.target.id + '/username', function( data ) {
				var elem = document.getElementById("edit_username");
				elem.value = data;
			});
			$.get('user/' + event.target.id + '/password', function( data ) {
				var elem = document.getElementById("edit_password");
				elem.value = data;
			});
			$.get('user/' + event.target.id + '/name', function( data ) {
				var elem = document.getElementById("edit_name");
				elem.value = data;
			});
			$.get('user/' + event.target.id + '/phone', function( data ) {
				var elem = document.getElementById("edit_phone");
				elem.value = data;
			});
			$.get('user/' + event.target.id + '/email', function( data ) {
				var elem = document.getElementById("edit_email");
				elem.value = data;
			});
		});
		$(document).on('focusin', function(e) {
		    if ($(event.target).closest(".mce-window").length) {
		        e.stopImmediatePropagation();
		    }
		});
	});
</script>
@stop