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
		<li><a class="page-scroll" href="#faq">ถาม - ตอบ</a></li>
		<li><a class="page-scroll" href="#contact">การเดินทาง</a></li>
	  </ul>
	</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<section id="intro" class="bg-black">
	<div class="container">
		<div class="row">
			<div class="col-md-6 logo">
				<img id="logo" src="{{URL::to('/assets/img/logo.png')}}" alt="ToBeIT@KMITL '58">
			</div>
			<div class="col-md-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime recusandae nihil repellendus magnam possimus qui laboriosam inventore fuga itaque tenetur, labore dolore, nisi sint consectetur explicabo voluptatibus perspiciatis adipisci impedit iusto in. Iste doloremque eaque numquam maiores praesentium, mollitia, sequi, harum debitis aperiam dignissimos nulla. At aut repellat in odio, ratione sint dicta fugiat sapiente. Obcaecati odio quasi dolorum tempora numquam reprehenderit laudantium et reiciendis quod nostrum debitis, nulla iste nemo, mollitia dolorem praesentium aut architecto odit. Fuga eaque in, maxime impedit, eligendi aperiam minus sunt autem a consequatur porro omnis accusamus pariatur explicabo velit ea, illo iure similique rerum!</p>
				<a href="#" class="btn btn-primary">Register</a>
				<a href="#" class="btn btn-default">Agenda</a>
			</div>
		</div>
	</div>
</section>

<section id="agenda" class="bg-teal">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<img class="section-heading" src="{{URL::to('/assets/text/heading_schedule.svg')}}">
			</div>
		</div>
	</div>
</section>

<section id="course" class="bg-black">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<img class="section-heading" src="{{URL::to('/assets/text/heading_download.svg')}}">
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="subject-item">
					<img src="http://placehold.it/150x150">
					<h4 class="subject-title">Computer Hardware</h4>
					<a href="#" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-download-alt"></i> ดาวน์โหลดเอกสาร</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="subject-item">
					<img src="http://placehold.it/150x150">
					<h4 class="subject-title">Computer Hardware</h4>
					<a href="#" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-download-alt"></i> ดาวน์โหลดเอกสาร</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="subject-item">
					<img src="http://placehold.it/150x150">
					<h4 class="subject-title">Computer Hardware</h4>
					<a href="#" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-download-alt"></i> ดาวน์โหลดเอกสาร</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="subject-item">
					<img src="http://placehold.it/150x150">
					<h4 class="subject-title">Computer Hardware</h4>
					<a href="#" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-download-alt"></i> ดาวน์โหลดเอกสาร</a>
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

<section id="contact" class="bg-cyan">
	<div class="container">
		<div class="col-md-6 text-center">
			<img class="section-heading" src="{{URL::to('/assets/text/heading_contact.svg')}}">
		</div>
		<div class="col-md-6 text-center">
			<img class="section-heading" src="{{URL::to('/assets/text/heading_transportation.svg')}}">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.792152490152!2d100.78122500000003!3d13.73103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d6636ecec9c2b%3A0xd2850fd9ee87f249!2sFaculty+of+Information+Technology!5e0!3m2!1sen!2sth!4v1416420297310" width="100%" height="380" frameborder="0" style="border:0"></iframe>
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
	</script>
@stop
