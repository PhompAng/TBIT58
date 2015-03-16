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
					<p>ไม่ว่าน้องจะจบ ม.ปลาย สายไหน หรือปวช. จากที่ใด และหากน้องเป็นผู้ที่สนใจจะศึกษาต่อในคณะ IT... แต่ยังหาคนติวให้ไม่ได้ หรือหาได้แล้วก็ห้ามพลาด!?! เพราะโอกาสดีๆ มาถึงแล้ว เพียงน้องมาติวกับพี่ๆ คณะไอทีลาดกระบังในโครงการ "ToBeIT@KMITL ‘58 (ติวน้องสอบตรงไอทีลาดกระบัง 58)"</p>
				</div>
				<div class="text-center">
					<a href="{{URL::to('/register')}}" class="page-scroll btn-register btn btn-lg disabled">ติดตามวิดีโอการติวได้ที่นี่เร็วๆ นี้</a>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="social text-center">
		  <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Ftobeitkmitl&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
		  <iframe src="//www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Ftobe.it.kmitl.ac.th%2F2014%2F&amp;layout=button_count&amp;appId=556545787778563" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
		  <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://tobe.it.kmitl.ac.th/2014/" data-text="ToBeIT@KMITL - ติวน้องสอบตรงไอทีลาดกระบัง โครงการที่ให้น้องๆ ได้เตรียมความพร้อมก่อนเข้าสู่สนามสอบจริง!" data-hashtags="itkmitl">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		  <div class="g-plusone" data-size="medium" data-href="http://tobe.it.kmitl.ac.th"></div>
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
					<div class="table-responsive">
						<table class="table table-bordered table-condensed table-striped">
							<thead>
								<th class="text-center">วันที่</th>
								<th colspan="2" class="text-center">วิชา</th>
							</thead>
							<tbody>
								<tr>
									<td>10 มกราคม</td>
									<td>Hardware</td>
									<td>Software</td>
								</tr>
								<tr>
									<td>11 มกราคม</td>
									<td colspan="2">Logic & Ethics</td>
								</tr>
								<tr>
									<td>24 มกราคม</td>
									<td>Database</td>
									<td>Website & Multimedia</td>
								</tr>
								<tr>
									<td>25 มกราคม</td>
									<td colspan="2">Network</td>
								</tr>
								<tr>
									<td>31 มกราคม</td>
									<td colspan="2">Programming & Math</td>
								</tr>
								<tr>
									<td>1 กุมภาพันธ์</td>
									<td colspan="2">Quiz</td>
								</tr>
							</tbody>
						</table>
					</div>
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
							<a href="#" onclick="alert('จะเปิดให้ดาวน์โหลดเอกสารเร็วๆ นี้ครับ :3');" class="btn btn-default btn-primary btn-sm"><span class="glyphicon glyphicon-download-alt"></span> ดาวน์โหลดเอกสาร</a>
						</div>
						<div class="subject-item card">
							<img src="{{URL::to('/assets/img/courses/sw.gif')}}">
							<h4 class="subject-title">Software</h4>
							<a href="{{ URL::to('/sheets/software.pdf') }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-download-alt"></span> ดาวน์โหลดเอกสาร</a>
						</div>
						<div class="subject-item card">
							<img src="{{URL::to('/assets/img/courses/logic.gif')}}">
							<h4 class="subject-title">Logic & Ethics</h4>
							<a href="{{ URL::to('/sheets/LogicBaseEthic.pdf') }}" class="btn btn-default btn-primary btn-sm"><span class="glyphicon glyphicon-download-alt"></span> ดาวน์โหลดเอกสาร</a>
						</div>
						<div class="subject-item card">
							<img src="{{URL::to('/assets/img/courses/db.gif')}}">
							<h4 class="subject-title">Database</h4>
							<a href="{{ URL::to('/sheets/database.pdf')}}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-download-alt"></span> ดาวน์โหลดเอกสาร</a>
						</div>
						<div class="subject-item card">
							<img src="{{URL::to('/assets/img/courses/media.gif')}}">
							<h4 class="subject-title">Website & Multimedia</h4>
							<a href="{{ URL::to('/sheets/WebAndMulti.pdf')}}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-download-alt"></span> ดาวน์โหลดเอกสาร</a>
						</div>
						<div class="subject-item card">
							<img src="{{URL::to('/assets/img/courses/network.gif')}}">
							<h4 class="subject-title">Network</h4>
							<a href="{{ URL::to('/sheets/Network58.pdf')}}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-download-alt"></span> ดาวน์โหลดเอกสาร</a>
						</div>
						<div class="subject-item card">
							<img src="{{URL::to('/assets/img/courses/programming.gif')}}">
							<h4 class="subject-title">Programming & Math</h4>
							<div class="btn-group" role="group" >
							  <button type="button" class="btn btn-default"><a href="{{ URL::to('/sheets/Programming58.pdf')}}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-download-alt"></span> Programming</a></button>
							  <button type="button" class="btn btn-default"><a href="{{ URL::to('/sheets/Mathematic58.pdf')}}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-download-alt"></span> Math</a></button>
							</div>
				</div>sadfghjk
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
				<div class="well text-indent">
					สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง ตั้งอยู่บริเวณฝั่งตะวันออกของกรุงเทพมหานคร อยู่ในพื้นที่เขตลาดกระบัง ทางทิศเหนือของท่าอากาศยานสุวรรณภูมิ ทิศเหนือติดกับถนนมอเตอร์เวย์ กรุงเทพ-ชลบุรี (สายใหม่) ทิศใต้ติดกับคลองประเวศบุรีรมย์ มีถนนฉลองกรุงตัดผ่านกลางสถาบันในทิศตะวันออกเฉียงเหนือ-ใต้ และทางรถไฟสายตะวันออกตัดผ่านกลางสถาบันในทิศตะวันออก-ตะวันตก
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-3"><a href="http://www.it.kmitl.ac.th/about/contact/map#header-4" target="_blank" class="btn btn-block btn-sm btn-default">รถไฟ</a></div>
					<div class="col-xs-6 col-md-3"><a href="http://www.it.kmitl.ac.th/about/contact/map#header-5" target="_blank" class="btn btn-block btn-sm btn-default">รถไฟฟ้า</a></div>
					<div class="col-xs-6 col-md-3"><a href="http://www.it.kmitl.ac.th/about/contact/map#header-6" target="_blank" class="btn btn-block btn-sm btn-default">รถประจำทาง</a></div>
					<div class="col-xs-6 col-md-3"><a href="http://www.it.kmitl.ac.th/about/contact/map#header-7" target="_blank" class="btn btn-block btn-sm btn-default">รถยนต์ส่วนตัว</a></div>
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
					<dt>Q : จำเป็นต้องมาติวทุกวันไหม?</dt>
					<dd>A : ไม่จำเป็นครับ มาติวเฉพาะวันที่น้องๆ สะดวกก็ได้ครับ</dd>
					<dt>Q : ไม่ได้สมัครรับตรงของคณะฯ มาติวได้ไหม?</dt>
					<dd>A : ได้ครับ ขอแค่น้องๆ สนใจที่จะมาติวก็พอครับ</dd>
					<dt>Q : ลงทะเบียนออนไลน์แล้ว ต้องส่งเอกสารอะไรมาที่คณะไหม?</dt>
					<dd>A : ไม่ต้องส่งเอกสารใดๆ มาที่คณะครับ เจอกันวันติวได้เลยครับ</dd>
					<dt>Q : ไม่สะดวกมาติว มีวิดีโอย้อนหลังให้ดูไหม?</dt>
					<dd>A : มีครับ วิดีโอและภาพบรรยาการติวจะถูกอัพโหลดหลังจากจบโครงการครับ</dd>
				</dl>
			</div>
			<div class="col-md-6">
				<dl>
					<dt>Q : ถ้าไม่สะดวกพิมพ์เอกสารมาเอง มีเอกสารให้ไหม?</dt>
					<dd>A : มีจำหน่ายหน้างานครับ แต่จะเป็นเอกสารแบบขาวดำนะครับ</dd>
					<dt>Q : ต้องเสียค่าสมัครไหม?</dt>
					<dd>A : โครงการนี้ติวฟรีไม่มีค่าใช้จ่ายใดๆ ครับ</dd>
					<dt>Q : ลงทะเบียนเสร็จแล้ว ลืมรหัสที่ใช้รายงานตัวต้องทำอย่างไร?</dt>
					<dd>A : น้องสามารถเช็คอีเมล์ที่ใช้ลงทะเบียนไว้ได้เลยครับ หรือหากไม่พบอีเมล์ให้ส่งข้อความมายังแฟนเพจตามลิ้งค์ด้านล่างครับ</dd>
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
				<p class="contact-instruction">หากน้องๆ มีข้อสงสัยในโครงการ เช่น ต้องมาลงทะเบียนที่คณะไหม? เลิกกี่โมง? ต้องมาทุกวันไหม? ฯลฯ ลองอ่านส่วน <a href="#faq" class="page-scroll">ถามตอบ</a> ดูก่อนนะครับ หากยังไม่พบคำตอบ ส่งข้อความมาทางแฟนเพจ โพสถามในกลุ่มบน Facebook หรือจะโทรหาพี่ๆ ผู้ดูแลโครงการก็ได้ครับ :D</p>
			</div>
			<div class="col-md-6">
				<div class="well">
					<div class="row">
						<div class="col-sm-6">
							<span class="glyphicon glyphicon-earphone glyphicon-sm"></span> พี่โอ๊ต : 099-230-9900<br>
							<span class="glyphicon glyphicon-earphone glyphicon-sm"></span> พี่ต้น : 081-804-8870
						</div>
						<div class="col-sm-6">
							<span class="glyphicon glyphicon-envelope glyphicon-sm"></span>  <a href="https://www.facebook.com/messages/289696517715853">ส่งข้อความผ่าน Facebook</a><br>
							<span class="glyphicon glyphicon-th glyphicon-sm"></span>  <a href="https://www.facebook.com/groups/kmitltobeit/">กลุ่ม ToBeIT@KMITL บน Facebook</a>
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
		},
		nav: true
	});

	$('.owl-prev').html('<<');
	$('.owl-next').html('>>');

</script>
@stop
