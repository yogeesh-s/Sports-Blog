<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<?php include 'connection.php'; ?>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap');
		body{
			background: #FAFAFA;
			margin: auto;
			width: 80%;
			font-family: 'Inter', sans-serif;

			background-size: 1366px;
			background-repeat: no-repeat;
		}
		.container{
			display: flex;
			align-items: center;
			justify-content: center;
			width: 70%;
		}
		.container a{
			color: #fff;
		}
		.container a:visited{
			color: #fff;
		}

		.card{
			margin: auto;
			background: rgb(70,60,233);
			background: linear-gradient(90deg, rgba(70,60,233,1) 0%, rgba(0,212,255,1) 100%);
			font-size: 18px;
			text-shadow: 2px 2px 4px black;
			padding: 40px;
			margin: 30px;
			border: 1px solid #DEDEDE;
			min-height: 50px;
			vertical-align: middle;
			max-width: 100px;
			border-radius: 30px;
			font-weight: bolder;
		}
		.card1{
			margin: auto;
			background: rgb(255,193,159);
			background: linear-gradient(90deg,rgba(255,125,55,1)  0%, rgba(255,193,159,1) 100%);
			font-size: 18px;
			text-shadow: 2px 2px 4px black;
			padding: 40px;
			margin: 30px;
			border: 1px solid #DEDEDE;
			min-height: 50px;
			vertical-align: middle;
			max-width: 100px;
			border-radius: 30px;
			font-weight: bolder;
		}
		.card2{
			margin: auto;
			background: rgb(255,93,131);
			background: linear-gradient(90deg, rgba(255,93,131,1) 0%, rgba(150,0,81,1) 100%);
			font-size: 18px;
			text-shadow: 2px 2px 4px black;
			padding: 40px;
			margin: 30px;
			border: 1px solid #DEDEDE;
			min-height: 50px;
			vertical-align: middle;
			max-width: 100px;
			border-radius: 30px;
			font-weight: bolder;
		}

		.card : hover{
			background: rgb(255,93,131);
			background: linear-gradient(90deg, rgba(255,93,131,1) 0%, rgba(150,0,81,1) 100%);
		}
		.heading{
			color: #5B5B5B;
			font-size: 20px;
			font-weight: bold;
			margin: 50px;
			margin-bottom: 50px;
		}
		
		a{
			text-decoration: none;
		}
		a:visited{
			color: blue;
		}
		.banner{
			margin-top: 10px;
			border-radius: 5px;
		}
		.footer{
			background: #FF6500;
			padding: 8px;
			text-align: center;
			color: #fff;
			border-radius: 5px;
			font-weight: bolder;
			margin-bottom: 20px;
		}
		.banner{
			width: 100%;
			margin-top: 10px;
			border-radius: 5px;
		}
		.menu{
			width: 100%;
			font-weight: bold;
		}
		.menu ul {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;
		    background-color: #FF6500;
		    border-radius: 5px;
		}

		.menu li {
		    float: left;
		}

		.menu li a {
		    display: block;
		    color: white;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		}

		.menu li a:hover {
		    background-color: #DA5600;
		}
		.active{
			background-color: #DA5600;
		}
		
	</style>
</head>
<body>
	<center><img class="banner" src="banner.png"></center>
	<center>
		<div class="menu">
			<ul>
			  <li><a class="active" href="admin_dashboard.php">Home</a></li>
			  <li style="float:right"><a href="home.php">Logout</a></li>
			  <li style="float:right"><a href="manage_event_admin.php">Manage Event</a></li>
			  <li style="float:right"><a href="manage_user.php">Manage User</a></li>
			  <li style="float:right"><a href="manage_organizer.php">Manage Organizer</a></li>
			</ul>
		</div>
	</center>
	<br>
	<center><label class="heading">ADMIN DASHBOARD</label></center>
	<center>
		<div class="container">
				<a class="card" href="manage_organizer.php">MANAGE ORGANIZER</a><br>
				<a class="card1" href="manage_user.php">MANAGE USER</a><br>
				<a class="card2" href="manage_event_admin.php">MANAGE EVENTS</a><br>
		</div>
	</center>
	<center><div class="footer">SPORTS BLOG</div></center>
</body>
</html>
