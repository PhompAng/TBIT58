@include('backend.layouts.parts.header')

<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="box login">
                <div class="page-hader">
                    <h2>Yeah!</h2>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Nickname</th>
                            <th>Day 1</th>
                            <th>Day 2</th>
                            <th>Day 3</th>
                            <th>Day 4</th>
                            <th>Day 5</th>
                            <th>Day 6</th>
                        </thead>
                        <tbody>
                            @foreach ($attendees as $attendee)
                            <tr>
                                <td>{{str_pad($attendee->id, 6, 0, STR_PAD_LEFT)}}</td>
                                <td>
                                    <strong>{{$attendee->prefix.$attendee->name}} {{$attendee->surname}}</strong>
                                </td>
                                <td>{{$attendee->nickname}}</td>
                                <td>
                                    {{ $attendee->quiz->day_1_score or "-" }}
                                </td>
                                <td>
                                    {{ $attendee->quiz->day_2_score or "-" }}
                                </td>
                                <td>
                                    {{ $attendee->quiz->day_3_score or "-" }}
                                </td>
                                <td>
                                    {{ $attendee->quiz->day_4_score or "-" }}
                                </td>
                                <td>
                                    {{ $attendee->quiz->day_5_score or "-" }}
                                </td>
                                <td>
                                    {{ $attendee->quiz->day_6_score or "-" }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('backend.layouts.parts.footer')
