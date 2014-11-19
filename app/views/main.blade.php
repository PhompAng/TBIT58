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
		<li><a class="page-scroll" href="#course">วิชาที่เปิดติว (ดาวน์โหลดเอกสาร)</a></li>
		<li><a class="page-scroll" href="#faq">ถาม - ตอบ</a></li>
		<li><a class="page-scroll" href="#contact">สถานที่</a></li>
	  </ul>
	</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<section id="intro" class="bg-black">
	<div class="container">
		<div class="row">
			<div class="col-md-6 logo">Logo</div>
			<div class="col-md-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime recusandae nihil repellendus magnam possimus qui laboriosam inventore fuga itaque tenetur, labore dolore, nisi sint consectetur explicabo voluptatibus perspiciatis adipisci impedit iusto in. Iste doloremque eaque numquam maiores praesentium, mollitia, sequi, harum debitis aperiam dignissimos nulla. At aut repellat in odio, ratione sint dicta fugiat sapiente. Obcaecati odio quasi dolorum tempora numquam reprehenderit laudantium et reiciendis quod nostrum debitis, nulla iste nemo, mollitia dolorem praesentium aut architecto odit. Fuga eaque in, maxime impedit, eligendi aperiam minus sunt autem a consequatur porro omnis accusamus pariatur explicabo velit ea, illo iure similique rerum!</p>
				<a href="#" class="btn btn-primary">Register</a>
				<a href="#" class="btn btn-default">Agenda</a>
			</div>
		</div>
	</div>
</section>

<section id="agenda" class="bg-amber">
	<div class="container">
		Vertical Timeline
	</div>
</section>

<section id="course" class="bg-cyan">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">Subject1</div>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">Subject2</div>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">Subject3</div>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">Subject4</div>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">Subject5</div>
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">Subject6</div>
		</div>
	</div>
</section>

<section id="faq" class="bg-orange">
	<div class="container">
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

<section id="contact" class="bg-black">
	<div class="container">
		<div class="col-md-6">
			Contact Info
		</div>
		<div class="col-md-6">
			Map
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
