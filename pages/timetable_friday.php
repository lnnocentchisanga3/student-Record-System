 <div class="container">
            	<div class="card ">
            		<div class="card-header">
            			<i class="fa fa-list"></i> Create a TimeTable / Monday
            		</div>
            		<div class="card-body">
            			<form class="col-md-8 offset-md-2" method="POST" action="period.add5.php">
            				<div class="input-group py-2">
            					<div class="col-md-4">
            						<label class="mr-3">Class<span class="text-danger">*</span></label>
            					</div>
            					<div class="col-md-8">
            						<input type="text" name="initial" placeholder="Class Name" class="form-control" >
            					</div>
            				</div>
            				<div class="input-group py-2">
            					<div class="col-md-4">
            						<label class="mr-3">Course<span class="text-danger">*</span></label>
            					</div>
            					<div class="col-md-8">
            						<input type="text" name="full" placeholder="Course Full Name" class="form-control">
            					</div>
            				</div>
                                    <div class="input-group py-2">
                                          <div class="col-md-4">
                                                <label class="mr-3">Time(start-end)<span class="text-danger">*</span></label>
                                          </div>
                                          <div class="col-md-8">
                                                <input type="text" name="full" placeholder="Start - End" class="form-control">
                                          </div>
                                    </div>
                                    <div class="input-group py-2">
                                          <div class="col-md-4">
                                                <label class="mr-3">Day<span class="text-danger">*</span></label>
                                          </div>
                                          <div class="col-md-8">
                                                <input type="text" name="full" placeholder="Day" class="form-control">
                                          </div>
                                    </div>
            				<div class="input-group py-2">
							<div class="col-md-4">
							 <label class="mr-3">Instructor</label>
							</div>
							<div class="col-md-8">
							<input class="form-control" placeholder="Instructor" name="cdate">
							</div>
							</div>
							<div class="input-group offset-md-8 py-2">
								<input type="submit" name="addperiod" class="form-control col-md-4 btn btn-md btn-primary" value="1/5 Next >>">
							</div>
            			</form>
            		</div>
            		
            	</div>
            	
            </div>