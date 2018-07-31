<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript" src="<?php echo base_url()?>vendor/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>1.js"></script>
		<link rel="stylesheet" href="<?php echo base_url()?>vendor/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url()?>vendor/font-awesome.css">
		<link rel="stylesheet" href="<?php echo base_url()?>1.css">
		<title>Slide Json</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 push-sm-4">
					<div class="alert alert-info col-md-3">
						<strong>AddData_View:</strong>
					</div>
					<div class="label label-success">
						<a href="<?php echo base_url();?>slide/editSlide">Show</a>
					</div>
					<div class="label label-success">
						<a href="<?php echo base_url();?>slide/list">List</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 push-sm-3">
					<h3 class="display-4 text-xs-center">AddData</h3>
					<form enctype="multipart/form-data" method="POST" action="<?php echo base_url()?>slide/addSlide">
						<fieldset class="form-group">
							<label for="">Tiêu đề</label>
							<input type="text" name="tieude" class="form-control" id="tieude" placeholder="Tiêu đề">
						</fieldset>
						<fieldset class="form-group">
							<label for="">Mô tả</label>
							<input type="text" name="mota" class="form-control" id="mota" placeholder="Mô tả">
						</fieldset>
						<fieldset class="form-group">
							<label for="">Link</label>
							<input type="text" name="button_link" class="form-control" id="link" placeholder="Link">
						</fieldset>
						<fieldset class="form-group">
							<label for="">Text</label>
							<input type="text" name="button_text" class="form-control" id="text" placeholder="Text">
						</fieldset>
						<fieldset class="form-group">
							<label for="">Upload ảnh</label>
							<input type="file" name="image" class="form-control" id="anh" placeholder="">
						</fieldset>
						<fieldset class="form-group">
							<input type="submit" name="submit" class="form-control btn btn-outline-success" value="Add">
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>