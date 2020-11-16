<?php 
require '../includes/server.connect.php';
require '../includes/functions.php';
?> 

<?php
if (isset($_GET['view'])) {
$vid = $_GET['view'];

$data = mysqli_query($server_connection, "SELECT * FROM personalinfo JOIN contactdetails ON personalinfo.id = contactdetails.studentID WHERE id = '$vid'");

$row = mysqli_fetch_array($data);
}
?>
<div class="card container">
<div class="card-header">
Student Details
</div>
<!-- /.card-heading -->
<div class="card-body">
    <div class="row">
        <div class="col-md-3">
            <?php
            echo '<img class="rounded-circle" src="./photos/'.$row["photo"].'" width="100px">';
            ?>
        </div>
        <div class="col-md-3">
            
        </div>
        <div class="col-md-3">
            
        </div>
        <div class="col-md-3">
            
        </div>
    </div>
</div>
<!-- /.card-body -->
</div>
