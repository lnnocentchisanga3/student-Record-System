<?php
require '../includes/server.connect.php';
require '../includes/functions.php';
session_start();
if (isset($_GET['logout'])) {

	$formData = array(
        "status" => "offline",
        );

     updateDataRow("users", $formData, "WHERE username = '$_SESSION[username]'");


	session_unset();
	session_cache_expire();
	session_destroy();

	 

	header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/../index.php");

	mysqli_close($server_connection);

}
?>