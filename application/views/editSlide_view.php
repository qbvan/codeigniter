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
					<div class="alert alert-danger col-md-3">
						<strong>EditSlide_View:</strong>
					</div>
					<a href="<?php echo base_url();?>slide/">add</a>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 push-sm-3">
					<h5 class="display-4 text-xs-center">EditSlide</h5>
					<form enctype="multipart/form-data" method="POST" action="<?php echo base_url()?>slide/doEdit">
<?php $num = 0;?>
						<?php foreach ($mangkq as $key => $value) {?>
								<?php $num++;?>
								<p class="text text-success">Slide: <?php echo $num;?></p>
								<hr style="width: 500px; height: 1px; background-color: #3B00F6; margin: 10px auto;">
								<fieldset class="form-group">
									<label for="">Tiêu đề</label>
									<input type="text" name="tieude[]" class="form-control" id="tieude" value="<?=$value['tieude'];?>">
								</fieldset>
								<fieldset class="form-group">
									<label for="">Mô tả</label>
									<input type="text" name="mota[]" class="form-control" id="mota" value="<?=$value['mota'];?>">
								</fieldset>
								<fieldset class="form-group">
									<label for="">Link</label>
									<input type="text" name="button_link[]" class="form-control" id="link" value="<?=$value['button_link'];?>">
								</fieldset>
								<fieldset class="form-group">
									<label for="">Text</label>
									<input type="text" name="button_text[]" class="form-control" id="text" value="<?=$value['button_text'];?>">
								</fieldset>
								<fieldset class="form-group">
									<label for="">Ảnh hiện tại.</label>
									<div style="width: 200px; height: 200px; overflow: hidden; margin: 3px 0px">
										<img width="100%" src="<?=$value['image']?>" alt="">
									</div>
									<input type="hidden" name="slide_image_old[]" class="" id="text" value="<?=$value['image'];?>">
									<label for="">Upload ảnh mới</label>
									<input type="file" name="slide_image[]" class="form-control" id="anh" >
								</fieldset>
	<?php }?>
						<fieldset class="form-group">
							<input type="submit" name="submit" class="form-control btn btn-outline-success" value="Edit">
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>