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
					<div class="text-center"><p class="attendee-id">เลขที่ใบสมัครของน้องคือ {{Session::get('attendee_id')}}<p><span class="text-muted">เมื่อถึงคณะ ให้น้องๆ แจ้งเลขนี้เพื่อรายงานตัวนะครับ หากลืมรหัสให้แจ้งชื่อ-นามสกุลแทนครับ</span></div>
					<div class="alert alert-success">ลงทะเบียนเสร็จแล้ว อย่าลืมเข้าไป Join กลุ่ม <a href="https://www.facebook.com/groups/kmitltobeit/">ToBeIT@KMITL</a> บน Facebook กันนะครับ :3</div>
					<div class="social text-center">
	          <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Ftobeitkmitl&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
	          <iframe src="//www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Ftobe.it.kmitl.ac.th%2F2014%2F&amp;layout=button_count&amp;appId=556545787778563" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
	          <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://tobe.it.kmitl.ac.th/2014/" data-text="ToBeIT@KMITL - ติวน้องสอบตรงไอทีลาดกระบัง โครงการที่ให้น้องๆ ได้เตรียมความพร้อมก่อนเข้าสู่สนามสอบจริง!" data-hashtags="itkmitl">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	          <div class="g-plusone" data-size="medium" data-href="http://tobe.it.kmitl.ac.th"></div>
	        </div>
					<a href="{{URL::to('/')}}" class="btn btn-default btn-sm">กลับหน้าหลัก</a>
				</div>
			</div>
		</div>
	</div>
</section>
		
						
						
						
						
						

@stop