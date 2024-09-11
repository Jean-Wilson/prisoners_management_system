
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.container-fluid{
			width: 500px;
			height: 500px;
			background: white;
			margin: auto;
			float: right;
			margin-right: 250px;
			margin-top: 30px;
			border-radius: 14px;
			box-shadow: 6px 6px 4px 6px gray;
		}
		h2{
			text-align: center;
			margin-top: 20px;
		}
	    input{
	    	padding: 10px;
	    	margin-left: 20px;
	    	width: 400px;
	    	margin-top: 30px;
	    	border-radius: 3px;
	    	font-size: 18px;
	    	border: 1px solid lightgray;
	    }
	    .login{
	    	background: #3498DB ;
			width: 123px;
			height: 38px;
			border: none;
			border-radius: 5px;
			color: whitesmoke;
			font-size: 18px;
			font-weight: bold;
			margin-left: 80px;
			cursor: pointer;
			margin-top: 20px;
	    }
	    .login:hover{
	    	background: #003300;
	    	color: white;
	    }
	

	</style>
</head>
<body>
	<div class="container-fluid">
		<h2>Admin Login</h2><br><br>
		<form method="POST">
			<input type="text" name="username" placeholder="Enter Username"><br><br>
			<input type="password" name="password" placeholder="Enter Password"><br><br>
			<button class="login" name="login">Login</button>&nbsp;&nbsp;&nbsp;
			<a href="create.php">Register</a>
			
		</form>
		
	</div>


</body>
</html>
<?php

include 'connect.php';
if (isset($_POST['login'])) {
	// code...

$username=$_POST['username'];
$password=$_POST['password'];

$sql= "SELECT* from signup where username='$username' and password='$password'";
$check=mysqli_query($con,$sql);
$row= mysqli_fetch_array($check);
$numrows= mysqli_num_rows($check);
if($numrows==0){
	echo "<script>alert('failed to login')</script>";
}
else if($numrows > 0){
	$_SESSION['username']=$row['username'];
	header("location: admin.php");
}
}


?>