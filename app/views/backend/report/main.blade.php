@extends('backend.layouts.main')

@section('content')

<div class="row">
	<div class="col-md-4">
		<div class="box">
			<div class="page-header">
				<h4>Attendee List</h4>
			</div>
			<div class="content">
				<div class="alert alert-info">All attendee name and some basic informations</div>
				<a href="{{ URL::to('/backend/report/attendee_list/') }}" class="btn btn-primary btn-block btn-sm">Generate</a>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box">
			<div class="page-header">
				<h4>Classroom name list</h4>
			</div>
			<div class="content">
				<div class="alert alert-info">A list of attendee in the selected room</div>
				{{ Form::open(['url' => '/backend/report/class_list/', 'method' => 'get'])}}
					<div class="form-group">
						{{ Form::select('room', [223, 328, 329, 335], 0, ['class' => 'form-control']) }}
					</div>
					{{ Form::submit('Generate', ['class' => 'btn btn-primary btn-sm btn-block'])}}
				{{ Form::close() }}
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box">
			<div class="page-header">
				<h4>Attending Table</h4>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box">
			<div class="page-header">
				<h4>Health Condition Record</h4>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box">
			<div class="page-header">
				<h4>Food Allergy Record</h4>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box">
			<div class="page-header">
				<h4>Medicine Allergy Record</h4>
			</div>
		</div>
	</div>
</div>

@stop