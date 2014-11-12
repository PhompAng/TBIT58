@extends('layouts.main')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			{{Form::open(array('url' => 'register/', 'method' => 'post', 'class' => 'form-horizontal'))}}
				<div class="form-group @if ($errors->has('name')) has-error @endif">
					{{Form::label('name', 'Name', array('class' => 'control-label col-sm-2'))}}
					<div class="col-xs-10">
						{{Form::text('name', "", array('class' => 'form-control'))}}
						@if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
					</div>
				</div>
				<div class="form-group @if ($errors->has('surname')) has-error @endif">
					{{Form::label('surname', 'Surname', array('class' => 'control-label col-sm-2'))}}
					<div class="col-xs-10">
						{{Form::text('surname', "", array('class' => 'form-control'))}}
						@if ($errors->has('surname')) <p class="help-block">{{ $errors->first('surname') }}</p> @endif
					</div>
				</div>
				<div class="form-group @if ($errors->has('nickname')) has-error @endif">
					{{Form::label('nickname', 'Nickname', array('class' => 'control-label col-sm-2'))}}
					<div class="col-xs-10">
						{{Form::text('nickname', "", array('class' => 'form-control'))}}
						@if ($errors->has('nickname')) <p class="help-block">{{ $errors->first('nickname') }}</p> @endif
					</div>
				</div>
				<div class="form-group @if ($errors->has('email')) has-error @endif">
					{{Form::label('email', 'Email', array('class' => 'control-label col-sm-2'))}}
					<div class="col-xs-10">
						{{Form::text('email', "", array('class' => 'form-control'))}}
						@if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
					</div>
				</div>
				<div class="form-group @if ($errors->has('tel')) has-error @endif">
					{{Form::label('tel', 'Tel', array('class' => 'control-label col-sm-2'))}}
					<div class="col-xs-10">
						{{Form::text('tel', "", array('class' => 'form-control'))}}
						@if ($errors->has('tel')) <p class="help-block">{{ $errors->first('tel') }}</p> @endif
					</div>
				</div>
				<div class="form-group @if ($errors->has('parent_tel')) has-error @endif">
					{{Form::label('parent_tel', 'Parent Tel', array('class' => 'control-label col-sm-2'))}}
					<div class="col-xs-10">
						{{Form::text('parent_tel', "", array('class' => 'form-control'))}}
						@if ($errors->has('parent_tel')) <p class="help-block">{{ $errors->first('parent_tel') }}</p> @endif
					</div>
				</div>
				<div class="form-group">
					{{Form::submit('Submit', array('class' => 'btn btn-primary btn-block'))}}
				</div>
			{{Form::close()}}
		</div>
	</div>
</div>

@stop