<div class="col-md-12">
<div class="col-md-12">
<div class="row">
</div>
</div>

<div class="card card-default">
<div class="card-header">
List of Students
</div>
<!-- /.card-heading -->
<div class="card-body">
<div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="myTable">
        <thead>
            <tr>
                <th>Names</th>
                <th>Photo</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Age</th>
                <th>program</th>
                <th>Country</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        <?php 
        require '../includes/server.connect.php';
        require '../includes/functions.php';
       echo fetchStudentData();
        ?> 
            
        </tbody>
    </table>
</div>
<!-- /.table-responsive -->

</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>