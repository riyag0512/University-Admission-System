<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$query = "insert into selected values(null,'$_POST[name]')";
	$query_run = mysqli_query($connection,$query);
       $course= "";
	$course_teacher = "";
	$student_name = "";
        $student_email="";
        $teacher_email="";
             $student_id = "";
          $teacher_id = "";
	$issued_id= "";
	
	$query1 = "select * from selected";
           $query6 = "DELETE FROM final_issued ";
           $query6_run = mysqli_query($connection,$query6); 
           $query1_run = mysqli_query($connection,$query1);
					while($row = mysqli_fetch_assoc($query1_run)){
						$issued_id = $row['issued_id'];
						
        
                                                 $query11 = "SELECT * FROM issued_course WHERE id=$issued_id";
                                                 $query_run11 = mysqli_query($connection,$query11);
					while($row1 = mysqli_fetch_assoc($query_run11)){
                                            $course_teacher=$row1['link'];
                                            $teacher_email = $row1['teacher_email'];
                                               $teacher_id = $row1['teacher_id'];
                                               $student_name = $row1['student_name'];
						$student_email = $row1['student_email'];
						$student_id = $row1['student_id'];
						
                                                $course = $row1['course'];
                                               

                                          
                                        }
                                                 
                                          $query5 = "insert into final_issued values(null,'$student_id','$teacher_id','$course','$student_name','$student_email', '$teacher_email',' $course_teacher')";
                                                         $query5_run = mysqli_query($connection,$query5);  
                                                        
                                        }
      
?>
<script type="text/javascript">
	alert(" successfully entered the student tp the course.")
	window.location.href = "view_issued_book_teacher.php";
</script>