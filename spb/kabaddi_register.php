<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kabaddi Registration</title>
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
			$event_id = $_SESSION["event_id"];
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
			display: flex;
			align-items: center;
  			justify-content: center;
		}

		.card{
			background: #fff;
			padding: 10px;
			margin: 30px;
			border: 1px solid #DEDEDE;
			width: 70%;
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
			font-weight: bold;
			padding: 10px 0px 10px 0px;
			margin: 10px;
		}
		input[type=text]{
			width: 80%;
			border:1px solid #D6D6D6;
			padding: 10px;
			margin: 10px;
		}
		textarea{
			width: 95%;
			border:1px solid #D6D6D6;
			padding: 10px;
			margin: 10px;
		}
		input[type=password]{
			width: 95%;
			border:1px solid #D6D6D6;
			padding: 10px;
			margin: 10px;
		}
		select{
			border:1px solid #D6D6D6;
			padding: 9px;
			margin: 10px;
		}
		.submit{
			font-size: 18px;
			border: none;
			border-radius: 5px;
			background: #00B957;
			color: #fff;
			padding: 10px;
			margin: 10px;
		}
		.reset{
			border: none;
			border-radius: 5px;
			background: #E79F00;
			color: #fff;
			padding: 10px;
			margin: 10px;
		}
		a{
			padding: 10px;
			text-decoration:none;
		}
		a::after{
			color: red;
		}
		.banner{
			margin-top: 10px;
			border-radius: 5px;
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
	<div class="container">
		<div class="card">
			<form method="POST" autocomplete="off">
				<center><label class="heading">TEAM REGISTRATION</label></center>
				<br>
				<label>TEAM NAME</label><br>
				<input type="text" name="team_name" required><br>
				<table>
					<tr>
						<th><label>PLAYER NAME</label></th>
						<th><label>ROLE</label></th>
					</tr>
					<tr>
						<td><input type="text" name="name[]" required></td>
						<td><input type="text" name="role[]" value="CAPTAIN" readonly></td>
					</tr>
					<tr>
						<td><input type="text" name="name[]" required></td>
						<td><input type="text" name="role[]" value="PLAYER" readonly></td>
					</tr>
					<tr>
						<td><input type="text" name="name[]" required></td>
						<td><input type="text" name="role[]" value="PLAYER" readonly></td>
					</tr>
					<tr>
						<td><input type="text" name="name[]" required></td>
						<td><input type="text" name="role[]" value="PLAYER" readonly></td>
					</tr>
					<tr>
						<td><input type="text" name="name[]" required></td>
						<td><input type="text" name="role[]" value="PLAYER" readonly></td>
					</tr>
					<tr>
						<td><input type="text" name="name[]" required></td>
						<td><input type="text" name="role[]" value="PLAYER" readonly></td>
					</tr>
					<tr>
						<td><input type="text" name="name[]" required></td>
						<td><input type="text" name="role[]" value="PLAYER" readonly></td>
					</tr>
				</table>
				<input type="submit" class="submit" name="registration" value="Proceed to Payment">
			</form>
		</div>
	</div>
	<?php
		if(isset($_POST['registration']))
		{
			$team_name = $_POST['team_name'];
			$$_SESSION['team_name'] = $team_name;
			//Inserting Team Name
			$sql2 = "INSERT INTO TEAM_DATA (USER_ID,EVENT_ID,TEAM_NAME) VALUES ('".$id."','".$event_id."','".$team_name."')";
			$result2 = mysqli_query($conn, $sql2);
			//Getting Team ID
			$stmt = "SELECT ID FROM TEAM_DATA WHERE USER_ID = '$id' AND EVENT_ID = '$event_id' AND TEAM_NAME = '$team_name'";
			$query = mysqli_query($conn,$stmt);
			$data = mysqli_fetch_array($query);
			$team_id = $data["ID"];
			$_SESSION['team_id'] = $team_id;
			function add_team_member_data($team_id,$conn)
			{
				// Data Getting From Form
				$name = $_POST['name'];
				$role = $_POST['role'];
				// Insering Every Row Data
				foreach ($name as $key => $value)
				{
					$sql3 = "INSERT INTO TEAM_MEMBERS_DATA (TEAM_ID,PLAYER_NAME,ROLE) VALUES ('".$team_id."','".$value."','".$role[$key]."')";
					$result3 = mysqli_query($conn, $sql3);
				}
				echo "<script>alert('Team Registration Success')</script>";
				echo "<script> window.location.href = 'payment.php'</script>";
			}
			add_team_member_data($team_id,$conn);
		}
	?>
	<center><div class="footer">SPORTS BLOG</div></center>
</body>
</html>
