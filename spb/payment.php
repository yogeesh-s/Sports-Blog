<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment Page</title>
	<?php 
		session_start();
	 	include 'connection.php';
	 	$email_id = $_SESSION["email_id"];
	 	$sql = "SELECT * FROM USER_DATA WHERE EMAIL_ID = '$email_id'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			$row = mysqli_fetch_array($result);
				$id = $row["ID"];
		}

		$team_id = $_SESSION['team_id'];
		$_SESSION['user_id'] = $id;
		
		$event_id = $_SESSION["event_id"];
		$sql1 = "SELECT * FROM EVENT_DATA WHERE ID = $event_id";
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

			background-size: 1366px;
			background-repeat: no-repeat;
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
			padding-left: 20px;
			font-size: 20px;
			text-decoration: none;
			font-weight: bold;
		}
		.content a:visited{
			color: #008750;
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
		.register{
			background: #48BE00;
			color: #fff;
			padding: 10px;
			margin: 30px;
			border-radius: 5px;
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
		.submit{
			font-size: 16px;
			border: none;
			border-radius: 5px;
			background: #00B957;
			color: #fff;
			padding: 10px;
			margin: 10px;
			font-weight: bolder;
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
	<center><img class="banner" src="banner.png" width="1090"></center>
	<center>
		<div class="box">
			<div class="heading2">
				Payment
			</div>
			<center>
				<table>
					<tr>
						<td>EVENT NAME</td>
						<td><?php echo $row1['EVENT_NAME']; ?></td>
					</tr>
					<tr>
						<td>EVENT DATE</td>
						<td><?php echo $row1['EVENT_DATE']; ?></td>
					</tr>
					<tr>
						<td>ENTRY FEES</td>
						<td><?php echo $row1['ENTRY_FEES']; ?></td>
					</tr>
				</table>
				<form method="POST">
					<label>CARD NUMBER</label>
					<input type="text" name="card_no" pattern="[0-9]{12}" required><br>
					<font color="red"> * Amount once paid through the payment gateway shall not be refunded</font><br>
					<input type="submit" class="submit" name="payment" value="PROCEED">
				</form>
			</center>
		</div>
	</center>
	<center><div class="footer">SPORTS BLOG</div></center>
	<?php

		if(isset($_POST['payment']))
		{
			$card_no = $_POST['card_no'];
			$amount = $row1['ENTRY_FEES'];
			$sql4 = "INSERT INTO PAYMENT_DATA (EVENT_ID,TEAM_ID,CARD_NO,AMOUNT) VALUES ('".$event_id."','".$team_id."','".$card_no."','".$amount."')";
			$result4 = mysqli_query($conn, $sql4); 
			echo "<script>alert('Payment Success')</script>";
		    echo "<script> window.location.href = 'payment_done.php'</script>";
		}
	?>
	<script type="text/javascript">
		var email = document.getElementById("card_no");

		email.addEventListener('input', () => {
		 email.setCustomValidity('');
		  email.checkValidity();
		});

		email.addEventListener('invalid', () => {
		  if(email.value == '') {
		   email.setCustomValidity('Enter card no !');
		  } else {
		    email.setCustomValidity('Enter valid card no');
		  }
		});
	</script>
	
</body>
</html>
