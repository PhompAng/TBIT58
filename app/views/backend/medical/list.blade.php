@extends('backend.layouts.main')

@section('content')

<div class="row">
	<div class="col-md-8">
		<div class="box">
			<div class="page-header">
				<h1>Medical Requirement <small>({{{$attendee_count}}} persons)</small></h1>
			</div>
			<div class="table-responsive">
				<table class="table table-hover table-striped">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Nickname</th>
						<th class="text-center">Health Condition</th>
						<th class="text-center">Food</th>
						<th class="text-center">Medicine</th>
						<th class="text-center">View</th>
					</thead>
					<tbody>
						@foreach ($attendees as $attendee)
						@if (Session::has('information') && Session::get('information')->id == $attendee->id)
						<tr class="info">
						@else
						<tr>
						@endif
							<td>{{str_pad($attendee->id, 6, 0, STR_PAD_LEFT)}}</td>
							<td><strong>{{{$attendee->prefix.$attendee->name}}} {{{$attendee->surname}}}</strong></td>
							<td>{{{$attendee->nickname}}}</td>
							<td class="text-center">
								@if ($attendee->health_condition != "")
									<i class="text-danger glyphicon glyphicon-ok"></i>
								@else
									<i class="text-muted glyphicon glyphicon-minus"></i>
								@endif
							</td>
							<td class="text-center">
								@if ($attendee->food_allergy != "")
									<i class="text-danger glyphicon glyphicon-ok"></i>
								@else
									<i class="text-muted glyphicon glyphicon-minus"></i>
								@endif
							</td>
							<td class="text-center">
								@if ($attendee->med_allergy != "")
									<i class="text-danger glyphicon glyphicon-ok"></i>
								@else
									<i class="text-muted glyphicon glyphicon-minus"></i>
								@endif
							</td>
							<td class="text-center">
								@if (Session::has('information') && Session::get('information')->id == $attendee->id)
								<a href="{{URL::to('/backend/medical').'/'.$attendee->id}}" class="btn btn-xs btn-primary disabled">Details</a>
								@else
								<a href="{{URL::to('/backend/medical').'/'.$attendee->id}}" class="btn btn-xs btn-primary">Details</a>
								@endif
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box">
			<div class="alert alert-info">เลือกข้อมูลทางการแพทย์ที่ต้องการทางด้านซ้าย</div>
			@if (Session::has('information'))
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<td><strong>ID</strong></td>
						<td>{{str_pad(Session::get('information')->id, 6, 0, STR_PAD_LEFT)}}</td>
					</tr>
					<tr>
						<td><strong>Name</strong></td>
						<td>{{{Session::get('information')->prefix.Session::get('information')->name}}} {{{Session::get('information')->surname}}}</td>
					</tr>
					<tr>
						<td><strong>Nickname</strong></td>
						<td>{{{Session::get('information')->nickname}}}</td>
					</tr>
					<tr>
						<td><strong>H.C.</strong></td>
						<td>{{{Session::get('information')->health_condition}}}</td>
					</tr>
					<tr>
						<td><strong>Food</strong></td>
						<td>{{{Session::get('information')->food_allergy}}}</td>
					</tr>
					<tr>
						<td><strong>Med.</strong></td>
						<td>{{{Session::get('information')->med_allergy}}}</td>
					</tr>
				</table>
			</div>
			@endif
		</div>
	</div>
</div>

@stop