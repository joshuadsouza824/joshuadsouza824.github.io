<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand">Student Registration Form</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">REGISTRATION</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-6">
			<form method="POST" action="">

				<div class="form-group">
					<label>Lastname</label>
					<input type="text" class="form-control" name="lastname" required="required"/>
				</div>
				<div class="form-group">
					<label>Firstname</label>
					<input type="text" class="form-control" name="firstname" required="required"/>
				</div>
				<div class="form-group">
					<label>Middlename</label>
					<input type="text" class="form-control" name="middlename" required="required"/>
				</div>



				<div class="form-group">
					<label>Course</label>
					<select name="course" class="form-control" required="required">
						<option value="None">None</option>
						<option value="Bachelor of Science in Architecture(BSA)">Bachelor of Science in Architecture(BSA)</option>
						<option value="Bachelor of Science in Civil Engineering(BSCE)">Bachelor of Science in Civil Engineering(BSCE)</option>
						<option value="Bachelor of Science in Electrical Engineering(BSEE)">Bachelor of Science in Electrical Engineering(BSEE)</option>
						<option value="Bachelor of Science in Information Technology(BSIT)">Bachelor of Science in Information Technology(BSIT)</option>
						<option value="Bachelor of Science in Midwifery(BSM)">Bachelor of Science in Midwifery(BSM)</option>
						<option value="Bachelor of Science in Nursing(BSN)">Bachelor of Science in Nursing(BSN)</option>
					</select>
				</div>


				<div class="form-group">
					<label>Year</label>
					<select name="year" class="form-control" required="required">
						<option value="None">None</option>
						<option value="1st Year">1st Year</option>
						<option value="2nd Year">2nd Year</option>
						<option value="3rd Year">3rd Year</option>
						<option value="4th Year">4th Year</option>
						<option value="5th Year">5th Year</option>
					</select>
				</div>

				<div class="form-group">
					<label>Section</label>
					<select name="section" class="form-control"	required="required">
						<option value="None">None</option>
						<option value="Section A">Section A</option>
						<option value="Section B">Section B</option>
						<option value="Section C">Section C</option>
						<option value="Section D">Section D</option>
					</select>
				</div>
				<p><input type="checkbox" id="toggle"/> I agree with the terms and conditions.</p>
				<button class="btn btn-primary" id="register" name="register">Register</button>
			</form>
		</div>


		<div class="col-md-6">
		<?php include 'regis.php'?>
		</div>


	</div>


<script>
var checkbox = document.getElementById("toggle");
var register = document.getElementById("register");
register.disabled = true;
checkbox.onchange = function(){
	register.disabled = !this.checked;
}
</script>

	
</body>
</html>
