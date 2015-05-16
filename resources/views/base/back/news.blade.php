@extends('base.back.base')

@section('extraStyle')
<title>GJM - News</title>
@stop

@section('headerExtraScript')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    height: 500,
    theme: "modern",
    skin: 'light',
    menubar : false,
    plugins: [
        "advlist autolink lists link image charmap preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],

    toolbar: "undo redo | styleselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code preview"
 });
</script>

@stop

@section('pageTitle')
News
@stop

@section('pageSubtitle')
News list
@stop

@section('body')
<div class="breadcrumb-line">
	<ul class="breadcrumb">
		<li><a href="{{ URL('/') }}">Home</a></li>
		<li class="active">News</li>
	</ul>
</div>
<ul class="info-blocks" style="text-align: left;">
	<li class="bg-primary">
		<div class="top-info"><a data-toggle="modal" role="button" href="#iconified_modal">New News</a><small>create new news</small></div>
		<a data-toggle="modal" role="button" href="#iconified_modal"><i class="icon-pencil"></i></a><span class="bottom-info bg-danger"></span>
	</li>
</ul>

@foreach($news as $key)
<div class="panel panel-default">
	<div class="panel-heading">
		<h6 class="panel-title"><i class="icon-bubble4"></i> {{ $key->title }}<small> {{ $key->date }}</small></h6>
		<h6 class="panel-title pull-right">
			<a href="#" data-toggle="modal" data-target="#edit_modal" title="Delete"><i class="icon-pencil text-success edit_news" id="{{ $key->id }}"></i></a>
			&nbsp;
			<a href="#" data-toggle="modal" data-target="#delete_modal" title="Delete"><i class="icon-close text-danger delete_news" id="{{ $key->id }}"></i></a>		
		</h6>
	</div>
	<div class="panel-body" style="max-height: 300px;overflow-y: scroll;">
		{!! $key->body !!}
	</div>
</div>
@endforeach
<div class="text-center block">
{!! $news->render() !!}
</div>

<div id="iconified_modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-pencil"></i> New news</h4>
			</div>
			<form method="post" action="{{URL('news')}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="modal-body with-padding">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Title" name="title">
					</div>
					<textarea class="form-control" placeholder="Enter text ..." name="body"></textarea>
				</div>
				<div class="modal-footer">
					<button class="btn btn-warning" data-dismiss="modal">Close</button>
					<button class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div id="edit_modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-pencil"></i> Edit news</h4>
			</div>
			<form method="post" action="{{URL('news/edit')}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="id" value="1" id="edit_id">
				<div class="modal-body with-padding">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Title" name="title" id="edit_title">
					</div>
					<textarea class="form-control" placeholder="Enter text ..." name="body" id="edit">asd</textarea>
				</div>
				<div class="modal-footer">
					<button class="btn btn-warning" data-dismiss="modal">Close</button>
					<button class="btn btn-primary">Save</button>
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
				<h4 class="modal-title"><i class="icon-warning"></i> Delete news</h4>
			</div>
			<div class="modal-body with-padding">
				delete?
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" data-dismiss="modal">Close</button>
				<a href="#" class="btn btn-primary" id="delete_news">Save</a>
			</div>
		</div>
	</div>
</div>
@stop

@section('footerExtraScript')
<script type="text/javascript">
	$(document).ready(function() {
		$(".delete_news").click(function(event){
			$("#delete_news").prop('href', 'news/delete-' + event.target.id);
		});
		$(".edit_news").click(function(event){
			$.get('news/' + event.target.id + '/id', function( data ) {
				var elem = document.getElementById("edit_id");
				elem.value = data;
			});
			$.get('news/' + event.target.id + '/title', function( data ) {
				var elem = document.getElementById("edit_title");
				elem.value = data;
			});
			$.get('news/' + event.target.id + '/body', function( data ) {
				var editor = tinymce.get('edit'); // use your own editor id here - equals the id of your textarea
				editor.setContent(data);
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