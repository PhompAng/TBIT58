@include('backend.layouts.parts.header')

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <div class="box login">
                <div class="page-hader">
                    <h2>Login to see your quiz score</h2>
                </div>
                @if (sizeof($errors) != 0)
                <div class="alert alert-danger text-center">
                    @foreach ($errors->all() as $error)
                          {{ $error }}
                    @endforeach
                </div>
                @endif
                {{Form::open(array('url' => 'quiz/', 'method' => 'post'))}}
                    <div class="form-group">
                        {{Form::text('id', null, array('class' => 'form-control', 'placeholder' => 'UserID'))}}
                    </div>
                    <div class="form-group">
                        {{Form::text('tel', null, array('class' => 'form-control', 'placeholder' => 'Tel or Paren_Tel'))}}
                    </div>
                {{Form::submit('Login', array('class' => 'btn btn-primary btn-block'))}}
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>

@include('backend.layouts.parts.footer')
