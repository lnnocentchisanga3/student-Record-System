<?php
require '../includes/server.connect.php';
$bool = session_start();

if (isset($_GET['user'])) {
	$user_Active = mysqli_escape_string($server_connection, $_GET['user']);

	 $query = "SELECT * FROM users WHERE username = '$user_Active'";
     $result = mysqli_query($server_connection, $query);
     $row = mysqli_fetch_assoc($result);

     $_SESSION['status'] = $row['status'];
     $_SESSION['id'] = $row['id'];
     $_SESSION['username'] = $row['username'];
     $_SESSION['password'] = $row['password'];

     header("dashboard.php?action=studentData");

}
?>
