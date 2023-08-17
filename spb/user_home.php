<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Homepage</title>
	<?php 
		session_start();
	 	include 'connection.php';
	 	$email_id = $_SESSION["email_id"];
	 	$sql = "SELECT * FROM USER_DATA WHERE EMAIL_ID = '$email_id'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				$user_id = $row["ID"];
				$_SESSION['user_id'] = $user_id;
			}
		}

	?>
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
		.container4 a{
			color: #fff;
		}
		.container4 a:visited{
			color: #fff;
		}
		.card{
			margin: auto;
			background: rgb(70,60,233);
			background: linear-gradient(90deg, rgba(70,60,233,1) 0%, rgba(0,212,255,1) 100%);
			font-size: 20px;
			text-shadow: 2px 2px 4px black;
			padding: 50px;
			margin: 30px;
			border: 1px solid #DEDEDE;
			width: 70%;
			height: 35px;
			min-width: 120px;
			border-radius: 30px;
			font-weight: bolder;
		}

		.card1{
			margin: auto;
			background: rgb(255,193,159);
			background: linear-gradient(90deg,rgba(255,125,55,1)  0%, rgba(255,193,159,1) 100%);
			font-size: 20px;
			text-shadow: 2px 2px 4px black;
			padding: 50px;
			margin: 30px;
			border: 1px solid #DEDEDE;
			width: 70%;
			height: 35px;
			min-width: 120px;
			border-radius: 30px;
			font-weight: bolder;
		}

		.card2{
			margin: auto;
			background: rgb(255,93,131);
			background: linear-gradient(90deg, rgba(255,93,131,1) 0%, rgba(150,0,81,1) 100%);
			font-size: 20px;
			text-shadow: 2px 2px 4px black;
			padding: 50px;
			margin: 30px;
			border: 1px solid #DEDEDE;
			width: 70%;
			height: 35px;
			min-width: 120px;
			border-radius: 30px;
			font-weight: bolder;
		}

		.card3{
			margin: auto;
			background: rgb(226,93,255);
			background: linear-gradient(90deg, rgba(226,93,255,1) 0%, rgba(150,0,124,1) 100%);
			font-size: 20px;
			text-shadow: 2px 2px 4px black;
			padding: 50px;
			margin: 30px;
			border: 1px solid #DEDEDE;
			width: 70%;
			height: 35px;
			min-width: 120px;
			border-radius: 30px;
			font-weight: bolder;
		}
		.card4{
			margin: auto;
			background: rgb(154,230,52);
			background: linear-gradient(90deg, rgba(154,230,52,1) 0%, rgba(47,196,0,1) 100%);
			font-size: 20px;
			text-shadow: 2px 2px 4px black;
			padding: 50px;
			margin: 30px;
			border: 1px solid #DEDEDE;
			width: 70%;
			height: 35px;
			max-width: 120px;
			border-radius: 30px;
			font-weight: bolder;
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
	<center><img class="banner" src="banner.png" width="1090"></center>
	<center>
		<div class='menu'>
			<ul>
			  <li><a class='active' href='user_home.php'>Home</a></li>
			  <li style='float:right'><a href='home.php'>Logout</a></li>
			  <li style='float:right'><a href='sports_home.php?name=SOFTBALL'>Softball</a></li>
			  <li style='float:right'><a href='sports_home.php?name=KABADDI'>Kabaddi</a></li>
			  <li style='float:right'><a href='sports_home.php?name=VOLLEYBALL'>Volleyball</a></li>
			  <li style='float:right'><a href='sports_home.php?name=CRICKET'>Cricket</a></li>
			</ul>
		</div>
	</center>
	<br>
	<center><label class="heading">USER HOMEPAGE</label></center>
	<center>
		<div class="container">
				<a class="card" href="sports_home.php?name=CRICKET">CRICKET</a><br>
				<a class="card1" href="sports_home.php?name=VOLLEYBALL">VOLLEYBALL</a><br>
				<a class="card2" href="sports_home.php?name=KABADDI">KABADDI</a><br>
				<a class="card3" href="sports_home.php?name=SOFTBALL">SOFTBALL</a><br>
		</div><br><br><br>
		<div class="container4">
			<a class="card4" href="user_dashboard.php">
				DASHBOARD
			</a><br><br><br><br><br><br>
		</div>
	</center>
	<center><div class="footer">SPORTS BLOG</div></center>
</body>
</html>
