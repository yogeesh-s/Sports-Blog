<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Registration</title>
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
		
	</style>
</head>
<body>
	<center><img class="banner" src="banner.png"></center>
	<center>
		<div class="menu">
			<ul>
			  <li><a href="home.php">Home</a></li>
			  <li style="float:right"><a href="admin_login.php">Admin Login</a></li>
			  <li style="float:right"><a href="organizer_login.php">Organizer Login</a></li>
			  <li style="float:right"><a href="user_login.php">User Login</a></li>
			</ul>
		</div>
	</center>
	<br><br>
	<center><label class="heading">USER REGISTRATION</label></center>
	<div class="container">
		<div class="card">
			<form method="POST" autocomplete="off">
				<br>
				<label>NAME</label><br>
				<input type="text" name="name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>" required><br>
				<label>EMAIL ID</label><br>
				<input type="text" id="email" name="email_id" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z0-9.-]{2,}[.]{1}[a-zA-Z0-9]{2,}" value="<?php echo isset($_POST["email_id"]) ? $_POST["email_id"] : ''; ?>" required><br>
				<label>MOBILE NUMBER</label><br>
				<input type="text" id="mobile" name="mobile_number" pattern="[0-9]{10}" value="<?php echo isset($_POST["mobile_number"]) ? $_POST["mobile_number"] : ''; ?>" required><br>
				<label>DOB</label><br>
				<input type="date" name="dob" value="<?php echo isset($_POST["dob"]) ? $_POST["dob"] : ''; ?>" required><br>
				<label>ADDRESS</label><br>
				<textarea name="address" required><?php echo isset($_POST["address"]) ? $_POST["address"] : ''; ?></textarea>
				<label>PASSWORD</label><br>
				<input type="password" name="password" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" required><br>
				<label>
					<font color="red">
						* Minimum 8 characters<br>
					</font>
				</label>
				<label>
					<font color="red">
						* At least one upper case,one lower case,one digit, one special character (#?!@$%^&*-)<br>

					</font>
				</label>
				<br>
				<label>CONFIRM PASSWORD</label><br>
				<input type="password" name="confirm_password" required><br>
				<center><input type="submit" class="submit" name="register">&nbsp&nbsp<input type="reset" class="reset"></center>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		var phone_input = document.getElementById("mobile");

		phone_input.addEventListener('input', () => {
		  phone_input.setCustomValidity('');
		  phone_input.checkValidity();
		});

		phone_input.addEventListener('invalid', () => {
		  if(phone_input.value == '') {
		    phone_input.setCustomValidity('Enter mobile number!');
		  } else {
		    phone_input.setCustomValidity('Enter valid mobile number');
		  }
		});

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
				$sql = "INSERT INTO USER_DATA (NAME,EMAIL_ID,MOBILE_NUMBER,DOB,ADDRESS,USER_PASSWORD) VALUES ('".$name."','".$email_id."','".$mobile_number."','".$dob."','".$address."','".$password."')";
				$result = mysqli_query($conn, $sql);  
		        echo "<script>alert('Registration successful. Please Login')</script>";
		        echo "<script> window.location.href = 'user_login.php'</script>";  
			}
			else{
				echo "<script>alert('Password miss match. Please try again')</script>"; 
			}  
		}
		
	?>
	<center><div class="footer">SPORTS BLOG</div></center>
</body>
</html>
