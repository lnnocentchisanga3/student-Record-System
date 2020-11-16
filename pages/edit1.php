<?php
require '../includes/server.connect.php';
require '../includes/functions.php';


if (isset($_GET['edit1'])) {
	$editid = $_GET['edit1'];

	$edit = mysqli_query($server_connection, "SELECT * FROM contactdetails WHERE studentID = '$editid'");
	$row = mysqli_fetch_array($edit);
}
?>
<div class="container-fluid">
	<div class="card card-defult">
		<div class="card-header">
			<i class="fa fa-phone"></i> Edit Contact Information
		</div>
		<div class="card-body">
			<form method="POST" action="update.add.php" enctype="multipart/form-data">
				<div class="row">
					<input type="text" name="id" class="form-control col-md-6" readonly value="<?php echo $editid; ?>">
					<div class="input-group col-md-6 py-1">
						<div class="col-md-4">
							<label><i class="fa fa-mobile"></i> Phone<span class="text-danger">*</span></label>
						</div>
						<div class="col-md-8">
							<input type="text" name="phone" class="form-control" value="<?php echo $row["phone"]; ?>">
						</div>
					</div>
				
					<div class="input-group col-md-6 py-1">
						<div class="col-md-4">
							<label><i class="fa fa-envelope"></i> Email<span class="text-danger">*</span></label>
						</div>
						<div class="col-md-8">
							<input type="email" name="email" class="form-control" value="<?php echo $row["email"]; ?>">
						</div>
					</div>
				
					<div class="input-group col-md-6 py-1">
						<div class="col-md-4">
							<label><i class="fa fa-map"></i> city<span class="text-danger">*</span></label>
						</div>
						<div class="col-md-8">
							<input type="text" name="city" class="form-control" value="<?php echo $row["city"]; ?>">
						</div>
					</div>
			
				
					<div class="input-group col-md-6 py-1">
						<div class="col-md-4">
							<label><i class="fa fa-map-marker"></i> Address<span class="text-danger">*</span></label>
						</div>
						<div class="col-md-8">
							<input type="text" name="add" class="form-control" max="20" value="<?php echo $row["address"]; ?>">
						</div>
					</div>
							
					<div class="input-group col-md-6 py-1">
						<div class="col-md-4">
							<label><i class="fa fa-map-pin"></i> Select Your State<span class="text-danger">*</span></label>
						</div>
						<div class="col-md-8">
							<select id="country" name="state" class="form-control" required>
                 <option>Select your State</option>
                 <option value="Northern">Northern</option>
                 <option value="Lusaka">Lusaka</option>
                 <option value="Muchinga">Muchinga</option>
                 <option value="North-western">North-western</option>
                 <option value="Southern">Southern</option>
                 <option value="Luapula">Luapula</option>
                 <option value="Central">Central</option>
                 <option value="Copperbelt">Copperbelt</option>
                 <option value="Eastern">Eastern</option>
                 <option value="Western">Western</option>
                 <option value="not listed">Not Listed</option>
                  </select>
						</div>
					</div>
					<div class="input-group col-md-6 py-1">
						<div class="col-md-4">
							<label><i class="fa fa-image"></i> Photo<span class="text-danger">*</span></label>
						</div>
						<div class="col-md-8">
							<input type="file" name="photo" class="form-control">
							<small>For the image you have to upload it</small>
						</div>
					</div>

				
					<div class="input-group col-md-6 py-1 offset-md-8 mt-3">
						<div class="col-md-8">
							<input type="submit" name="update" class="form-control btn btn-primary" value="2/2 Finish >>">
						</div>
					</div>
				
				</div>
			</form>
		</div>
		
	</div>
</div>