@extends('base.back.base')

@section('extraStyle')
<title>GJM - Update Profile</title>
@stop

@section('headerExtraScript')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
@stop

@section('pageTitle')
Update Profile
@stop

@section('pageSubtitle')
Update profile
@stop

@section('body')
<div class="breadcrumb-line">
	<ul class="breadcrumb">
		<li><a href="{{ URL('/') }}">Home</a></li>
		<li><a href="{{ URL('user') }}">User</a></li>
		<li class="active">Update profile</li>
	</ul>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<h6 class="panel-title"><i class="icon-bubble4"></i> Form elements</h6>
	</div>
	<div class="panel-body">
		<form action="{{URL::to('user_edit')}}" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="form-group @if ($errors->has('username')) has-error @endif">
			<label class="col-sm-2 control-label">Username: </label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="username" value="{{ Auth::user()->username }}" readonly>
			</div>
		</div>
		&nbsp;
		<div class="form-group @if ($errors->has('wrong')) has-error @endif">
			<label class="col-sm-2 control-label">Old password: </label>
			<div class="col-sm-10">
				<input type="password" class="form-control" name="old_password">
				@if ($errors->has('wrong')) <p class="help-block">Wrong password</p> @endif
			</div>
		</div>
		&nbsp;
		<div class="form-group @if ($errors->has('password')) has-error @endif">
			<label class="col-sm-2 control-label">New password: </label>
			<div class="col-sm-10">
				<input type="password" class="form-control" name="password">
				@if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
			</div>
		</div>
		&nbsp;
		<div class="form-group @if ($errors->has('password2')) has-error @endif">
			<label class="col-sm-2 control-label">Retype new password: </label>
			<div class="col-sm-10">
				<input type="password" class="form-control" name="password2">
				@if ($errors->has('password2')) <p class="help-block">{{ $errors->first('password2') }}</p> @endif
			</div>
		</div>
		&nbsp;
		<div class="form-group @if ($errors->has('name')) has-error @endif">
			<label class="col-sm-2 control-label">Name: </label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
				@if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
			</div>
		</div>
		&nbsp;
		<div class="form-group @if ($errors->has('phone')) has-error @endif">
			<label class="col-sm-2 control-label">Phone: </label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="phone" value="{{ Auth::user()->hp }}">
				@if ($errors->has('phone')) <p class="help-block">{{ $errors->first('phone') }}</p> @endif
			</div>
		</div>
		&nbsp;
		<div class="form-group @if ($errors->has('email')) has-error @endif">
			<label class="col-sm-2 control-label">Email: </label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}">
				@if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
			</div>
		</div>
		&nbsp;
		<div class="form-group">
			<label class="col-sm-2 control-label">Role: </label>
			<div class="col-sm-10">
				<label class="radio-inline radio-success">
				@if (Auth::user()->role == "admin")
				<input type="radio" name="roles" checked="checked" class="styled" value="admin">
				Admin</label>
				@else
				<label class="radio-inline radio-success">
					<input type="radio" name="roles" class="styled" checked="checked" value="marketing">
					Marketing</label>
				@endif
			</div>
		</div>
		<div class="form-actions text-right" style="margin-right:15px;">
			<button type="submit" class="btn btn-success"><i class="icon-pencil3"></i> Update</button>
		</div>
		</form>
	</div>
</div>
@stop

@section('footerExtraScript')
<script type="text/javascript">
@if (isset($asd))
	$.jGrowl('Profile successfully updated', { sticky: true, theme: 'growl-success', header: 'Success!' });
@endif
</script>
@stop