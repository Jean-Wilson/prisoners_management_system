<?php
session_start();
if(strlen($_SESSION['uid']==0)){
    header("location:logins.php");
}
else{
	include 'connect.php';
if (isset($_POST['update'])) {
	// code...
    $code = $_SESSION['uid'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$confirm_password=$_POST['confirm_password'];
	$update="UPDATE signup set username='$username',password='$password',confirm_password='$confirm_password' where id='$code'";
	$check=mysqli_query($con,$update);
	if ($check) {
		// code...
		echo "<script>alert('updated'),window.location.replace('dashboard.php')</script>";
        
	}
	else{
			echo "<script>alert('failed to update')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
<body>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .sidebar{
            width: 20%;
            height: 100vh;
            position:fixed;
            margin: 0;
            padding: 0;
            background-color: #2E4053;
        }
        .sidebar a{
            display: block;
            padding: 20px 10px;
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 22px;
        }
        .sidebar a:hover{
            background-color: white;
            color: black;
        }
        .main{
            width: 100%;
            height: 100%;
        }
        .content{
            width: 80%;
            margin-left: 20%;
        }
        .bg{
            background-color:  #BDC3C7;
        }
        .card{
            background-color: #5D6D7E;
            color: white;
        }
    </style>
</body>
<div class="main d-flex">

    <div class="sidebar d-flex flex-column">
        <ul class="nav d-block py-2">
            <li class="nav-item py-2">
                <a class="nav-link" href=""> <i class="fa-solid fa-gauge"></i> <span class="d-none d-sm-inline"> Dashboard </span> </a>
            </li>
            
            <li class="nav-item py-2">
                <a class="nav-link" href="select.php"> <i class="fa-solid fa-users"></i> <span class="d-none d-sm-inline" > Inmates </span> </a>
            </li>

            <li class="nav-item py-2">
                <a class="nav-link" href="vselect.php">  <i class="fa-solid fa-person-walking-luggage"></i>  <span class="d-none d-sm-inline" > Visitors </span> </a>
            </li>
            <li class="nav-item py-2">
                <a class="nav-link" href="stview.php"> <i class="fa-solid fa-clipboard-user"></i> <span class="d-none d-sm-inline" > Staff </span> </a>
            </li>
            <li class="nav-item py-2">
                <a class="nav-link" href="profile.php"> <i class="fa-solid fa-file-lines"></i>  <span class="d-none d-sm-inline"> Profile </span  > </a>
            </li> 
             <li class="nav-item py-2">
                <a class="nav-link" href=""> <i class="fa-solid fa-file-lines"></i>  <span class="d-none d-sm-inline"> Report </span  > </a>
            </li> 
             <li class="nav-item py-2">
                <a class="nav-link" href="logout.php"> <i class="fa-solid fa-right-from-bracket"></i> <span class="d-none d-sm-inline" > Logout </span> </a>
            </li>
        </ul>
    </div>
    <!-- end of side bar -->


<!-- main content -->

<div class="content">

    <!-- profile -->
 
    <div class="w-100  h-70 d-flex  bg d-sm-block shadow-md">

        <div class="row ">
            <div class="col-md-8 col-sm-6 mt-3">
                <h1 class="text-center text-white ">Prisoners Management System</h1>
             
            </div>

            <div class="col-md-4 col-sm-6 mt-3">
                <div class="text-end mx-4">
                       <div class="dropdown text-end">
 


                    <h2> <span class="border py-2 px-3 border-dark rounded-circle"><i class="fa-solid fa-user-tie"></i></span> </h2>
                    <?php
    include('connect.php');
    $code = $_SESSION['uid'];
    $view = mysqli_query($con, "SELECT username FROM signup WHERE id='$code'");
    $data = mysqli_fetch_array($view);
?>
        <h4 class="mt-3"> <?php echo $data['username']; ?> </h4>

   
  </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-5 justify-content-center" >
        <div class="col-md-6 p-3 border rounded shadow-md">
                <form method="POST" action="" >
        <?php
         include 'connect.php';
         $id=$_SESSION['uid'];
         $select="SELECT* from signup where id='$id'";
         $check=mysqli_query($con,$select);
         while ($row=mysqli_fetch_array($check)) {
            // code...
        ?>
        
        <div class="mb-3">
            <label class="fw-bold my-3" >username</label>
            <input class="form-control"  type="text" name="username" value="<?php echo $row['username']?>">
        </div>
        <div class="mb-3">
        <label class="fw-bold my-3" >password</label>
        <input class="form-control"  type="text" name="password" value="<?php echo $row['password']?>">
        </div>
         <div class="mb-3">
        <label class="fw-bold my-3" >confirm-password</label>
        <input class="form-control"  type="text" name="confirm_password" value="<?php echo $row['confirm_password']?>">
    </div>

        <?php
        }
        ?>
        <div class="text-center">
        <button class="btn btn-outline-success px-5" name="update">update</button>
    </div>
    </form>  
        </div>
      
    
    </div>

<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js" ></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js" ></script>
</body>
</html>
<?php
}

?>