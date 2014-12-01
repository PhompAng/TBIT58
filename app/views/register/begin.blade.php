@extends('layouts.main')

@section('content')

<section id="register">
	<div class="container">
		<div class="card">
			<div class="row">
				<div class="col-xs-12 text-center"><img src="{{URL::to('/assets/text/heading_register.svg')}}" class="section-heading" alt=""></div>
				<div class="col-md-8 col-md-offset-2">
					<dl>
						<dt><span class="glyphicon glyphicon-calendar glyphicon-sm"></span> <h2>วันที่มีการติว</h2></dt>
						<dd class="text-indent">วันที่ 10, 11, 24, 25, 31 มกราคม 2558 ส่วนวันที่ 1 กุมภาพันธ์ 2558 เป็น Quiz (แบบฝึกหัด) ของเนื้อหาที่ติวมาทั้งหมด</dd>
						<dt><span class="glyphicon glyphicon-time glyphicon-sm"></span> <h2>เวลา</h2></dt>
						<dd class="text-indent">เริ่มติว 9.00 น. ถึง 16.00 น. (พักกลางวัน 12.00-12.30 น.)</dd>
						<dt><span class="glyphicon glyphicon-map-marker glyphicon-sm"></span> <h2>สถานที่</h2></dt>
						<dd class="text-indent">คณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง <a href="{{URL::to('/#transportation')}}">(แผนที่)</a></dd>
						<dt><span class="glyphicon glyphicon-user glyphicon-sm"></span> <h2>การแต่งกาย</h2></dt>
						<dd class="text-indent">ชุดไปรเวทสุภาพ กางเกงขายาว รองเท้าหุ้มส้นเท่านั้น <span class="text-danger">(ห้ามรองเท้าแตะ)</span></dd>
						<dt><span class="glyphicon glyphicon-pencil glyphicon-sm"></span> <h2>อุปกรณ์ที่ต้องนำมา</h2></dt>
						<dd class="text-indent">สมุดจด ปากกา ดินสอ ยางลบ เอกสารประกอบ (หากสะดวกพิมพ์มาเอง)</dd>
					</dl>
				</div>
				<div class="col-xs-12 text-center">
					<a href="{{URL::to('/register/create')}}" class="btn btn-primary btn-register">เริ่มลงทะเบียน!</a>
				</div>
			</div>
		</div>
	</div>
</section>
		
						
						
						
						
						

@stop