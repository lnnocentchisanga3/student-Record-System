<?php
require '../includes/server.connect.php';
require '../includes/functions.php';

if (isset($_POST['addCourse'])) {


	if (empty($_POST['initial']) || empty($_POST['full']) || empty($_POST['cdate'])) {
		header("location: dashboard.php?addCoursePage=coursenotadded");
	}else{
	
	$formData = array(
	"course_sname" => mysqli_escape_string($server_connection, $_POST['initial']),
	"course_fname" => mysqli_escape_string($server_connection, $_POST['full']),
	"date_added" => mysqli_escape_string($server_connection, $_POST['cdate']),
	"date_updated" => ""
	);

	InsertDataIntoTable("course",$formData);

	header("location: dashboard.php?showCourse");

}
}

?>