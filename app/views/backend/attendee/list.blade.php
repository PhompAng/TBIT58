@extends('backend.layouts.main')

@section('css')

{{ HTML::style('assets/css/datatables/dataTables.bootstrap.css') }}

@stop

@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="page-header">
				<h1>Attendees List <small>({{$attendees_count}} persons)</small></h1>
			</div>
			<div class="table-responsive">
				<table class="table table-hover table-striped">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Nickname</th>
						<th>Facebook</th>
						<th>Registered on</th>
						<th>Updated on</th>
						<th>Actions</th>
					</thead>
					<tbody>
						@foreach ($attendees as $attendee)
						<tr>
							<td>{{str_pad($attendee->id, 6, 0, STR_PAD_LEFT)}}</td>
							<td><strong>{{$attendee->prefix.$attendee->name}} {{$attendee->surname}}</strong></td>
							<td>{{$attendee->nickname}}</td>
							<td><a href="https://fb.com/{{$attendee->facebook_url}}" class="btn btn-xs btn-default">Profile</a></td>
							<td>{{$attendee->created_at}}</td>
							<td>{{$attendee->updated_at}}</td>
							<td>
								<a href="{{URL::to('/backend/attendee/'.$attendee->id)}}" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-eye-open"></i></a>
								<a href="#" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-print"></i></a>
								<a href="{{URL::to('/backend/attendee/'.$attendee->id.'/edit')}}" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-pencil"></i></a>
								<a href="#" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="actions-btn">
				<a href="{{URL::to('/backend/attendee/create')}}" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-plus"></i> Add new attendee</a>
			</div>
		</div>
	</div>
</div>

@stop

@section('js')

{{ HTML::script('assets/js/jquery.dataTables.js') }}
{{ HTML::script('assets/js/dataTables.bootstrap.js') }}
<script>
	$('.table').dataTable();
</script>
@stop