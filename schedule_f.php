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
				<a class="navbar-brand" href="index.php">University Admission System(LMS)</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Admin Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">Student Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">Student Register</a>
				</li>
                                <li class="nav-item">
					<a class="nav-link" href="index.php">Teacher Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">Teacher Register</a>
				</li>
			</ul>
		</div>
	</nav><br>
	<span><marquee>This is University Admission System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
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
			<center><h3>Add Schedule</h3></center>
                        <form action="schedule_fw.php" method="post">
				<div class="form-group">
					<label for="name">Enter the id for Schedule:</label> 
                                        <input type="text" name="name" class="form-control" required>
					
                                </div>
                                <div class="form-group">
					<label for="date">Date:</label> 
                                        <input type="date" name="date" class="form-control" required>
                                        </div> 
                                <div class="form-group">
					<label for="timing">Timing:</label> 
                                        <input type="text" name="timing" class="form-control" required> 
                                        </div> 
                                
                                <div class="form-group">
					<label for="link">Interview Link</label> 
                                         <input type="url" name="link" class="form-control" required>
                                         </div>
					
                                        
				
				
				<button type="submit" class="btn btn-primary">Add student</button>
			</form>
	</div>
	</div>
</body>
</html>