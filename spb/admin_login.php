<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include 'connection.php'; ?>
	<style>
		.card{
			background: #fff;
			padding: 10px;
			margin: 30px;
			border: 1px solid #DEDEDE;
			width: 300px;
			height: 260px;
			border-radius: 5px;
		}
		.heading{
			color: #5B5B5B;
			font-size: 20px;
			font-weight: bold;
			margin: 50px;
			margin-bottom: 50px;
		}
		label{
			color: #7D7D7D;
			padding: 10px 0px 10px 0px;
			margin: 10px;
		}
		input[type=text]{
			width: 85%;
			border:1px solid #D6D6D6;
			padding: 10px;
			margin: 10px;
		}
		input[type=password]{
			width: 85%;
			border:1px solid #D6D6D6;
			padding: 10px;
			margin: 10px;
		}
		.submit{
			border: none;
			border-radius: 5px;
			background: #00B957;
			color: #fff;
			padding: 10px;
			margin: 10px;
		}
		a{
			padding: 10px;
			text-decoration:none;
		}
		a:visited{
			color: blue;
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
			  <li><a href="home.php">Home</a></li>
			  <li style="float:right"><a class="active" href="admin_login.php">Admin Login</a></li>
			  <li style="float:right"><a href="organizer_login.php">Organizer Login</a></li>
			  <li style="float:right"><a href="user_login.php">User Login</a></li>
			</ul>
		</div>
	</center>
	<div class="container">
		<div class="card">
			<form method="POST" autocomplete="off">
				<center><label class="heading">ADMIN LOGIN</label></center>
				<br>
				<label>ADMIN ID</label>
				<input type="text" name="admin_id">
				<label>PASSWORD</label>
				<input type="password" name="admin_password">
				<input type="submit" class="submit" name="admin_login">
			</form>
		</div>
	</div>
	<?php
		if(isset($_POST['admin_login']))
		{
			$admin_id = $_POST['admin_id'];
			$admin_password = $_POST['admin_password'];
			$sql = "SELECT * FROM admin_login WHERE admin_id = '$admin_id' AND admin_password = '$admin_password'";
			$result = mysqli_query($conn, $sql);  
	        $count = mysqli_num_rows($result);  
	        if($count == 1)
	        {  
	            echo "<script>alert('Login successful')</script>";
	            echo "<script> window.location.href = 'admin_dashboard.php'</script>";  
	        }  
	        else{  
	            echo "<script>alert('Login failed. Invalid username or password.')</script>";  
	        }
		}
	?>
	<center>
		<div class="footer">SPORTS BLOG</div>
	</center>
</body>
</html>
