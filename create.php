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
		.container-fluid{
			width: 500px;
			height: 500px;
			background: white;
			margin: auto;
			margin
			margin-right: 250px;
			margin-top: 60px;
			border-radius: 14px;
			box-shadow: 6px 6px 4px 6px gray;
		}
		h2{
			text-align: center;
			padding-top: 20px;
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
		<h2>Create Account</h2><br><br>
		<form method="POST">
			<input type="text" name="username" placeholder="Enter Username" required><br><br>
			<input type="password" name="password" placeholder="Enter Password" required><br><br>
			<input type="password" name="confirm_password" placeholder="Confirm-Password" required><br><br>
			<button class="login" name="submit">submit</button>
			
		</form>
		
	</div>


</body>
</html>
<?php
include 'connect.php';
if (isset($_POST['submit'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$confirm_password=$_POST['confirm_password'];
	$insert= "INSERT into signup(username,password,confirm_password) values('$username','$password','$confirm_password')";
	$check= mysqli_query($con,$insert);
	if (isset($check)) {
		echo "<script>alert('created account'),window.location.replace('login.php')</script>";
	}
	else{
		echo "<script>alert('failed to create account')</script>";
	}
}




?>