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
		body{
			background: lightgray;
		}
		.container{
			width: 400px;
			height: 490px;
			margin: auto;
			border-radius: 10px;
			background: beige;
			margin-top: 20px;
			box-shadow: 2px 4px 4px 10px gray;

		}
		form{
			width: 300px;
			margin-left: 30px;
		}
		form label{
            display: flex;
            margin-top: 20px;
            font-size: 18px;
		}
		form input{
			width: 100%;
			padding: 7px;
			border: 1px solid lightgray;
			border-radius: 4px;
			font-size: 18px;
		}
		h2{
			text-align: center;
			padding-top: 20px;
		}
		.submit{
			width: 315px;
			height: 30px;
			margin-top: 20px;
			border: none;
			border-radius: 20px;
			background: #7D6608;
			font-size: 18px;
			color: whitesmoke;
			cursor: pointer;
		}
		.submit:hover{
			background: transparent;
			border: 1px solid green;
			color: #D68910;
		}
	</style>
</head>
<body>
 <div class="container">
 	<h2>Update Staff</h2>
 	<form method="POST">
 		<?php
         include 'connect.php';
         $staff_id=$_GET['staff_id'];
         $select="SELECT* from staff where staff_id='$staff_id'";
         $check=mysqli_query($con,$select);
         while ($row=mysqli_fetch_array($check)) {
         	// code..

 		?>
 		<label>Names</label>
 		<input type="text" name="names" required value="<?php echo $row['names']?>">
 		<label>Gender</label>
 		<input type="text" name="gender" required value="<?php echo $row['gender']?>">
 		<label>Job-title</label>
 		<input type="text" name="job_title" required value="<?php echo $row['job_title']?>">
 		<label>Telephone</label>
 		<input type="text" name="telephone" required value="<?php echo $row['telephone']?>">
 		<?php
    	}
    	?>
 		<button class="submit" name="update">update</button>
 		
 	</form>
 	
 </div>
</body>
</html>
<?php
include 'connect.php';
if (isset($_POST['update'])) {
	$names=$_POST['names'];
	$gender=$_POST['gender'];
	$job_title=$_POST['job_title'];
	$telephone=$_POST['telephone'];
	$update="UPDATE staff set names='$names',gender='$gender',job_title='$job_title',telephone='$telephone' where staff_id='$staff_id'";
	$check=mysqli_query($con,$update);
	if ($update) {
		echo "<script>alert('Updated Successfully'),window.location.replace('stview.php')</script>";
	}
	else{
		echo "<script>alert('failed to update')</script>";
	}
}




?>