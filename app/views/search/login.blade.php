@include('backend.layouts.parts.header')

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
            <div class="box login">
                <div class="page-header">
                    <h2>ค้นหา ID ด้วยชื่อ</h2>
                </div>
                @if (sizeof($errors) != 0)
                <div class="alert alert-danger text-center">
                    @foreach ($errors->all() as $error)
                          {{ $error }}
                    @endforeach
                </div>
                @endif
                {{Form::open(array('url' => 'search/result', 'method' => 'get'))}}
                    <div class="form-group">
                        {{Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Name'))}}
                    </div>
                {{Form::submit('Search', array('class' => 'btn btn-primary btn-block'))}}
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>

@include('backend.layouts.parts.footer')
