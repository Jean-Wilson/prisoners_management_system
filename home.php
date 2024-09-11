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
			padding: 12px;
			background: lightgray;
		}
		nav ul{
			float: right;
			margin-right: 50px;
		}
        nav ul li{
        	display: inline-block;
        	list-style: none;
        	padding: 15px;

        }
        nav ul li a{
        	text-decoration: none;
        	font-size: 24px;
        	font-weight: bold;
        	cursor: pointer;
        	color: #1C2833;
        }
        nav ul li:hover a{
        	 color:  #E67E22;
        }
        .back{
        	width: 100%;
        	height: 490px;
        	background-size: cover;
        	
        }
        footer{
        	background:  #909497 ;
        	width: 100%;
        	height: 119px;
        	margin-top: -10px;
        }
        h1{
        	margin-top: -665px;
        	margin-left: 10px;
        	font-family: arial;
        	font-size: 33px;
        	color:  #873600 ;
        	font-weight: bold;
        }
        .logout{
        	width: 90px;
        	height: 30px;
        	background:  #E74C3C;
        	border: none;
        	border-radius: 15px;
        	cursor: pointer ;
        	color: white;
        	font-size: 18px;
        	font-weight: bolder;
        	margin-top: -20px;
    
        }
        .logout:hover{
        	background-color:transparent ;
        	color: red;
        	border: 1px solid red;
        	transition: .1s ease;
        }
        h2{
        	color:  darkred;
        	margin-left: 10px;
        	font-size: 23px;
        }
        P{
          color: white;
          margin-left: 10px;

        }
        .ov{
        	margin-top: -87px;
        	margin-left: 500px;
        	font-size: 23px;
        	color: whitesmoke;
        }
	</style>
</head>
<body>
	<nav>
		<ul>
		<li><a href="select.php">Inmates</a></li>
		<li><a href="vselect.php">Visits</a></li>
		<li><a href="">Staff</a></li>
		<li><a href="">Report</a></li>
		<button class="logout">Logout</button>
	   </ul>
	</nav>
	<img src="prisons.jpg" class="back">
	<footer>
		<br>
		<h2>More about PMS</h2>
		<p>Our mission is to monitor prisoner welfare,<br>As well as to manage activities in jail,<br>Record and store prisoner information.</p><br>
		<h2 class="ov">copyright:&copy2011-2024</h2>
	</footer>
	<h1>Welcome Admin </h1>




</body>
</html>