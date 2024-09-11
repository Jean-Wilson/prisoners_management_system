<?php
include 'connect.php';
if (isset($_POST['delete'])) {
	$staff_id=$_GET['staff_id'];
	$delete="DELETE from staff where staff_id='$staff_id'";
	$check=mysqli_query($con,$delete);
	if ($check) {
		echo "<script>alert('Record Deleted'),window.location.replace('stview.php')</script>";
	}else{
		echo "<script>alert('failed to delete')</script>";
	}
}




?>