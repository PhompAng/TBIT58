@extends('backend.layouts.main')

@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="page-header">
				<h1>Attendee Search</h1>
			</div>
			{{ Form::open(array('id' => 'searchForm', 'class' => 'form-horizontal')) }}
				<div class="form-group">
			    <label class="col-sm-2 control-label">Keyword</label>
			    <div class="col-sm-10">
			      {{Form::text('keyword', null, array('class' => 'form-control'))}}
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Search in</label>
			    <div class="col-sm-10">
			      <label class="radio-inline">
			      	{{Form::radio('in', 'id', Input::old('in'))}} ID
						</label>
						<label class="radio-inline">
						  {{Form::radio('in', 'name', Input::old('in'), ['checked'] )}} Name
						</label>
						<label class="radio-inline">
						  {{Form::radio('in', 'nickname', Input::old('in') )}} Nickname
						</label>
						<label class="radio-inline">
						  {{Form::radio('in', 'tel', Input::old('in') )}} Telephone Number
						</label>
						<label class="radio-inline">
						  {{Form::radio('in', 'fb', Input::old('in') )}} Facebook
						</label>
						<label class="radio-inline">
						  {{Form::radio('in', 'school', Input::old('in') )}} School
						</label>
			    </div>
			  </div>
			  <div class="text-center">
		  		{{ Form::submit('Search', array('class' => 'btn btn-sm btn-primary')) }}
		  	</div>
			{{ Form::close() }}
		</div>
		<div class="box">
			<div class="page-header">
				<h1>Search Result</h1>
			</div>
			<div class="table-responsive">
				<table id="result" class="table table-striped table-bordered">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Nickname</th>
						<th>View</th>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@stop

@section('js')

<script>

$("#searchForm").submit(function(event){
	event.preventDefault();
	var $form = $(this),
  		term = $form.find("input[name='keyword']").val(),
  		source = $form.find("input[name='in']:checked").val(),
  		url = $form.attr( "action" );

  if ($("input[name='in']:checked").length){
  	var posting = $.post(url, {keyword: term, in: source});

	  posting.done(function(result){
	  	$("#result > tbody").html("");
	  	console.log(result);
	  	$.each(result, function(k, v){
	  		if (v['deleted_at'] == null) {
	  			$('#result > tbody').append(
	  			'<tr><td>' + v['id'] + '</td><td>' + v['name'] + ' ' + v['surname'] + '</td><td>' + v['nickname'] + '</td><td><a href="{{URL::to("/backend/attendee")}}/' + v['id'] + '">View Profile</a></td></tr>');
	  		} else {
	  			$('#result > tbody').append(
	  			'<tr><td>' + v['id'] + '</td><td>' + v['name'] + ' ' + v['surname'] + '</td><td>' + v['nickname'] + '</td><td><span class="text-danger">DELETED</span></td></tr>');
	  		};
	  	});
	  });
  } else {
  	alert("Please select where to search!");
  };
});

</script>

@stop
