 <div class="container-fluid">
            	<div class="card ">
            		<div class="card-header">
            			<i class="fa fa-plus"></i> Add Course
            		</div>
            		<div class="card-body">
            			<form class="col-md-8 offset-md-2" method="POST" action="course.add.php">
            				<div class="input-group py-2">
            					<div class="col-md-4">
            						<label class="mr-3">Course short Name<span class="text-danger">*</span></label>
            					</div>
            					<div class="col-md-8">
            						<input type="text" name="initial" placeholder="Course short Name" class="form-control" onblur="scourse()">
            					</div>
            				</div>
            				<div class="input-group py-2">
            					<div class="col-md-4">
            						<label class="mr-3">Course Full Name<span class="text-danger">*</span></label>
            					</div>
            					<div class="col-md-8">
            						<input type="text" name="full" placeholder="Course Full Name" class="form-control">
            					</div>
            				</div>
            				<div class="input-group py-2">
							<div class="col-md-4">
							 <label class="mr-3">Creation Date</label>
							</div>
							<div class="col-md-8">
							<input class="form-control" value="<?php echo date('d-m-Y');?>" readonly="readonly" name="cdate">
							</div>
							</div>
							<div class="input-group offset-md-6 py-2">
								<input type="submit" name="addCourse" class="form-control col-md-4 btn btn-md btn-primary" value="create course">
							</div>
            			</form>
            		</div>
            		
            	</div>
            	
            </div>