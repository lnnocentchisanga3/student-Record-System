<header class="container-fluid bg-primary py-3">
	<div class="row">
		<h5 class="py-2 text-light col-md-4 text-center"><i class="fa fa-folder-open"></i> Student Record System</h5>
		<!-- <a class="pt-2 " onclick="openNav()" id="sidebarCollapse"><i class="fa fa-bars fa-2x text-secondary"></i></a>  -->
		 <a class="nav-link float-right col-md-4 text-light" href="#">Welcome <?php echo $_SESSION['username']." "; ?><i class="fa fa-user-circle"></i></a>
		 <div class="float-right col-md-4">
		 	<a class="nav-link btn btn-danger col-md-3" href="logout.user.php?logout"><i class="fa fa-sign-out"></i> logout</a>
		 </div>
	</div>
</header>