<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
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
			position: fixed;
			margin: 0;
			padding: 0;
			background: lightgray;

		}
		.sidebar a{
			display: block;
			padding: 20px 10px;
			font-size: 20px;
			font-weight: bold;
		}
		.sidebar a:hover{
			background: white;
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
	<div class="main d-flex">
		<div class="sidebar d-flex flex-column">
			<ul class="nav d-block py-2">
				<li class="nav-item py-2">
					<a class="nav-link"  href="">dashboard</a>
				</li>
				<li class="nav-item py-2">
					<a class="nav-link"  href="">inmates</a>
				</li>
				<li class="nav-item py-2">
					<a class="nav-link"  href="">visitors</a>
				</li>
				<li class="nav-item py-2">
					<a class="nav-link"  href="">staff</a>
				</li>
				<li class="nav-item py-2">
					<a class="nav-link"  href="">logout</a>
				</li>
				
			</ul>
			
		</div>
		
	</div>
	<div class="content">
	<div class="container">
		<div class="row mt-3">
			<div class="col-md-4 col-sm-6">
				<div class="card mt-3 mt-sm-0">
					<div class="card-body">
						<div class="text-center">
							<h2>Inmates</h2>
							<h2>34</h2>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card mt-3 mt-sm-0">
					<div class="card-body">
						<div class="text-center">
							<h2>Visitors</h2>
							<h2>34</h2>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card mt-3 mt-sm-0">
					<div class="card-body">
						<div class="text-center">
							<h2>Staff</h2>
							<h2>34</h2>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			<div class="row mt-3">

			<div class="col-md-4 col-sm-6">
				<div class="card mt-3 mt-sm-0">
					<div class="card-body">
						<div class="text-center">
							<h2>Inmates</h2>
							<h2>34</h2>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card mt-3 mt-sm-0">
					<div class="card-body">
						<div class="text-center">
							<h2>Inmates</h2>
							<h2>34</h2>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card mt-3 mt-sm-0">
					<div class="card-body">
						<div class="text-center">
							<h2>Inmates</h2>
							<h2>34</h2>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
</div>
</div>
   

</body>
</html>