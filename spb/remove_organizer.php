<?php
	include 'connection.php';

	$id = $_GET['id'];

	$sql1 = "DELETE FROM ORGANIZER_DATA WHERE ID = $id";
	$result1 = mysqli_query($conn,$sql1);

	echo "<script>alert('Organizer Deleted Successfully')</script>";
	echo "<script> window.location.href = 'manage_organizer.php'</script>";
?>