@extends('layouts.main')

@section('content')

<section id="register">
	<div class="container">
		<div class="card">
			<div class="row">
				<div class="col-xs-12 text-center"><img src="{{URL::to('/assets/text/heading_register.svg')}}" class="section-heading" alt=""></div>
				{{Form::open(array('url' => 'register/', 'method' => 'post'))}}
				<div class="row">
					<div class="col-xs-12">
						<div class="page-header">
							<h2>ข้อมูลส่วนตัว</h2>
						</div>
					</div>
					<div class="col-sm-3 col-md-2">
						<div class="form-group @if ($errors->has('prefix')) has-error @endif">
							<label for="prefix" class="control-label">คำนำหน้า<span class="text-danger">*</span></label>
							{{Form::text('prefix', Input::old('prefix'), array('class' => 'form-control'))}}
							@if ($errors->has('prefix')) <p class="help-block">{{ $errors->first('prefix') }}</p> @endif
						</div>
					</div>
					<div class="col-sm-9 col-md-4">
						<div class="form-group @if ($errors->has('name')) has-error @endif">
							<label for="name" class="control-label">ชื่อ<span class="text-danger">*</span></label>
							{{Form::text('name', Input::old('name'), array('class' => 'form-control'))}}
							@if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group @if ($errors->has('surname')) has-error @endif">
							<label for="surname" class="control-label">นามสกุล<span class="text-danger">*</span></label>
							{{Form::text('surname', Input::old('surname'), array('class' => 'form-control'))}}
							@if ($errors->has('surname')) <p class="help-block">{{ $errors->first('surname') }}</p> @endif
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group @if ($errors->has('gender')) has-error @endif">
							<label for="gender" class="control-label">เพศ<span class="text-danger">*</span></label><br>
							<label class="radio-inline">
							  {{Form::radio('gender', 1, Input::old('gender'))}} ชาย
							</label>
							<label class="radio-inline">
							  {{Form::radio('gender', 2, Input::old('gender'))}} หญิง
							</label>
							<label class="radio-inline">
							  {{Form::radio('gender', 0, Input::old('gender'))}} ไม่ระบุ
							</label>
							@if ($errors->has('gender')) <p class="help-block">{{ $errors->first('gender') }}</p> @endif
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group @if ($errors->has('nickname')) has-error @endif">
							<label for="nickname" class="control-label">ชื่อเล่น</label>
							{{Form::text('nickname', Input::old('nickname'), array('class' => 'form-control'))}}
							@if ($errors->has('nickname')) <p class="help-block">{{ $errors->first('nickname') }}</p> @endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group @if ($errors->has('email')) has-error @endif">
							<label for="email" class="control-label">อีเมล์<span class="text-danger">*</span></label>
							{{Form::text('email', Input::old('email'), array('class' => 'form-control'))}}
							@if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group @if ($errors->has('tel')) has-error @endif">
							<label for="tel" class="control-label">เบอร์โทรศัพท์</label>
							{{Form::text('tel', Input::old('tel'), array('class' => 'form-control', 'placeholder' => 'ตัวเลขเท่านั้น (เช่น 0812345678)'))}}
							@if ($errors->has('tel')) <p class="help-block">{{ $errors->first('tel') }}</p> @endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group @if ($errors->has('parent_tel')) has-error @endif">
							<label for="parent_tel" class="control-label">เบอร์ติดต่อผู้ปกครอง<span class="text-danger">*</span></label>
							{{Form::text('parent_tel', Input::old('parent_tel'), array('class' => 'form-control', 'placeholder' => 'ตัวเลขเท่านั้น (เช่น 0812345678)'))}}
							@if ($errors->has('parent_tel')) <p class="help-block">{{ $errors->first('parent_tel') }}</p> @endif
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<div class="form-group @if ($errors->has('class')) has-error @endif">
							<label for="class" class="control-label">ระดับชั้น</label>
							{{Form::select('class', array(NULL => 'ไม่ระบุ', 4 => 'ม.4', 5 => 'ม.5', 6 => 'ม.6', 7 => 'ปวช.', 8 => 'อื่นๆ'), Input::old('class'), array('class' => 'form-control'))}}
							@if ($errors->has('class')) <p class="help-block">{{ $errors->first('class') }}</p> @endif
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group @if ($errors->has('school')) has-error @endif">
							<label for="school" class="control-label">โรงเรียน</label>
							{{Form::text('school', Input::old('school'), array('class' => 'form-control'))}}
							@if ($errors->has('school')) <p class="help-block">{{ $errors->first('school') }}</p> @endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group @if ($errors->has('facebook_url')) has-error @endif">
							<label for="facebook_url" class="control-label">Facebook URL </label>
					    <div class="input-group">
					      <div class="input-group-addon">https://www.facebook.com/</div>
					      {{Form::text('facebook_url', Input::old('facebook_url'), array('class' => 'form-control', 'placeholder' => 'username'))}}
					    </div>
					    <p class="help-block">เปิดหน้าโปรไฟล์ของน้อง แล้วคัดลอก URL มาวางได้เลยครับ</p>
					  </div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="checkbox">
					    <label>{{Form::checkbox('direct_ent', 1, Input::old('direct_ent'))}} <strong>สมัครรับตรงไอทีลาดกระบังแล้ว (กำลังจะสมัครก็เลือกได้ครับ :3)</strong></label>
					  </div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="page-header">
							<h2>ข้อมูลเพิ่มเติม</h2>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group @if ($errors->has('trip')) has-error @endif">
							<label for="trip" class="control-label">การเดินทางมา</label>
							{{Form::select('trip', array(0 => 'ไม่ระบุ',
																					 1 => 'รถยนต์ส่วนตัว',
																					 2 => 'ผู้ปกครองมาส่ง',
																					 3 => 'รถไฟ',
																					 4 => 'Airport Rail Link (ARL)',
																					 5 => 'รถตู้',
																					 6 => 'รถประจำทาง',
																					 7 => 'รถสองแถว',
																					 8 => 'อื่นๆ'), Input::old('trip'), array('class' => 'form-control'))}}
							@if ($errors->has('trip')) <p class="help-block">{{ $errors->first('trip') }}</p> @endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group @if ($errors->has('return_trip')) has-error @endif">
							<label for="return_trip" class="control-label">การเดินทางกลับ</label>
							{{Form::select('return_trip', array(0 => 'ไม่ระบุ',
																								  1 => 'รถยนต์ส่วนตัว',
																									2 => 'ผู้ปกครองมารับ',
																									3 => 'รถไฟ',
																									4 => 'Airport Rail Link (ARL)',
																									5 => 'รถตู้',
																									6 => 'รถประจำทาง',
																									7 => 'รถสองแถว',
																									8 => 'อื่นๆ'), Input::old('return_trip'), array('class' => 'form-control'))}}
							@if ($errors->has('return_trip')) <p class="help-block">{{ $errors->first('return_trip') }}</p> @endif
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group @if ($errors->has('food_allergy')) has-error @endif">
							<label for="food_allergy" class="control-label">การแพ้อาหาร</label>
							{{Form::text('food_allergy', Input::old('food_allergy'), array('class' => 'form-control', 'placeholder' => 'ไม่มี'))}}
							@if ($errors->has('food_allergy')) <p class="help-block">{{ $errors->first('food_allergy') }}</p> @endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group @if ($errors->has('med_allergy')) has-error @endif">
							<label for="med_allergy" class="control-label">การแพ้ยา</label>
							{{Form::text('med_allergy', Input::old('med_allergy'), array('class' => 'form-control', 'placeholder' => 'ไม่มี'))}}
							@if ($errors->has('med_allergy')) <p class="help-block">{{ $errors->first('med_allergy') }}</p> @endif
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group @if ($errors->has('health_condition')) has-error @endif">
							<label for="health_condition" class="control-label">โรคประจำตัว</label>
							{{Form::textarea('health_condition', Input::old('health_condition'), array('class' => 'form-control', 'rows' => '3', 'placeholder' => 'ไม่มี'))}}
							@if ($errors->has('health_condition')) <p class="help-block">{{ $errors->first('health_condition') }}</p> @endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group @if ($errors->has('expect')) has-error @endif">
							<label for="expect" class="control-label">สิ่งที่น้องคิดว่าจะได้รับจากโครงการนี้</label>
							{{Form::textarea('expect', Input::old('expect'), array('class' => 'form-control', 'rows' => '3'))}}
							@if ($errors->has('expect')) <p class="help-block">{{ $errors->first('expect') }}</p> @endif
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<strong>เลือกวันที่น้องสะดวกมาติว</strong> <span class="text-muted">(เลือกไม่มาแต่จะมาก็ได้นะ เผื่อเปลี่ยนแผน)</span>
						<div class="table-responive">
							<table class="table table-bordered">
								<thead>
									<th class="text-center">วันที่ 1</th>
									<th class="text-center">วันที่ 2</th>
									<th class="text-center">วันที่ 3</th>
									<th class="text-center">วันที่ 4</th>
									<th class="text-center">วันที่ 5</th>
									<th class="text-center">วันที่ 6</th>
								</thead>
								<tbody>
									<tr>
										<td class="text-center">{{Form::checkbox('day_1', 1, Input::old('day_1'))}}<br><span class="text-muted">(10 ม.ค. 58)</span></td>
										<td class="text-center">{{Form::checkbox('day_2', 1, Input::old('day_2'))}}<br><span class="text-muted">(11 ม.ค. 58)</span></td>
										<td class="text-center">{{Form::checkbox('day_3', 1, Input::old('day_3'))}}<br><span class="text-muted">(24 ม.ค. 58)</span></td>
										<td class="text-center">{{Form::checkbox('day_4', 1, Input::old('day_4'))}}<br><span class="text-muted">(25 ม.ค. 58)</span></td>
										<td class="text-center">{{Form::checkbox('day_5', 1, Input::old('day_5'))}}<br><span class="text-muted">(31 ม.ค. 58)</span></td>
										<td class="text-center">{{Form::checkbox('day_6', 1, Input::old('day_6'))}}<br><span class="text-muted">(1 ก.พ. 58)</span></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						{{Form::submit('ส่งใบลงทะเบียน', array('class' => 'btn btn-primary btn-block btn-register'))}}
					</div>
				</div>
				{{Form::close()}}
			</div><!-- End card structure -->
		</div>
	</div>
</section>

@stop

@section('js')
	<script>
	$('.btn-register').click(function(){
		$('.btn-register').addClass('disabled');
		$('.btn-register').attr('value', 'กำลังส่งข้อมูล...');
	});

	$(document).ready(function() {
	  $(window).keydown(function(event){
	    if(event.keyCode == 13) {
	      event.preventDefault();
	      return false;
	    }
	  });
	});
	</script>
@stop