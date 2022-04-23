<!doctype html>
<html lang="en">

<head>
	<title>Dashboard </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/dashvendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/dashvendor/linearicons/style.css')}}">
	
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/dashcss/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/dashcss/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/dashimg/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/dashimg/favicon.png')}}">
	<link rel="stylesheet" href="{{asset('admin/dashvendor/bootstrap/css/bootstrap.min.css')}}">

</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
			<h1 class="img-responsive logo">ELLA Events</h1>

			</div>
	
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						
					
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('admin/dashimg/picture.jpg')}}" class="img-circle" alt="Avatar"> <span>Eya</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						::before
						::before
						::before
						::before
						::before
						::before
						::before
						
						<li><a href="dashindex" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
					
						<li><a href="page-profile" class="">Profile</a></li>
						<li><a href="page-login" class="">Login</a></li>
						<li><a href="page-lockscreen" class="">Lockscreen</a></li>
						<li><a href="ajouter" class="">Add</a></li>			
						<li><a href="tables" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						
					</ul>
				</nav>
			</div>
		
		</div>
		<!-- END LEFT SIDEBAR -->
	

						
					
	
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('admin/dashvendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admin/dashvendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/dashvendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/dashvendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('admin/dashscripts/klorofil-common.js')}}"></script>
	
</body>

</html>
