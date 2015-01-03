@extends('backend.report.template')

@section('content')

<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Nickname</th>
			<th>Telephone</th>
			<th>Registered on</th>
		</tr>
	</thead>
	<tbody>
		@foreach($attendees as $attendee)
			<tr>
				<td>{{{ str_pad($attendee->id, 6, 0, STR_PAD_LEFT) }}}</td>
				<td>{{{ $attendee->prefix.$attendee->name }}}</td>
				<td>{{{ $attendee->surname }}}</td>
				<td>{{{ $attendee->nickname }}}</td>
				<td>{{{ $attendee->tel }}}</td>
				<td>{{{ $attendee->created_at }}}</td>
				<?php $last_id = $attendee->id; ?>
			</tr>
		@endforeach
	</tbody>
</table>

<br>
<div class="text-center">
	<p>*** จบรายงาน (รายงานฉบับนี้มี {{{ $attendees->count() }}} รายชื่อ) ***<br>หากต้องการรายงานที่ต่อจากฉบับนี้ ให้กรอก ID เริ่มต้นที่ {{{ $last_id+1 }}}</p>
</div>

@stop