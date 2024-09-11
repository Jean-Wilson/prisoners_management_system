<?php
session_start();
if ($_SESSION['username']==0) {
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
 	<title></title>
 	<style type="text/css">
 		*{
 			margin: 0;
 			padding: 0;
 		}
 		body{
 			font-family: arial;
         background: #FDF2E9;
 		}
 		.sidebar{
 			margin: 0;
 			padding: 0;
 			width: 310px;
 			background: lightgray;
 			height: 100%;
 			position: fixed;
         top: 0;
 		}
 		.sidebar a{
 			display: block;
 			padding: 20px;
 			text-decoration: none;
 			font-size: 25px;
 			color: dodgerblue;
         font-weight: bold;

 		}
 		.sidebar a:hover{
 			background: black;
 			color: white;
 		}
      h1{
         padding: 28px;
         background:#5D6D7E  ;
         color: white;
         cursor: pointer;
      }
 		@media only screen and (max-width: 700px){
 			.sidebar{
 				display: none;
 			}
 		}
      .row{
         width: 200px;
         height: 200px;
         background: red;
      }
      .card1{
         width: 250px;
         height: 90px;
         color: white;
         background:  #2C3E50 ;
         margin-left: 320px;
         margin-top: 10px;
         padding: 20px;
         border-radius: 8px;
         cursor: pointer;
      }
      .card2{
         width: 250px;
         height: 90px;
         color: white;
         background:  #EC7063 ;
         margin-left: 320px;
         margin-top: 10px;
         padding: 20px;
         border-radius: 8px;
         float: right;
         margin-top: -129px;
         margin-right: 609px;
         cursor: pointer;
      }
        .card3{
         width: 250px;
         height: 90px;
         color: white;
         background:   #3498DB ;
         margin-left: 320px;
         margin-top: 10px;
         padding: 20px;
         border-radius: 8px;
         float: right;
         margin-top: -129px;
         margin-right: 310px;
         cursor: pointer;
      }
      .card4{
         width: 250px;
         height: 90px;
         color: white;
         background:  #A569BD;
         margin-left: 320px;
         margin-top: 10px;
         padding: 20px;
         border-radius: 8px;
         float: right;
         margin-top: -129px;
         margin-right: 10px;
         cursor: pointer;
      }
      h2{
         font-size: 19px;
         padding-top: -10px;
      }
      .card5{
          width: 250px;
         height: 90px;
         color: white;
         background:  #D35400 ;
         margin-left: 320px;
         margin-top: 10px;
         padding: 20px;
         border-radius: 8px;
         cursor: pointer;
      }
      .card6{
         width: 250px;
         height: 90px;
         color: white;
         background:  #F39C12 ;
         margin-left: 320px;
         margin-top: 10px;
         padding: 20px;
         border-radius: 8px;
         cursor: pointer;
      }
      .card7{
         width: 80%;
         height: 110px;
         background: #34495E ;
         float: right;
         margin-right: 4px;
         margin-top: -30px;
      }
      .pp{
         text-align: center;
         color: white;
         padding-top: 10px;
      }
 	</style>
 </head>
 <body>
   <hr>
 	<div class="sidebar">
 		<h1>Welcome Admin</h1>
      <hr>
      <a href="">Dashboard</a>
      <hr>
 		<a href="select.php">Inmates</a>
      <hr>
 		<a href="vselect.php">Visits</a>
      <hr>
 		<a href="stview.php">Staff</a>
      <hr>
 		<a href="">Report</a>
      <hr>
      <a href="logout.php">Logout</a>
      <hr>
 	</div> 
    <div class="card1">
         <h2>Total number of inmates is:</h2><br>
         <?php
         include 'connect.php';
         $sql="SELECT count(*) as total_records from inmates";
         $check=mysqli_query($con,$sql);
         if ($check) {
            $row=$check->fetch_assoc();
            $total_records=$row['total_records'];
            echo "<h2>".$total_records."</h2>";

         }

         ?>
         
      </div>
      <div class="card2">
         <h2> Total number of visitors is:</h2><br>
         <?php
         include 'connect.php';
         $sql="SELECT count(*) as total_records from visits";
         $check=mysqli_query($con,$sql);
         if ($check) {
            $row=$check->fetch_assoc();
            $total_records=$row['total_records'];
            echo "<h2>".$total_records."</h2>";
         }
  
         ?>
         
      </div>   
      <div class="card3">
         <h2>Total number of staff is:</h2><br>
         <?php
         include 'connect.php';
         $sql="SELECT count(*) as total_records from staff";
         $check=mysqli_query($con,$sql);
         if ($check) {
            $row=$check->fetch_assoc();
            $total_records=$row['total_records'];
            echo "<h2>".$total_records."</h2>";
         }
 

         ?>
         
      </div>
      <div class="card4">
         <h2>Total number of report is:</h2>
         
      </div> 
       <br><br><br><br>
       <div class="card5">
         <h2>Total number of males is:</h2><br>
         <?php
          include 'connect.php';
          $sql="SELECT count(*) as total_records from inmates where gender='male'";
          $check=mysqli_query($con,$sql);
          if ($check) {
              $row=$check->fetch_assoc();
              $total_records=$row['total_records'];

              echo "<h2>".$total_records."</h2>";
          }


         ?>
      </div>
      <br><br><br><br>
       <div class="card6">
         <h2>Total number of females is:</h2><br>
             <?php
          include 'connect.php';
          $sql="SELECT count(*) as total_records from inmates where gender='female'";
          $check=mysqli_query($con,$sql);
          if ($check) {
              $row=$check->fetch_assoc();
              $total_records=$row['total_records'];

              echo "<h2>".$total_records."</h2>";
          }


         ?>
      </div>
      <br><br><br><br>
      <div class="card7">
         <h2 class="pp">&copy;Prisoners management system</h2><br>
         <h2 class="pp">You logged as an Admin</h2>

         
      </div>                        	
 </body>
 </html>
 <?php

}

?>