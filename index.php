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
		nav{
			width: 100%;
			height: 60px;
			background: #2E4053;
			padding: 12px;	
		}
		nav ul{
			text-align: center;
		}
		nav ul li{
			list-style: none;
			display: inline-block;
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
			color: #E67E22;
		}
		input{
			float: right;
			margin-top: -56px;
			margin-right: 40px;
			padding: 8px;
			border-radius: 18px;
			width: 20%;
			font-size: 18px;
		}
		img{
			width: 800px;
			height: 500px;
			margin-left: 2px;
		}
		footer{
			width: 100%;
			background: lightgray;
		}

     h1{
     	margin-top: -58px;
     	font-size: 60px;
     	color: white;
     }
     .left{
     	float: right;
     	width: 500px;
     	height: 500px;
     	margin-top: -630px;
     	font-size: 25px;
     	margin-right: 60px;
     	color:  #D35400 ;
     }
     .desc{
     	color: black;
     }
     .ov{
     	text-align: center;
     	padding-top: -20px;
     }
	</style>
</head>
<body>
	<nav>
		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Services</a></li>
			<li><a href="login.php">Admin</a></li>
		</ul>
		<h1>PMS</h1>
	</nav>
	<input type="search" name="search" placeholder="search">
	<img src="jailhome.jpg">
	<footer>
		<br>
		<h2>More about PMS</h2>
		<p>Our mission is to monitor prisoner welfare,<br>As well as to manage activities in jail,<br>Record and store prisoner information.</p><br>
		<h3 class="ov">copyright:&copy2011-2024</h3>
	</footer>
	<div class="left">
		<h2>Prisoners Management System</h2><br>
		<p class="desc">
		  Prison Management is a complete end-to-end solution for the inmates (Prisoners) inside the prison.<br><br>
		  The software also handles the management of multiple Prisons spread across the country/county. - Admission of prisoners involves transfers,re-admit after bail, escape & recapture processes.
		</p>	
	</div>
</body>
</html>