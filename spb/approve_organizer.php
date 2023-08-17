<?php
	include 'connection.php';

	$id = $_GET['id'];

	$sql1 = "UPDATE ORGANIZER_DATA SET MODERATION = 'APPROVED' WHERE ID = $id";
	$result1 = mysqli_query($conn,$sql1);

	echo "<script>alert('Organizer Approved Successfully')</script>";
	echo "<script> window.location.href = 'manage_organizer.php'</script>";
?>