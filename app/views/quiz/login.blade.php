@include('backend.layouts.parts.header')

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
            <div class="box login">
                <div class="page-header">
                    <h2>ระบบแสดงคะแนน Quiz</h2>
                </div>
                <div class="alert alert-info">กรอก ID และเบอร์โทร หรือ เบอร์โทรผู้ปกครองเพื่อแสดงคะแนน</div>
                @if (sizeof($errors) != 0)
                <div class="alert alert-danger text-center">
                    @foreach ($errors->all() as $error)
                          {{ $error }}
                    @endforeach
                </div>
                @endif
                {{Form::open(array('url' => 'quiz/', 'method' => 'post'))}}
                    <div class="form-group">
                        {{Form::text('id', null, array('class' => 'form-control', 'placeholder' => 'ID'))}}
                    </div>
                    <div class="form-group">
                        {{Form::text('tel', null, array('class' => 'form-control', 'placeholder' => 'เบอร์โทรหรือเบอร์ผู้ปกครอง'))}}
                    </div>
                {{Form::submit('View', array('class' => 'btn btn-primary btn-block'))}}
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>

@include('backend.layouts.parts.footer')
