<?php
require '../includes/server.connect.php';
require '../includes/functions.php';

if (isset($_POST['insert'])) {


	$fname = $_POST['username'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$sex = $_POST['gender'];
	$age = $_POST['age'];
	$program = $_POST['course'];
	$keep = $_POST['keep'];
	$pc = $_POST['pc'];
	$ocp = $_POST['ocp'];
	$cat = $_POST['cat'];
	$fic = $_POST['money'];
	$country = $_POST['nation'];


	$formData = array(
		"fname" => $fname,
		"mname" => $mname,
		"lname" => $lname,
		"sex" => $sex,
		"age" => $age,
		"program" => $program,
		"guardian" =>$keep,
		"pchallange" => $pc,
		"occupation" =>$ocp,
		"cat"=> $cat,
		"income" =>$fic,
		"country" => $country
	);

	InsertDataIntoTable("personalinfo",$formData);

	header("location: dashboard.php?stdadded");
}

?>