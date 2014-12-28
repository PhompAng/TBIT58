@include('backend.layouts.parts.header')

<div id="wrapper" class="active">
  <div id="sidebar-wrapper">
	  <ul id="sidebar_menu" class="sidebar-nav">
	    <li class="sidebar-brand"><a id="menu-toggle" href="#">Control Panel<span class="main_icon glyphicon glyphicon-align-justify"></span></a></li>
	  </ul>
    <ul class="sidebar-nav">     
      <li><a href="{{URL::to('/backend')}}">Dashboard<span class="sub_icon glyphicon glyphicon-th"></span></a></li>
      <li><a href="{{URL::to('/backend/attendee')}}">Attendees<span class="sub_icon glyphicon glyphicon-user"></span></a></li>
      <li><a href="{{URL::to('/backend/checkin')}}">Check In<span class="sub_icon glyphicon glyphicon-ok"></span></a></li>
      <li><a href="{{URL::to('/backend/medical')}}">Medical<span class="sub_icon glyphicon glyphicon-plus"></span></a></li>
      <li><a href="{{URL::to('/backend/quiz')}}">Quiz<span class="sub_icon glyphicon glyphicon-book"></span></a></li>
      <li><a href="{{URL::to('/backend/search')}}">Search<span class="sub_icon glyphicon glyphicon-search"></span></a></li>
    </ul>
    <ul class="sidebar-nav" id="sidebar-setting">     
      <li><a href="{{URL::to('/backend/report')}}">Report Generator<span class="sub_icon glyphicon glyphicon-print"></span></a></li>
      <li><a href="{{URL::to('/backend/profile')}}">My Profile<span class="sub_icon glyphicon glyphicon-briefcase"></span></a></li>
      <li><a href="{{URL::to('/backend/logout')}}">Logout<span class="sub_icon glyphicon glyphicon-off"></span></a></li>
    </ul>
  </div>

  <div id="page-content-wrapper">
    <div class="page-content inset">
    	<div id="user_bar">Howdy, {{Auth::user()->name}} {{substr(Auth::user()->surname, 0, 1)}}. <span class="label label-default">Admin</span></div>
    	@yield('content')
    </div>
  </div>
</div>

@include('backend.layouts.parts.footer')