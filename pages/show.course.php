<div class="card card-default">
                        <div class="card-header">
                            <i class="fa fa-folder-open"></i> View Course
                        </div>
                        <!-- /.card-heading -->
                        <div class="card-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>Course Short Name</th>
                                            <th>Course Full Name</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                   <?php
                                   require '../includes/server.connect.php';
                                    require '../includes/functions.php';
                                   echo fetch_data();

                                   ?>   	           
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.card-body -->
                    </div>