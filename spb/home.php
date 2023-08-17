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
	 	.footer{
			background: #FF6500;
			padding: 8px;
			text-align: center;
			color: #fff;
			border-radius: 5px;
			font-weight: bolder;
			margin-bottom: 20px;
		}
	 	.mySlides {display: none;}
		.slide-img {
			vertical-align: middle;
			height: 350px;
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
		.box{
			margin: 30px;
			border: 1px #DEDEDE solid;
			border-radius: 5px;
		}
		.heading1{
			background-color: #FF8D33;
			padding: 10px;
			text-align: center;
			color: white;
			font-size: 15px;
			font-weight: bold;
			border-radius: 5px 5px 0px 0px;
		}
		.content{
			background-color: #fff;
			padding: 10px;
			border-radius: 5px;
		}
		content ul{
			padding: 0;
			margin: 0;
		}
		content ul li{
			list-style: none;
			border-bottom: 1px dotted #DEDEDE;
		}
	 </style>
</head>
<body>
	<center><img class="banner" src="banner.png"></center>
	<center>
		<div class="menu">
			<ul>
			  <li><a class="active" href="home.php">Home</a></li>
			  <li style="float:right"><a href="about_us.php">About Us</a></li>
			  <li style="float:right"><a href="admin_login.php">Admin Login</a></li>
			  <li style="float:right"><a href="organizer_login.php">Organizer Login</a></li>
			  <li style="float:right"><a href="user_login.php">User Login</a></li>
			</ul>
		</div>
	</center>
	<!--Upcoming Events-->
	<div class="box">
			<div class="heading1">
				UPCOMING EVENTS
			</div>
			<div class="content">
				<?php 
					$date = new DateTime();
					$today = $date->format('Y-m-d');
					$sql = "SELECT * FROM EVENT_DATA WHERE EVENT_DATE > '$today'";
					$result = mysqli_query($conn,$sql);
					if(mysqli_num_rows($result)>0)
					{
						echo "<marquee scrollamount='1.5' direction='up'><ul>";
						while($row = mysqli_fetch_assoc($result))
						{
							echo "<li>EVENT NAME : <font color='green'><b>".$row["EVENT_NAME"]."</b></font>  EVENT DATE <font color='blue'><b>[ ".$row["EVENT_DATE"]."]</b></font>  SPORTS NAME - <font color='red'><b>".$row["SPORT_NAME"]."</b></font></li>";
						}
						echo "</ul></marquee>";
					}
					else
					{
						echo "<br><center> No Data Found </center></br>";
					}
				?>
			</div>
		</div>
	<!--Slide Show-->
	<div class="slideshow-container">
		<br>
		<div class="mySlides fade">
		  <img class="slide-img" src="slides/slide1.jpg">
		</div>

		<div class="mySlides fade">
		  <img class="slide-img" src="slides/slide2.jpg">
		</div>

		<div class="mySlides fade">
		  <img class="slide-img" src="slides/slide3.jpg">
		</div>
		<div class="mySlides fade">
		  <img class="slide-img" src="slides/slide4.jpg">
		</div>
		<div class="mySlides fade">
		  <img class="slide-img" src="slides/slide5.jpg">
		</div>
	</div>
		<br>

	<div class="dots" style="text-align:center">
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	</div>

		<script>
		let slideIndex = 0;
		showSlides();

		function showSlides() {
		  let i;
		  let slides = document.getElementsByClassName("mySlides");
		  let dots = document.getElementsByClassName("dot");
		  for (i = 0; i < slides.length; i++) {
		    slides[i].style.display = "none";  
		  }
		  slideIndex++;
		  if (slideIndex > slides.length) {slideIndex = 1}    
		  for (i = 0; i < dots.length; i++) {
		    dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		  setTimeout(showSlides, 3000); // Change image every 2 seconds
		}
		</script>
		
	<div class="container">
		<div class="card">
			<h1 align="center">This is a heading</h1>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		</div>
	</div>
	<center>
		<div class="footer">SPORTS BLOG</div>
	</center>
</body>
</html>
