<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.bundle.js">
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
		}
		body{
			background:;
		}
		nav{
			width: 100%;
			height: 81px;
			background: #2E4053;
			padding: 15px;

		}
		nav ul{
			text-align: center;
		}
		nav ul li{
			display: inline-block;
			list-style: none;
			padding: 12px;
		}
		nav ul li a{
			text-decoration: none;
			font-size: 24px;
			color: white;
			cursor: pointer;
			font-weight: bold;
			padding: 8px;

		}
		nav ul li a:hover{
			color: #F1C40F;
		}
		h1{
			margin-top: -78px;
			font-size: 60px;
			font-weight: bold;
		}
		img{
			width: 100%;
		}
		.container{
			float: right;
		}
        input{
        	float: right;
			margin-top: -56px;
			margin-right: 40px;
			padding: 6px;
			border-radius: 19px;
			width: 20%;
			font-size: 18px;
        }

	</style>
</head>
<body>
	<nav>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="services.php">Services</a></li>
			<li><a href="logins.php">Admin</a></li>
		</ul>
	</nav>
	<h1 class="text-light mx-4">PMS</h1>
	<input type="search" name="search" placeholder="search">
	<h2 class="text-warning mx-3 bg-dark p-2">Prisoners Management System</h2>
	<div class="container-fluid">
		<div class="row">
			<div class="col-4">
				<div class="card py-2">
					<div class="card-body">
						<img src="jailhome.jpg">
						
					</div>
					
				</div>
				
			</div>
			<div class="col-8">
				<div class="card">
					<div class="card-body">
						<h2 class="text-primary"><b>Advanced Prisoner Management Solutions</b></h2><br>
						<h3>Prison management is a complete end-to-end solution for the inmates (Prisoners) inside the prison.</h3><br>
						<h3>  The software also handles the management of multiple Prisons spread across the country/county.<br> - Admission of prisoners involves transfers,re-admit after bail, escape & recapture processes.</h3>
						
					</div>
					
				</div>

			</div>
			<h2 class="text-danger mt-4">More about PMS</h2><br>
			<h3>Our mission is to monitor prisoner welfare,<br>As well as to manage activities in jail,<br>Record and store prisoner information.</h3><br> 	
			 	
			

			
		</div>
		
	</div>

</body>
</html>