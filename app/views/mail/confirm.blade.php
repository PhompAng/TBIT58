<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body style="font-size: 13px; line-height: 1.7em; font-family: Tahoma; margin: 0;">
	<div style="width: 100%; background: url('http://tobe.it.kmitl.ac.th/2014/assets/img/bg@2x.png'); background-size: 554px 480px; color: #ddd; padding-bottom: 25px;">
		<div style="text-align: center;">
			<img width="40%" style="margin-top: 20px; margin-bottom:20px;" src="http://tobe.it.kmitl.ac.th/2014/assets/img/logo.png" alt="">
		</div>
		<div style="background: rgba(255, 255, 255, 0.2); width: 85%; margin: 0 auto 0 auto; padding: 20px; text-align: center;">
			<span style="margin: 0; padding: 0; font-size:30px; font-weight:bold;">เจอกันวันติว!</span>
			<div style="text-align: left;">
				<p>สวัสดีครับ น้อง{{$firstname or ''}} {{$lastname or ''}}</p>
				<p>ขอบคุณที่ให้ความสนใจและลงทะเบียนเข้าร่วมโครงการ <strong>ติวน้องสอบตรงไอทีลาดกระบัง '58 (ToBeIT@KMITL '58)</strong> นะครับ</p>
				<p>อย่าลืมเข้าไป Join กลุ่ม <a style="color: #ddd;" href="https://www.facebook.com/groups/kmitltobeit/">ToBeIT@KMITL</a> บน Facebook นะครับ ^^</p>
				<p style="padding: 10px; background: #00bcd4; color: #fff; font-size: 20px; text-align:center;">เลขที่ใบลงทะเบียนของน้องคือ : <strong>{{$attendee_id or ''}}</strong></p>
				<span>โปรดจำเลขที่ใบลงทะเบียนเพื่อใช้ในการรายงานตัวเมื่อถึงคณะนะครับ (หากจำไม่ได้ให้แจ้งชื่อ-นามสกุลกับพี่ๆ ฝ่ายลงทะเบียนแทนครับ)</span>
				<p>แล้วเจอกันนะครับ!</p>
			</div>
		</div>
	</div>
</body>
</html>