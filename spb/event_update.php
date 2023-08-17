<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<title>Event Update</title>
	<?php 
		include 'connection.php';
		session_start();
		$organizer_name = $_SESSION["organizer_name"];
	?>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#add_docs").click(function(){
				var docs = '<tr><td><input type="text" name="docs[]" value="<?php echo isset($_POST["dob"]) ? $_POST["dob"] : ''; ?>" required></td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class="rmvbtn" type="button" name="Remove" id="remove" value="Remove"></td></tr>';
				$("#docs_field").append(docs);
			});

			$("#docs_field").on('click','#remove',function(){
				$(this).closest('tr').remove();
			});

			$("#add_eligibility").click(function(){
				var docs = '<tr><td><input type="text" name="eligibility[]" value="<?php echo isset($_POST["dob"]) ? $_POST["dob"] : ''; ?>" required></td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class="rmvbtn" type="button" name="Remove" id="remove" value="Remove"></td></tr>';
				$("#eligibility_field").append(docs);
			});

			$("#eligibility_field").on('click','#remove',function(){
				$(this).closest('tr').remove();
			});
		});
	</script>
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
			width: 900px;
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
		select{
			width: 97%;
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
		a{
			padding: 10px;
			text-decoration:none;
		}
		a::after{
			color: red;
		}
		.banner{
			width: 100%;
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
		.addbtn{
			background: #0062fc;
			color: white;
			border: none;
			width: 100px;
			padding: 10px 15px 10px 15px;
			font-size: 15px;
			font-family: 'Roboto',sans-serif;
			border-radius: 5px;
			text-shadow: 2px 2px 5px black;
		}

		.rmvbtn{
			background: #ff382a;
			color: white;
			border: none;
			width: 100px;
			padding: 10px 20px 10px 20px;
			font-size: 15px;
			font-family: 'Roboto',sans-serif;
			border-radius: 5px;
			text-shadow: 2px 2px 5px black;
		}
		hr{
			border: 1px solid #D6D6D6;
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
			  <li style="float:right"><a class="active" href="add_event.php">Update Sports Event</a></li>
			</ul>
		</div>
	</center>
	<br>
	<center><label class="heading">UPDATE SPORTS EVENT</label></center>
	<div class="container">
		<div class="card">
			<form method="POST" autocomplete="off">
				<br>
				<?php
					$id = $_GET['id'];
					$sql = "SELECT * FROM EVENT_DATA WHERE ID = $id";
					$result = mysqli_query($conn,$sql);
					if(mysqli_num_rows($result)>0)
					{
						$row = mysqli_fetch_assoc($result);
					}
				?>
				<label>EVENT NAME</label><br>
				<input type="text" name="event_name" value="<?php echo $row['EVENT_NAME'] ?>" required><br>
				<label>EVENT DESCRIPTION</label><br>
				<textarea name="event_description" required><?php echo $row['EVENT_DESCRIPTION']; ?></textarea><br>
				<label>HOST NAME</label><br>
				<input type="text" name="host_name"  value="<?php echo $row['HOST_NAME']; ?>" required><br>
				<label>VENUE</label><br>
				<input type="text" name="venue" value="<?php echo $row['VENUE']; ?>" required><br>
				<label>SPONSER</label><br>
				<input type="text" name="sponser" value="<?php echo $row['SPONSER']; ?>" required><br>
				<label>MOBILE NUMBER</label><br>
				<input type="text" id="mobile" name="mobile_number"  value="<?php echo $row['MOBILE_NUMBER']; ?>" required><br>
				<label>EVENT DATE</label><br>
				<input type="date" name="event_date" value="<?php echo $row["EVENT_DATE"]; ?>" required><br>
				<hr>
				<label>DOCUMENTS REQUIRED</label><br>
				<table id="docs_field">
					<?php
						$sql1 = "SELECT * FROM DOCUMENT_REQUIRED_DATA WHERE EVENT_ID = $id";
						$result1 = mysqli_query($conn,$sql1);
						if(mysqli_num_rows($result1)>0)
						{
							while($row1 = mysqli_fetch_assoc($result1)){
					?>
								<tr><td><input type="text" name="docs[]" value="<?php echo $row1["DOCUMENT_NAME"] ?>"></td></tr>
					<?php
								$document_id[] = $row1["ID"];
							}
						}
					?>
				</table>
				<hr>
				<label>ELIGIBILITY</label><br>
				<table id="eligibility_field">
					<?php
						$sql2 = "SELECT * FROM ELIGIBILITY_DATA WHERE EVENT_ID = $id";
						$result2 = mysqli_query($conn,$sql2);
						if(mysqli_num_rows($result2)>0)
						{
							while($row2 = mysqli_fetch_assoc($result2)){
						?>
								<tr><td><input type="text" name="eligibility[]" value="<?php echo $row2["ELIGIBILITY"] ?>"></td></tr>
					<?php
							
								$eligibility_id[] = $row2["ID"];
							}
						}
					?>
				</table>
				<hr>
				<label>PRIZES</label><br><br>
				<label>I Prize</label>
				<br><input type="text" name="first_prize" value="<?php echo $row["FIRST_PRIZE"]; ?>" required><br>
				<label>II Prize</label>
				<br><input type="text" name="second_prize" value="<?php echo $row["SECOND_PRIZE"]; ?>" required><br>
				<hr>
				<label>ENTRY FEES</label><br>
				<input type="text" name="entry_fees" value="<?php echo $row["ENTRY_FEES"]; ?>" required><br>
				<hr>
				<label>REGISTRATION DATE</label><br><br>
				<label>Register Start Date</label>
				<input type="date" name="register_start" value="<?php echo $row["REGISTER_START"];  ?>" required><br>
				<label>Register End Date</label>
				<input type="date" name="register_end" value="<?php echo $row["REGISTER_END"]; ?>" required><br>
				<hr>
				<label>MAXIMUM PARTICIPANTS</label>
				<input type="text" name="maximum_participants" value="<?php echo $row["MAXIMUM_PARTICIPANTS"]; ?>" required><br>
				<center><input type="submit" class="submit" name="event_register">&nbsp&nbsp<input type="reset" class="reset"></center>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		var email = document.getElementById("email");

		email.addEventListener('input', () => {
		 email.setCustomValidity('');
		  email.checkValidity();
		});

		email.addEventListener('invalid', () => {
		  if(email.value == '') {
		   email.setCustomValidity('Enter email id!');
		  } else {
		    email.setCustomValidity('Enter valid email id');
		  }
		});
	</script>
	
	<?php
		if(isset($_POST['event_register']))
		{
			$organizer_id = $_SESSION["organizer_id"];
			$event_name = $_POST['event_name'];
			$event_description = $_POST['event_description'];
			$host_name = $_POST['host_name'];
			$venue = $_POST['venue'];
			$sponser = $_POST['sponser'];
			$mobile_number = $_POST['mobile_number'];
			$event_date = $_POST['event_date'];
			$first_prize = $_POST['first_prize'];
			$second_prize = $_POST['second_prize'];
			$entry_fees = $_POST['entry_fees'];
			$register_start = $_POST['register_start'];
			$register_end = $_POST['register_end'];
			$maximum_participants = $_POST['maximum_participants'];

			$sql = "UPDATE event_data SET `EVENT_NAME` = '$event_name', `EVENT_DESCRIPTION` = '$event_description', `HOST_NAME` = '$host_name', `VENUE` = '$venue', `SPONSER` = '$sponser', `MOBILE_NUMBER` = '$mobile_number', `EVENT_DATE` = '$event_date', `FIRST_PRIZE` = '$first_prize', `SECOND_PRIZE` = '$second_prize',`ENTRY_FEES` = '$entry_fees', `REGISTER_START` = '$register_start', `REGISTER_END` = '$register_end',`MAXIMUM_PARTICIPANTS` = '$maximum_participants' WHERE ID = $id";
			$result = mysqli_query($conn, $sql);
			check_add($conn,$eligibility_id,$document_id); 
	    }
	    function check_add($conn,$eligibility_id,$document_id)
		{
			$docs = $_POST['docs'];
			$eligibility = $_POST['eligibility'];

			foreach ($docs as $key => $value) 
			{
				echo $value;
					$stmt = "UPDATE `DOCUMENT_REQUIRED_DATA` SET `DOCUMENT_NAME` = '$value' WHERE ID = '$document_id[$key]'";
					$query = mysqli_query($conn,$stmt);
			}

			foreach ($eligibility as $key => $value) 
			{
					$stmt = "UPDATE `ELIGIBILITY_DATA` SET `ELIGIBILITY` = '$value' WHERE `ID` = '$eligibility_id[$key]'";
					$query = mysqli_query($conn,$stmt);
			}
			echo "<script>alert('Event Updated Successfully')</script>";
        	echo "<script> window.location.href = 'organizer_dashboard.php'</script>";
		} 
		
	?>
	<center><div class="footer">SPORTS BLOG</div></center>
</body>
</html>
