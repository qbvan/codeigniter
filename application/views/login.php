<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>1.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url();?>vendor/font-awesome.css">
		<link rel="stylesheet" href="<?php echo base_url();?>1.css">
		<link href="<?php echo base_url()?>css/tooplate_style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="container">
			<form class="form-horizontal" role="form" method="POST" action="<?php echo base_url()?>account/login">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<h2> Log In </h2>
							<?php $error = $this->session->flashdata('error_msg');
							if ($error) {
								?>
								<div class="alert alert-danger">
								<?php echo $error;?>
								</div>
								<?php } ?>
						<hr>
						<small><a href="<?php echo base_url()?>Home/dangky">Register</a></small>
						<small class="float-right"><a href="<?php echo base_url();?>slide">Back to Home</a></small>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 field-label-responsive">
						<label for="email">E-Mail</label>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<div class="input-group mb-2 mr-sm-2 mb-sm-0">
								<div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
								<input type="text" name="email" class="form-control" id="email"
								placeholder="*******@example.com" required autofocus>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-control-feedback">
							<span class="text-danger align-middle">
								<!-- Put e-mail validation error messages here -->
								<span class="error"></span>
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
								placeholder="******" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
<?php if ($this->session->flashdata('log_error')) {?>
											<p class="label label-danger"><?php echo $this->session->flashdata('log_error');
	?></p>
	<?php }?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<button type="submit" class="btn btn-primary"><i class="fa fa-user-plus"></i> Login</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>