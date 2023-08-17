<?php
	include 'connection.php';

	$id = $_GET['id'];

	$sql1 = "DELETE FROM EVENT_DATA WHERE ID = $id";
	$result1 = mysqli_query($conn,$sql1);

	$sql2 = "DELETE FROM ELIGIBILITY_DATA WHERE EVENT_ID = $id";
	$result2 = mysqli_query($conn,$sql2);

	$sql3 = "DELETE FROM DOCUMENT_REQUIRED_DATA WHERE EVENT_ID = $id";
	$result1 = mysqli_query($conn,$sql3);

	echo "<script>alert('Event Deleted Successfully')</script>";
	echo "<script> window.location.href = 'manage_event.php'</script>";
?>