
<?php
session_start();
if (strlen($_SESSION['uid']==0)) {
	// code...
	header("location:logout.php");
}
else{

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Visitors</title>
		   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
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

	</style>
</head>
<body>

	<div class="main d-flex">

    <div class="sidebar d-flex flex-column">
        <ul class="nav d-block py-2">
            <li class="nav-item py-2">
                <a class="nav-link" href="dashboard.php"> <i class="fa-solid fa-indent"></i> <span class="d-none d-sm-inline"> Dashboard </span> </a>
            </li>
            
      <li class="nav-item py-2">
                <a class="nav-link" href="select.php"> <i class="fa-solid fa-users"></i> <span class="d-none d-sm-inline" > Inmates </span> </a>
            </li>

            <li class="nav-item py-2">
                <a class="nav-link" href="vselect.php"> <i class="fa-solid fa-person-walking-luggage"></i><span> Visitors </span> </a>
            </li>
            <li class="nav-item py-2">
                <a class="nav-link" href="stview.php"> <i class="fa-solid fa-clipboard-user"></i><span> Staff </span> </a>
            </li>
             <li class="nav-item py-2">
                <a class="nav-link" href="profile.php"> <i class="fa-solid fa-clipboard-user"></i> <span class="d-none d-sm-inline" >Profile </span> </a>
            </li>
             <li class="nav-item py-2">
                <a class="nav-link" href="">  <i class="fa-solid fa-file-lines"></i><span> Report </span> </a>
            </li>
             <li class="nav-item py-2">
                <a class="nav-link" href="logout.php"> <i class="fa-solid fa-right-from-bracket"></i> <span> Logout </span> </a>
            </li>
        </ul>
    </div>
    <!-- end of side bar -->


<!-- main content -->

<div class="content">
    <div class="container">

<div class="mt-3">
	<div class="">
			<h2>Visitors</h2>
			<div class="text-end mx-5 mb-3">
						<a href="visit.php"><button  class="btn btn-success px-5 fw-bold rounded">New visitor</button></a>
			</div>
		</div>

	<table class="table table-striped">
      
		<tr>
			<th>Visit_id</th>
			<th>Names</th>
			<th>Relationship-with-inmate</th>
			<th>Visit_date</th>
			<th>Duration</th>
			<th>Action</th>

		</tr>
 		<?php
        include 'connect.php';
        $select="SELECT* from visits";
        $check=mysqli_query($con,$select);
        while ($row=mysqli_fetch_array($check)) {
        	 
         ?>

        <tr>
        	<td><?php echo $row['visit_id']?></td>
        	<td><?php echo $row['names']?></td>
        	<td><?php echo $row['relationship']?></td>
        	<td><?php echo $row['visit_date']?></td>
        	<td><?php echo $row['duration']?></td>
        	<td>
        		<a href="vupdate.php?visit_id=<?php echo $row['visit_id']?>"><button class="btn btn-primary">update</button></a>
        		<a href="vdelete.php?visit_id=<?php echo $row['visit_id']?>"><button class="btn btn-danger">delete</button></a>
        	</td>

        </tr>
       
        
        <?php

        } 
		?>
	</table>
</div>







</div>
</div>
</div>
<!-- script -->
<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
?>