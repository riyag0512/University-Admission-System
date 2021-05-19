<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$query = "insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]','$_POST[course1]','$_POST[course2]','$_POST[course3]','$_POST[course4]','$_POST[course5]','$_POST[course_marks]')";
	$query_run = mysqli_query($connection,$query);
        $id1="";
        
         $query10 = "SELECT * FROM users WHERE email='$_POST[email]' ";
                                                 $query_run10 = mysqli_query($connection,$query10);
					while($row10 = mysqli_fetch_assoc($query_run10)){
                                            $id1=$row10['id'];
                                         
                                        }
          $query1 = "insert into users_one values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]','$_POST[course1]',$id1)";
 $query1_run = mysqli_query($connection,$query1);
  $query2 = "insert into users_one values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]','$_POST[course2]',$id1)";
 $query2_run = mysqli_query($connection,$query2);
  $query3 = "insert into users_one values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]','$_POST[course3]',$id1)";
 $query3_run = mysqli_query($connection,$query3);
  $query4 = "insert into users_one values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]','$_POST[course4]',$id1)";
 $query4_run = mysqli_query($connection,$query4);
  $query5 = "insert into users_one values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]','$_POST[course5]',$id1)";
 $query5_run = mysqli_query($connection,$query5);
  $query6 ="DELETE FROM users_one WHERE course = '' ";
        $query6_run = mysqli_query($connection,$query6);
        
         
?>
<script type="text/javascript">
	alert("Registration successfully....You may login now.")
	window.location.href = "index.php";
</script>