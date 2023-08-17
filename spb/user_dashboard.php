<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Dashboard</title>
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
			padding: 8px;
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

		.tab td{
			border: 1px solid #FF641A;
			border-collapse: collapse;
			padding: 15px;
		}
		.tab th{
			border: 1px solid #FF641A;
			border-collapse: collapse;
			padding: 10px;
		}
		.tab tr:nth-child(even){
			background: #fff;
		}

		.tab tr:nth-child(odd){
			background: #FF844A ;
		}
		
	</style>
</head>
<body>
	<center><img class="banner" class="banner" src="banner.png"></center>
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
	<center><label class="heading">USER DASHBOARD</label></center>
	<div class="container">
		<div class="card">
			<?php
				$sql1 = "SELECT * FROM USER_DATA WHERE EMAIL_ID = '$email_id'";
				$result1 = mysqli_query($conn,$sql1);
				if(mysqli_num_rows($result1)>0)
				{
					$row1 = mysqli_fetch_array($result1);
				}
			?>
			<center><label class="heading1">USER INFORMATION</label></center>
			<table class="tab1">
				<tr>
					<td>Name</td>
					<td><?php echo $row1["NAME"] ?></td>
				</tr>
				<tr>
					<td>Email Id</td>
					<td><?php echo $row1["EMAIL_ID"] ?></td>
				</tr>
				<tr>
					<td>Mobile No</td>
					<td><?php echo $row1["MOBILE_NUMBER"] ?></td>
				</tr>
				<tr>
					<td>DOB</td>
					<td><?php echo $row1["DOB"] ?></td>
				</tr>
				<tr>
					<td><a class="btn3" href="edit_user_profile.php">EDIT PROFILE</a></td>
					<td></td>
				</tr>
			</table>
		</div>
		<div class="card">
			<center><label class="heading1">REGISTRATION DETAILS</label></center>
			<br>
			<center>
			<?php
					$sql2 = "SELECT TD.ID AS TID,SPORT_NAME,EVENT_NAME,EVENT_DATE,REGISTER_START,REGISTER_END,TEAM_NAME FROM EVENT_DATA ED,TEAM_DATA TD,PAYMENT_DATA PD WHERE TD.USER_ID = $id AND ED.ID = TD.EVENT_ID AND PD.EVENT_ID = TD.EVENT_ID  GROUP BY TD.ID ORDER BY EVENT_DATE DESC";
					$result2 = mysqli_query($conn,$sql2);
					if(mysqli_num_rows($result2)>0)
					{
						$sl_no = 1;
						echo "<table class='tab'>";
						echo "<tr class='table_head'>
								<th>SL NO</th>
								<th>SPORT NAME</th>
								<th>EVENT NAME</th>
								<th>EVENT DATE</th>
								<th>REGISTRATION START DATE</th>
								<th>REGISTRATION END DATE</th>
								<th>TEAM NAME</th>	
								<th>TEAM DETAILS</th>		
							</tr>";
						while($row = mysqli_fetch_assoc($result2))
						{
							echo "<tr>
									<td>".$sl_no."</td>
									<td>".$row["SPORT_NAME"]."</td>
									<td>".$row["EVENT_NAME"]."</td>
									<td>".$row["EVENT_DATE"]."</td>
									<td>".$row["REGISTER_START"]."</td>
									<td>".$row["REGISTER_END"]."</td>
									<td>".$row["TEAM_NAME"]."</td>
									<td><center><a class='btn3' href='view_team.php?id=".$row["TID"]."'>View</a></center></td>
								</tr>";
							$sl_no++;
						}
						echo "</table>";
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
