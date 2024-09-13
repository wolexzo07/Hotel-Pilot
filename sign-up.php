<div style="display:none;" class="sign-up-pane">

<form id="sign-up" class="sign-up">

	<h4 class="title-c mb-4 mt-3"><i class="fa fa-remove close-pane"></i>&nbsp; Create an account</h4>

	<div class="justify-content-center d-none">
		<img src="img/icon/2.png" class="img-fluid l-img mb-4"/>
	</div>
	
	<div class="attach-photo mb-3">
	
		<p style="display:none" class="mb-2 show-upload-text"><i class="fa fa-cloud-upload"></i> Upload Photo</p>
		
		<img src="img/icon/upload.jpg" class="img-upload"/>
		
	     <input type="file" required name="upload" class="form-control d-none upload-photo"/>
	
	</div>
	
	<div class="form-floating mb-3">
	  <input type="text" class="form-control" id="name" placeholder="Enter name">
	  <label for="name">Full name</label>
	</div>
	
	<div class="row">
	
		<div class="col-6">
			<div class="form-floating mb-3">
			  <input type="text" class="form-control" id="uid" placeholder="Enter user ID">
			  <label for="uid">Account ID</label>
			</div>
		</div>
		
		<div class="col-6">
			<div class="form-floating mb-3">
			  <input type="password" class="form-control" id="Password" placeholder="Password">
			  <label for="Password">Password</label>
			</div>
		</div>
		
	</div>
	
	
	<div class="row">
	
		<div class="col-6">
			<div class="form-floating mb-3">
			  <select class="form-select" id="role">
				<option selected value="">...</option>
				<option value="sales">Sales agent</option>
				<option value="accountant">Accountant</option>
				<option value="super">Super Admin</option>
			  </select>
			  <label for="role" class="d-block">Role management</label>
			</div>
		</div>
		
		<div class="col-6">
			<div class="form-floating mb-3">
			  <select class="form-select" id="gender">
				<option selected value="">...</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
			  </select>
			  <label for="role" class="d-block">Choose Gender</label>
			</div>
		</div>
		
	</div>


	
	<div class="row">
		<div class="col-6">
			<div class="form-floating mb-3">
			  <input type="text" class="form-control" id="phone" placeholder="xxx-xxxxxxxx">
			  <label for="phone">Mobile no.</label>
			</div>
		</div>
		<div class="col-6">
			<div class="form-floating mb-3">
			  <input type="email" class="form-control" id="email" placeholder="name@example.com">
			  <label for="email">Email address</label>
			</div>
		</div>
	</div>

	<div class="form-floating mb-3">
	  <input type="text" class="form-control" id="access-code" placeholder="Enter access code">
	  <label for="access-code">Access code</label>
	</div>
	
	<input type="submit" class="btn btn-warning btn-lg w-100" value="Create account"/>
	
	<a href="#" class="btn btn-primary btn-lg mt-3 w-100 login-switch">Login account</a>
	
</form>

</div>