<?php
	include 'connection.php';

	$id = $_GET['id'];

	$sql1 = "DELETE FROM USER_DATA WHERE ID = $id";
	$result1 = mysqli_query($conn,$sql1);

	echo "<script>alert('User Deleted Successfully')</script>";
	echo "<script> window.location.href = 'manage_user.php'</script>";
?>