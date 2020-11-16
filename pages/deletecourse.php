<?php
require '../includes/server.connect.php';
if (isset($_GET['delete'])) {
	$id = $_GET['delete'];

	$delete = mysqli_query($server_connection,"DELETE FROM course WHERE id ='$id'");

	if ($delete) {
		header("location: dashboard.php?showCourse");
	}else{
		echo "error".mysqli_error($server_connection);
	}
}

?>