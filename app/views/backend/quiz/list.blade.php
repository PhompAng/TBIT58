@extends('backend.layouts.main')

@section('css')

{{ HTML::style('assets/css/datatables/dataTables.bootstrap.css') }}

@stop

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="page-header">
                <h1>Quiz System</h1>
            </div>
            <div class="row">
                @if (Session::has('attendee'))
                    <div class="col-xs-12">
                        <div class="alert alert-info">
                            {{ Session::get('attendee')->prefix.Session::get('attendee')->name." ".Session::get('attendee')->surname." (".Session::get('attendee')->nickname.") | Score : ".Session::get('score') }}
                            <a href="#" class="pull-right">ยกเลิก</a>
                        </div>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="col-xs-12">
                        <div class="alert alert-danger">{{ $errors->first() }}</div>
                    </div>
                @endif
                    <div class="col-xs-12">
                        {{Form::open(array('url' => '/backend/quiz/update', 'method' => 'PUT', 'class' => 'form-inline'))}}
                            <div class="form-group">
                                {{Form::text('id', null, array('class' => 'form-control text-center', 'placeholder' => 'Attendee\'s ID'))}}
                            </div>
                            <div class="form-group">
                                {{Form::text('score', null, array('class' => 'form-control text-center', 'placeholder' => 'Attendee\'s score'))}}
                            </div>
                            {{Form::submit('Add Score', array('class' => 'btn btn-primary'))}}
                        {{Form::close()}}
                    </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="box">
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th>
                        <th>D1</th>
                        <th>D2</th>
                        <th>D3</th>
                        <th>D4</th>
                        <th>D5</th>
                        <th>D6</th>
                        <th>Update at</th>
                    </thead>
                    <tbody>
                        @foreach ($attendees as $attendee)
                        <tr>
                            <td>{{str_pad($attendee->attendee_id, 6, 0, STR_PAD_LEFT)}}</td>
                            <td>
                                {{ $attendee->day_1_score or "-" }}
                            </td>
                            <td>
                                {{ $attendee->day_2_score or "-" }}
                            </td>
                            <td>
                                {{ $attendee->day_3_score or "-" }}
                            </td>
                            <td>
                                {{ $attendee->day_4_score or "-" }}
                            </td>
                            <td>
                                {{ $attendee->day_5_score or "-" }}
                            </td>
                            <td>
                                {{ $attendee->day_6_score or "-" }}
                            </td>
                            <td>{{$attendee->updated_at}}</td>
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
