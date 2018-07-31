<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Edit Tin View</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>1.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url();?>vendor/font-awesome.css">
		<link rel="stylesheet" href="<?php echo base_url();?>1.css">
		<script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-8 push-2">
					<div class="jumbotron text-xs-center">
						<h3 class="display-5">Sửa chi tiết tin</h3>
						<p class="lead">Tin số : <?php ?>.</p>
						<p><a href="<?php echo base_url();?>tin/danhmuctin">Thêm danh mục</a></p>
						<hr class="m-y-md">
					</div>
					<div class="formthemmoi">
						<form action="<?php echo base_url()?>tin/updateTinChiTiet" method="POST">
							<div class="form-group">
<?php foreach ($mangtin as $value) {?>
									<input name="id" type="hidden" value="<?php echo $value['id'];?>">
									<label for="tieude">Tiêu đề</label>
									<input type="text" name="tieude" class="form-control" id="tieude" value="<?php echo $value['tieude'];?>">
									<label for="iddanhmuc">Id danh mục</label>
									<select name="iddanhmuc" id="" class="form-control">
										<option value="<?php echo $value['iddanhmuc'];?>">
	<?php echo $mangdanhmuc;?>
	</option>
									</select>
									<label for="tieude">Nội dung </label><br>
									<textarea name="noidungtin" id="noidungtin" class="">
	<?php echo $value['noidungtin'];?>
	</textarea>
									<br>
	<?php }?>
								<input type="submit" value="Edit" class="btn btn-outline-info">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script>
			CKEDITOR.replace( 'noidungtin', {
		filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
		filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
		} );
		</script>
	</body>
</html>