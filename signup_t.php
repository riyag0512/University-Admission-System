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
			<center><h3>Teacher Registration Form</h3></center>
			<form action="register_t.php" method="post">
				<div class="form-group">
					<label for="name">Full Name:</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Mobile Number:</label>
					<input type="text" name="mobile" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Address:</label>
					<textarea rows="3" cols="40" class="form-control" name="address"></textarea>
				</div>
                             <div class="form-group">
					<label for="name">1 Course id you want to teach:</label>
					<textarea rows="3" cols="40" class="form-control" name="course1"></textarea>
                            </div>
                             <div class="form-group">
					<label for="name">2 Course id you want to teach:</label>
					<textarea rows="3" cols="40" class="form-control" name="course2"></textarea>
                             </div>
                             <div class="form-group">
					<label for="name">3 Course id you want to teach:</label>
					<textarea rows="3" cols="40" class="form-control" name="course3"></textarea>
                             </div>
                             <div class="form-group">
					<label for="name">4 Course id you want to teach:</label>
					<textarea rows="3" cols="40" class="form-control" name="course4"></textarea>
                            </div>
                             <div class="form-group">
					<label for="name">5 Course id you want to teach:</label>
					<textarea rows="3" cols="40" class="form-control" name="course5"></textarea>
                            </div><!-- comment -->
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
	</div>
	</div>
</body>
</html>