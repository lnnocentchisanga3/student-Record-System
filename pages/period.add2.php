<?php
require '../includes/server.connect.php';
require '../includes/functions.php';

if (isset($_POST['addperiod'])) {


	if (empty($_POST['class']) || empty($_POST['course']) || empty($_POST['day'])|| empty($_POST['time'])|| empty($_POST['instructor'])) {
		header("location: dashboard.php?timetable2=prioednotadded");
	}else{
	
	$formData = array(
	"class" => mysqli_escape_string($server_connection, $_POST['class']),
	"course" => mysqli_escape_string($server_connection, $_POST['course']),
	"lecturer" => mysqli_escape_string($server_connection, $_POST['instructor']),
	"time" => mysqli_escape_string($server_connection, $_POST['time']),
	"day" => mysqli_escape_string($server_connection, $_POST['day']),
	);

	InsertDataIntoTable("timetable",$formData);

	header("location: dashboard.php?timetable2=prioedadded");

}
}

?>