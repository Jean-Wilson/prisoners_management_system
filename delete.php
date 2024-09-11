<?php
include 'connect.php';
if (isset($_GET['inmate_id'])) {
	$inmate_id=$_GET['inmate_id'];
	$delete= "DELETE from inmates where inmate_id='$inmate_id'";
	$check= mysqli_query($con,$delete);
	if ($check) {
		echo "<script>alert('Record deleted'),window.location.replace('select.php')</script>";
	}
	else{
		echo "<script>alert('Record not deleted')</script>";
	}
}





?>