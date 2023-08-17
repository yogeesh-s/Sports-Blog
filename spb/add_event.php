<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<title>Add Event</title>
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
			  <li style="float:right"><a class="active" href="add_event.php">Add Sports Event</a></li>
			</ul>
		</div>
	</center>
	<br>
	<center><label class="heading">ADD SPORTS EVENT</label></center>
	<div class="container">
		<div class="card">
			<form method="POST" autocomplete="off">
				<br>
				<label>SELECT SPORT</label><br>
				<select name="sports_name">
					<option>CRICKET</option>
					<option>VOLLEYBALL</option>
					<option>KABADDI</option>
					<option>SOFTBALL</option>
				</select><br>
				<label>EVENT NAME</label><br>
				<input type="text" name="event_name" value="<?php echo isset($_POST["event_name"]) ? $_POST["event_name"] : ''; ?>" required><br>
				<label>EVENT DESCRIPTION</label><br>
				<textarea name="event_description" required><?php echo isset($_POST["event_description"]) ? $_POST["event_description"] : ''; ?></textarea><br>
				<label>HOST NAME</label><br>
				<input type="text" name="host_name"  value="<?php echo isset($_POST["host_name"]) ? $_POST["host_name"] : ''; ?>" required><br>
				<label>VENUE</label><br>
				<input type="text" name="venue" value="<?php echo isset($_POST["venue"]) ? $_POST["venue"] : ''; ?>" required><br>
				<label>SPONSERS</label><br>
				<input type="text" name="sponser" value="<?php echo isset($_POST["sponser"]) ? $_POST["sponser"] : ''; ?>" required><br>
				<label>HOST MOBILE NUMBER</label><br>
				<input type="text" id="mobile" name="mobile_number"  value="<?php echo isset($_POST["mobile_number"]) ? $_POST["mobile_number"] : ''; ?>" required><br>
				<label>EVENT DATE</label><br>
				<input type="date" name="event_date" value="<?php echo isset($_POST["event_date"]) ? $_POST["event_date"] : ''; ?>" required><br>
				<hr>
				<label>DOCUMENTS REQUIRED</label><br>
				<table id="docs_field">
					<tr>
						<td><input type="text" name="docs[]"></td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class="addbtn" type="button" name="add" id="add_docs" value="Add"></td>
					</tr>
				</table>
				<hr>
				<label>ELIGIBILITY CRETERIA</label><br>
				<table id="eligibility_field">
					<tr>
						<td><input type="text" name="eligibility[]"></td> <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class="addbtn" type="button" name="add" id="add_eligibility" value="Add"></td>
					</tr>
				</table>
				<hr>
				<label>PRIZES</label><br><br>
				<label>I Prize</label>
				<br><input type="text" name="first_prize" value="<?php echo isset($_POST["first_prize"]) ? $_POST["first_prize"] : ''; ?>" required><br>
				<label>II Prize</label>
				<br><input type="text" name="second_prize" value="<?php echo isset($_POST["second_prize"]) ? $_POST["second_prize"] : ''; ?>" required><br>
				<hr>
				<label>ENTRY FEES</label><br>
				<input type="text" name="entry_fees" value="<?php echo isset($_POST["entry_fees"]) ? $_POST["entry_fees"] : ''; ?>" required><br>
				<hr>
				<label>REGISTRATION DATE</label><br><br>
				<label>Register Start Date</label>
				<input type="date" name="register_start" value="<?php echo isset($_POST["register_start"]) ? $_POST["register_start"] : ''; ?>" required><br>
				<label>Register End Date</label>
				<input type="date" name="register_end" value="<?php echo isset($_POST["register_end"]) ? $_POST["register_end"] : ''; ?>" required><br>
				<hr>
				<label>MAXIMUM PARTICIPANTS</label>
				<input type="text" name="maximum_participants" value="<?php echo isset($_POST["maximum_participants"]) ? $_POST["maximum_participants"] : ''; ?>" required><br>
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
			$sports_name = $_POST['sports_name'];
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


			$sql = "INSERT INTO `event_data`( `ORGANIZER_ID`, `SPORT_NAME`, `EVENT_NAME`, `EVENT_DESCRIPTION`, `HOST_NAME`, `VENUE`, `SPONSER`, `MOBILE_NUMBER`, `EVENT_DATE`, `FIRST_PRIZE`, `SECOND_PRIZE`,`ENTRY_FEES`, `REGISTER_START`, `REGISTER_END`,`MAXIMUM_PARTICIPANTS`) VALUES ('".$organizer_id."','".$sports_name."','".$event_name."','".$event_description."','".$host_name."','".$venue."','".$sponser."','".$mobile_number."','".$event_date."','".$first_prize."','".$second_prize."','".$entry_fees."','".$register_start."','".$register_end."','".$maximum_participants."')";
			$result = mysqli_query($conn, $sql);
			check_add($conn,$organizer_id); 
	    }
	    function check_add($conn,$organizer_id)
		{
			$stmt = "SELECT ID FROM EVENT_DATA WHERE `ORGANIZER_ID` = '$organizer_id' ORDER BY ID DESC LIMIT 1";
			$query = mysqli_query($conn,$stmt);
			$data = mysqli_fetch_array($query);
			$id = $data["ID"];
			$docs = $_POST['docs'];
			$eligibility = $_POST['eligibility'];

			foreach ($docs as $key => $value) 
			{
					$stmt = "INSERT INTO `DOCUMENT_REQUIRED_DATA`( `EVENT_ID`, `DOCUMENT_NAME`) VALUES ('".$id."','".$value."')";
					$query = mysqli_query($conn,$stmt);
			}

			foreach ($eligibility as $key => $value) 
			{
					$stmt = "INSERT INTO `ELIGIBILITY_DATA`( `EVENT_ID`, `ELIGIBILITY`) VALUES ('".$id."','".$value."')";
					$query = mysqli_query($conn,$stmt);
			}
			echo "<script>alert('Event Added Successfully')</script>";
        	echo "<script> window.location.href = 'organizer_dashboard.php'</script>";
		} 
		
	?>
	<center><div class="footer">SPORTS BLOG</div></center>
</body>
</html>
