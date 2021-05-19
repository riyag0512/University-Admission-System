<?php
	session_start();
	function get_user_issue_book_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$user_issue_book_count = 0;
		$query = "select count(*) as user_issue_book_count from issued_course where teacher_id = $_SESSION[id]";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_issue_book_count = $row['user_issue_book_count'];
	}
	return($user_issue_book_count);
}
function get_user_issue_book_countt(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$user_issue_book_count = 0;
		$query = "select count(*) as user_issue_book_count from final_issued where teacher_id = $_SESSION[id]";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_issue_book_count = $row['user_issue_book_count'];
	}
	return($user_issue_book_count);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
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
				<a class="navbar-brand" href="index.php">University Admission System(LMS)</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="view_profile_teacher.php">View Profile</a>
						<a class="dropdown-item" href="edit_profile_t.php"> Edit Profile</a>
						<a class="dropdown-item" href="change_password.php">Change Password</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
			</ul>
		</div>
	</nav>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
	<div class="container-fluid">
		<ul class="nav navbar-nav navbar-center">
			<li class="nav-item">
				<a href="teacher_dashboard.php" class="nav-link">Dashboard</a>
			</li>
			
			<li class="nav-item">
                            <a href="view_issued_book_teacher.php" class="nav-link">Students Applied</a>
			</li> 
                        <li class="nav-item">
                            <a href="view_final_issued_teacher.php" class="nav-link">Selected Students</a>
			</li>
		</ul>
	</div>
</nav>

<span><marquee>This is University Admission System. Admission opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
<div class="row"  >
		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Assigned Students for interview:</div>
				<div class="card-body">
					<p class="card-text">No. of Students Assigned: <?php echo get_user_issue_book_count();?> </p>
					<a href="view_issued_book_teacher.php" class="btn btn-danger" target="_blank">View Assigned Courses</a>
				</div>
			</div>
                </div>
                    <div class="card bg-light" style="width: 300px">
				<div class="card-header">Final students in course:</div>
				<div class="card-body">
					<p class="card-text">No. of Students to teach: <?php echo get_user_issue_book_countt();?> </p>
					<a href="view_final_issued_teacher.php" class="btn btn-danger" target="_blank">View Allotted Courses</a>
				</div>
			</div>
		</div>
		
	
</body>
</html>