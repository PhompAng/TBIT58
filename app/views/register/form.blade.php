@extends('layouts.main')

@section('content')

<section id="register">
	<div class="container">
		<div class="card">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quibusdam dignissimos sequi atque natus, quod commodi, distinctio modi amet enim, hic architecto! Tempora exercitationem optio non temporibus repellat explicabo molestiae repellendus illum aut magnam sapiente rerum sint provident eos placeat ducimus autem voluptas laboriosam mollitia, at expedita odio delectus. Ratione aliquid quo, quos ducimus doloremque fugiat. Nemo fugiat mollitia, quod, nulla quasi quia voluptate quam asperiores, eaque vero doloremque dolores dignissimos id ullam eos beatae labore, in! Voluptatum voluptate velit perspiciatis accusamus mollitia saepe libero unde obcaecati tenetur ab reiciendis iure veritatis minima cumque officiis, quam voluptates. Eius, doloribus, ad.
		</div>
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
					<div class="col-xs-3 col-md-2">
						<div class="form-group @if ($errors->has('prefix')) has-error @endif">
							{{Form::label('prefix', 'คำนำหน้า', array('class' => 'control-label'))}}
							{{Form::text('prefix', Input::old('prefix'), array('class' => 'form-control'))}}
							@if ($errors->has('prefix')) <p class="help-block">{{ $errors->first('prefix') }}</p> @endif
						</div>
					</div>
					<div class="col-xs-9 col-md-4">
						<div class="form-group @if ($errors->has('name')) has-error @endif">
							{{Form::label('name', 'ชื่อ', array('class' => 'control-label'))}}
							{{Form::text('name', Input::old('name'), array('class' => 'form-control'))}}
							@if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group @if ($errors->has('surname')) has-error @endif">
							{{Form::label('surname', 'นามสกุล', array('class' => 'control-label'))}}
							{{Form::text('surname', Input::old('surname'), array('class' => 'form-control'))}}
							@if ($errors->has('surname')) <p class="help-block">{{ $errors->first('surname') }}</p> @endif
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group @if ($errors->has('nickname')) has-error @endif">
							{{Form::label('gender', 'เพศ', array('class' => 'control-label'))}}<br>
							<label class="radio-inline">
							  {{Form::radio('gender', 'M', Input::old('gender'))}} ชาย
							</label>
							<label class="radio-inline">
							  {{Form::radio('gender', 'F', Input::old('gender'))}} หญิง
							</label>
							<label class="radio-inline">
							  {{Form::radio('gender', 'N', Input::old('gender'))}} ไม่ระบุ
							</label>
							@if ($errors->has('gender')) <p class="help-block">{{ $errors->first('gender') }}</p> @endif
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group @if ($errors->has('nickname')) has-error @endif">
							{{Form::label('nickname', 'ชื่อเล่น', array('class' => 'control-label'))}}
							{{Form::text('nickname', Input::old('nickname'), array('class' => 'form-control'))}}
							@if ($errors->has('nickname')) <p class="help-block">{{ $errors->first('nickname') }}</p> @endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group @if ($errors->has('email')) has-error @endif">
							{{Form::label('email', 'อีเมล์', array('class' => 'control-label'))}}
							{{Form::text('email', Input::old('email'), array('class' => 'form-control'))}}
							@if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group @if ($errors->has('tel')) has-error @endif">
							{{Form::label('tel', 'เบอร์โทรศัพท์', array('class' => 'control-label'))}}
							{{Form::text('tel', Input::old('tel'), array('class' => 'form-control', 'placeholder' => 'ตัวเลขเท่านั้น (เช่น 0812345678)'))}}
							@if ($errors->has('tel')) <p class="help-block">{{ $errors->first('tel') }}</p> @endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group @if ($errors->has('parent_tel')) has-error @endif">
							{{Form::label('parent_tel', 'เบอร์ติดต่อผู้ปกครอง', array('class' => 'control-label'))}}
							{{Form::text('parent_tel', Input::old('parent_tel'), array('class' => 'form-control', 'placeholder' => 'ตัวเลขเท่านั้น (เช่น 0812345678)'))}}
							@if ($errors->has('parent_tel')) <p class="help-block">{{ $errors->first('parent_tel') }}</p> @endif
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1">
						<div class="form-group @if ($errors->has('class')) has-error @endif">
							{{Form::label('class', 'ระดับชั้น', array('class' => 'control-label'))}}
							{{Form::select('class', array('4' => 'ม.4', '5' => 'ม.5', '6' => 'ม.6', 'vc' => 'ปวช.', 'other' => 'อื่นๆ'), Input::old('class'), array('class' => 'form-control'))}}
							@if ($errors->has('class')) <p class="help-block">{{ $errors->first('class') }}</p> @endif
						</div>
					</div>
					<div class="col-md-5">
						<div class="form-group @if ($errors->has('school')) has-error @endif">
							{{Form::label('school', 'โรงเรียน', array('class' => 'control-label'))}}
							{{Form::text('school', Input::old('school'), array('class' => 'form-control'))}}
							@if ($errors->has('school')) <p class="help-block">{{ $errors->first('school') }}</p> @endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group @if ($errors->has('facebook_url')) has-error @endif">
							{{Form::label('facebook_url', 'Facebook URL', array('class' => 'control-label'))}}
							{{Form::text('facebook_url', Input::old('facebook_url'), array('class' => 'form-control', 'placeholder' => 'https://www.facebook.com/username'))}}
							@if ($errors->has('facebook_url')) <p class="help-block">{{ $errors->first('facebook_url') }}</p> @endif
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="checkbox">
					    <label>{{Form::checkbox('ent', 1, Input::old('ent'))}} <strong>สมัครรับตรงไอทีลาดกระบังแล้ว (กำลังจะสมัครก็เลือกได้ครับ :3)</strong></label>
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
							{{Form::label('trip', 'การเดินทางมาคณะ', array('class' => 'control-label'))}}
							{{Form::select('trip', array('1' => 'รถยนต์ส่วนตัว',
																						 '2' => 'ผู้ปกครองมาส่ง',
																						 '3' => 'รถไฟ',
																						 '4' => 'Airport Rail Link (ARL)',
																						 '5' => 'รถตู้',
																						 '6' => 'รถประจำทาง',
																						 '7' => 'รถสองแถว',
																						 '8' => 'อื่นๆ'), Input::old('trip'), array('class' => 'form-control'))}}
							@if ($errors->has('trip')) <p class="help-block">{{ $errors->first('trip') }}</p> @endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group @if ($errors->has('return_trip')) has-error @endif">
							{{Form::label('return_trip', 'การเดินกลับจากคณะ', array('class' => 'control-label'))}}
							{{Form::select('return_trip', array('1' => 'รถยนต์ส่วนตัว',
																						 '2' => 'ผู้ปกครองมาส่ง',
																						 '3' => 'รถไฟ',
																						 '4' => 'Airport Rail Link (ARL)',
																						 '5' => 'รถตู้',
																						 '6' => 'รถประจำทาง',
																						 '7' => 'รถสองแถว',
																						 '8' => 'อื่นๆ'), Input::old('return_trip'), array('class' => 'form-control'))}}
							@if ($errors->has('return_trip')) <p class="help-block">{{ $errors->first('return_trip') }}</p> @endif
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group @if ($errors->has('food_allergy')) has-error @endif">
							{{Form::label('food_allergy', 'การแพ้อาหาร', array('class' => 'control-label'))}}
							{{Form::text('food_allergy', Input::old('food_allergy'), array('class' => 'form-control', 'placeholder' => 'ไม่มี'))}}
							@if ($errors->has('food_allergy')) <p class="help-block">{{ $errors->first('food_allergy') }}</p> @endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group @if ($errors->has('med_allergy')) has-error @endif">
							{{Form::label('med_allergy', 'การแพ้ยา', array('class' => 'control-label'))}}
							{{Form::text('med_allergy', Input::old('med_allergy'), array('class' => 'form-control', 'placeholder' => 'ไม่มี'))}}
							@if ($errors->has('med_allergy')) <p class="help-block">{{ $errors->first('med_allergy') }}</p> @endif
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group @if ($errors->has('health_condition')) has-error @endif">
							{{Form::label('health_condition', 'โรคประจำตัว', array('class' => 'control-label'))}}
							{{Form::textarea('health_condition', Input::old('health_condition'), array('class' => 'form-control', 'rows' => '3', 'placeholder' => 'ไม่มี'))}}
							@if ($errors->has('health_condition')) <p class="help-block">{{ $errors->first('health_condition') }}</p> @endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group @if ($errors->has('expect')) has-error @endif">
							{{Form::label('expect', 'สิ่งที่น้องคิดว่าจะได้รับจากโครงการนี้', array('class' => 'control-label'))}}
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
						{{Form::submit('ส่งใบสมัคร', array('class' => 'btn btn-primary btn-block', 'id' => 'register_button'))}}
				</div>
				{{Form::close()}}
			</div><!-- End card structure -->
		</div>
	</div>
</section>
		
						
						
						
						
						

@stop