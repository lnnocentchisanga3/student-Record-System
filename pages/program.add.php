<?php
require '../includes/server.connect.php';
require '../includes/functions.php';

if (isset($_POST['finish'])) {
       
       $photo = $_FILES['photo']['name'];;
       $cdate = $_POST['cdate'];

       $query = "SELECT * FROM personalinfo";
       $result = mysqli_query($server_connection, $query);
       $row = mysqli_fetch_assoc($result);
       $num = mysqli_num_rows($result);

       $id = $row['id'];
var_dump($num);
      if ($num > 1) {
        $formData = array(
        "program" => mysqli_escape_string($server_connection, $photo),
        "year" => mysqli_escape_string($server_connection, $cdate),
        "studentID" => mysqli_escape_string($server_connection, $id)
        );

        InsertDataIntoTable("studentprogram",$formData);
        
        header("location: dashboard.php?studentData");
      }else{
         header("location: dashboard.php?contactsadded=duplicatenotallowed");
         
      }




}
?>