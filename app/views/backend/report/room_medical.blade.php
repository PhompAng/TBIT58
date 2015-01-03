@extends('backend.report.template')

@section('content')

<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Nickname</th>
			<th>Food Allergy</th>
		</tr>
	</thead>
	<tbody>
		@foreach($food_allergy as $attendee)
			<tr>
				<td>{{{ str_pad($attendee->id, 6, 0, STR_PAD_LEFT) }}}</td>
				<td>{{{ $attendee->prefix.$attendee->name }}}</td>
				<td>{{{ $attendee->surname }}}</td>
				<td>{{{ $attendee->nickname }}}</td>
				<td>{{{ $attendee->food_allergy }}}</td>
			</tr>
		@endforeach
	</tbody>
</table>
<br>
<hr>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Nickname</th>
			<th>Medicine Allergy</th>
		</tr>
	</thead>
	<tbody>
		@foreach($med_allergy as $attendee)
			<tr>
				<td>{{{ str_pad($attendee->id, 6, 0, STR_PAD_LEFT) }}}</td>
				<td>{{{ $attendee->prefix.$attendee->name }}}</td>
				<td>{{{ $attendee->surname }}}</td>
				<td>{{{ $attendee->nickname }}}</td>
				<td>{{{ $attendee->med_allergy }}}</td>
			</tr>
		@endforeach
	</tbody>
</table>
<br>
<hr>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Nickname</th>
			<th>Health Condition</th>
		</tr>
	</thead>
	<tbody>
		@foreach($health_condition as $attendee)
			<tr>
				<td>{{{ str_pad($attendee->id, 6, 0, STR_PAD_LEFT) }}}</td>
				<td>{{{ $attendee->prefix.$attendee->name }}}</td>
				<td>{{{ $attendee->surname }}}</td>
				<td>{{{ $attendee->nickname }}}</td>
				<td>{{{ $attendee->health_condition }}}</td>
			</tr>
		@endforeach
	</tbody>
</table>

<br>
<div class="text-center">
	<p>*** จบรายงาน ***</p>
</div>

@stop