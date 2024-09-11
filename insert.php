<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			font-family: monospace;
		}
		body{
			background: lightgray;
		}
		.container{
			width: 360px;
			height: 590px;
			background: white;
			margin: auto;
			border-radius: 12px;
			margin-top: 10px;
			box-shadow: 0px 4px 10px gray;
		}
		h2{
			text-align: center;
			color: #3498DB  ;
			padding-top: 10px;
			font-weight: 600;
		}
		form{
			width: 300px;
			margin-left: 20px;
		}
		form label{
			margin-top: 20px;
			font-size: 18px;
			/*font-weight: bold;*/
		}
		form input{
			width: 300px;
			padding: 5px;
		    border: 1px solid lightgray;
			border-radius: 4px;
			background: biege;
		}
		.submit{
			width: 310px;
			height: 30px;
			background: #7D6608;
			border: none;
			border-radius: 15px;
			margin-top: 20px;
			font-size: 18px;
			color: white;
			cursor: pointer;
		}
		.submit:hover{
			background: transparent;
			border: 1px solid blue;
			color: blue;
			transition: .1s ease;
	/*		transform: translateY(10px);*/
		}
	</style>
	<title></title>
</head>
<body>
	<div class="container">
		<h2>Record Prisoner</h2><br><br>
		<form method="POST">
			<label>firstname</label>
			<input type="text" name="firstname" required>
			<label>last name</label>
			<input type="text" name="lasttname" required>
			<label>gender</label>
			<input type="text" name="gender" required>
			<label>age</label>
			<input type="text" name="age" required>
			<label>marital-status</label>
			<input type="text" name="marital_status" required>
			<label>nationality</label>
			<input type="text" name="nationality" required>
			<label>crime</label>
			<input type="text" name="crime" required>
			<label>sentence-date</label>
			<input type="date" name="sentence_date" required>
			<label>release-date</label>
			<input type="date" name="release_date" required>
			<button class="submit" name="submit">submit</button>
			
		</form>
		<br>
		
	</div>

</body>
</html>
<?php
include 'connect.php';
if (isset($_POST['submit'])) {
	
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lasttname'];
   $gender=$_POST['gender'];
   $age=$_POST['age'];
   $marital_status=$_POST['marital_status'];
   $nationality=$_POST['nationality'];
   $crime=$_POST['crime'];
   $sentence_date=date('Y-m-d');
   $release_date=date('Y-m-d');

   $insert="INSERT into inmates(firstname,lastname,gender,age,marital_status,nationality,crime,sentence_date,release_date) values('$firstname','$lastname','$gender','$age','$marital_status','$nationality','$crime','$sentence_date','$release_date')";
   $check=mysqli_query($con,$insert);

   if ($check) {
   	   echo "<script>alert('Recorded Successfully'),window.location.replace('select.php')</script>";

   }
   else{
   	echo "<script>alert('Data not recorded')</script>";
   }





}





?>