<?php
	require 'conns.php';
	
	if(ISSET($_POST['register'])){
		$lastname = $_POST['lastname'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$course = $_POST['course'];
		$year = $_POST['year'];
		$section = $_POST['section'];
		
		mysqli_query($conn, "INSERT INTO `student_profile` VALUES('', '$lastname', '$firstname', '$middlename', '$course', '$year', '$section')") or die(mysqli_error());
		echo "<h3 class='text-success'>Student account registered!</h3>";
	}
?>
