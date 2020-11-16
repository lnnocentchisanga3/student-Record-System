<?php
require '../includes/server.connect.php';
require '../includes/functions.php';

if (isset($_POST['update'])) {
       
       $phone = $_POST['phone'];
       $email = $_POST['email'];
       $state = $_POST['state'];
       $city = $_POST['city'];
       $Address = $_POST['add'];
       $photo = $_FILES['photo']['name'];
       $id = $_POST['id'];

        $formData = array(
        "studentID" => mysqli_escape_string($server_connection, $id),
        "phone" => mysqli_escape_string($server_connection, $phone),
        "email" => mysqli_escape_string($server_connection, $email),
        "state" => mysqli_escape_string($server_connection, $state),
        "city" => mysqli_escape_string($server_connection, $city),
         "address" => mysqli_escape_string($server_connection, $Address),
         "photo" => mysqli_escape_string($server_connection, $photo)
        );

        if (updateDataRow("contactdetails",$formData,"WHERE studentID = '$id'")) {
           move_uploaded_file($_FILES['photo']['tmp_name'], "./photos/$photo");
          header("location: dashboard.php?studentData");
        }
      else{
         /*header("location: dashboard.php?stdadded=duplicatenotallowed");*/
         echo "error".mysqli_error($server_connection);
         
      }




}
?>