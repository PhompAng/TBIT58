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
				@if (Session::has('attendee'))
					<div class="col-xs-12">
						<div class="alert alert-info">
							{{ Session::get('attendee')->prefix.Session::get('attendee')->name." ".Session::get('attendee')->surname." (".Session::get('attendee')->nickname.") : ห้องเรียน ".Session::get('attendee')->room." | Status : ".Session::get('mode') }}
							<a href="#" class="pull-right">ยกเลิก</a>
						</div>
					</div>
				@endif
				@if ($errors->any())
					<div class="col-xs-12">
						<div class="alert alert-danger">{{ $errors->first() }}</div>
					</div>
				@endif
				{{Form::open(array('url' => '/backend/checkin/update', 'method' => 'PUT'))}}
				<div class="col-md-7">
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<th class="text-center">223 ({{$room1cnt}}/90 คน)</th>
								<th class="text-center">328 ({{$room2cnt}}/50 คน)</th>
								<th class="text-center">329 ({{$room3cnt}}/150 คน)</th>
								<th class="text-center">335 ({{$room4cnt}}/90 คน)</th>
							</thead>
							<tbody>
								<tr>
									<td class="text-center">{{Form::radio('room', 223)}}</td>
									<td class="text-center">{{Form::radio('room', 328)}}</td>
									<td class="text-center">{{Form::radio('room', 329)}}</td>
									<td class="text-center">{{Form::radio('room', 335)}}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-5">
						<div class="form-group">
							{{Form::text('id', null, array('class' => 'form-control text-center', 'placeholder' => 'Attendee\'s ID'))}}
						</div>
						{{Form::submit('Check In', array('class' => 'btn btn-primary btn-block btn-sm'))}}
				</div>
				{{Form::close()}}
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
						<th>Room</th>
						<th>Registered on</th>
					</thead>
					<tbody>
						@foreach ($attendees as $attendee)
						<tr>
							<td>{{str_pad($attendee->id, 6, 0, STR_PAD_LEFT)}}</td>
							<td><strong>{{$attendee->prefix.$attendee->name}} {{$attendee->surname}}</strong></td>
							<td>{{$attendee->nickname}}</td>
							<td>
								@if ($attendee->attend->day_1_check)
									<i class="text-success glyphicon glyphicon-ok"></i>
								@else
									@if ($attendee->day_1)
										<i class="text-muted glyphicon glyphicon-ok"></i>
									@else
										<i class="text-muted glyphicon glyphicon-remove">
									@endif
								@endif
							</td>
							<td>
								@if ($attendee->attend->day_2_check)
									<i class="text-success glyphicon glyphicon-ok"></i>
								@else
									@if ($attendee->day_2)
										<i class="text-muted glyphicon glyphicon-ok"></i>
									@else
										<i class="text-muted glyphicon glyphicon-remove">
									@endif
								@endif
							</td>
							<td>
								@if ($attendee->attend->day_3_check)
									<i class="text-success glyphicon glyphicon-ok"></i>
								@else
									@if ($attendee->day_3)
										<i class="text-muted glyphicon glyphicon-ok"></i>
									@else
										<i class="text-muted glyphicon glyphicon-remove">
									@endif
								@endif
							</td>
							<td>
								@if ($attendee->attend->day_4_check)
									<i class="text-success glyphicon glyphicon-ok"></i>
								@else
									@if ($attendee->day_4)
										<i class="text-muted glyphicon glyphicon-ok"></i>
									@else
										<i class="text-muted glyphicon glyphicon-remove">
									@endif
								@endif
							</td>
							<td>
								@if ($attendee->attend->day_5_check)
									<i class="text-success glyphicon glyphicon-ok"></i>
								@else
									@if ($attendee->day_5)
										<i class="text-muted glyphicon glyphicon-ok"></i>
									@else
										<i class="text-muted glyphicon glyphicon-remove">
									@endif
								@endif
							</td>
							<td>
								@if ($attendee->attend->day_6_check)
									<i class="text-success glyphicon glyphicon-ok"></i>
								@else
									@if ($attendee->day_6)
										<i class="text-muted glyphicon glyphicon-ok"></i>
									@else
										<i class="text-muted glyphicon glyphicon-remove">
									@endif
								@endif
							</td>
							<td>
								{{ $attendee->room or "-" }}
							</td>
							<td>{{$attendee->created_at}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="text-center">
				{{ $attendees->links() }}
			</div>
		</div>
	</div>
</div>

@stop
