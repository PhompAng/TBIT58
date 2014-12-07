@extends('backend.layouts.main')

@section('css')

{{ HTML::style('assets/css/datatables/dataTables.bootstrap.css') }}

@stop

@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="page-header">
				<h1>My Profile</h1>
			</div>
			<div class="alert alert-info">
				หากไม่ต้องการเปลี่ยนรหัสผ่าน ให้กรอกรหัสผ่านเดิมลงในช่อง New Password และ Confirm Password
			</div>
			{{ Form::model(Auth::user(), array('route' => array('backend.profile.update', Auth::user()->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
			<div class="form-group">
		    <label class="col-sm-2 control-label">Name</label>
		    <div class="col-sm-10">
		      {{Form::text('name', null, array('class' => 'form-control'))}}
		      @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">Surname</label>
		    <div class="col-sm-10">
		      {{Form::text('surname', null, array('class' => 'form-control'))}}
		      @if ($errors->has('surname')) <p class="help-block">{{ $errors->first('surname') }}</p> @endif
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">New Password</label>
		    <div class="col-sm-10">
		      {{Form::password('password', array('class' => 'form-control'))}}
		      @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">Confirm Password</label>
		    <div class="col-sm-10">
		      {{Form::password('password_confirmation', array('class' => 'form-control'))}}
		    </div>
		  </div>
		  <div class="text-center">
				<button type="submit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-floppy-save"></i> Update</submit>
			</div>
			{{ Form::close() }}
		</div>
	</div>
</div>

@stop

@section('js')

{{ HTML::script('assets/js/jquery.dataTables.js') }}
{{ HTML::script('assets/js/dataTables.bootstrap.js') }}
<script>
	$('.table').dataTable();
</script>
@stop