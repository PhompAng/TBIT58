@extends('backend.layouts.main')

@section('content')

<div class="row">
	<div class="col-md-7">
		<div class="box">
			<div class="page-header">
				<h2>Attendee Info <small>(#{{{str_pad($attendee->id, 6, 0, STR_PAD_LEFT)}}})</small></h2>
			</div>
			<div class="row">
				<div class="col-sm-5">
					<span class="field-name">ชื่อ</span>
					<div class="field-display">{{{$attendee->prefix.$attendee->name}}}</div>
				</div>
				<div class="col-sm-7">
					<span class="field-name">นามสกุล</span>
					<div class="field-display">{{{$attendee->surname}}}</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-5">
					<span class="field-name">ชื่อเล่น</span>
					<div class="field-display">{{{$attendee->nickname}}}</div>
				</div>
				<div class="col-sm-7">
					<span class="field-name">E-mail</span>
					<div class="field-display">{{{$attendee->email}}}</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9">
					<span class="field-name">โรงเรียน</span>
					<div class="field-display">{{{$attendee->school}}}</div>
				</div>
				<div class="col-sm-3">
					<span class="field-name">ชั้น</span>
					<div class="field-display">
						@if ($attendee->class == 7)
							ปวช.
						@elseif ($attendee->class == 8)
							อื่นๆ
						@elseif ($attendee->class == 0)
							-
						@else
							ม.{{{$attendee->class}}}
						@endif
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<span class="field-name">สมัครรับตรง</span>
					<div class="field-display">
						@if ($attendee->direct_ent)
							<span class="text-success">True</span>
						@else
							<span class="text-muted">False</span>
						@endif
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="well">{{{$attendee->expect}}}</div>
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
						<td class="text-center">
							@if ($attendee->day_1)
								<i class="text-muted glyphicon glyphicon-ok"></i>
							@else
								<i class="text-muted glyphicon glyphicon-remove">
							@endif
						</td>
						<td class="text-center">
							@if ($attendee->day_2)
								<i class="text-muted glyphicon glyphicon-ok"></i>
							@else
								<i class="text-muted glyphicon glyphicon-remove">
							@endif
						</td>
						<td class="text-center">
							@if ($attendee->day_3)
								<i class="text-muted glyphicon glyphicon-ok"></i>
							@else
								<i class="text-muted glyphicon glyphicon-remove">
							@endif
						</td>
						<td class="text-center">
							@if ($attendee->day_4)
								<i class="text-muted glyphicon glyphicon-ok"></i>
							@else
								<i class="text-muted glyphicon glyphicon-remove">
							@endif
						</td>
						<td class="text-center">
							@if ($attendee->day_5)
								<i class="text-muted glyphicon glyphicon-ok"></i>
							@else
								<i class="text-muted glyphicon glyphicon-remove">
							@endif
						</td>
						<td class="text-center">
							@if ($attendee->day_6)
								<i class="text-muted glyphicon glyphicon-ok"></i>
							@else
								<i class="text-muted glyphicon glyphicon-remove">
							@endif
						</td>
					</tr>
				</tbody>
			</table><br>
			<div class="page-header">
				<h4>Medical Requirement</h4>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<td><strong>Health Cond.</strong></td>
						<td>{{{$attendee->health_condition or "<span class='text-muted'><i>None</i></span>"}}}</td>
					</tr>
					<tr>
						<td><strong>Food</strong></td>
						<td>{{{$attendee->food_allergy or "<span class='text-muted'><i>None</i></span>"}}}</td>
					</tr>
					<tr>
						<td><strong>Med.</strong></td>
						<td>{{{$attendee->med_allergy or "<span class='text-muted'><i>None</i></span>"}}}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-5">
		<div class="box">
			<div class="page-header">
				<h4>Contact Info</h4>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<span class="field-name">เบอร์โทร</span>
					<div class="field-display">{{{$attendee->tel}}}</div>
				</div>
				<div class="col-xs-12">
					<span class="field-name">เบอร์ผู้ปกครอง</span>
					<div class="field-display">{{{$attendee->parent_tel}}}</div>
				</div>
				<div class="col-xs-12">
					<span class="field-name">การเดินทาง (มา)</span>
					<div class="field-display">
						<?php $trip = array(0 => 'ไม่ระบุ',
								   					 1 => 'รถยนต์ส่วนตัว',
								   					 2 => 'ผู้ปกครองมาส่ง',
								   					 3 => 'รถไฟ',
								   					 4 => 'Airport Rail Link (ARL)',
								   					 5 => 'รถตู้',
								   					 6 => 'รถประจำทาง',
								   					 7 => 'รถสองแถว',
								   					 8 => 'อื่นๆ') ?>
						{{{$trip[$attendee->trip]}}}
					</div>
				</div>
				<div class="col-xs-12">
					<span class="field-name">การเดินทาง (กลับ)</span>
					<div class="field-display">{{{$trip[$attendee->return_trip]}}}</div>
				</div>
				<div class="col-xs-12">
					<a href="https://fb.com/{{{$attendee->facebook_url}}}" class="btn btn-sm btn-block btn-default"><i class="glyphicon glyphicon-link"></i> Facebook Profile</a>
				</div>
			</div><br>
			<div class="page-header">
				<h4>Actions</h4>
			</div>
			<div class="text-center">
				{{ Form::open(array('route' => array('backend.attendee.destroy', $attendee->id), 'method' => 'delete')) }}
				<a href="{{{URL::to('/backend/attendee/'.$attendee->id.'/edit')}}}" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				<button type="submit" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</submit>
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>

@stop