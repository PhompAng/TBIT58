@extends('backend.report.template')

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Nickname</th>
            <th>Day {{ $day }} </th>
        </tr>
    </thead>
    <tbody>
        @foreach($attendees as $attendee)
            <tr>
                <td>{{{ str_pad($attendee->attendee_id, 6, 0, STR_PAD_LEFT) }}}</td>
                <td>{{{ $attendee->prefix.$attendee->name }}}</td>
                <td>{{{ $attendee->surname }}}</td>
                <td>{{{ $attendee->nickname }}}</td>
                @if ($day == 1)
                <td>
                    {{ $attendee->day_1_score }}
                </td>
                @endif
                @if ($day == 2)
                <td>
                    {{ $attendee->day_2_score }}
                </td>
                @endif
                @if ($day == 3)
                <td>
                    {{ $attendee->day_3_score }}
                </td>
                @endif
                @if ($day == 4)
                <td>
                    {{ $attendee->day_4_score }}
                </td>
                @endif
                @if ($day == 5)
                <td>
                    {{ $attendee->day_5_score }}
                </td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>

<br>
<div class="text-center">
   <p>max: {{ $max }}, min: {{ $min }}, mean: {{ $mean }}, SD: {{ $sd }}</p>
    <p>*** จบรายงาน (รายงานฉบับนี้มี {{{ $attendees->count() }}} รายชื่อ) ***</p>
</div>

@stop
