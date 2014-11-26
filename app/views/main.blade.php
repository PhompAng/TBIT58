@extends('layouts.main')

@section('content')

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="main-nav">
			<ul class="nav navbar-nav">
			<li><a class="page-scroll" href="#agenda">กำหนดการ</a></li>
			<li><a class="page-scroll" href="#course">เนื้อหาและเอกสาร</a></li>
			<li><a class="page-scroll" href="#transportation">การเดินทาง</a></li>
			<li><a class="page-scroll" href="#faq">ถามตอบ</a></li>
			<li><a class="page-scroll" href="#contact">ติดต่อสอบถาม</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<section id="intro" class="bg-tran">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 logo">
				<img id="logo" src="{{URL::to('/assets/img/logo.png')}}" alt="ToBeIT@KMITL '58">
			</div>
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="well triangle text-center">
					ไม่ว่าน้องจะจบ ม.ปลาย สายไหน หรือปวช. จากที่ใด และหากน้องเป็นผู้ที่สนใจจะศึกษาต่อในคณะ IT... แต่ยังหาคนติวให้ไม่ได้ หรือหาได้แล้วก็ห้ามพลาด!?! เพราะโอกาสดีๆ มาถึงแล้ว เพียงน้องมาติวกับพี่ๆ คณะไอทีลาดกระบังในโครงการ "ToBeIT@KMITL ‘58 (ติวน้องสอบตรงไอทีลาดกระบัง 58)"
				</div>
				<div class="main_button text-center">
					<a href="{{URL::to('/register/create')}}" id="register_button" class="page-scroll btn btn-lg btn-primary">ลงทะเบียนเข้าร่วมโครงการ</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="agenda" class="bg-nephritis">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<img class="section-heading" src="{{URL::to('/assets/text/heading_schedule.svg')}}">
			</div>
			<div class="col-xs-6 text-right timeline">
				<div class="timeline-item-l card">
					<div class="timeline-icon pull-left hidden-xs hidden-sm">
						<span class="glyphicon glyphicon-pencil"></span>
					</div>
					<div class="timeline-content">
						<h4>1 ธันวาคม 2557</h4>
						<span>เปิดรับลงทะเบียนออนไลน์</span>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="timeline-item-l card">
					<div class="timeline-icon pull-left hidden-xs hidden-sm">
						<span class="glyphicon glyphicon-book"></span>
					</div>
					<div class="timeline-content">
						<h4>10 มกราคม 2558</h4>
						<span>เริ่มติววันแรก</span>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="timeline-item-l card">
					<div class="timeline-icon pull-left hidden-xs hidden-sm">
						<span class="glyphicon glyphicon-list-alt"></span>
					</div>
					<div class="timeline-content">
						<h4>1 กุมภาพันธ์ 2558</h4>
						<span>Quiz</span>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="timeline-item-r card">
					<div class="timeline-icon pull-right hidden-xs hidden-sm">
						<span class="glyphicon glyphicon-off"></span>
					</div>
					<div class="timeline-content">
						<h4>7 มกราคม 2558</h4>
						<span>ปิดรับลงทะเบียน</span>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="timeline-item-r card">
					<div class="timeline-icon pull-right hidden-xs hidden-sm">
						<span class="glyphicon glyphicon-book"></span>
					</div>
					<div class="timeline-content">
						<h4>31 มกราคม 2558</h4>
						<span>ติววันสุดท้าย</span>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="timeline-item-r card">
					<div class="timeline-icon pull-right hidden-xs hidden-sm">
						<span class="glyphicon glyphicon-calendar"></span>
					</div>
					<div class="timeline-content">
						<h4>14 กุมภาพันธ์ 2558</h4>
						<span>วันสอบตรงไอทีลาดกระบัง</span>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
				<div class="timeline-remark card">
					<p><strong>ติวทุกวันเสาร์-อาทิตย์ เว้นวันที่ 17, 18 มกราคม 2558</strong></p>
					<p>เวลา 9.00 น. ถึง 16.00 น. (พักเที่ยง 12.00 ถึง 12.30 น.)</p>
					<p>แต่งกายด้วยชุดไปรเวทสุภาพ กางเกงขายาว รองเท้าหุ้มส้น ห้ามรองเท้าแตะ!</p>
					<p>อย่าลืมนำเอกสารประกอบการเรียนมาด้วยนะ :D</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="course" class="bg-tran">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<img class="section-heading" src="{{URL::to('/assets/text/heading_download.svg')}}">
			</div>
			<div class="col-xs-12">
				<div class="courses-slider">
						<div class="subject-item card">
							<img src="{{URL::to('/assets/img/courses/hw.gif')}}">
							<h4 class="subject-title">Hardware</h4>
							<a href="#" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-download-alt"></span> ดาวน์โหลดเอกสาร</a>
						</div>
						<div class="subject-item card">
							<img src="{{URL::to('/assets/img/courses/sw.gif')}}">
							<h4 class="subject-title">Software</h4>
							<a href="#" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-download-alt"></span> ดาวน์โหลดเอกสาร</a>
						</div>
						<div class="subject-item card">
							<img src="{{URL::to('/assets/img/courses/logic.gif')}}">
							<h4 class="subject-title">Logic & Ethics</h4>
							<a href="#" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-download-alt"></span> ดาวน์โหลดเอกสาร</a>
						</div>
						<div class="subject-item card">
							<img src="{{URL::to('/assets/img/courses/db.gif')}}">
							<h4 class="subject-title">Database</h4>
							<a href="#" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-download-alt"></span> ดาวน์โหลดเอกสาร</a>
						</div>
						<div class="subject-item card">
							<img src="{{URL::to('/assets/img/courses/media.gif')}}">
							<h4 class="subject-title">Website & Multimedia</h4>
							<a href="#" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-download-alt"></span> ดาวน์โหลดเอกสาร</a>
						</div>
						<div class="subject-item card">
							<img src="{{URL::to('/assets/img/courses/network.gif')}}">
							<h4 class="subject-title">Network</h4>
							<a href="#" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-download-alt"></span> ดาวน์โหลดเอกสาร</a>
						</div>
						<div class="subject-item card">
							<img src="{{URL::to('/assets/img/courses/programming.gif')}}">
							<h4 class="subject-title">Programming & Math</h4>
							<a href="#" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-download-alt"></span> ดาวน์โหลดเอกสาร</a>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="transportation" class="bg-asphalt">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<img class="section-heading" src="{{URL::to('/assets/text/heading_transportation.svg')}}">
			</div>
			<div class="col-md-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.792152490152!2d100.78122500000003!3d13.73103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d6636ecec9c2b%3A0xd2850fd9ee87f249!2sFaculty+of+Information+Technology!5e0!3m2!1sen!2sth!4v1416420297310" width="100%" height="380" frameborder="0" style="border:0"></iframe>
			</div>
			<div class="col-md-6">
				<div class="well">
					สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง ตั้งอยู่บริเวณฝั่งตะวันออกของกรุงเทพมหานคร อยู่ในพื้นที่เขตลาดกระบัง ทางทิศเหนือของท่าอากาศยานสุวรรณภูมิ ทิศเหนือติดกับถนนมอเตอร์เวย์ กรุงเทพ-ชลบุรี (สายใหม่) ทิศใต้ติดกับคลองประเวศบุรีรมย์ มีถนนฉลองกรุงตัดผ่านกลางสถาบันในทิศตะวันออกเฉียงเหนือ-ใต้ และทางรถไฟสายตะวันออกตัดผ่านกลางสถาบันในทิศตะวันออก-ตะวันตก
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-3"><a href="http://www.it.kmitl.ac.th/about/contact/map#header-4" target="_blank" class="btn btn-block btn-sm btn-primary"><img src="http://placehold.it/100x100" width="100%" alt=""></a></div>
					<div class="col-sm-6 col-md-3"><a href="http://www.it.kmitl.ac.th/about/contact/map#header-5" target="_blank" class="btn btn-block btn-sm btn-primary">รถไฟฟ้า</a></div>
					<div class="col-sm-6 col-md-3"><a href="http://www.it.kmitl.ac.th/about/contact/map#header-6" target="_blank" class="btn btn-block btn-sm btn-primary">รถประจำทาง</a></div>
					<div class="col-sm-6 col-md-3"><a href="http://www.it.kmitl.ac.th/about/contact/map#header-7" target="_blank" class="btn btn-block btn-sm btn-primary">รถยนต์ส่วนตัว</a></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="faq" class="bg-pomegranate">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<img class="section-heading" src="{{URL::to('/assets/text/heading_faq.svg')}}">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<dl>
					<dt>Question 1</dt>
					<dd>เมื่อ ที่ </dd>
					<dt>Question 2</dt>
					<dd>Answer 2</dd>
					<dt>Question 3</dt>
					<dd>Answer 3</dd>
				</dl>
			</div>
			<div class="col-md-6">
				<dl>
					<dt>Question 1</dt>
					<dd>เมื่อ ที่ </dd>
					<dt>Question 2</dt>
					<dd>Answer 2</dd>
					<dt>Question 3</dt>
					<dd>Answer 3</dd>
				</dl>
			</div>
		</div>
	</div>
</section>

<section id="contact" class="bg-black">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<img class="section-heading" src="{{URL::to('/assets/text/heading_contact.svg')}}">
			</div>
			<div class="col-md-6">
				<p class="contact-instruction">หากน้องๆ มีข้อสงสัยในโครงการ ไม่ว่าจะเป็น... ต้องมาลงทะเบียนที่คณะไหม? เลิกกี่โมง? ต้องมาทุกวันไหม? ฯลฯ ลองอ่านส่วน <a href="#faq" class="page-scroll">ถามตอบ</a> ดูก่อนนะครับ หากยังไม่พบสิ่งที่ต้องการ ส่งข้อความมาทางแฟนเพจ หรือจะโทรหาพี่ๆ ผู้ดูแลโครงการก็ได้ครับ :D</p>
			</div>
			<div class="col-md-6">
				<div class="well">
					<div class="row">
						<div class="col-sm-6">
							<span class="glyphicon glyphicon-earphone glyphicon-sm"></span> พี่โอ๊ต : 08X-XXX-XXXX<br>
							<span class="glyphicon glyphicon-earphone glyphicon-sm"></span> พี่บลาๆ : 08X-XXX-XXXX
						</div>
						<div class="col-sm-6">
							<span class="glyphicon glyphicon-envelope glyphicon-sm"></span>  <a href="https://www.facebook.com/messages/289696517715853">ส่งข้อความผ่าน Facebook</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@stop

@section('js')
<script type="text/javascript">
	var animatedScroll = false;
	$('.navbar').css("top", "-50px");
	$(window).scroll(function () {
		if(!animatedScroll){
			animatedScroll = true;
			if ($(window).scrollTop() > $('#agenda').position().top)
			 {
				$('.navbar').animate({
					"top": "0px"
				}, function(){ animatedScroll = false;});
			 }
			else
			 {
				$('.navbar').animate({
					"top": "-50px"
				},function(){ animatedScroll = false;});
			 }
		}
	});

	$('.courses-slider').owlCarousel({
	margin:20,
	responsive : {
		0 : { items: 1 },
		768 : { items: 2 },
		970 : { items: 4},
		1170 : { items: 5 }
		}
	});

</script>
@stop
