<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Homepage</title>
	<?php 
		session_start();
	 	include 'connection.php';
	 	$user_id = $_SESSION['user_id'];
	 	$event_id = $_SESSION['event_id'];
	 	$team_id = $_SESSION['team_id'];
	 	$sql1 = "SELECT PD.ID AS PID,SPORT_NAME,EVENT_NAME,TEAM_NAME,UD.NAME,AMOUNT,PAYMENT_DATE,CARD_NO FROM EVENT_DATA ED, USER_DATA UD,TEAM_DATA TD,PAYMENT_DATA PD WHERE ED.ID = $event_id AND TD.ID = $team_id AND UD.ID = $user_id AND PD.TEAM_ID = TD.ID";
		$result1 = mysqli_query($conn,$sql1);
		$row1 = mysqli_fetch_assoc($result1)
	?>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap');
		body{
			background: #FAFAFA;
			margin: auto;
			width: 80%;
			font-family: 'Inter', sans-serif;
		}
		.container{
			align-items: center;
			justify-content: center;
		}

		.card{
			width: 400px;
			background: #fff;
			padding: 20px;
			margin: 30px;
			border: 1px solid #DEDEDE;
			border-radius: 5px;
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
		td{
			padding: 10px;
		}
		.btn{
			background-color: #009EE2;
			color: #fff;
			padding: 10px;
			border-radius: 5px;
			border: none;
			width: 100px;
			font-size: 17px;
			font-weight: bold;
			font-family: 'Inter', sans-serif;
		}
		
	</style>
</head>
<body>
	<center><img class="banner" src="banner.png" width="1090"></center>
	<center>
		<div class='menu'>
			<ul>
			  <li><a href='user_home.php'>Home</a></li>
			  <li style='float:right'><a href='home.php'>Logout</a></li>
			  <li style='float:right'><a href='sports_home.php?name=SOFTBALL'>Softball</a></li>
			  <li style='float:right'><a href='sports_home.php?name=KABADDI'>Kabaddi</a></li>
			  <li style='float:right'><a href='sports_home.php?name=VOLLEYBALL'>Volleyball</a></li>
			  <li style='float:right'><a href='sports_home.php?name=CRICKET'>Cricket</a></li>
			</ul>
		</div>
	</center>
	<br>
	<center><label class="heading">Payment Details</label></center>
	<center>
		<div class="container">
			<div class="card">
				<table> 
					<tr>
						<td>Sprots Name</td>
						<td><?php echo $row1['SPORT_NAME']; ?></td>
					</tr>
					<tr>
						<td>Event Name</td>
						<td><?php echo $row1['EVENT_NAME']; ?></td>
					</tr>
					<tr>
						<td>Team Name</td>
						<td><?php echo $row1['TEAM_NAME']; ?></td>
					</tr>
					<tr>
						<td>User Name</td>
						<td><?php echo $row1['NAME']; ?></td>
					</tr>
					<tr>
						<td>Card No</td>
						<td><?php echo $row1['CARD_NO']; ?></td>
					</tr>
					<tr>
						<td>Paid Amount</td>
						<td><?php echo $row1['AMOUNT']; ?></td>
					</tr>
					<tr>
						<td>Payment ID</td>
						<td><?php echo $row1['PID']; ?></td>
					</tr>
					<tr>
						<td>Payment Date and Time</td>
						<td><?php echo $row1['PAYMENT_DATE']; ?></td>
					</tr>
					<tr>
						<td>Payment Status</td>
						<td>SUCCESS</td>
					</tr>
					<tr>
						<td><center><button class='btn' onclick='window.print()'>Print</button></center></td>
						<td><center><input class='btn' type=button onClick="parent.location='user_home.php'"value='Home'></center></td>
					</tr>
				</table>
			</div>
		</div>
	</center>
	<center><div class="footer">SPORTS BLOG</div></center>
</body>
</html>
