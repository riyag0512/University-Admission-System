<?php
	require('functions.php');
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$course_name = "";
        $course_email = "";
	$query = "select * from books where book_id = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$course_name = $row['course'];
                $course_email = $row['email'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
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
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="" method="post">
				<div class="form-group">
					<label>Course Name:</label>
					<input type="text" name="course" value="<?php echo $course_name;?>" class="form-control" required="">
				</div>
                        <button class="btn btn-primary" name="update">Update Course</button>

			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>

<?php
	if(isset($_POST['update'])){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$query = "update books set course = '$_POST[course]' where book_id = $_GET[bn]";
		$query_run = mysqli_query($connection,$query);
		header("location:manage_book.php");
	}
?>