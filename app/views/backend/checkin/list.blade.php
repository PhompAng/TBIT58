@extends('backend.layouts.main')

@section('css')

{{ HTML::style('assets/css/datatables/dataTables.bootstrap.css') }}

@stop

@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="page-header">
				<h1>Check-In System</h1>
			</div>
			<div class="row">
				<div class="col-md-5 col-md-offset-3">
						@if (Session::has('attendee'))
						<div class="alert alert-info">
							{{ Session::get('attendee')->prefix.Session::get('attendee')->name." ".Session::get('attendee')->surname." (".Session::get('attendee')->nickname.")" }}
							<a href="#" class="pull-right">ยกเลิก</a>
						</div>
						@endif
					{{Form::open(array('url' => '/backend/checkin/update', 'method' => 'PUT'))}}
						<div class="form-group">
							{{Form::text('id', null, array('class' => 'form-control text-center', 'placeholder' => 'Attendee\'s ID'))}}
						</div>
						{{Form::submit('Check In', array('class' => 'btn btn-primary btn-block btn-sm'))}}
					{{Form::close()}}
				</div>
			</div>
		</div>

		</div>
	</div>
	<div class="col-xs-12">
		<div class="box">
			<div class="table-responsive">
				<table class="table table-hover table-striped">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Nickname</th>
						<th>D1</th>
						<th>D2</th>
						<th>D3</th>
						<th>D4</th>
						<th>D5</th>
						<th>D6</th>
						<th>Registered on</th>
						<th>Actions</th>
					</thead>
					<tbody>
						@foreach ($attendees as $attendee)
						<tr>
							<td>{{str_pad($attendee->id, 6, 0, STR_PAD_LEFT)}}</td>
							<td><strong>{{$attendee->prefix.$attendee->name}} {{$attendee->surname}}</strong></td>
							<td>{{$attendee->nickname}}</td>
							<td>
								@if ($attendee->day_1)
									<i class="text-muted glyphicon glyphicon-ok"></i>
								@else
									<i class="text-muted glyphicon glyphicon-remove">
								@endif
							</td>
							<td>
								@if ($attendee->day_2)
									<i class="text-muted glyphicon glyphicon-ok"></i>
								@else
									<i class="text-muted glyphicon glyphicon-remove">
								@endif
							</td>
							<td>
								@if ($attendee->day_3)
									<i class="text-muted glyphicon glyphicon-ok"></i>
								@else
									<i class="text-muted glyphicon glyphicon-remove">
								@endif
							</td>
							<td>
								@if ($attendee->day_4)
									<i class="text-muted glyphicon glyphicon-ok"></i>
								@else
									<i class="text-muted glyphicon glyphicon-remove">
								@endif
							</td>
							<td>
								@if ($attendee->day_5)
									<i class="text-muted glyphicon glyphicon-ok"></i>
								@else
									<i class="text-muted glyphicon glyphicon-remove">
								@endif
							</td>
							<td>
								@if ($attendee->day_6)
									<i class="text-muted glyphicon glyphicon-ok"></i>
								@else
									<i class="text-muted glyphicon glyphicon-remove">
								@endif
							</td>
							<td>{{$attendee->created_at}}</td>
							<td>
								{{Form::open(array('route' => array('backend.checkin.update', $attendee->id), 'method' => 'PUT'))}}
								<button type="submit" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-refresh"></i> Toggle</button>
								{{Form::close()}}
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
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