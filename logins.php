<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<style type="text/css">
	</style>
</head>
<body>

	<div class="container-fluid">
		<div class="row m-5 align-items-center justify-content-center">
			<div class="col-md-6 col-sm-12 border py-5 px-5 rounded-5 shadow">
				<div class="text-center">
					<h3 class="fw-bold">Admin Login</h3>
					<h3> <i class="fa-2xl fa-solid fa-user-tie border py-5 px-4 rounded-circle"></i> </h3>
				</div>
				<form action="" method="POST">
					<div class="mb-3 mt-3">
						<label class="fw-bold">Username</label>
						<input class="form-control" type="text" name="username" placeholder="Enter Username" autocomplete="off" required>
					</div>
					<div class="mb-3">
						<label class="fw-bold">Password</label>
						<input class="form-control" type="password" name="password" placeholder="Enter Password" autocomplete="off" required>
					</div>

					<!-- login btn -->
					<div class="text-center">
						<button type="submit" name="signin" class="btn btn-outline-success px-5 fw-bold">Sign in <i class="fa-solid fa-right-to-bracket"></i></button>
					</div>
				</form>

				
			</div>
		</div>
	</div>



<!-- php codes -->

<?php
include 'connect.php';
if (isset($_POST['signin'])) {
	// code...
	$use=$_POST['username'];
	$pass=$_POST['password'];

	$sql=mysqli_query($con,"SELECT id FROM signup WHERE username='$use' AND password='$pass'");
	// $check=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($sql);
	// $numrows=mysqli_num_rows($row);
	if ($row==0) {
		echo "<script>alert('failed to login')</script>";
	}
	else if($row > 1){
         $_SESSION['uid']=$row['id'];
          header("location: dashboard.php");
         // echo "Welcome Mr ".$use;

	}

}

?>

	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>