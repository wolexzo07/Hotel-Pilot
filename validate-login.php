<?php
	h_auth($pageToken);
?>

<?php
	if(h_checkSession() == "0"){
		?>
		<div class="login-profile">
			<div class="container">
			<div class="row">
					<div class="col-12">
						
						<?php include("sign-in.php");?>
						<?php include("sign-up.php");?>
						
					</div>
				</div>
			</div>
		</div>
		<?php
	}else{
		?>
		<div class="offcanvas-header">
		  <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Hi <b>Timothy</b> &nbsp; | &nbsp;
			<a href="#" class="link-none"><i class="fa fa-power-off"></i> Logout</a></h5>
		  <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<?php
	}
?>


