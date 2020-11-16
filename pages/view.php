<?php 
require '../includes/server.connect.php';
require '../includes/functions.php';
?> 

<?php
if (isset($_GET['view'])) {
$vid = $_GET['view'];

$data = mysqli_query($server_connection, "SELECT * FROM personalinfo  WHERE id ='$vid'");
$data1 = mysqli_query($server_connection, "SELECT * FROM contactdetails WHERE studentID ='$vid'");

$row = mysqli_fetch_array($data);
$row1 = mysqli_fetch_array($data1);
}
?>
<div class="card container">
<div class="card-header">
<a href="dashboard.php?studentData" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Go back</a> <span class="text-center">Student Details</span>
</div>
<!-- /.card-heading -->
<div class="card-body">
    <div class="row">
    	<h5 class="col-md-12 pb-4">Personal information</h5>
        <div class="col-md-3">
            <?php
            echo '<img class="" src="./photos/'.$row1["photo"].'" width="200px">';
            ?>
        </div>
        <div class="col-md-3">
            <h5>Name</h5><?php echo $row["fname"]."  ".$row["lname"]; ?>
        </div>
        <div class="col-md-3">
             <h5>Gender</h5><?php echo $row["sex"]."<br>  <h5>Age</h5> ".$row["age"]; ?>
        </div>
        <div class="col-md-3">
            <h5>Country</h5><?php echo $row["country"]; ?>
        </div>
    </div>
    <hr>
    <div class="row">
    	<h5 class="col-md-12 pb-4">Contact information</h5>
        <div class="col-md-3">
           <h5>Phone</h5> <?php echo $row1["phone"]; ?>
        </div>
        <div class="col-md-3">
            <h5>Address</h5><?php echo $row1["address"]; ?>
        </div>
        <div class="col-md-3">
             <h5>City</h5><?php echo $row1["city"]."<br>  <h5>Province/State</h5> ".$row1["state"]; ?>
        </div>
        <div class="col-md-3">
            <h5>Email</h5><a href="mailto: <?php echo $row1["email"]; ?>"><?php echo $row1["email"]; ?></a>
        </div>
    </div>
    <hr>
    <div class="row">
    	<h5 class="col-md-12 pb-4 text-center">Other information</h5>
        <div class="col-md-6">
           <h5>Program</h5> <?php echo $row["program"]; ?>
        </div>
        <div class="col-md-6">
            <h5>Guardian</h5><?php echo $row["guardian"]; ?>
        </div>
        <div class="col-md-6">
             <h5>Income</h5><?php echo "K ".$row["income"]."<br>  <h5>Occupation</h5> ".$row["occupation"]; ?>
        </div>
        <div class="col-md-6">
            <h5>Physical Challange</h5><?php echo $row["pchallange"]; ?>
        </div>
    </div>
</div>
<!-- /.card-body -->
</div>
