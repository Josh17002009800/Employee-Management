<!DOCTYPE html>
<html lang="en">
<head>
	<title>employee management</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
	<div class="nav-bar">
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="employee.php">View Employee</a></li>
  
</ul>
</div>
	<center>
		<h1>Lorenzana Trading</h1>
		<form action="insert.php" method="post">
			
<p>
			<label for="workstatus">Work Status:</label>
			<input type="text" name="workstatus" id="workstatus">		

			<label for="empid">employee id:</label>
			<input type="text" name="empid" id="empid">
			</p>
<br>
<H1>General Information</H1>
			
<p>
			<label for="lastname">Last Name:</label>
			<input type="text" name="lastname" id="lastname">
			
			<label for="firstname">First Name:</label>
			<input type="text" name="firstname" id="firstname">

			<label for="MI">Middle Innitial:</label>
			<input type="text" name="MI" id="MI">
</p>
<p>
			<label for="address">Address:</label>
			<input type="text" name="address" id="address">
			
			<label for="birthdate">Birthday:</label>
			<input type="text" name="birthdate" id="birthdate">
			
			<label for="sex">Sex:</label>
			<input type="text" name="sex" id="sex">
			
			<label for="civilstatus">Civil Status:</label>
			<input type="text" name="civilstatus" id="civilstatus">
			</p>
			<p>	
			<label for="position">Position:</label>
			<input type="text" name="position" id="position">
			
			<label for="salary">Salary:</label>
			<input type="text" name="salary" id="salary">
			
			<label for="email">Email:</label>
			<input type="text" name="email" id="email">
			
			<label for="datehired">Date Hired:</label>
			<input type="text" name="datehired" id="datehired">
			</p>	
			<label for="sss">SSS:</label>
			<input type="text" name="sss" id="sss">
			
			<label for="philhealth">PhilHealth:</label>
			<input type="text" name="philhealth" id="philhealth">
			
	
			<label for="pagibig">PagIbig:</label>
			<input type="text" name="pagibig" id="pagibig">
				
			<label for="tin">TIN:</label>
			<input type="text" name="tin" id="tin">
			</p>
			<br>
			<h1>Incase of Emergency</h1>
	<p>	
			<label for="name">Name:</label>
			<input type="text" name="name" id="name">
			
			<label for="mobile">Mobile Number:</label>
			<input type="text" name="mobile" id="mobile">
			
			<label for="location">Address:</label>
			<input type="text" name="location" id="location">
			
	
			<label for="relemp">Relation to Employee:</label>
			<input type="text" name="relation" id="relemp">
			</p>
	
			<input type="submit" value="Submit" class="btn-submit">
		</form>
	</center>
</body>
</html>
