<?php
	include 'connection.php';

	$id = $_GET['id'];

	$sql1 = "DELETE FROM TEAM_DATA WHERE ID = $id";
	$result1 = mysqli_query($conn,$sql1);

	$sql2 = "DELETE FROM TEAM_MEMBERS_DATA WHERE TEAM_ID = $id";
	$result2 = mysqli_query($conn,$sql2);

	echo "<script>alert('Team Deleted Successfully')</script>";
	echo "<script> window.location.href = 'remove_registered_team.php'</script>";
?>