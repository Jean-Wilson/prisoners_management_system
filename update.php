<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			font-family: monospace;
		}
		body{
			background: lightgray;
		}
		.container{
			width: 360px;
			height: 590px;
			background: white;
			margin: auto;
			border-radius: 12px;
			margin-top: 10px;
			box-shadow: 0px 4px 10px gray;
		}
		h2{
			text-align: center;
			color: #3498DB  ;
			padding-top: 10px;
			font-weight: 600;
		}
		form{
			width: 300px;
			margin-left: 20px;
		}
		form label{
			margin-top: 20px;
			font-size: 18px;
			/*font-weight: bold;*/
		}
		form input{
			width: 300px;
			padding: 5px;
		    border: 1px solid lightgray;
			border-radius: 4px;
			background: biege;
		}
		.submit{
			width: 310px;
			height: 30px;
			background: #7D6608;
			border: none;
			border-radius: 15px;
			margin-top: 20px;
			font-size: 18px;
			color: white;
			cursor: pointer;
		}
		.submit:hover{
			background: transparent;
			border: 1px solid blue;
			color: blue;
			transition: .1s ease;
	/*		transform: translateY(10px);*/
		}
	</style>
	<title></title>
</head>
<body>
	<div class="container">
		<h2>Update Prisoner</h2><br><br>
		<form method="POST">
			<?php
            include 'connect.php';
            $inmate_id=$_GET['inmate_id'];
            $select="SELECT* from inmates where inmate_id='$inmate_id'";
            $check=mysqli_query($con,$select);
            while ($row=mysqli_fetch_array($check)) {
            	// code..

			?>
			
			<label>firstname</label>
			<input type="text" name="firstname" required value="<?php echo $row['firstname']?>">
			<label>last name</label>
			<input type="text" name="lasttname" required value="<?php echo $row['lastname']?>">
			<label>gender</label>
			<input type="text" name="gender" required value="<?php echo $row['gender']?>">
			<label>age</label>
			<input type="text" name="age" required value="<?php echo $row['age']?>">
			<label>marital-status</label>
			<input type="text" name="marital_status" required value="<?php echo $row['marital_status']?>">
			<label>nationality</label>
			<input type="text" name="nationality" required value="<?php echo $row['nationality']?>">
			<label>crime</label>
			<input type="text" name="crime" required value="<?php echo $row['crime']?>">
			<label>sentence-date</label>
			<input type="date" name="sentence_date" required value="<?php echo $row['sentence_date']?>">
			<label>release-date</label>
		    <input type="date" name="release_date" required value="<?php echo $row['release_date']?>">
		    <?php
	         }
	       ?>
			<button class="submit" name="update">update</button>
			
		</form>
		<br>
		
	</div>

</body>
</html>
<?php
include 'connect.php';
if (isset($_POST['update'])) {
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lasttname'];
   $gender=$_POST['gender'];
   $age=$_POST['age'];
   $marital_status=$_POST['marital_status'];
   $nationality=$_POST['nationality'];
   $crime=$_POST['crime'];
   $sentence_date=date('Y-m-d');
   $release_date=date('Y-m-d');
   $update="UPDATE inmates set firstname='$firstname',lastname='$lastname',gender='$gender',age='$age',marital_status='$marital_status',nationality='$nationality',crime='$crime',sentence_date='$sentence_date',release_date='$release_date' where inmate_id='$inmate_id'";
   $check=mysqli_query($con,$update);
   if ($check) {
   	echo "<script>alert('Updated Successfully'),window.location.replace('select.php')</script>";
   }
   else{
   	echo "<script>alert('Failed to update')</script>";
   }

}




?>