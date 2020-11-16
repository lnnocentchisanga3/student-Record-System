<h2 class="col-md-12 mt-5 text-white title text-uppercase mb-5">Student Record System</h2>
			<div class="card shadow-lg " style="width: 100%">
				<div class="card-header text-left bg-primary text-white">Sign In</div>
				
				<div class="card-body">
			<form method="POST" action="pages/user.login.php">
				<small class="text-center text-danger" id="msg"></small>
			<input type="text" name="user" autocomplete="off" placeholder="Login Id" class="form-control mt-3" onblur="checkName()" id="id">
			<input type="password" name="pwd" autocomplete="off" placeholder="password" class="form-control mt-3" onblur="checkPwd()" id="pwd">
			<input type="submit" name="btn" value="Login" class="form-control mt-3 btn btn-md btn-primary">
		</form>