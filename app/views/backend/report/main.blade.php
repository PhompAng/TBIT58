@extends('backend.layouts.main')

@section('content')

<div class="row">
	<div class="col-md-4">
		<div class="row">
			<div class="box col-xs-12">
				<div class="page-header">
					<h4>Attendee List</h4>
				</div>
				<div class="content">
					<div class="alert alert-info">All attendee name and some basic informations</div>
					{{ Form::open(['url' => '/backend/report/attendee-list/', 'method' => 'get'])}}
							<div class="col-xs-6">
								{{ Form::text('start', null, ['class' => 'form-control', 'placeholder' => 'Start ID']) }}	
							</div>
							<div class="col-xs-6">
								{{ Form::submit('Generate', ['class' => 'btn btn-primary btn-sm btn-block'])}}
							</div>
					{{ Form::close() }}
				</div>
			</div>
			<div class="box col-xs-12">
				<div class="page-header">
					<h4>Room-based medical report</h4>
				</div>
				<div class="content">
					<div class="alert alert-info">A list of attendee with medical requirement in the selected room</div>
					{{ Form::open(['url' => '/backend/report/medical-class-list/', 'method' => 'get'])}}
						<div class="form-group">
							{{ Form::select('room', [223 => "ห้อง 223", 328 => "ห้อง 328", 329 => "ห้อง 329", 335 => "ห้อง 335"], 0, ['class' => 'form-control']) }}
						</div>
						{{ Form::submit('Generate', ['class' => 'btn btn-primary btn-sm btn-block'])}}
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="row">
			<div class="box col-xs-12">
				<div class="page-header">
					<h4>Room-based attendee list</h4>
				</div>
				<div class="content">
					<div class="alert alert-info">A list of attendee in the selected room</div>
					{{ Form::open(['url' => '/backend/report/class-list/', 'method' => 'get'])}}
						<div class="form-group">
							{{ Form::select('room', [223 => "ห้อง 223", 328 => "ห้อง 328", 329 => "ห้อง 329", 335 => "ห้อง 335"], 0, ['class' => 'form-control']) }}
						</div>
						{{ Form::submit('Generate', ['class' => 'btn btn-primary btn-sm btn-block'])}}
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box">
			<div class="page-header">
				<h4>Day-based check-in report</h4>
			</div>
			<div class="content">
				<div class="alert alert-info">A list of attendee checked-in in the selected day</div>
				{{ Form::open(['url' => '/backend/report/checkin-list/', 'method' => 'get'])}}
						<div class="form-group">
							{{ Form::select('day', [1 => "10 มกราคม 2558", 2 => "11 มกราคม 2558", 3 => "24 มกราคม 2558", 4 => "25 มกราคม 2558", 5 => "31 มกราคม 2558", 6 => "1 กุมภาพันธ์ 2558"], 1, ['class' => 'form-control']) }}
						</div>
						{{ Form::submit('Generate', ['class' => 'btn btn-primary btn-sm btn-block'])}}
					{{ Form::close() }}
			</div>
		</div>
	</div>
</div>

@stop