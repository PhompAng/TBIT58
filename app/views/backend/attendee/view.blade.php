@extends('backend.layouts.main')

@section('content')

<div class="row">
	<div class="col-md-7">
		<div class="box">
			<div class="page-header">
				<h2>Attendee Info <small>(#{{$attendee->id}})</small></h2>
			</div>
			<div class="row">
				<div class="col-sm-5">
					<span class="field-name">ชื่อ</span>
					<div class="field-display">{{$attendee->name}}</div>
				</div>
				<div class="col-sm-7">
					<span class="field-name">นามสกุล</span>
					<div class="field-display">{{$attendee->surname}}</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-5">
					<span class="field-name">ชื่อเล่น</span>
					<div class="field-display">{{$attendee->nickname}}</div>
				</div>
				<div class="col-sm-7">
					<span class="field-name">E-mail</span>
					<div class="field-display">{{$attendee->email}}</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9">
					<span class="field-name">โรงเรียน</span>
					<div class="field-display">{{$attendee->school}}</div>
				</div>
				<div class="col-sm-3">
					<span class="field-name">ชั้น</span>
					<div class="field-display">ม.{{$attendee->class}}</div>
				</div>
			</div><br>
			<div class="page-header">
				<h4>Attending Info</h4>
			</div>
			<table class="table table-bordered table-condensed">
				<thead>
					<th class="text-center">1</th>
					<th class="text-center">2</th>
					<th class="text-center">3</th>
					<th class="text-center">4</th>
					<th class="text-center">5</th>
					<th class="text-center">6</th>
				</thead>
				<tbody>
					<tr>
						<td class="text-center"><i class="text-success glyphicon glyphicon-ok"></i></td>
						<td class="text-center"><i class="text-success glyphicon glyphicon-ok"></i></td>
						<td class="text-center"><i class="text-danger glyphicon glyphicon-remove"></i></td>
						<td class="text-center"><i class="text-muted glyphicon glyphicon-ok"></i></td>
						<td class="text-center"><i class="text-muted glyphicon glyphicon-remove"></i></td>
						<td class="text-center"><i class="text-muted glyphicon glyphicon-ok"></i></td>
					</tr>
				</tbody>
			</table><br>
			<div class="page-header">
				<h4>Medical Requirement</h4>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<td><strong>Condition</strong></td>
						<td>{{$attendee->health_condition or "<span class='text-muted'><i>None</i></span>"}}</td>
					</tr>
					<tr>
						<td><strong>Food</strong></td>
						<td>{{$attendee->food_allergy or "<span class='text-muted'><i>None</i></span>"}}</td>
					</tr>
					<tr>
						<td><strong>Med.</strong></td>
						<td>{{$attendee->med_allergy or "<span class='text-muted'><i>None</i></span>"}}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-5">
		<div class="box">
			<div class="page-header">
				<h4>Contact Info <small>(#{{$attendee->id}})</small></h4>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<span class="field-name">เบอร์โทร</span>
					<div class="field-display">{{$attendee->tel}}</div>
				</div>
				<div class="col-xs-12">
					<span class="field-name">เบอร์ผู้ปกครอง</span>
					<div class="field-display">{{$attendee->parent_tel}}</div>
				</div>
				<div class="col-xs-12">
					<span class="field-name">การเดินทาง (มา)</span>
					<div class="field-display">{{$attendee->trip}}</div>
				</div>
				<div class="col-xs-12">
					<span class="field-name">การเดินทาง (กลับ)</span>
					<div class="field-display">{{$attendee->return_trip}} Train</div>
				</div>
				<div class="col-xs-12">
					<a href="{{$attendee->facebook_url}}" class="btn btn-sm btn-block btn-default"><i class="glyphicon glyphicon-link"></i> Facebook Profile</a>
				</div>
			</div><br>
			<div class="page-header">
				<h4>Actions</h4>
			</div>
			<div class="text-center">
				{{ Form::open(array('route' => array('backend.attendee.destroy', $attendee->id), 'method' => 'delete')) }}
				<a href="{{URL::to('/backend/attendee/'.$attendee->id.'/edit')}}" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				<button type="submit" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</submit>
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>

@stop