<!-- Header -->
@if(!Route::is(['index-one','index-two','index-three','index-four']))
<div class="header">
@endif	
@if(Route::is(['index-one']))
<div class="header header-one">	
@endif	
@if(Route::is(['index-two']))
<div class="header header-two">
@endif
@if(Route::is(['index-three']))
<div class="header header-three">
@endif
@if(Route::is(['index-four']))
<div class="header header-four">
@endif	
@if(Route::is(['index-two','index-three']))
<div class="container">
@endif	
	<!-- Logo -->
		<div class="header-left active">
		<a href="{{url('index')}}" class="logo logo-normal">
			<img src="{{ URL::asset('assets/img/logo.png')}}"  alt="">
		</a>
		
		<a href="{{url('index')}}" class="logo logo-white">
			<img src="{{URL::asset('assets/img/logo-white.png')}}"  alt="">
		</a> 
		<a href="{{url('index')}}" class="logo-small">
			<img src="{{ URL::asset('assets/img/logo-small.png')}}"  alt="">
		</a>
		@if(!Route::is(['index-one','index-three','index-four']))
		<a id="toggle_btn" href="javascript:void(0);">
		</a>
		@endif
		
	</div>
	<!-- /Logo -->
	
	<a id="mobile_btn" class="mobile_btn" href="#sidebar">
		<span class="bar-icon">
			<span></span>
			<span></span>
			<span></span>
		</span>
	</a>
	@if(Route::is(['index-two']))
	<div class="top-nav-search">
								
		<a href="javascript:void(0);" class="responsive-search">
			<i class="fa fa-search"></i>
		</a>
		<form action="#">
			<div class="searchinputs">
				<input type="text" placeholder="Search Here ...">
				<div class="search-addon">
					<span><img src="{{URL::asset('assets/img/icons/closes.svg')}}" alt="img"></span>
				</div>
			</div>
			<a class="btn"  id="searchdiv"><img src="{{URL::asset('assets/img/icons/search.svg')}}" alt="img"></a>
		</form>
	</div>
	@endif
	<!-- Header Menu -->
	<ul class="nav user-menu">
		@if(!Route::is(['index-two']))
		<!-- Search -->
		<li class="nav-item">
			<div class="top-nav-search">
				<a href="javascript:void(0);" class="responsive-search">
					<i class="fa fa-search"></i>
				</a>
				<form action="#">
						<div class="searchinputs">
							<input type="text" placeholder="Search Here ...">
							<div class="search-addon">
								<span><img src="{{ URL::asset('assets/img/icons/closes.svg')}}" alt="img"></span>
							</div>
						</div>
						<a class="btn"  id="searchdiv"><img src="{{ URL::asset('assets/img/icons/search.svg')}}" alt="img"></a>
				</form>
			</div>
		</li>
		<!-- /Search -->
		@endif
		<!-- Flag -->
		<li class="nav-item dropdown has-arrow flag-nav">
			<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
				<img src="{{ URL::asset('assets/img/flags/us1.png')}}" alt="" height="20">
			</a>
			<div class="dropdown-menu dropdown-menu-right">
				<a href="javascript:void(0);" class="dropdown-item">
					<img src="{{ URL::asset('assets/img/flags/us.png')}}" alt="" height="16"> English
				</a>
				<a href="javascript:void(0);" class="dropdown-item">
					<img src="{{ URL::asset('assets/img/flags/fr.png')}}" alt="" height="16"> French
				</a>
				<a href="javascript:void(0);" class="dropdown-item">
					<img src="{{ URL::asset('assets/img/flags/es.png')}}" alt="" height="16"> Spanish
				</a>
				<a href="javascript:void(0);" class="dropdown-item">
					<img src="{{ URL::asset('assets/img/flags/de.png')}}" alt="" height="16"> German
				</a>
			</div>
		</li>
		<!-- /Flag -->
	
		<!-- Notifications -->
		<li class="nav-item dropdown">
			<a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
				<img src="{{ URL::asset('assets/img/icons/notification-bing.svg')}}"   alt="img"> <span class="badge rounded-pill">4</span>
			</a>
			<div class="dropdown-menu notifications">
				<div class="topnav-dropdown-header">
					<span class="notification-title">Notifications</span>
					<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
				</div>
				<div class="noti-content">
					<ul class="notification-list">
						<li class="notification-message">
							<a href="{{url('activities')}}">
								<div class="media d-flex">
									<span class="avatar flex-shrink-0">
										<img alt="" src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}">
									</span>
									<div class="media-body flex-grow-1">
										<p class="noti-details"><span class="noti-title">{{Auth::user()->name}}</span> added new task <span class="noti-title">Patient appointment booking</span></p>
										<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
									</div>
								</div>
							</a>
						</li>
						<li class="notification-message">
							<a href="{{url('activities')}}">
								<div class="media d-flex">
									<span class="avatar flex-shrink-0">
										<img alt="" src="{{ URL::asset('assets/img/profiles/avatar-03.jpg')}}">
									</span>
									<div class="media-body flex-grow-1">
										<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
										<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
									</div>
								</div>
							</a>
						</li>
						<li class="notification-message">
							<a href="{{url('activities')}}">
								<div class="media d-flex">
									<span class="avatar flex-shrink-0">
										<img alt="" src="{{ URL::asset('assets/img/profiles/avatar-06.jpg')}}">
									</span>
									<div class="media-body flex-grow-1">
										<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
										<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
									</div>
								</div>
							</a>
						</li>
						<li class="notification-message">
							<a href="{{url('activities')}}">
								<div class="media d-flex">
									<span class="avatar flex-shrink-0">
										<img alt="" src="{{ URL::asset('assets/img/profiles/avatar-17.jpg')}}">
									</span>
									<div class="media-body flex-grow-1">
										<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
										<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
									</div>
								</div>
							</a>
						</li>
						<li class="notification-message">
							<a href="{{url('activities')}}">
								<div class="media d-flex">
									<span class="avatar flex-shrink-0">
										<img alt="" src="{{ URL::asset('assets/img/profiles/avatar-13.jpg')}}">
									</span>
									<div class="media-body flex-grow-1">
										<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
										<p class="noti-time"><span class="notification-time">2 days ago</span></p>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="topnav-dropdown-footer">
					<a href="{{url('activities')}}">View all Notifications</a>
				</div>
			</div>
		</li>
		<!-- /Notifications -->
		

		<li class="nav-item dropdown has-arrow main-drop">
			<a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
				<span class="user-img"><img src="{{ URL::asset('assets/img/profiles/avator1.jpg')}}" alt="">
				<span class="status online"></span></span>
			</a>
			<div class="dropdown-menu menu-drop-user">
				<div class="profilename">
					<div class="profileset">
						<span class="user-img"><img src="{{ URL::asset('assets/img/profiles/avator1.jpg')}}" alt="">
						<span class="status online"></span></span>
						<div class="profilesets">
							<h6>{{Auth::user()->name}}</h6>
							<h5>Admin</h5>
						</div>
					</div>
					<hr class="m-0">
					<a class="dropdown-item" href="{{url('profile')}}"> <i class="me-2"  data-feather="user"></i> My Profile</a>
					<a class="dropdown-item" href="{{url('generalsettings')}}"><i class="me-2" data-feather="settings"></i>Settings</a>
					<hr class="m-0">
					<a class="dropdown-item logout pb-0" href="{{url('signin')}}"><img src="{{ URL::asset('assets/img/icons/log-out.svg')}}" class="me-2" alt="img">Logout</a>
				</div>
			</div>
		</li>
	</ul>
	<!-- /Header Menu -->
	
	<!-- Mobile Menu -->
	<div class="dropdown mobile-user-menu">
		<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		<div class="dropdown-menu dropdown-menu-right">
			<a class="dropdown-item" href="{{url('profile')}}">My Profile</a>
			<a class="dropdown-item" href="{{url('generalsettings')}}">Settings</a>
			<a class="dropdown-item" href="{{url('signin')}}">Logout</a>
		</div>
	</div>
	<!-- /Mobile Menu -->
	@if(Route::is(['index-three']))
	</div>
	@endif	
</div>

<!-- Header -->