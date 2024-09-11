<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
		}
		body{
			background: lightgray;
		}
		.container{
			width: 400px;
			height: 490px;
			margin: auto;
			border-radius: 10px;
			background: beige;
			margin-top: 20px;
			box-shadow: 2px 4px 4px 10px gray;

		}
		form{
			width: 300px;
			margin-left: 30px;
		}
		form label{
            display: flex;
            margin-top: 20px;
            font-size: 18px;
		}
		form input{
			width: 100%;
			padding: 7px;
			border: 1px solid lightgray;
			border-radius: 4px;
			font-size: 18px;
		}
		h2{
			text-align: center;
			padding-top: 20px;
		}
		.submit{
			width: 315px;
			height: 30px;
			margin-top: 20px;
			border: none;
			border-radius: 20px;
			background: #7D6608;
			font-size: 18px;
			color: whitesmoke;
			cursor: pointer;
		}
		.submit:hover{
			background: transparent;
			border: 1px solid green;
			color: #D68910;
		}
	</style>
</head>
<body>
 <div class="container">
 	<h2>Record Visitor</h2>
 	<form method="POST">
 		<label>Names</label>
 		<input type="text" name="names" required>
 		<label>Relationship-with-inmate</label>
 		<input type="text" name="relationship" required>
 		<label>Visit-date</label>
 		<input type="date" name="visit_date" required>
 		<label>Duration</label>
 		<input type="text" name="duration" required>
 		<button class="submit" name="submit">Submit</button>
 		
 	</form>
 	
 </div>
</body>
</html>
<?php
include 'connect.php';
if (isset($_POST['submit'])) {
	
	$names=$_POST['names'];
	$relationship=$_POST['relationship'];
	$visit_date=date('Y-m-d');
	$duration=$_POST['duration'];

	$insert="INSERT into visits(names,relationship,visit_date,duration) values('$names','$relationship','$visit_date','$duration')";
	$check=mysqli_query($con,$insert);
	if ($check) {
		echo "<script>alert('Recorded Successfully'),window.location.replace('vselect.php')</script>";
	}
	else{
		echo "<script>alert('Data not insert')</script>";
	}



}




?>
