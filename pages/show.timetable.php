 <div class="container">
            	<div class="card ">
            		<div class="card-header">
            			<i class="fa fa-tasks"></i> Class TimeTables
            		</div>
            		<div class="card-body">
            			<div class="">
                                    <!-- <div class="row">
                                          <div class="col-md-3 border-right">
                                            Days
                                          </div>
                                          <div class="col-md-3 border-right">
                                              First Session
                                          </div>
                                          <div class="col-md-3 border-right">
                                               Second Session
                                          </div>
                                          <div class="col-md-3">
                                              Third Session
                                          </div>
                                    </div> -->
                                     <!--  0969330184 -->
                                     <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                          <tr>
                                            <th>Days</th>
                                            <th> First Session</th>
                                            <th>Second Session</th>
                                            <th>Third Session</th>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th>08:00 - 10:00</th>
                                            <th>10:30 - 12:30</th>
                                            <th>14:00 - 16:00</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                          <td>MONDAY</td>
                                           <?php
                                                 require '../includes/server.connect.php';
                                                $query = "SELECT * FROM timetable WHERE class = 'BIT' AND day ='Monday'";
                                                $result = mysqli_query($server_connection, $query);
                                                if (!$result) {
                                                      echo "TimeTable <br> Not Found";
                                                }else{
                                                      while ($row = mysqli_fetch_assoc($result)) {
                                                           echo "<td>".$row['course']."</td>"; 
                                                      }
                                                }
                                                ?> 
                                    </tr>
                                    <tr>
                                          <td>TUESDAY</td>
                                           <?php
                                                 require '../includes/server.connect.php';
                                                $query = "SELECT * FROM timetable WHERE class = 'BIT' AND day ='Tuesday'";
                                                $result = mysqli_query($server_connection, $query);
                                                if (!$result) {
                                                      echo "TimeTable <br> Not Found";
                                                }else{
                                                      while ($row = mysqli_fetch_assoc($result)) {
                                                           echo "<td>".$row['course']."</td>"; 
                                                      }
                                                }
                                                ?> 
                                    </tr> 
                                    <tr>
                                          <td>WEDNESDAY</td>
                                           <?php
                                                 require '../includes/server.connect.php';
                                                $query = "SELECT * FROM timetable WHERE class = 'BIT' AND day ='Wednesday'";
                                                $result = mysqli_query($server_connection, $query);
                                                if (!$result) {
                                                      echo "TimeTable <br> Not Found";
                                                }else{
                                                      while ($row = mysqli_fetch_assoc($result)) {
                                                           echo "<td>".$row['course']."</td>"; 
                                                      }
                                                }
                                                ?> 
                                    </tr> 
                                    <tr>
                                          <td>THURSDAY</td>
                                           <?php
                                                 require '../includes/server.connect.php';
                                                $query = "SELECT * FROM timetable WHERE class = 'BIT' AND day ='Thursday'";
                                                $result = mysqli_query($server_connection, $query);
                                                if (!$result) {
                                                      echo "TimeTable <br> Not Found";
                                                }else{
                                                      while ($row = mysqli_fetch_assoc($result)) {
                                                           echo "<td>".$row['course']."</td>"; 
                                                      }
                                                }
                                                ?> 
                                    </tr> 
                                    <tr>
                                          <td>FRIDAY</td>
                                           <?php
                                                 require '../includes/server.connect.php';
                                                $query = "SELECT * FROM timetable WHERE class = 'BIT' AND day ='Friday'";
                                                $result = mysqli_query($server_connection, $query);
                                                if (!$result) {
                                                      echo "TimeTable <br> Not Found";
                                                }else{
                                                      while ($row = mysqli_fetch_assoc($result)) {
                                                           echo "<td>".$row['course']."</td>"; 
                                                      }
                                                }
                                                ?> 
                                    </tr>             
                                    </tbody>
                                </table>
                              </div>
            		</div>
            		
            	</div>
            	
            </div>