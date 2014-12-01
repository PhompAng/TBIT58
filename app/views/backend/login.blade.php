@include('backend.layouts.parts.header')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
			<div class="box login">
				<div class="page-header">
					<h2>Login <small>Authorized only</small></h2>
				</div>
				@if (sizeof($errors) != 0)
		      <div class="alert alert-danger text-center">
		        @foreach ($errors->all() as $error)
		          {{ $error }}
		        @endforeach
		      </div>
		    @endif
				{{Form::open(array('url' => 'backend/login'))}}
					<div class="form-group">
						{{Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder' => 'Username'))}}
					</div>
					<div class="form-group">
						{{Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password'))}}
					</div>
					{{Form::submit('Login', array('class' => 'btn btn-primary btn-block'))}}
				{{Form::close()}}
			</div>
		</div>
	</div>
</div>

@include('backend.layouts.parts.footer')