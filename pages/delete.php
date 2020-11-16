<?php
require '../includes/server.connect.php';
if (isset($_GET['del'])) {
	$id = $_GET['del'];

	$delete = mysqli_query($server_connection,"DELETE FROM personalinfo WHERE id ='$id'");

	if ($delete) {
		$delete1 = mysqli_query($server_connection,"DELETE FROM contactdetails WHERE studentID ='$id'");
		if ($delete1) {
			header("location: dashboard.php?studentData");
		}else{
			echo "error".mysqli_error($server_connection);
		}
	}else{
		echo "error".mysqli_error($server_connection);
	}
}

?>