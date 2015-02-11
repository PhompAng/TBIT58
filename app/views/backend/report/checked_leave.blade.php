@extends('backend.report.template')

@section('content')

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th width="130px">First Name</th>
			<th width="130px">Last Name</th>
			<th width="60px">Nickname</th>
			<th>Time</th>
			<th>Sign</th>
		</tr>
	</thead
	<tbody>
		@foreach($attendees as $attendee)
			<tr>
				<td>{{{ str_pad($attendee->id, 6, 0, STR_PAD_LEFT) }}}</td>
				<td>{{{ $attendee->prefix.$attendee->name }}}</td>
				<td>{{{ $attendee->surname }}}</td>
				<td>{{{ $attendee->nickname }}}</td>
				<td></td>
				<td></td>
			</tr>
		@endforeach
	</tbody>
</table>

<br>
<div class="text-center">
	<p>*** จบรายงาน (รายงานฉบับนี้มี {{{ $attendees->count() }}} รายชื่อ) ***</p>
</div>

@stop