 <div class="container">
            	<div class="card ">
            		<div class="card-header">
            			<i class="fa fa-list"></i> Create a TimeTable / Period Four
            		</div>
            		<div class="card-body">
            			<form class="col-md-8 offset-md-2" method="POST" action="period.add4.php">
                                    <div class="input-group py-2">
                                          <div class="col-md-4">
                                                <label class="mr-3">Class<span class="text-danger">*</span></label>
                                          </div>
                                          <div class="col-md-8">
                                                <select type="text" name="class" placeholder="Class Name" class="form-control">
                                                 <?php
                                                $query = "SELECT * FROM studentprogram";
                                                $result = mysqli_query($server_connection, $query);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                      echo "<option>".$row['program']."</option>";
                                                }
                                                ?>                              
                                                </select>
                                          </div>
                                    </div>
                                    <div class="input-group py-2">
                                          <div class="col-md-4">
                                                <label class="mr-3">Course<span class="text-danger">*</span></label>
                                          </div>
                                          <div class="col-md-8">
                                                <input type="text" name="course" placeholder="Course Full Name" class="form-control">
                                          </div>
                                    </div>
                                    <div class="input-group py-2">
                                          <div class="col-md-4">
                                                <label class="mr-3">Time(start-end)<span class="text-danger">*</span></label>
                                          </div>
                                          <div class="col-md-8">
                                                <select type="text" name="time" placeholder="Start - End" class="form-control">
                                                      <option>08:00 - 10:00</option>
                                                      <option>08:30 - 12:30</option>
                                                      <option>14:00 - 16:00</option>
                                                </select>
                                          </div>
                                    </div>
                                    <div class="input-group py-2">
                                          <div class="col-md-4">
                                                <label class="mr-3">Day<span class="text-danger">*</span></label>
                                          </div>
                                          <div class="col-md-8">
                                                <select type="text" name="day" placeholder="Day" class="form-control">
                                                      <option>Monday</option>
                                                      <option>Tuesday</option>
                                                      <option>Wednesday</option>
                                                      <option>Thursday</option>
                                                      <option>Friday</option>
                                                </select>
                                          </div>
                                    </div>
                                    <div class="input-group py-2">
                                          <div class="col-md-4">
                                           <label class="mr-3">Instructor</label>
                                          </div>
                                          <div class="col-md-8">
                                          <input class="form-control" placeholder="Instructor" name="instructor">
                                          </div>
                                          </div>
                                          <div class="input-group offset-md-8 py-2">
                                                <input type="submit" name="addperiod" class="form-control col-md-4 btn btn-md btn-primary" value="2/4 Next >>">
                                          </div>
                              </form>
            		</div>
            		
            	</div>
            	
            </div>