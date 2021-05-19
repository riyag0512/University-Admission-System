<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	
            $course= "";
	$teacher_name = "";
        $teacher_email="";
            // $student_id = "";
              $date = "";
               $time = "";
                $link = "";
//          $teacher_id = "";
//          $id="";
          
	$query = "select * from issued_course1 where student_id = $_SESSION[id] ";
        
//        function select()
//        {
//          $query5 = "insert into final_issued values(null,$student_id,$teacher_id,$course,'$student_name','$student_email', '$teacher_email',' $course_teacher')";
//                                                         $query5_run = mysqli_query($connection,$query5);  
//                                                         
//        $query6 = "insert into final_issued values (2,1,1, '6541', 'Data structure', 'D S Gupta',  '0000-00-00',' 00:00:00')";
//          $query6_run = mysqli_query($connection,$query6);  
//        
//        
//        }
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
				<a href="user_dashboard.php" class="nav-link">Dashboard</a>
			</li>
			
			<li class="nav-item">
                            <a href="view_issued_book.php" class="nav-link">Applied Courses</a>
			</li>
                        <li class="nav-item">
                            <a href="view_final_issued.php" class="nav-link">Allotted Courses</a>
			</li>
		</ul>
	</div>
</nav>

<span><marquee>This is University Admission System. Admission opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
             <br><br>
		<form>
			<table class="table-bordered" width="900px" style="text-align: center">
				<tr>
					<th>Course Name:</th>
					<th>Teacher Name:</th>
                                         <th>Teacher email id:</th>
                                         <th>Date:</th>
                                         <th> Time:</th>
                                         <th>Interview Link:</th><!-- comment -->
                                             
				</tr>
				<?php
                                $query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
                            
					
						
						$course=  $row['course'];
	                                        $date =  $row['date'];
                                                    $teacher_email =  $row['teacher_email'];
                                                      $time =  $row['timing'];
                                                       $teacher_name=  $row['teacher_name'];
                                                     $link =  $row['link'];
                                                 
                                                  
	
				?>
                            
						<tr>
							<td><?php echo $course;?></td>
							<td><?php echo $teacher_name;?></td>
                                                              <td><?php echo $teacher_email;?></td>
                                                               <td><?php echo $date;?></td>
                                                               <td><?php echo $time;?></td>
                                                              <td>  <a href="<?php echo $link;?>" class="btn btn-link" target="_blank">Meet Link</a></td>
                                                             
                                                                  
						</tr>
						<?php
					}
				?>
			</table>
                    <br></br> 
                        
                     
		</form>
	</div>
	<div class="col-md-2"></div>
</div>
	
</body>
</html>