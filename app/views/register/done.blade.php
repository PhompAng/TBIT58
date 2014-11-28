@extends('layouts.main')

@section('content')

<section id="register">
	<div class="container">
		<div class="card">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center"><img src="{{URL::to('/assets/img/mascots/male.gif')}}" width="45%" alt=""></div>
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
					<img src="{{URL::to('/assets/text/register_success.svg')}}" width="90%" alt="">
				</div>
				<div class="col-xs-12 text-center">
					<hr>
					<div class="text-center"><p class="attendee-id">เลขที่ใบสมัครของน้องคือ {{$attendee_id}}<p><span class="text-muted">เมื่อถึงคณะ ให้น้องๆ แจ้งเลขนี้เพื่อรายงานตัวนะครับ หากลืมรหัสให้แจ้งชื่อ-นามสกุลแทนครับ</span></div>
					<div class="alert alert-success">ลงทะเบียนเสร็จแล้ว อย่าลืมเข้าไป Join กลุ่ม <a href="https://www.facebook.com/groups/kmitltobeit/">ToBeIT@KMITL</a> บน Facebook กันนะครับ :3</div>
					<a href="{{URL::to('/')}}" class="btn btn-default btn-sm">กลับหน้าหลัก</a>
				</div>
			</div>
		</div>
	</div>
</section>
		
						
						
						
						
						

@stop