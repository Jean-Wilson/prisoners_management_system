<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.bundle.js">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
		}
		body{
			background: #34495E;
		}
		.container{
			width: 390px;
			height: 390px;
			margin: auto;
			background: white;
			padding: 8px;
			margin-top: 15px;
			border-radius: 8px;
		}
		h1{
			text-align: center;
			padding-top: 15px;
			font-weight: bold;
		}
		form{
			width: 300px;
			margin-left: 20px;
		}
	
		form input{
			width: 100%;
        	padding: 6px;
        	border: 1px solid lightgray;
        	border-radius: 3px;
        	margin-top: 20px;
        	font-size: 18px;
        	font-weight: bold;
		}
       p{
        	text-align: ;
        	font-size: 18px;
        }
        p a{
        	color: #7D3C98 ;
        }
	</style>
</head>
<body>
	<div class="container">
		<h1>Create Account</h1>
		<form method="POST">
			<input type="text" name="username" placeholder="Enter username"><br><br>
			<input type="password" name="password" placeholder="Enter password">
			<input type="password" name="confirm_password" placeholder="Confirm-password">
			<br><br>
			<button class="btn btn-outline-success px-4" name="create">create</button>
			<br><br>	
		</form>
		
	</div>

</body>
</html>
<?php
include 'connect.php';
if (isset($_POST['create'])) {
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$confirm_password=$_POST['confirm_password'];

	$insert="INSERT into signup(username,password,confirm_password) values('$username','$password','$confirm_password')";
	$check=mysqli_query($con,$insert);
	if ($check) {
	   echo "<script>alert('account created'),window.location.replace('logins.php')</script>";
	}
	else{
		echo "<script>alert('failed to create account')</script>";
	}
}



?>