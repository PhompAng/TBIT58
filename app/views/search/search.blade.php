@include('backend.layouts.parts.header')

<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="box login">
                <div class="page-header">
                    <h2>Search Result</h2>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Nickname</th>
                        </thead>
                        <tbody>
                            @foreach ($attendees as $attendee)
                            <tr>
                                <td>{{str_pad($attendee->id, 6, 0, STR_PAD_LEFT)}}</td>
                                <td>
                                    <strong>{{$attendee->prefix.$attendee->name}} {{$attendee->surname}}</strong>
                                </td>
                                <td>{{$attendee->nickname}}</td>
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
