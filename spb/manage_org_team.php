<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage Teams</title>
	<?php include 'connection.php'; ?>
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
			background: #fff;
			padding: 50px;
			margin: 30px;
			border: 1px solid #DEDEDE;
			border-radius: 5px;
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
			color: #fff;
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
		.table_head{
			height: 50px;
		}
		.btn{
			font-size: 14px;
			text-align: center;
			font-weight: 600;
			width: 150px;
			background: RED;
			border: none;
			border-radius: 5px;
			padding: 8px;
			color: #fff;
		}
		.btn1{
			font-size: 14px;
			text-align: center;
			font-weight: 600;
			width: 150px;
			background: #00972C;
			border: none;
			border-radius: 5px;
			padding: 8px;
			color: #fff;
		}
		
	</style>
</head>
<body>
	<center><img class="banner" src="banner.png"></center>
	<center>
		<div class="menu">
			<ul>
			  <li><a href="organizer_dashboard.php">Home</a></li>
			  <li style="float:right"><a href="home.php">Logout</a></li>
			  <li style="float:right"><a href="live_event_handling.php">Live Event Handling</a></li>
			  <li style="float:right"><a href="manage_event.php">Manage Sports Event</a></li>
			  <li style="float:right"><a href="add_event.php">Add Sports Event</a></li>
			</ul>
		</div>
	</center>
	<br>
	<center><label class="heading">MANAGE TEAMS</label></center>
	<center>
		<div class="container">
			<div class="card">
				<?php
					$event_id = $_GET['id'];
					$sql = "SELECT TD.ID AS TID,TEAM_NAME,AMOUNT,PAYMENT_DATE FROM TEAM_DATA TD,PAYMENT_DATA PD WHERE TD.ID = PD.TEAM_ID AND TD.EVENT_ID = $event_id";
					$result = mysqli_query($conn,$sql);
					if(mysqli_num_rows($result)>0)
					{
						$sl_no = 1;
						echo "<table class='tab'>";
						echo "<tr class='table_head'>
								<th>SL NO</th>
								<th>TEAM_NAME</th>
								<th>AMOUNT</th>
								<th>PAYMENT DATE</th>
								<th>DELETE</th>	
								<th>ACTION</th>		
							</tr>";
						while($row = mysqli_fetch_assoc($result))
						{
							echo "<tr>
									<td>".$sl_no."</td>
									<td>".$row["TEAM_NAME"]."</td>
									<td>".$row["AMOUNT"]."</td>
									<td>".$row["PAYMENT_DATE"]."</td>
									<td><center><a class='btn' href='remove_team.php?id=".$row["TID"]."'>DELETE</a></center></td>
									<td><center><a class='btn1' href='view_team_org.php?id=".$row["TID"]."'>VIEW</a></center></td>
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
			</div>
		</div>
	</center>
	<center><div class="footer">SPORTS BLOG</div></center>
</body>
</html>
