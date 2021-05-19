<?php
	require('functions.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">University Admission System</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="view_profile.php">View Profile</a>
						<a class="dropdown-item" href="edit_profile.php"> Edit Profile</a>
						<a class="dropdown-item" href="change_password.php">Change Password</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
			</ul>
		</div>
	</nav>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
	<div class="container-fluid">
		<ul class="nav navbar-nav navbar-center">
			<li class="nav-item">
				<a href="admin_dashboard.php" class="nav-link">Dashboard</a>
			</li>
                        <li class="nav-item">
                            <a href="regteachers.php" class="nav-link">Teachers</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Students</a>
				<div class="dropdown-menu">
                                    <a href="regusers.php" class="dropdown-item">Total Students</a> 
                                    <a href="view_issued_book.php" class="dropdown-item">Shortlisted Students</a>
                                    <a href="view_final_issued.php" class="dropdown-item">Selected Students</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Courses</a>
				<div class="dropdown-menu">
                                    <a href="regbooks.php" class="dropdown-item">Total Courses</a>
                                    <a href="manage_book.php" class="dropdown-item">Manage Courses</a>
				</div>
                        </li>
		</ul>
	</div>
</nav>

	<span><marquee>This is University Admission System. Admission opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
		<div class="row">
		<div class="col-md-4">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Applied Students:</div>
				<div class="card-body">
					<p class="card-text">Total number of Applicants: <?php echo get_user_count();?></p>
					<a href="regusers.php" class="btn btn-danger" target="_blank">View Applied Students:</a>
				</div>
			</div>
		</div>
                    <div class="col-md-4">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Teachers:</div>
				<div class="card-body">
					<p class="card-text">Total number of Teachers: <?php echo get_teacher_count();?></p>
					<a href="regteachers.php" class="btn btn-danger" target="_blank">View  Teachers:</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header"> Courses:</div>
				<div class="card-body">
					<p class="card-text">Total Courses: <?php echo get_book_count();?></p>
					<a href="regbooks.php" class="btn btn-primary" target="_blank">View Courses</a>
				</div>
			</div>
                    <br></br>
		</div>
		
		
		<div class="col-md-4">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Assigned Courses:</div>
				<div class="card-body">
					<p class="card-text">Assigned Courses: <?php echo get_issued_book_count();?></p>
					<a href="view_issued_book.php" class="btn btn-success" target="_blank">View Assigned Courses</a>
				</div>
			</div>
		</div>
                    <div class="col-md-4">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Selected Students:</div>
				<div class="card-body">
					<p class="card-text">Total number of selected Students: <?php echo get_final_issued_count();?></p>
					<a href="view_final_issued.php" class="btn btn-success" target="_blank">View Selected Students</a>
				</div>
			</div>
		</div>
                    <div class="col-md-4">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Schedule</div>
				<div class="card-body">
                                    <br></br>
                                    <a href="view_schedule_a.php" class="btn btn-success" target="_blank">View Schedule</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>