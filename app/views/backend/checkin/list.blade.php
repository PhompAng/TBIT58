@extends('backend.layouts.main')

@section('css')

{{ HTML::style('assets/css/datatables/dataTables.bootstrap.css') }}

@stop

@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="page-header">
				<h1>Check-In System</h1>
			</div>
			<div class="row">
				@if (Session::has('attendee'))
					<div class="col-xs-12">
						<div class="alert alert-info">
							{{ Session::get('attendee')->prefix.Session::get('attendee')->name." ".Session::get('attendee')->surname." (".Session::get('attendee')->nickname.") : ห้องเรียน ".Session::get('attendee')->room." | Status : ".Session::get('mode') }}
							<a href="#" class="pull-right">ยกเลิก</a>
						</div>
					</div>
				@endif
				@if ($errors->any())
					<div class="col-xs-12">
						<div class="alert alert-danger">{{ $errors->first() }}</div>
					</div>
				@endif
				{{Form::open(array('url' => '/backend/checkin/update', 'method' => 'PUT'))}}
				<div class="col-md-7">
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<th class="text-center">ห้อง</th>
								<th class="text-center">223</th>
								<th class="text-center">328</th>
								<th class="text-center">329</th>
								<th class="text-center">335</th>
							</thead>
							<tbody>
								<tr>
									<td class="text-center"><strong>จำนวน</strong></td>
									<td class="text-center">{{$room1cnt}}/90 คน</td>
									<td class="text-center">{{$room3cnt}}/150 คน</td>
									<td class="text-center">{{$room3cnt}}/150 คน</td>
									<td class="text-center">{{$room4cnt}}/90 คน</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-5">
						<div class="form-group">
							<input type="text" name="attnID" class="form-control text-center" placeholder="Attendee's ID">
						</div>
						<button type="button" id="attnSearch" class="btn btn-primary btn-block btn-sm">Check in</button>
						
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
						<th>Name</th>
						<th>Nickname</th>
						<th>D1</th>
						<th>D2</th>
						<th>D3</th>
						<th>D4</th>
						<th>D5</th>
						<th>D6</th>
						<th>Room</th>
						<th>Food</th>
						<th>Registered on</th>
					</thead>
					<tbody>
						@foreach ($attendees as $attendee)
						<tr>
							<td>{{str_pad($attendee->id, 6, 0, STR_PAD_LEFT)}}</td>
							<td><strong>{{$attendee->prefix.$attendee->name}} {{$attendee->surname}}</strong></td>
							<td>{{$attendee->nickname}}</td>
							<td>
								@if ($attendee->attend->day_1_check)
									<i class="text-success glyphicon glyphicon-ok"></i>
								@else
									@if ($attendee->day_1)
										<i class="text-muted glyphicon glyphicon-ok"></i>
									@else
										<i class="text-muted glyphicon glyphicon-remove">
									@endif
								@endif
							</td>
							<td>
								@if ($attendee->attend->day_2_check)
									<i class="text-success glyphicon glyphicon-ok"></i>
								@else
									@if ($attendee->day_2)
										<i class="text-muted glyphicon glyphicon-ok"></i>
									@else
										<i class="text-muted glyphicon glyphicon-remove">
									@endif
								@endif
							</td>
							<td>
								@if ($attendee->attend->day_3_check)
									<i class="text-success glyphicon glyphicon-ok"></i>
								@else
									@if ($attendee->day_3)
										<i class="text-muted glyphicon glyphicon-ok"></i>
									@else
										<i class="text-muted glyphicon glyphicon-remove">
									@endif
								@endif
							</td>
							<td>
								@if ($attendee->attend->day_4_check)
									<i class="text-success glyphicon glyphicon-ok"></i>
								@else
									@if ($attendee->day_4)
										<i class="text-muted glyphicon glyphicon-ok"></i>
									@else
										<i class="text-muted glyphicon glyphicon-remove">
									@endif
								@endif
							</td>
							<td>
								@if ($attendee->attend->day_5_check)
									<i class="text-success glyphicon glyphicon-ok"></i>
								@else
									@if ($attendee->day_5)
										<i class="text-muted glyphicon glyphicon-ok"></i>
									@else
										<i class="text-muted glyphicon glyphicon-remove">
									@endif
								@endif
							</td>
							<td>
								@if ($attendee->attend->day_6_check)
									<i class="text-success glyphicon glyphicon-ok"></i>
								@else
									@if ($attendee->day_6)
										<i class="text-muted glyphicon glyphicon-ok"></i>
									@else
										<i class="text-muted glyphicon glyphicon-remove">
									@endif
								@endif
							</td>
							<td>
								{{ $attendee->room or "-" }}
							</td>
							<td>{{ $attendee->food }}</td>
							<td>{{$attendee->created_at}}</td>
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
	<div class="modal fade" id="checkinModel" tabindex="-1" role="dialog" aria-labelledby="checkinLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="checkinLabel">Checking in</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
	      		<div class="col-sm-6">
	      			<div class="form-horizontal">
								<div class="form-group">
							  	<label for="name" class="col-sm-2 control-label">Name</label>
							  	<div class="col-sm-10">
							  		<input type="text" name="name" class="form-control" disabled value="นายต้นสาย สิงห์กังวาน (ต้น)">
							  	</div>
				        </div>
				        <div class="form-group">
							    <label for="room" class="col-sm-2 control-label">Room</label>
							    <div class="col-sm-10">
							      <select name="room" id="room" class="form-control">
							      	<option value="0">N/A</option>
							      	<option value="223">223 ({{$room1cnt}}/90 คน)</option>
											<option value="328">328 ({{$room3cnt}}/150 คน)</option>
											<option value="329">329 ({{$room3cnt}}/150 คน)</option>
											<option value="335">335 ({{$room4cnt}}/90 คน)</option>
							      </select>
							    </div>
							  </div>
							  <div class="form-group">
							  	<label for="status" class="col-sm-2 control-label">Status</label>
							  	<div class="col-sm-10">
							  		<label class="radio-inline">
										  <input type="radio" name="status" value="1" checked> มา
										</label>
										<label class="radio-inline">
										  <input type="radio" name="status" value="0"> ไม่มา
										</label>
							  	</div>
				        </div>
	      			</div>
	      		</div>
	      		<div class="col-sm-6">
	      			<div class="form-horizontal">
	      				<div class="form-group">
							  	<label for="name" class="col-sm-4 control-label">Nickname</label>
							  	<div class="col-sm-8">
							  		<input type="text" name="nickname" class="form-control" disabled>
							  	</div>
				        </div>
	      				<div class="form-group">
							  	<label for="food" class="col-sm-2 control-label">Food</label>
							  	<div class="col-sm-10">
							  		<select name="food" id="food" class="form-control">
							  			<option value="0">N/A</option>
							      	<option value="1">กะเพราหมู</option>
											<option value="2">กะเพรากุ้ง</option>
											<option value="3">ข้าวผัดหมู</option>
											<option value="4">หมูกระเทียม</option>
							      </select>
							  	</div>
							  </div>
	      			</div>
	      		</div>
	      	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" id="checkinModalSave" class="btn btn-primary">Save</button>
	      </div>
	    </div>
	  </div>
	</div>
</div>

@stop

@section('js')

<script>
	var modal = $('#checkinModel');
	var room = $('select[name=room]');
	var food = $('select[name=food]');
	var data;

	$('#attnSearch').click(function(){
		var attendee = $.post('{{URL::to("/backend/search/get-attendee")}}', {attnID: $('input[name=attnID]').val()});
		attendee.done(function(result){
			console.log(result);
			data = result;
			if (result['name'] != null) {
				$('input[name=name]').val(result['prefix'] + result['name'] + " " + result['surname']);
				$('input[name=nickname]').val(result['nickname']);
				room.val(data['room']);
				//food.val(data['food']);
				modal.modal('toggle');
			} else {
				alert("ไม่พบเลขที่ใบลงทะเบียนนี้ในระบบ!");
			};
		});
	});

	$('input[name=status][value=0]').click(function(){
		room.val(0).prop('disabled', true);
		food.val(0).prop('disabled', true);
	});

	$('input[name=status][value=1]').click(function(){
		room.prop('disabled', false);
		food.prop('disabled', false);
		room.val(data['room']);
		//food.val(data['food']);
	});

	$('#checkinModalSave').click(function(){
		//alert($('select[name=room]').val());
		id = $('input[name=attnID]').val();
		mode = $('input[name=status]:checked').val();
		attendee = $.post('{{URL::to("/backend/checkin/update")}}', {id: id, mode: mode, room: room.val(), food: food.val(), _method: "PUT"});
		attendee.success(function(){
			alert('บันทึกข้อมูลสำเร็จ :D');
		});
		//attendee.fail(function(){
		//	alert('บันทึกข้อมูลไม่เสร็จ :(');
		//});
		modal.modal('toggle');
	});
</script>

@stop
