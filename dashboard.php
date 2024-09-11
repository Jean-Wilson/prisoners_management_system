

<?php
session_start();
if(strlen($_SESSION['uid']==0)){
    header("location:logins.php");
}
else{
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
                <a class="nav-link" href="profile.php"> <i class="fa-solid fa-clipboard-user"></i> <span class="d-none d-sm-inline" >Profile </span> </a>
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
 
    <div class="w-100  h-25 d-flex  bg d-sm-block shadow-md">

        <div class="row ">
            <div class="col-md-8 col-sm-6 mt-3">
                <h1 class="text-center text-white ">Prisoners Management System</h1>
             
            </div>

            <div class="col-md-4 col-sm-6 mt-3">
                <div class="text-end mx-4">
                       <div class="dropdown text-end">
 


                    <h2  data-bs-toggle="dropdown" aria-expanded="false"> <span class="border py-2 px-3 border-dark rounded-circle"><i class="fa-solid fa-user-tie"></i></span> </h2>
                    <?php
    include('connect.php');
    $code = $_SESSION['uid'];
    $view = mysqli_query($con, "SELECT username FROM signup WHERE id='$code'");
    $data = mysqli_fetch_array($view);
?>
        <h4 class="mt-3"> <?php echo $data['username']; ?> </h4>

   <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="profile.php">Profile</a></li>

  </ul>
  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of profile -->

    <div class="container">
        
    
<div class="row mt-3">
    <div class="col-md-4 col-sm-6">
        <div class="card mt-3 mt-sm-0">
            <div class="card-body">
                <div class="text-center">
                    <h1> <i class="fa-solid fa-users"></i> Inmates</h1>
                    <?php
                      include 'connect.php';
                      $sql="SELECT count(*) as total_records from inmates";
                      $check=mysqli_query($con,$sql);
                      if ($check) {
                          $row=$check->fetch_assoc();
                          $total_records=$row['total_records'];
                          echo "<h1>".$total_records."</h1>";
                      }


                    ?>
                </div>
            </div>
        </div>
    </div>
        <div class="col-md-4 col-sm-6">
        <div class="card mt-3 mt-sm-0">
            <div class="card-body">
                <div class="text-center">
                    <h1> <i class="fa-solid fa-person-walking-luggage"></i> Visitors</h1>
                    <?php
                     include 'connect.php';
                     $sql="SELECT count(*) as total_records from visits";
                     $check=mysqli_query($con,$sql);
                     if ($check) {
                         // code...
                        $row=$check->fetch_assoc();
                        $total_records=$row['total_records'];
                        echo "<h1>".$total_records."</h1>";

                     }
                     

                    ?>
                </div>
            </div>
        </div>
    </div>
        <div class="col-md-4 col-sm-6">
        <div class="card mt-3 mt-sm-0">
            <div class="card-body">
                <div class="text-center">
                    <h1> <i class="fa-solid fa-clipboard-user"></i> Staff</h1>
                    <?php
                     include 'connect.php';
                     $sql="SELECT count(*) as total_records from staff";
                     $check=mysqli_query($con,$sql);
                     if ($check) {
                         $row=$check->fetch_assoc();
                         $total_records=$row['total_records'];
                         echo "<h1>".$total_records."</h1";
                     }

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- second row -->
 
        
    
        <div class="col-md-4 col-sm-6">
        <div class="card mt-3">
            <div class="card-body">
                <div class="text-center">
                    <h1><i class="fa-solid fa-person"></i>Male</h1>
                    <?php
                      include 'connect.php';
                      $sql="SELECT count(*) as total_records from inmates WHERE gender='male'";
                      $check=mysqli_query($con,$sql);
                      if ($check) {
                          $row=$check->fetch_assoc();
                          $total_records=$row['total_records'];
                          echo "<h1>".$total_records."</h1>";
                      }
           

                    ?>
                </div>
            </div>
        </div>
    </div>
        <div class="col-md-4 col-sm-6">
        <div class="card mt-3 ">
            <div class="card-body">
                <div class="text-center">
                    <h1> <i class="fa-solid fa-person-dress"></i>Female</h1>
                    <?php
                     include 'connect.php';
                     $sql="SELECT count(*) as total_records from inmates where gender='female'";
                     $check=mysqli_query($con,$sql);
                     if ($check) {
                         // code...
                        $row=$check->fetch_assoc();
                        $total_records=$row['total_records'];
                        echo "<h1>".$total_records."</h1>";
                     }


                    ?>
                </div>
            </div>
        </div>
    </div>
        <div class="col-md-4 col-sm-6">
        <div class="card mt-3  ">
            <div class="card-body">
                <div class="text-center">
                    <h1> <i class="fa-solid fa-file-lines"></i> Report</h1>
                    <h1>5</h1>
                </div>
            </div>
        </div>
    </div>

<!-- end of second row -->




























</div>
</div>

</div>
<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</html>

<?php
}
?>
