@extends('backend.layouts.main')

@section('content')

{{ Form::open(array('method' => 'PUT', 'class' => 'form-horizontal')) }}
<div class="row">
	<div class="col-md-7">
		<div class="box">
			<div class="page-header">
				<h2>Attendee Info</h2>
			</div>
			<div class="form-group">
		    <label class="col-sm-2 control-label">ชื่อ</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="name">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">นามสกุล</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="surname">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">ชื่อเล่น</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="name">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">E-mail</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" name="email">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">โรงเรียน</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="school">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">ระดับชั้น</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="class">
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
						<td class="text-center"><input type="checkbox" name="attending[1]"></td>
						<td class="text-center"><input type="checkbox" name="attending[2]"></td>
						<td class="text-center"><input type="checkbox" name="attending[3]"></td>
						<td class="text-center"><input type="checkbox" name="attending[4]"></td>
						<td class="text-center"><input type="checkbox" name="attending[5]"></td>
						<td class="text-center"><input type="checkbox" name="attending[6]"></td>
					</tr>
				</tbody>
			</table><br>
			<div class="page-header">
				<h4>Medical Requirement</h4>
			</div>
			<div class="form-group">
		    <label class="col-sm-3 control-label">Health Condition</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" name="health_condition">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Food Allergy</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" name="food_allergy">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Medicine Allergy</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" name="med_allergy">
		    </div>
		  </div>
		</div>
	</div>
	<div class="col-md-5">
		<div class="box">
			<div class="page-header">
				<h4>Contact Info</h4>
			</div>
			<div class="form-group">
		    <label class="col-sm-4 control-label">เบอร์โทร</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" name="tel">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-4 control-label">เบอร์ผู้ปกครอง</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" name="perent_tel">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-4 control-label">การเดินทาง (มา)</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" name="trip">
		    </div>
	  	</div>
		  <div class="form-group">
		    <label class="col-sm-4 control-label">การเดินทาง (กลับ)</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" name="return_trip">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label class="col-sm-4 control-label">Facebook URL</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" name="facebook_url">
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