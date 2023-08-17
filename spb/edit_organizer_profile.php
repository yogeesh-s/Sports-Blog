<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update ORGANIZER Profile</title>
	<?php 
		session_start();
	 	include 'connection.php';
	 	$email_id = $_SESSION["email_id"];
	 	$sql = "SELECT * FROM ORGANIZER_DATA WHERE EMAIL_ID = '$email_id'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			$row = mysqli_fetch_assoc($result);
			$id = $row["ID"];
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
		label{
			color: #7D7D7D;
			padding: 10px 0px 10px 0px;
			margin: 10px;
		}
		input[type=text]{
			width: 95%;
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
		input[type=date]{
			width: 95%;
			border:1px solid #D6D6D6;
			padding: 10px;
			margin: 10px;
		}
		.submit{
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
		
	</style>
</head>
<body>
	<center><img class="banner" class="banner" src="banner.png"></center>
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
	<center><label class="heading">UPDATE ORGANIZER PROFILE</label></center>
	<div class="container">
		<div class="card">
		<?php

		?>
			<form method="POST" autocomplete="off">
				<br>
				<label>NAME</label><br>
				<input type="text" name="name" value="<?php echo $row["NAME"]; ?>" required><br>
				<label>EMAIL ID</label><br>
				<input type="text" id="email" name="email_id" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z0-9.-]{2,}[.]{1}[a-zA-Z0-9]{2,}" value="<?php echo $row["EMAIL_ID"]; ?>" required><br>
				<label>MOBILE NUMBER</label><br>
				<input type="text" id="mobile" name="mobile_number" pattern="[0-9]{10}" value="<?php echo $row["MOBILE_NUMBER"]; ?>" required><br>
				<label>DOB</label><br>
				<input type="date" name="dob" value="<?php echo $row["DOB"]; ?>" required><br>
				<label>ADDRESS</label><br>
				<textarea name="address" required><?php echo $row["ADDRESS"]; ?></textarea>
				<label>PASSWORD</label><br>
				<input type="password" name="password" value="<?php echo $row["ORGANIZER_PASSWORD"]; ?>" required><br>
				<label>CONFIRM PASSWORD</label><br>
				<input type="password" name="confirm_password" value="<?php echo $row["ORGANIZER_PASSWORD"]; ?>" required><br>
				<center><input type="submit" class="submit" value="Update" name="register">&nbsp&nbsp<input type="reset" class="reset"></center>
			</form>
		</div>
	</div>
	<center><div class="footer">SPORTS BLOG</div></center>
	<?php
		if(isset($_POST['register']))
		{
			$name = $_POST['name'];
			$email_id = $_POST['email_id'];
			$mobile_number = $_POST['mobile_number'];
			$dob = $_POST['dob'];
			$address = $_POST['address'];
			$password = $_POST['password'];
			$confirm_password = $_POST['confirm_password'];
			if($password==$confirm_password)
			{
				$sql = "UPDATE ORGANIZER_DATA SET NAME = '$name' ,EMAIL_ID = '$email_id' ,MOBILE_NUMBER = '$mobile_number' ,DOB = '$dob' ,ADDRESS = '$address' ,ORGANIZER_PASSWORD = '$password' WHERE ID = $id";
				$result = mysqli_query($conn, $sql);  
		        echo "<script>alert('Update successful. Please Login')</script>";
		        echo "<script> window.location.href = 'ORGANIZER_login.php'</script>";  
			}
			else{
				echo "<script>alert('Password miss match. Please try again')</script>"; 
			}  
		}
		
	?>
</body>
</html>
