@extends('backend.layouts.main')

@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="page-header">
				<h1>Attendees List <small>({{$attendees_count}} persons)</small></h1>
			</div>
			<div class="actions-btn">
				<a href="#" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-plus"></i> Add new attendee</a>
				<a href="#" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete selected</a>
			</div>
			<div class="table-responsive">
				<table class="table table-hover table-striped">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Nickname</th>
						<th>Attended</th>
						<th>Facebook</th>
						<th>Registered on</th>
						<th>Actions</th>
					</thead>
					<tbody>
						@foreach ($attendees as $attendee)
						<tr>
							<td>{{$attendee->id}}</td>
							<td><strong>{{$attendee->name}} {{$attendee->surname}}</strong></td>
							<td>{{$attendee->nickname}}</td>
							<td>2 Days</td>
							<td><a href="{{$attendee->facebook_url}}" class="btn btn-xs btn-default">Profile Page</a></td>
							<td>{{$attendee->created_at}}</td>
							<td>
								<a href="{{URL::to('/backend/attendee/'.$attendee->id)}}" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-eye-open"></i></a>
								<a href="#" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-print"></i></a>
								<a href="#" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-pencil"></i></a>
								<a href="#" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<div class="text-center">{{$attendees->links()}}</div>	
			</div>
			<div class="actions-btn">
				<a href="#" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-plus"></i> Add new attendee</a>
				<a href="#" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete selected</a>
			</div>
		</div>
	</div>
</div>

@stop