<?php
function isNotEmpty($var) 
{
    

    // Delete this line if you want space(s) to count as not empty
    $var = trim($var);
    
    if(isset($var) === true && $var === '') {
    
        return false;
    
    }
    else {
    
       return true;
    
    }
}

	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	 $query = "insert into teachers values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]','$_POST[course1]','$_POST[course2]','$_POST[course3]','$_POST[course4]','$_POST[course5]')";
	$query_run = mysqli_query($connection,$query);
          $id1="";
        
         $query10 = "SELECT * FROM teachers WHERE email='$_POST[email]' ";
                                                 $query_run10 = mysqli_query($connection,$query10);
					while($row10 = mysqli_fetch_assoc($query_run10)){
                                            $id1=$row10['id'];
                                         
                                        }
        if(isNotEmpty('$_POST[course1]') && strlen('$_POST[course1]')>1)
        {
        $query1 = "insert into books values(null,'$_POST[course1]','$_POST[name]','$_POST[email]',$id1)";
 $query1_run = mysqli_query($connection,$query1);
        }
           if(isNotEmpty('$_POST[course2]')&& strlen('$_POST[course2]')>1)
        {
        $query2 = "insert into books values(null,'$_POST[course2]','$_POST[name]','$_POST[email]',$id1)";
 $query2_run = mysqli_query($connection,$query2);
        }
           if(isNotEmpty('$_POST[course3]')&& strlen('$_POST[course3]')>1)
        {
        $query3 = "insert into books values(null,'$_POST[course3]','$_POST[name]','$_POST[email]',$id1)";
 $query3_run = mysqli_query($connection,$query3);
        }
           if(isNotEmpty('$_POST[course4]')&& strlen('$_POST[course4]')>1)
        {
        $query4 = "insert into books values(null,'$_POST[course4]','$_POST[name]','$_POST[email]',$id1)";
 $query4_run = mysqli_query($connection,$query4);
        }
           if(isNotEmpty('$_POST[course5]')&& strlen('$_POST[course5]')>1)
        {
        $query5 = "insert into books values(null,'$_POST[course5]','$_POST[name]','$_POST[email]',$id1)";
 $query5_run = mysqli_query($connection,$query5);
        }
        $query6 ="DELETE FROM books WHERE course = '' ";
        $query6_run = mysqli_query($connection,$query6);
       
        
        
?>
<script type="text/javascript">
	alert("Registration successfully....You may login now.")
	window.location.href = "login_t.php";
</script>