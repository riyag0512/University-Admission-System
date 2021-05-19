<?php
	
	
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$course= "";
	$course_teacher = "";
	$student_name = "";
        $student_email="";
        $teacher_email="";
             $student_id = "";
          $teacher_id = "";
	$query = "select * from users_one";
          $query6 = "DELETE FROM issued_course ";
       $query6_run = mysqli_query($connection,$query6); 
      $query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$student_name = $row['name'];
						$student_email = $row['email'];
						$student_id = $row['student_id'];
						
                                                $course = $row['course'];
                                               
        
                                                 $query1 = "SELECT * FROM books WHERE course=$course";
                                                 $query_run1 = mysqli_query($connection,$query1);
					while($row1 = mysqli_fetch_assoc($query_run1)){
                                            $course_teacher=$row1['name'];
                                            $teacher_email = $row1['email'];
                                               $teacher_id = $row1['teacher_id'];

                                          
                                        }
                                                 
                                          $query5 = "insert into issued_course values(null,'$student_id','$teacher_id','$course','$student_name','$student_email', '$teacher_email',' $course_teacher')";
                                                         $query5_run = mysqli_query($connection,$query5); 
                                        }
				?> 





<!DOCTYPE html>
<html>
<head>
	<title>LMS</title>
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
				<a class="navbar-brand" href="index.php">University Admission System</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="admin/index.php">Admin Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">Student Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup.php">Student Register</a>
				</li>
                                <li class="nav-item">
					<a class="nav-link" href="login_t.php">Teacher Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup_t.php">Teacher Register</a>
				</li>
			</ul>
		</div>
	</nav><br>
	<span><marquee>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4" id="side_bar">
			<h5>Admission Timing</h5>
			<ul>
				<li>Opening Timing: 8:00 AM</li>
				<li>Closing Timing: 8:00 PM</li>
				<li>(Sunday off)</li>
			</ul>
			
		</div>		
		<div class="col-md-8" id="main_content">
			<center><h3>Student Login Form</h3></center>
			<form action="" method="post">
				<div class="form-group">
					<label for="name">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary">Login</button>
			</form>

			<?php
				session_start();
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from users where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] = $row['name'];
								$_SESSION['email'] = $row['email'];
								$_SESSION['id'] = $row['id'];
								header("Location:user_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password</span></center>
								<?php
							}
						}
					}
				}
			?>
	</div>
	</div>
</body>
</html>
