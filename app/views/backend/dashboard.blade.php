@extends('backend.layouts.main')

@section('content')

<div class="row">
	<div class="col-md-6">
		<div class="box">
			<div class="page-header">
				<h2>Attendee Stats</h2>
			</div>
			<div class="row">
				<div class="col-md-6 text-center"><canvas data-stats="{{ $attendee_stats }}" id="attendee_stats" width="200" height="200" /></div>
				<div class="col-md-6">
					<table class="table table-striped">
						<?php $attendee_stats = json_decode($attendee_stats); ?>
						<thead>
							<th class="text-right">ประเภท</th>
							<th>จำนวน</th>
						</thead>
						<tbody>
							<tr>
								<td class="text-right">ชาย</td>
								<td>{{ $attendee_stats[1] }} คน</td>
							</tr>
							<tr>
								<td class="text-right">หญิง</td>
								<td>{{ $attendee_stats[2] }} คน</td>
							</tr>
							<tr>
								<td class="text-right">ไม่ระบุ</td>
								<td>{{ $attendee_stats[3] }} คน</td>
							</tr>
							<tr>
								<td class="text-right">รวม</td>
								<td>{{ $attendee_stats[0] }} คน</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="box">
			<div class="page-header">
				<h2>Medical Stats</h2>
			</div>
			<div class="text-center">
				<canvas id="medical_stats" data-stats="{{ $medical_stats }}" width="400" height="200" />
			</div>
		</div>
	</div>
	<div class="col-xs-12">
		<div class="box">
			<div class="page-header">
				<h2>Attending Stats</h2>
			</div>
			<div class="row">
				<div class="col-md-6 text-center"><canvas id="attending_stats" data-goal="{{ $attending_info }}" data-real="{{ $attending_real }}" width="400" height="200" /></div>
				<div class="col-md-6">
					<table class="table table-striped">
						<thead>
							<th></th>
							<th class="text-center">Day 1</th>
							<th class="text-center">Day 2</th>
							<th class="text-center">Day 3</th>
							<th class="text-center">Day 4</th>
							<th class="text-center">Day 5</th>
							<th class="text-center">Day 6</th>
						</thead>
						<?php $attending_info = json_decode($attending_info); $attending_real = json_decode($attending_real); ?>
						<tbody>
							<tr>
								<td class="text-right">แจ้ง</td>
								<td class="text-center">{{ $attending_info[0] }}</td>
								<td class="text-center">{{ $attending_info[1] }}</td>
								<td class="text-center">{{ $attending_info[2] }}</td>
								<td class="text-center">{{ $attending_info[3] }}</td>
								<td class="text-center">{{ $attending_info[4] }}</td>
								<td class="text-center">{{ $attending_info[5] }}</td>
							</tr>
							<tr>
								<td class="text-right">มา</td>
								<td class="text-center">{{ $attending_real[0] }}</td>
								<td class="text-center">{{ $attending_real[0] }}</td>
								<td class="text-center">{{ $attending_real[0] }}</td>
								<td class="text-center">{{ $attending_real[0] }}</td>
								<td class="text-center">{{ $attending_real[0] }}</td>
								<td class="text-center">{{ $attending_real[0] }}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@stop

@section('js')

{{ HTML::script('assets/js/Chart.min.js') }}
{{ HTML::script('assets/js/dashboard.js') }}

@stop