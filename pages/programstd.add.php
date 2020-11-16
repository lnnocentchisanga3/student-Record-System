 <div class="container">
            	<div class="card ">
            		<div class="card-header">
            			<i class="fa fa-university"></i> Student Program
            		</div>
            		<div class="card-body">
            			<form class="col-md-8 offset-md-2" method="POST" action="program.add.php" enctype="multipart/formdata">
            				<div class="input-group py-2">
      					<div class="col-md-4">
      						<label class="mr-3">Photo<span class="text-danger">*</span></label>
      					</div>
            				<input type="file" name="photo" class="form-control">
            				</div>
            				
            				<div class="input-group py-2">
							<div class="col-md-4">
							 <label class="mr-3">Year</label>
							</div>
							<div class="col-md-8">
							<input class="form-control" value="<?php echo date('Y');?>" readonly="readonly" name="cdate">
							</div>
							</div>
							<div class="input-group col-md-6 py-1 offset-md-6 mt-3">
                                    <div class="col-md-8">
                                          <input type="submit" name="finish" class="form-control btn btn-primary" value="3/3 Finish >>">
                                    </div>
                              </div>
            			</form>
            		</div>
            		
            	</div>
            	
            </div>