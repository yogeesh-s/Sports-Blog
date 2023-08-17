<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage Live Event</title>
	<?php 
		session_start();
	 	include 'connection.php';
	 	$email_id = $_SESSION["email_id"];
	 	$sql = "SELECT * FROM ORGANIZER_DATA WHERE EMAIL_ID = '$email_id'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				$organizer_id = $row["ID"];
				$_SESSION['organizer_id'] = $organizer_id;
				$organizer_name = $row["NAME"];
				$_SESSION['organizer_name'] = $organizer_name;
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
			font-size: 16px;
			text-align: center;
			font-weight: bold;
			width: 150px;
			background: #00AD71;
			border: none;
			border-radius: 5px;
			padding: 10px;
			color: #fff;
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
		select{
			width: 90%;
			border:1px solid #D6D6D6;
			padding: 10px;
			margin: 10px;
		}
		select-items {
			  width: 90%;
			border:1px solid #D6D6D6;
			padding: 10px;
			margin: 10px;
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
	<center><label class="heading">MANAGE LIVE EVENTS</label></center>
	<center>
		<div class="container">
			<div class="card">
				<form method="POST" autocomplete="off">
					<center><label class="heading">Live Score Update</label></center>
					<br>
					<table>
						<tr>
							<td><label>Team Name 1</label></td>
							<td><input type="text" name="team_a"></td>
						</tr>
						<tr>
							<td><label>Team 1 Score</label></td>
							<td><input type="text" name="score_a"></td>
						</tr>
						<tr>
							<td><label>Team Name 2</label></td>
							<td><input type="text" name="team_b"></td>
						</tr>
						<tr>
							<td><label>Team 2 Score</label></td>
							<td><input type="text" name="score_b"></td>
						</tr>
						<tr>
							<td><label>Result</label></td>
							<td><input type="text" name="result"></td>
						</tr>
						<tr>
							<td colspan="2"><br><center><input type="submit" class="btn" name="submit"></center></td>
						</tr>
					</table>	
				</form>
			</div>
		</div>
	</center>
	<center><div class="footer">SPORTS BLOG</div></center>
	<?php
		if(isset($_POST['submit']))
			{
				$event_id = $_GET['id'];
				$team_a = $_POST['team_a'];
				$score_a = $_POST['score_a'];
				$team_b = $_POST['team_b'];
				$score_b = $_POST['score_b'];
				$result = $_POST['result'];
				$sql2 = "SELECT * FROM RESULT_DATA WHERE EVENT_ID = $event_id";
				$result2 = mysqli_query($conn, $sql2);
				if(mysqli_num_rows($result2)>0){
					$sql1 = "UPDATE RESULT_DATA SET TEAM_A = '$team_a', SCORE_A = '$score_a',TEAM_B = '$team_b', SCORE_B = '$score_b',RESULT = '$result' WHERE EVENT_ID = $event_id";
					$result1 = mysqli_query($conn, $sql1); 
					echo "<script>alert('Result Updated Successfully')</script>";
				    echo "<script> window.location.href = 'manage_live_event.php'</script>";
				}
				else{
					$sql1 = "INSERT INTO RESULT_DATA (EVENT_ID,TEAM_A,SCORE_A,TEAM_B,SCORE_B,RESULT) VALUES ('".$event_id."','".$team_a."','".$score_a."','".$team_b."','".$score_b."','".$result."')";
					$result1 = mysqli_query($conn, $sql1); 
					echo "<script>alert('Result Added Successfully')</script>";
				    echo "<script> window.location.href = 'manage_live_event.php'</script>";
				}
			}
	?>
</body>
</html>
