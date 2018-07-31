<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Register</title>
		<script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>1.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url();?>vendor/font-awesome.css">
		<link rel="stylesheet" href="<?php echo base_url();?>1.css">
		<link href="<?php echo base_url()?>css/tooplate_style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="container">
			<form class="form-horizontal" role="form" method="POST" action="<?php echo base_url()?>home/register">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<h2>Register New User</h2>
						<hr>
						<small><a href="<?php echo base_url()?>Home/">Login</a></small>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 field-label-responsive">
						<label for="name">Name</label>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<div class="input-group mb-2 mr-sm-2 mb-sm-0">
								<div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
								<input type="text" name="name" class="form-control" id="name"
								placeholder="John Doe" required autofocus>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-control-feedback">
							<span class="text-danger align-middle">
								<!-- Put name validation error messages here -->
							</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 field-label-responsive">
						<label for="email">E-Mail Address</label>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<div class="input-group mb-2 mr-sm-2 mb-sm-0">
								<div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
								<input type="text" name="email" class="form-control" id="email"
								placeholder="you@example.com" required autofocus>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-control-feedback">
							<span class="text-danger align-middle">
								<!-- Put e-mail validation error messages here -->
							</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 field-label-responsive">
						<label for="password">Password</label>
					</div>
					<div class="col-md-6">
						<div class="form-group has-danger">
							<div class="input-group mb-2 mr-sm-2 mb-sm-0">
								<div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
								<input type="password" name="password" class="form-control" id="password"
								placeholder="Password" required>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-control-feedback">
							<span class="text-danger align-middle">
								<i class="fa fa-close"> Example Error Message</i>
							</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 field-label-responsive">
						<label for="role">Role</label>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<div class="input-group mb-2 mr-sm-2 mb-sm-0">
								<div class="input-group-addon" style="width: 2.6rem">
									<i class="fa fa-repeat"></i>
								</div>
								<input type="number" name="role" class="form-control"
								id="role" placeholder="role" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Register</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>