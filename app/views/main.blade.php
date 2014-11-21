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
		<li><a class="page-scroll" href="#faq">ถามตอบ</a></li>
		<li><a class="page-scroll" href="#contact">การเดินทาง</a></li>
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
				<div class="well well-sm triangle text-center">
					สมัครโว้ยยยยยยยยยย
				</div>
				<div class="main_buttons text-center">
					<a href="#" class="btn btn-lg btn-primary">Register</a>
					<a href="#" class="btn btn-lg btn-default">Agenda</a>
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
				<div class="timeline-item-l">
					<div class="timeline-icon pull-left hidden-xs hidden-sm">
						<i class="glyphicon glyphicon-pencil"></i>
					</div>
					<div class="timeline-content">
						<h4>1 ธันวาคม 2557</h4>
						<span>เปิดรับลงทะเบียนออนไลน์</span>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="timeline-item-l">
					<div class="timeline-icon pull-left hidden-xs hidden-sm">
						<i class="glyphicon glyphicon-book"></i>
					</div>
					<div class="timeline-content">
						<h4>10 มกราคม 2558</h4>
						<span>เริ่มติววันแรก</span>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="timeline-item-l">
					<div class="timeline-icon pull-left hidden-xs hidden-sm">
						<i class="glyphicon glyphicon-list-alt"></i>
					</div>
					<div class="timeline-content">
						<h4>7 กุมภาพันธ์ 2558</h4>
						<span>Quiz</span>
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="timeline-item-r">
					<div class="timeline-icon pull-right hidden-xs hidden-sm">
						<i class="glyphicon glyphicon-off"></i>
					</div>
					<div class="timeline-content">
						<h4>7 มกราคม 2557</h4>
						<span>ปิดรับลงทะเบียน</span>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="timeline-item-r">
					<div class="timeline-icon pull-right hidden-xs hidden-sm">
						<i class="glyphicon glyphicon-book"></i>
					</div>
					<div class="timeline-content">
						<h4>1 กุมภาพันธ์ 2558</h4>
						<span>ติววันสุดท้าย</span>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="timeline-item-r">
					<div class="timeline-icon pull-right hidden-xs hidden-sm">
						<i class="glyphicon glyphicon-calendar"></i>
					</div>
					<div class="timeline-content">
						<h4>14 กุมภาพันธ์ 2558</h4>
						<span>วันสอบตรงไอทีลาดกระบัง</span>
					</div>
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
				<div class="owl-carousel">
						<div class="subject-item">
							<img src="http://placehold.it/150x150">
							<h4 class="subject-title">Hardware</h4>
							<a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-download-alt"></i> ดาวน์โหลดเอกสาร</a>
						</div>
						<div class="subject-item">
							<img src="http://placehold.it/150x150">
							<h4 class="subject-title">Software</h4>
							<a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-download-alt"></i> ดาวน์โหลดเอกสาร</a>
						</div>
						<div class="subject-item">
							<img src="http://placehold.it/150x150">
							<h4 class="subject-title">Logic & Ethics</h4>
							<a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-download-alt"></i> ดาวน์โหลดเอกสาร</a>
						</div>
						<div class="subject-item">
							<img src="http://placehold.it/150x150">
							<h4 class="subject-title">Database</h4>
							<a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-download-alt"></i> ดาวน์โหลดเอกสาร</a>
						</div>
						<div class="subject-item">
							<img src="http://placehold.it/150x150">
							<h4 class="subject-title">Website & Multimedia</h4>
							<a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-download-alt"></i> ดาวน์โหลดเอกสาร</a>
						</div>
						<div class="subject-item">
							<img src="http://placehold.it/150x150">
							<h4 class="subject-title">Network</h4>
							<a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-download-alt"></i> ดาวน์โหลดเอกสาร</a>
						</div>
						<div class="subject-item">
							<img src="http://placehold.it/150x150">
							<h4 class="subject-title">Programming & Math</h4>
							<a href="#" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-download-alt"></i> ดาวน์โหลดเอกสาร</a>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="faq" class="bg-orange">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<img class="section-heading" src="{{URL::to('/assets/text/heading_faq.svg')}}">
			</div>
		</div>
		<div class="row faq-item">
			<div class="col-md-6">
				<dt>Question 1</dt>
				<dd>lorem100</dd>
			</div>
			<div class="col-md-6">
				<dt>Question 2</dt>
				<dd>Answer 2</dd>
			</div>
		</div>
		<div class="row faq-item">
			<div class="col-md-6">
				<dt>Question 3</dt>
				<dd>Answer 3</dd>
			</div>
			<div class="col-md-6">
				<dt>Question 4</dt>
				<dd>Answer 4</dd>
			</div>
		</div>
		<div class="row faq-item">
			<div class="col-md-6">
				<dt>Question 5</dt>
				<dd>Answer 5</dd>
			</div>
			<div class="col-md-6">
				<dt>Question 6</dt>
				<dd>Answer 6</dd>
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
					<div class="col-sm-6 col-md-3"><a href="#" class="btn btn-block btn-sm btn-primary">รถไฟ</a></div>
					<div class="col-sm-6 col-md-3"><a href="#" class="btn btn-block btn-sm btn-primary">รถไฟฟ้า</a></div>
					<div class="col-sm-6 col-md-3"><a href="#" class="btn btn-block btn-sm btn-primary">รถประจำทาง</a></div>
					<div class="col-sm-6 col-md-3"><a href="#" class="btn btn-block btn-sm btn-primary">รถยนต์ส่วนตัว</a></div>
				</div>
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
			if ($(window).scrollTop() > $('#agenda').position().top-49)
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

	$('.owl-carousel').owlCarousel({
    margin:20,
    responsive : {
	    0 : {
	      items: 1
	    },
	    768 : {
	      items: 2
	    },
	    970 : {
	    	items: 5
	    }
		}
	})

	</script>
@stop
