@extends('layouts.main')

@section('content')


<section id="register">
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="text-center">
                        <h1>ปิดรับลงทะเบียนแล้วค่ะ</h1>
                    </div>
                    <div class="text-center">
                        <h2>แต่น้องๆ ที่ลงทะเบียนไม่ทัน ยังสามารถมาลงทะเบียนในช่วงเช้าของวันติวได้นะคะ</h2>
                    </div>
                    <br>
                    <a href="{{URL::to('/')}}" class="btn btn-primary btn-register">กลับหน้าหลัก</a>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
