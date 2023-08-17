<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Event Page</title>
	<?php 
		include 'connection.php';
		session_start();
		$event_id = $_GET['id'];
		$_SESSION['event_id'] = $event_id;
	?>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap');
		body{
			background: #FAFAFA;
			margin: auto;
			width: 80%;
			font-family: 'Inter', sans-serif;
		}
		.banner{
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
			padding: 10px;
			text-align: left;		}
		.content ul{
			list-style: circle;
			color: red;
		}
		.content li{
			list-style: circle;
			padding: 5px 5px 10px 20px;
		}
		.content a{
			padding: 10px;
			font-size: 20px;
			text-decoration: none;
			font-weight: bold;
		}
		.content a:visited{
			color: #fff;
		}
		table{
			border-collapse: collapse;
			margin: 10px;
		}
		table td{
			padding: 10px;
			border: 1px solid #D0D0D0;
		}
		table th{
			text-align: center;
			padding: 10px;
			border: 1px solid #D0D0D0;
		}
		.result{
			font-size: 18px;
			font-weight: bold;
			color: green;
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
		.btn{
			font-size: 14px;
			text-align: center;
			font-weight: 600;
			background: #007FFD;
			border: none;
			border-radius: 5px;
			padding: 8px;
			color: #fff;
		}
	</style>
</head>
<body>
	<?php
		$date = new DateTime();
		$today = $date->format('Y-m-d');
		$id = $_GET['id'];
		$sql = "SELECT * FROM EVENT_DATA WHERE ID = $id";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
	?>
	<center><img class="banner" src="banner.png"></center>
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
	<center>
		<div class="box">
			<div class="heading2">
				<?php echo $row['EVENT_NAME']; ?>
			</div>
			<div class="content">
				<?php 
					$stmt = "SELECT * FROM RESULT_DATA WHERE EVENT_ID = $id";
					$query = mysqli_query($conn,$stmt);
					if(mysqli_num_rows($query)>0){
						echo "<center><h3>RESULT</h3>";
						$rowr = mysqli_fetch_assoc($query);
						echo "<table>
						<tr>
							<td>".$rowr['TEAM_A']."</td>
							<td>".$rowr['SCORE_A']."</td>
						</tr>
						<tr>
							<td>".$rowr['TEAM_B']."</td>
							<td>".$rowr['SCORE_B']."</td>
						</tr></table>";
						echo "<br><font color='green'><b>".$rowr['RESULT']."</b></font></center><br>";
					}
				?>
				
				</table>
				<?php
					if($row["SPORT_NAME"]=="CRICKET"){
						echo "<center><img src='cricket.jpg' width='500px'></center>";
					}
					else if($row["SPORT_NAME"]=="VOLLEYBALL"){
						echo "<center><img src='volleyball.jpg' width='500px'></center>";
					}
					else if($row["SPORT_NAME"]=="KABADDI"){
						echo "<center><img src='kabaddi.jpg' width='500px'></center>";
					}
					else if($row["SPORT_NAME"]=="SOFTBALL"){
						echo "<center><img src='softball.jpg' width='500px'></center>";
					}
				?>
				<br>
				<p><center><?php echo $row['EVENT_DESCRIPTION']; ?></center></p>
				<h3>EVENT DETAILS</h3>
				<table>
					<tr>
						<td>SPORT NAME</td>
						<td><?php echo $row['SPORT_NAME']; ?></td>
					</tr>
					<tr>
						<td>EVENT NAME</td>
						<td><?php echo $row['EVENT_NAME']; ?></td>
					</tr>
					<tr>
						<td>HOST</td>
						<td><?php echo $row['HOST_NAME']; ?></td>
					</tr>
					<tr>
						<td>EVENT DATE</td>
						<td><?php echo $row['EVENT_DATE']; ?></td>
					</tr>
					<tr>
						<td>VENUE</td>
						<td><?php echo $row['VENUE']; ?></td>
					</tr>
					<tr>
						<td>SPONSER</td>
						<td><?php echo $row['SPONSER']; ?></td>
					</tr>
					<tr>
						<td>CONTACT NUMBER</td>
						<td><?php echo $row['MOBILE_NUMBER']; ?></td>
					</tr>
				</table>

				<h3>ENTRY FEES</h3>
				<li><?php echo $row['ENTRY_FEES']; ?> RS ONLY</li>

				<h3>PRIZE</h3>
				<li>I PRIZE - <?php echo $row['FIRST_PRIZE']; ?> RS</li>
				<li>II PRIZE - <?php echo $row['SECOND_PRIZE']; ?> RS</li>
				<li>III PRIZE - <?php echo $row['THIRD_PRIZE']; ?> RS</li>

				<?php
					$sql2 = "SELECT * FROM DOCUMENT_REQUIRED_DATA WHERE EVENT_ID = $id";
					$result2 = mysqli_query($conn,$sql2);
					if(mysqli_num_rows($result2)>0)
					{						
						echo "<h3>DOCUMENTS REQUIRED</h3>";
						while($row2 = mysqli_fetch_assoc($result2))
						{
							echo "<li>".$row2['DOCUMENT_NAME']."</li>";
						}
						echo "</table>";
					}
					else
					{
						echo "<tr><td colspan='7' align='center'>No Data Found</td></tr></table>";
					}
				?>

				<?php
					$sql1 = "SELECT * FROM ELIGIBILITY_DATA WHERE EVENT_ID = $id";
					$result1 = mysqli_query($conn,$sql1);
					if(mysqli_num_rows($result1)>0)
					{						
						echo "<h3>ELIGIBILITY DETAILS</h3>";
						while($row1 = mysqli_fetch_assoc($result1))
						{
							echo "<li>".$row1['ELIGIBILITY']."</li>";
						}
						echo "</table>";
					}
					else
					{
						echo "<tr><td colspan='7' align='center'>No Data Found</td></tr></table>";
					}
				?>
				<h3>TEAM REGISTARATION</h3>
				<?php 
					 echo "Maximum Participant Team : ".$row['MAXIMUM_PARTICIPANTS']."<br><br><br>";
					 echo "Registration Open Date : ".$row['REGISTER_START']."<br>"; 
					 echo "Registration Close Date : ".$row['REGISTER_END']."<br><br><br>";
					 $sql33 = "SELECT count(*) as cnt FROM PAYMENT_DATA WHERE EVENT_ID = $id";
					 $result33 = mysqli_query($conn,$sql33);
					 $row33 = mysqli_fetch_array($result33);
					 if($row33["cnt"]<$row['MAXIMUM_PARTICIPANTS']) 
					 {
					 	$remaining = $row['MAXIMUM_PARTICIPANTS']-$row33["cnt"];
					 	echo "Registered Teams : " .$row33['cnt']. " | Remaining Slots Are : " .$remaining. "<br><br><br>";
						 if($today >= $row['REGISTER_START']){
						 	if($today <= $row['REGISTER_END']){
								if($row['SPORT_NAME']=="CRICKET"){
									echo "<a class='btn' href='cricket_register.php'>Register Here</a>";
								}
								else if($row['SPORT_NAME']=="VOLLEYBALL"){
									echo "<a class='btn' href='volleyball_register.php'>Register Here</a>";
								}
								else if ($row['SPORT_NAME']=="KABADDI") {
									echo "<a class='btn' href='kabaddi_register.php'>Register Here</a>";
								}
								else if($row['SPORT_NAME']=="SOFTBALL"){
									echo "<a class='btn' href='softball_register.php'>Register Here</a>";
								}
							}
							else{
							echo "<br><font color='red'><b>REGISTRATION CLOSED</b></font>";
						}
						}
						else{
							echo "<br><font color='#009ADD'><b>REGISTRATION NOT OPENED YET</b></font>";
						}
					 }
					 else
					 {
					 	echo "<br><font color='red'><b>SLOTS ARE FULL</b></font>";
					 }
					 	
				?>

				
			</div>
			<br>
		</div>
	</center>
	<center><div class="footer">SPORTS BLOG</div></center>
</body>
</html>
