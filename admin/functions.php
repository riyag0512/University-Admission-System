<?php
	function get_user_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$user_count = "";
		$query = "select count(*) as user_count from users";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_count = $row['user_count'];
		}
		return($user_count);
	}
        function get_teacher_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$teacher_count = "";
		$query = "select count(*) as teacher_count from teachers";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$teacher_count = $row['teacher_count'];
		}
		return($teacher_count);
	}

	function get_book_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$book_count = "";
		$query = "select count(*) as book_count from books";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$book_count = $row['book_count'];
		}
		return($book_count);
	}

	
	function get_issued_book_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$issued_book_count = "";
		$query = "select count(*) as issued_book_count from issued_course";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$issued_book_count = $row['issued_book_count'];
		}
		return($issued_book_count);
	}
        function get_final_issued_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$issued_book_count = "";
		$query = "select count(*) as issued_book_count from final_issued";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$issued_book_count = $row['issued_book_count'];
		}
		return($issued_book_count);
	}
        function get_schedule_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$schedule_count = "";
		$query = "select count(*) as schedule_count from issued_course1";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$schedule_count = $row['schedule_count'];
		}
		return($schedule_count);
	}
?>