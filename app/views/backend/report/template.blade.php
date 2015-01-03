<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="{{ URL::to('/assets/css/report.css') }}" rel="stylesheet" type="text/css">
  </head>
  <body>
		<div class="page-header">
			<h1>ToBeIT@KMITL '58</h1>
			<h3>โครงการติวน้องสอบตรงไอทีลาดกระบัง '58</h3>
		</div>
		<div class="meta">
			<strong>Title : </strong>{{ $title or "" }}<br>
			<strong>Created Date : </strong><?php echo date("F j, Y (g:i A)"); ?><br>
		</div>
		@yield('content')
	</body>
</html>