<?php
	$conn = mysqli_connect("localhost", "root", "", "student_db");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?> 