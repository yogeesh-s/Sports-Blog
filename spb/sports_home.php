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
		}
		.banner{
			width: 100%;
			margin-top: 10px;
			border-radius: 5px;
		}
		.box{
			background: #fff;
			border: 1px solid #DEDEDE;
			border-radius: 5px;
			margin: auto;
			margin: 15px;
		}

		.heading1{
			background-image: linear-gradient(to right, #00AB10, #00EA15);
			padding: 10px;
			color: #fff;
			font-weight: bold;
			border-radius: 5px 5px 0px 0px;
			font-size: 18px;
			text-shadow: 2px 2px #8E8E8E;
		}
		.heading2{
			background-image: linear-gradient(to right, #E34500, #FC7940);
			padding: 10px;
			color: #fff;
			font-weight: bold;
			border-radius: 5px 5px 0px 0px;
			font-size: 18px;
			text-shadow: 2px 2px #8E8E8E;
		}
		.heading3{
			background-image: linear-gradient(to right, #02AAB2, #4ED6DD);
			padding: 10px;
			color: #FFF;
			font-weight: bold;
			border-radius: 5px 5px 0px 0px;
			font-size: 18px;
			text-shadow: 2px 2px #8E8E8E;
		}
		.content{
			text-align: left;
		}
		.content ul{
			list-style: circle;
			color: red;
		}
		.content li{
			padding: 10px 10px 10px 0px;
		}
		.content a{
			text-decoration: none;
			font-weight: bold;
		}
		.content a:visited{
			color: #008750;
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
		.no_data{
			text-align: center;
			color: red;
			font-weight: bolder;
			padding: 20px;
		}

	</style>
</head>
<body>
	<center><img class="banner" src="banner.png"></center>
		<?php
			$name = $_GET['name'];
			if($name == "CRICKET"){
				echo "<center>
					<div class='menu'>
						<ul>
						  <li><a href='user_home.php'>Home</a></li>
						  <li style='float:right'><a href='home.php'>Logout</a></li>
						  <li style='float:right'><a href='sports_home.php?name=SOFTBALL'>Softball</a></li>
						  <li style='float:right'><a href='sports_home.php?name=KABADDI'>Kabaddi</a></li>
						  <li style='float:right'><a href='sports_home.php?name=VOLLEYBALL'>Volleyball</a></li>
						  <li style='float:right'><a class='active' href='sports_home.php?name=CRICKET'>Cricket</a></li>
						</ul>
					</div>
				</center>";
			}
			else if ($name == "VOLLEYBALL") {
				echo "<center>
					<div class='menu'>
						<ul>
						  <li><a href='user_home.php'>Home</a></li>
						  <li style='float:right'><a href='home.php'>Logout</a></li>
						  <li style='float:right'><a href='sports_home.php?name=SOFTBALL'>Softball</a></li>
						  <li style='float:right'><a href='sports_home.php?name=KABADDI'>Kabaddi</a></li>
						  <li style='float:right'><a class='active' href='sports_home.php?name=VOLLEYBALL'>Volleyball</a></li>
						  <li style='float:right'><a href='sports_home.php?name=CRICKET'>Cricket</a></li>
						</ul>
					</div>
				</center>";
			}
			else if ($name == "KABADDI") {
				echo "<center>
					<div class='menu'>
						<ul>
						  <li><a href='user_home.php'>Home</a></li>
						  <li style='float:right'><a href='home.php'>Logout</a></li>
						  <li style='float:right'><a href='sports_home.php?name=SOFTBALL'>Softball</a></li>
						  <li style='float:right'><a class='active' href='sports_home.php?name=KABADDI'>Kabaddi</a></li>
						  <li style='float:right'><a href='sports_home.php?name=VOLLEYBALL'>Volleyball</a></li>
						  <li style='float:right'><a href='sports_home.php?name=CRICKET'>Cricket</a></li>
						</ul>
					</div>
				</center>";
			}
			else if ($name == "SOFTBALL") {
				echo "<center>
					<div class='menu'>
						<ul>
						  <li><a href='user_home.php'>Home</a></li>
						  <li style='float:right'><a href='home.php'>Logout</a></li>
						  <li style='float:right'><a class='active' href='sports_home.php?name=SOFTBALL'>Softball</a></li>
						  <li style='float:right'><a href='sports_home.php?name=KABADDI'>Kabaddi</a></li>
						  <li style='float:right'><a href='sports_home.php?name=VOLLEYBALL'>Volleyball</a></li>
						  <li style='float:right'><a href='sports_home.php?name=CRICKET'>Cricket</a></li>
						</ul>
					</div>
				</center>";
			}
		?>
	<center>
		<div class="container">
			<div class="box">
				<div class="heading2">
					LIVE EVENTS
				</div>
				<div class="content">
					<?php
						$date = new DateTime();
						$today = $date->format('Y-m-d');
						$sql = "SELECT * FROM EVENT_DATA WHERE EVENT_DATE = '$today' AND SPORT_NAME = '$name'";
						$result = mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0)
						{
							echo "<ul>";
							while($row = mysqli_fetch_assoc($result))
							{
								echo "<li><a href='live_event.php?id=".$row["ID"]."'>".$row["EVENT_NAME"]."</a></li>";
							}
							echo "</ul>";
						}
						else{
							echo "<div class='no_data'>No Data Found</div>";
						}
					?>
				</div>
			</div>
			<div class="box">
				<div class="heading3">
					UPCOMING EVENTS
				</div>
				<div class="content">
					<?php
						$sql1 = "SELECT * FROM EVENT_DATA WHERE EVENT_DATE > '$today' AND SPORT_NAME = '$name'";
						$result1 = mysqli_query($conn,$sql1);
						if(mysqli_num_rows($result1)>0)
						{
							echo "<ul>";
							while($row1 = mysqli_fetch_assoc($result1))
							{
								echo "<li><a href='live_event.php?id=".$row1["ID"]."'>".$row1["EVENT_NAME"]."</a></li>";
							}
							echo "</ul>";
						}
						else{
							echo "<div class='no_data'>No Data Found</div>";
						}
					?>

				</div>
			</div>
			<div class="box">
				<div class="heading1">
					FINISHED EVENTS
				</div>
				<div class="content">
					<?php
						$sql2 = "SELECT * FROM EVENT_DATA WHERE EVENT_DATE < '$today' AND SPORT_NAME = '$name'";
						$result2 = mysqli_query($conn,$sql2);
						if(mysqli_num_rows($result2)>0)
						{
							echo "<ul>";
							while($row2 = mysqli_fetch_assoc($result2))
							{
								echo "<li><a href='live_event.php?id=".$row2["ID"]."'>".$row2["EVENT_NAME"]."</a></li>";
							}
							echo "</ul>";
						}
						else{
							echo "<div class='no_data'>No Data Found</div>";
						}
					?>

				</div>
			</div>
		</div>
	</center>
	<center><div class="footer">SPORTS BLOG</div></center>
</body>
</html>
