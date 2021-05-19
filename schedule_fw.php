<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$query = "insert into sshedule values(null,'$_POST[name]','$_POST[date]','$_POST[timing]','$_POST[link]')";
	$query_run = mysqli_query($connection,$query);
       $course= "";
	$teacher_name = "";
	$student_name = "";
        $student_email="";
        $teacher_email="";
             $student_id = "";
          $teacher_id = "";
	$date= "";
        $timing= "";
        $link= "";
	
	$query1 = "select * from sshedule";
//           $query6 = "DELETE FROM final_issued ";
//           $query6_run = mysqli_query($connection,$query6); 
           $query1_run = mysqli_query($connection,$query1);
					while($row = mysqli_fetch_assoc($query1_run)){
						$issued_id = $row['issued_id'];
						
        
                                                 $query11 = "SELECT * FROM issued_course WHERE id=$issued_id";
                                                 $query_run11 = mysqli_query($connection,$query11);
					while($row1 = mysqli_fetch_assoc($query_run11)){
                                            $teacher_email = $row1['teacher_email'];
                                               $teacher_id = $row1['teacher_id'];
                                               $teacher_name = $row1['link'];
                                               $student_name = $row1['student_name'];
						$student_email = $row1['student_email'];
						$student_id = $row1['student_id'];
						
                                                $course = $row1['course'];
                                               
//                                                $date= $row1['date'];
//                                                $timing= $row1['timing'];
//                                                $link= $row1['link'];
                                          
                                        }
                                                 
                                          $query5 = "insert into issued_course1 values(null,'$student_id','$teacher_id','$course','$student_name','$student_email', '$teacher_email' , '$teacher_name' ,'$_POST[date]','$_POST[timing]','$_POST[link]')";
                                                         $query5_run = mysqli_query($connection,$query5);  
                                           
                                        }
      
?>
<script type="text/javascript">
	alert(" successfully entered the schedule ")
	window.location.href = "view_schedule_t.php";
</script>