<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>sendmail backend</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>1.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url();?>vendor/font-awesome.css">
		<link rel="stylesheet" href="<?php echo base_url();?>1.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<form action="do_send" method="POST">
						<fieldset class="form-group">
							<label for="">Tên</label>
							<input name="ten" type="text" class="form-control">
						</fieldset>
						<fieldset class="form-group">
							<label for="">Người nhận</label>
							<input name="nguoinhan" type="text" class="form-control">
						</fieldset>
						<fieldset class="form-group">
							<label for="">Nội dung</label>
							<textarea name="noidung" id="" cols="80" rows="10"></textarea>
						</fieldset>
						<fieldset class="form-group">
							<input type="submit" class="form-control btn btn-outline-danger" value="Send" >
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>