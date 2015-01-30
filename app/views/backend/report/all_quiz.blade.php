@extends('backend.report.template')

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Nickname</th>
            <th>Day 1</th>
            <th>Day 2</th>
            <th>Day 3</th>
            <th>Day 4</th>
            <th>Day 5</th>
            <th>Score</th>
        </tr>
    </thead>
    <tbody>
        @foreach($attendees as $attendee)
            <tr>
                <td>{{{ str_pad($attendee->attendee_id, 6, 0, STR_PAD_LEFT) }}}</td>
                <td>{{{ $attendee->prefix.$attendee->name }}}</td>
                <td>{{{ $attendee->surname }}}</td>
                <td>{{{ $attendee->nickname }}}</td>
                <td>{{ $attendee->day_1_score }}</td>
                <td>{{ $attendee->day_2_score }}</td>
                <td>{{ $attendee->day_3_score }}</td>
                <td>{{ $attendee->day_4_score }}</td>
                <td>{{ $attendee->day_5_score }}</td>
                <td>{{ $attendee->sum_score }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<br>
<div class="text-center">
    <p>*** จบรายงาน (รายงานฉบับนี้มี {{{ $attendees->count() }}} รายชื่อ) ***</p>
</div>

@stop
