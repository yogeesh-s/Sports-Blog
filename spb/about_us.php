<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php 
		include 'connection.php';
		session_start();
		session_destroy();
	 ?>
	 <style type="text/css">
	 	.mySlides {display: none;}
		.slide-img {
			vertical-align: middle;
			height: 500px;
			width: 100%;
			border-radius: 5px;
		}

		/* Slideshow container */
		.slideshow-container {
		  max-width: 95%;
		  position: relative;
		  margin: auto;
		}

		/* The dots/bullets/indicators */
		.dot {
		  height: 15px;
		  width: 15px;
		  margin: 0 2px;
		  background-color: #bbb;
		  border-radius: 50%;
		  display: inline-block;
		  transition: background-color 0.6s ease;
		}

		.dots .active {
		  background-color: #717171;
		}

		/* Fading animation */
		.fade {
		  animation-name: fade;
		  animation-duration: 1.5s;
		}

		@keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
		  .text {font-size: 11px}
		}
	 </style>
</head>
<body>
	<center><img class="banner" src="banner.png"></center>
	<center>
		<div class="menu">
			<ul>
			  <li><a href="home.php">Home</a></li>
			  <li style="float:right"><a  class="active" href="about_us.php">About Us</a></li>
			  <li style="float:right"><a href="admin_login.php">Admin Login</a></li>
			  <li style="float:right"><a href="organizer_login.php">Organizer Login</a></li>
			  <li style="float:right"><a href="user_login.php">User Login</a></li>
			</ul>
		</div>
	</center>

	<div class="container">
		<div class="card">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		</div>
	</div>
	<center>
		<div class="footer">SPORTS BLOG</div>
	</center>
</body>
</html>
