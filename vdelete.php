<?php
include 'connect.php';
if (isset($_GET['visit_id'])) {
	$visit_id=$_GET['visit_id'];
	$delete="DELETE from visits where visit_id='$visit_id'";
	$check=mysqli_query($con,$delete);
	if ($check) {
		echo "<script>alert('Record deleted'),window.location.replace('vselect.php')</script>";
	}
	else{
		echo "<script>alert('Record not deleted<?php echo $row['visit_id']?>')</script>";
	}

}



?>