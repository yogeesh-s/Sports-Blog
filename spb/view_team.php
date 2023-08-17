<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Team</title>
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
				$id = $row["ID"];
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

		}
		.container{
		}

		.card{
			background: #fff;
			padding: 20px;
			margin: 30px;
			border: 1px solid #DEDEDE;
			border-radius: 5px;
		}
		.heading1{
			padding: 10px;
			margin: 10px;
			font-size: 20px;
			font-weight: bold;
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
			color: $fff;
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
		.tab1 td{
			padding: 10px;
		}
		.btn3{
			font-size: 14px;
			text-align: center;
			font-weight: 600;
			width: 150px;
			background: #0070EE;
			border: none;
			border-radius: 5px;
			padding: 15px;
			color: #fff;
		}

		.tab{
			margin: 10px;
			width: 95%;
			border: 1px solid black;
			padding: 5px 0px 5px 0px;
			border-collapse: collapse;
			font-size: 16px;
			font-family: 'Inter', sans-serif;
		}
		.darkgrey{
			background: #DCDCDC;
		}

		.tab td{
			border: 1px solid #E5E5E5;
			border-collapse: collapse;
			padding: 15px;
		}
		.tab th{
			border: 1px solid #E5E5E5;
			border-collapse: collapse;
			padding: 10px;
		}
		.tab tr:nth-child(even){
			background: #fff;
		}

		.tab tr:nth-child(odd){
			background: #F0F0F0 ;
		}
		
	</style>
</head>
<body>
	<center><img class="banner" class="banner" src="banner.png" width="1090"></center>
	<center>
		<div class="menu">
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
			<?php
				$sql1 = "SELECT * FROM USER_DATA WHERE EMAIL_ID = '$email_id'";
				$result1 = mysqli_query($conn,$sql1);
				if(mysqli_num_rows($result1)>0)
				{
					$row1 = mysqli_fetch_array($result1);
				}
			?>

		<div class="card">
			<center><label class="heading1">TEAM DETAILS</label></center>
			<br>
			<center>
			<?php
					$tid = $_GET["id"];
					$sql2 = "SELECT * FROM TEAM_MEMBERS_DATA WHERE TEAM_ID = '$tid'";
					$result2 = mysqli_query($conn,$sql2);
					if(mysqli_num_rows($result2)>0)
					{
						$sl_no = 1;
						echo "<table class='tab'>";
						echo "<tr class='darkgrey'>
								<th>SL NO</th>
								<th>PLAYER NAME</th>
								<th>PLAYER ROLE</th>		
							</tr>";
						while($row = mysqli_fetch_assoc($result2))
						{
							echo "<tr>
									<td>".$sl_no."</td>
									<td>".$row["PLAYER_NAME"]."</td>
									<td>".$row["ROLE"]."</td>
								</tr>";
							$sl_no++;
						}
						echo "</table>";
						echo "<table><tr>
						<td><center><button class='btn3' onclick='window.print()'>Print</button></center></td>
						<td><center><input class='btn3' type=button onClick=parent.location='user_dashboard.php' value='Back'></center></td>
					</tr></table>";
					}
					else
					{
						echo "<tr><td colspan='7' align='center'>No Data Found</td></tr></table>";
					}
				?>
				</center>
		</div>
	</div>
	<center><div class="footer">SPORTS BLOG</div></center>
</body>
</html>
