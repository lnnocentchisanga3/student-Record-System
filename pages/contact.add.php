<?php
require '../includes/server.connect.php';
require '../includes/functions.php';

if (isset($_POST['contact'])) {
       
       $phone = $_POST['phone'];
       $email = $_POST['email'];
       $state = $_POST['state'];
       $city = $_POST['city'];
       $Address = $_POST['add'];
       $photo = $_FILES['photo']['name'];

       $query = "SELECT * FROM personalinfo ORDER BY id DESC";
       $result = mysqli_query($server_connection, $query);
       $row = mysqli_fetch_assoc($result);
       $num = mysqli_num_rows($result);
       $id = $row['id'];

       echo $id;

        $formData = array(
        "studentID" => mysqli_escape_string($server_connection, $id),
        "phone" => mysqli_escape_string($server_connection, $phone),
        "email" => mysqli_escape_string($server_connection, $email),
        "state" => mysqli_escape_string($server_connection, $state),
        "city" => mysqli_escape_string($server_connection, $city),
         "address" => mysqli_escape_string($server_connection, $Address),
         "photo" => mysqli_escape_string($server_connection, $photo)
        );

        if (InsertDataIntoTable("contactdetails",$formData)) {
           move_uploaded_file($_FILES['photo']['tmp_name'], "./photos/$photo");
          header("location: dashboard.php?studentData");
        }
      else{
         /*header("location: dashboard.php?stdadded=duplicatenotallowed");*/
         echo "error".mysqli_error($server_connection);
         
      }




}
?>