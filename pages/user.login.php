<?php
require '../includes/server.connect.php';
require '../includes/functions.php';

if (isset($_POST['btn'])) {
       
       $password = $_POST['pwd'];
       $email = $_POST['user'];
      
       $user = mysqli_escape_string($server_connection, $email);
      $pwd = mysqli_escape_string($server_connection, $password);

       $query = "SELECT * FROM users WHERE username = '$user'";
       $result = mysqli_query($server_connection, $query);
       $row = mysqli_fetch_assoc($result);

       if ($row['username'] == $user && $row['password'] == $password) {
         $formData = array(
        "status" => "active",
        );

         updateDataRow("users", $formData, "WHERE username = '$user'");
         session_start();
         $_SESSION['id'] = $row['id'];
         $_SESSION['username'] = $row['username'];

         header("location: dashboard.php?studentData");
         
       }else{
        header("location: ../index.php?action=wrongpwd&ID");
       }


      /*if ($id < 1) {
        $formData = array(
        "studentID" => mysqli_escape_string($server_connection, $id),
        "phone" => mysqli_escape_string($server_connection, $phone),
        "email" => mysqli_escape_string($server_connection, $email),
        "state" => mysqli_escape_string($server_connection, $state),
        "city" => mysqli_escape_string($server_connection, $city),
         "address" => mysqli_escape_string($server_connection, $Address),
        );

        InsertDataIntoTable("contactdetails",$formData);*/
/*
        header("location: dashboard.php?contactsadded");
      }else{
         header("location: dashboard.php?stdadded=duplicatenotallowed");
         
      }*/




}
?>