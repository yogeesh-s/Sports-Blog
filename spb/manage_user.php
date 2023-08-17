<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage User</title>
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
			background: red;
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
			  <li><a href="admin_dashboard.php">Home</a></li>
			  <li style="float:right"><a href="home.php">Logout</a></li>
			  <li style="float:right"><a href="manage_event_admin.php">Manage Event</a></li>
			  <li style="float:right"><a class="active" href="manage_user.php">Manage User</a></li>
			  <li style="float:right"><a href="manage_organizer.php">Manage Organizer</a></li>
			</ul>
		</div>
	</center>
	<br>
	<center><label class="heading">MANAGE USERS</label></center>
	<center>
		<div class="container">
			<div class="card">
				<?php
					$sql = "SELECT * FROM USER_DATA";
					$result = mysqli_query($conn,$sql);
					if(mysqli_num_rows($result)>0)
					{
						$sl_no = 1;
						echo "<table class='tab'>";
						echo "<tr class='table_head'>
								<th>SL NO</th>
								<th>NAME</th>
								<th>EMAIL ID</th>
								<th>MOBILE NUMBER</th>
								<th>DOB</th>
								<th>ADDRESS</th>
								<th>PASSWORD</th>
								<th>ACTION</th>		
							</tr>";
						while($row = mysqli_fetch_assoc($result))
						{
							echo "<tr>
									<td>".$sl_no."</td>
									<td>".$row["NAME"]."</td>
									<td>".$row["EMAIL_ID"]."</td>
									<td>".$row["MOBILE_NUMBER"]."</td>
									<td>".$row["DOB"]."</td>
									<td>".$row["ADDRESS"]."</td>
									<td>".$row["USER_PASSWORD"]."</td>
									<td><center><a class='btn' href='remove_user.php?id=".$row["ID"]."'>Delete</a></center></td>
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