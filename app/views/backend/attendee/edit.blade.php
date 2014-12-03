@extends('backend.layouts.main')

@section('content')

{{ Form::model($attendee, array('route' => array('backend.attendee.update', $attendee->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}

<div class="row">
	<div class="col-md-7">
		<div class="box">
			<div class="page-header">
				<h2>Attendee Info</h2>
			</div>
			<div class="form-group">
		    <label class="col-sm-2 control-label">คำนำหน้า</label>
		    <div class="col-sm-10">
		      {{Form::text('prefix', null, array('class' => 'form-control'))}}
		    </div>
		  </div>
			<div class="form-group">
		    <label class="col-sm-2 control-label">ชื่อ</label>
		    <div class="col-sm-10">
		      {{Form::text('name', null, array('class' => 'form-control'))}}
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">นามสกุล</label>
		    <div class="col-sm-10">
		      {{Form::text('surname', null, array('class' => 'form-control'))}}
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">ชื่อเล่น</label>
		    <div class="col-sm-10">
		      {{Form::text('nickname', null, array('class' => 'form-control'))}}
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">E-mail</label>
		    <div class="col-sm-10">
		      {{Form::email('email', null, array('class' => 'form-control'))}}
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">โรงเรียน</label>
		    <div class="col-sm-10">
		      {{Form::text('school', null, array('class' => 'form-control'))}}
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">ระดับชั้น</label>
		    <div class="col-sm-10">
		      {{Form::select('class', array(NULL => 'ไม่ระบุ', 4 => 'ม.4', 5 => 'ม.5', 6 => 'ม.6', 7 => 'ปวช.', 8 => 'อื่นๆ'), null, array('class' => 'form-control'))}}
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
						<td class="text-center">{{Form::checkbox('day_1', 1, Input::old('day_1'))}}</td>
						<td class="text-center">{{Form::checkbox('day_2', 1, Input::old('day_2'))}}</td>
						<td class="text-center">{{Form::checkbox('day_3', 1, Input::old('day_3'))}}</td>
						<td class="text-center">{{Form::checkbox('day_4', 1, Input::old('day_4'))}}</td>
						<td class="text-center">{{Form::checkbox('day_5', 1, Input::old('day_5'))}}</td>
						<td class="text-center">{{Form::checkbox('day_6', 1, Input::old('day_6'))}}</td>
					</tr>
				</tbody>
			</table><br>
			<div class="page-header">
				<h4>Medical Requirement</h4>
			</div>
			<div class="form-group">
		    <label class="col-sm-3 control-label">Health Condition</label>
		    <div class="col-sm-9">
		      {{Form::text('health_condition', null, array('class' => 'form-control'))}}
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Food Allergy</label>
		    <div class="col-sm-9">
		      {{Form::text('food_allergy', null, array('class' => 'form-control'))}}
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Medicine Allergy</label>
		    <div class="col-sm-9">
		      {{Form::text('med_allergy', null, array('class' => 'form-control'))}}
		    </div>
		  </div>
		</div>
	</div>
	<div class="col-md-5">
		<div class="box">
			<div class="page-header">
				<h4>Contact Info <small>(#{{$attendee->id}})</small></h4>
			</div>
			<div class="form-group">
		    <label class="col-sm-4 control-label">เบอร์โทร</label>
		    <div class="col-sm-8">
		      {{Form::text('tel', null, array('class' => 'form-control'))}}
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-4 control-label">เบอร์ผู้ปกครอง</label>
		    <div class="col-sm-8">
		      {{Form::text('parent_tel', null, array('class' => 'form-control'))}}
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-4 control-label">การเดินทาง (มา)</label>
		    <div class="col-sm-8">
		      {{Form::select('trip', array(0 => 'ไม่ระบุ',
																					 1 => 'รถยนต์ส่วนตัว',
																					 2 => 'ผู้ปกครองมาส่ง',
																					 3 => 'รถไฟ',
																					 4 => 'Airport Rail Link (ARL)',
																					 5 => 'รถตู้',
																					 6 => 'รถประจำทาง',
																					 7 => 'รถสองแถว',
																					 8 => 'อื่นๆ'), Input::old('trip'), array('class' => 'form-control'))}}
		    </div>
	  	</div>
		  <div class="form-group">
		    <label class="col-sm-4 control-label">การเดินทาง (กลับ)</label>
		    <div class="col-sm-8">
		      {{Form::select('return_trip', array(0 => 'ไม่ระบุ',
																					 1 => 'รถยนต์ส่วนตัว',
																					 2 => 'ผู้ปกครองมาส่ง',
																					 3 => 'รถไฟ',
																					 4 => 'Airport Rail Link (ARL)',
																					 5 => 'รถตู้',
																					 6 => 'รถประจำทาง',
																					 7 => 'รถสองแถว',
																					 8 => 'อื่นๆ'), Input::old('trip'), array('class' => 'form-control'))}}
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label class="col-sm-4 control-label">Facebook URL</label>
		    <div class="col-sm-8">
				  <div class="input-group">
			      <div class="input-group-addon">https://fb.com/</div>
			      {{Form::text('facebook_url', null, array('class' => 'form-control'))}}
			    </div>
		    </div>
	  	</div><br>
			<div class="text-center">
				<button type="submit" class="btn btn-sm btn-success btn-block"><i class="glyphicon glyphicon-floppy-save"></i> Save</submit>
			</div>
		</div>
	</div>
</div>
{{ Form::close() }}

@stop