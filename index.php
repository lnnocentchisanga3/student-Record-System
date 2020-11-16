<?php
require 'includes/server.connect.php';
?>
<style type="text/css">@import url("lib/bootstrap/css/bootstrap.min.css");</style>
<style type="text/css">@import url("lib/font-awesome/css/font-awesome.min.css");</style>
<style type="text/css">@import url("lib/style.css");</style>
<style>
body {
  background: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.4),black), url(./pages/images/bg.jpg);
background-size: cover;
background-attachment: fixed;
}
</style>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/popper.min.js"></script>
<?php
require 'assets/head.php';
?>
<section class="container">
	<div class="row">
		<div class="loader offset-md-5 mt-5"></div>
		<div id="login" class="offset-md-4">
			<h6 class="text-center text-danger">
					<?php
            $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

            if(stripos($fullUrl, "action=wrongpwd&ID") == true) {
              echo '<script> alert("password is not correct")</script>';
            }
            elseif(stripos($fullUrl, "action=loginwasafialureoryoujusthavetologin") == true) {
              echo '<script> alert("Sorry you need to login..")</script>';
            }
          ?>
				</h6>
		</div>
		</div>
			</div>	
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function() {
		$(".loader").show();
		$("#login").load("login.php");
		$(".loader").hide();
	});
</script>