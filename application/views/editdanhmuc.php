<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>edit danhmuc tin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript" src="<?php echo base_url()?>vendor/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>1.js"></script>
		<link rel="stylesheet" href="<?php echo base_url()?>vendor/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url()?>vendor/font-awesome.css">
		<link rel="stylesheet" href="<?php echo base_url()?>1.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
<?php foreach ($mangkq as $value) {?>
					<div class="col-md-12">
						<div class="text-xs-center">
							<h3 class="btn btn-outline-primary">Edit danh mục tin : <?php echo $value['id'];?></h3>
						</div>
					</div>
					<div class="col-sm-6">
						<form action="<?php echo base_url();?>tin/updateTin" method="POST">
							<fieldset class="form-group">
								<label for="">Tên danh mục</label>
								<input type="hidden" name="id" value="<?php echo $value['id'];?>">
								<input type="text" name="tendanhmuc" class="form-control" value="<?php echo $value['tendanhmuc'];?>">
							</fieldset>
							<fieldset class="form-group">
								<input class="btn btn-outline-info" type="submit" name="submit" class="form-control" id="submit" value="Update">
							</fieldset>
						</form>
					</div>
	<?php }?>
			</div>
		</div>
	</body>
</html>