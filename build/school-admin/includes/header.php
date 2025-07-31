<?php
	ob_start();
	require_once "../functions.php";
	if(!is_admin()) {
		header("Location: ../login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>School Admin</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-datepicker.css" rel="stylesheet">
		<link href="css/sb-admin.css" rel="stylesheet">
		<script src="https://kit.fontawesome.com/a2ada4947c.js" crossorigin="anonymous"></script>
		<script src="js/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="//www.gstatic.com/charts/loader.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Learn2Earn Hub</a>
				</div>
				
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav side-nav">
						<li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
						<li><a href="class.php"><i class="fa fa-home"></i> Classes</a></li>
						<li><a href="class_time.php"><i class="fa fa-clock-o"></i> Timetable</a></li>
						<li><a href="sections.php"><i class="fa fa-code-fork"></i> Section</a></li>
						<li><a href="subjects.php"><i class="fa fa-book"></i> Subjects</a></li>
						<li><a href="assign_teacher.php"><i class="fa fa-user"></i> Assignment of Teachers</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Teachers <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="teachers.php">All Teachers</a></li>
								<li><a href="teachers.php?action=add_new">Add Teacher</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> Students <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="students.php">All Students</a></li>
								<li><a href="students.php?action=add_new">Add New Student</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Notifications <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="notices.php">All Notifications</a></li>
								<li><a href="notices.php?action=add_new">Add New Notification</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-calendar"></i> Events <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="events.php">All Events</a></li>
								<li><a href="events.php?action=add_new">Add New Event</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book"></i> Pages <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="content_about.php">About the School</a></li>
								<li><a href="content_teacher.php">Teachers' Page</a></li>
								<li><a href="content_gallery.php">Gallery Page</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i> School Information <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="content_school_name.php">Name of the School</a></li>
								<li><a href="content_school_address.php">School Address</a></li>
								<li><a href="content_logo.php">School Emblem</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right navbar-user">
						<li><a href="../index.php" target="_blank">Back to the Page</a></li>
						<li class="dropdown user-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo get_name_by_session(); ?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<!-- <li><a href="admin_profile.php"><i class="fa fa-user"></i>  Profile</a></li> -->
								<li class="divider"></li>
								<li><a href="../logout.php"><i class="fa fa-power-off"></i> Log out</a></li>
							</ul>
						</li>
					</ul>
					</div>
				</nav>

				<div id="page-wrapper">
					<div class="row">
						<div class="col-lg-12">