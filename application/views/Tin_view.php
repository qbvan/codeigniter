<!DOCTYPE html>
<?php if (!$this->session->userdata('username')) {
	exit('the request not found on this tin_view page');
}?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>TinView</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>1.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url();?>vendor/font-awesome.css">
		<link rel="stylesheet" href="<?php echo base_url();?>1.css">
		<script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
		<script src="<?php echo base_url();?>ckfinder/ckfinder.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 themmoi">
					<div class="jumbotron text-xs-center">
						<h3 class="display-5">Thêm mới tin</h3>
						<p class="lead">thêm mới.</p>
						<p><a href="<?php echo base_url();?>tin/danhmuctin">Thêm danh mục</a></p>
						<hr class="m-y-md">
					</div>
					<div class="formthemmoi">
						<form action="<?php echo base_url()?>tin/themTin" method="POST">
							<div class="form-group">
								<label for="tieude">Tiêu đề</label>
								<input type="text" name="tieude" class="form-control" id="tieude" placeholder="tieude">
								<label for="iddanhmuc">Id danh mục</label>
								<select name="iddanhmuc" id="" class="form-control">
<?php foreach ($mangdanhmuc as $item) {?>
													<option value="<?php echo $item['id'];?>"><?php echo $item['tendanhmuc'];
	?></option>
	<?php }?>
</select>
								<label for="tieude">Nội dung </label><br>
								<textarea name="noidungtin" id="noidungtin" class=""></textarea>
								<br>
								<input type="submit" value="Add" class="btn btn-outline-info">
							</div>
						</form>
					</div>
				</div>
				<div class="col-sm-6 danhsach">
					<div class="jumbotron text-xs-center">
						<h3 class="display-5">Danh sách tin </h3>
						<p class="lead">Nội dung chi tiết từng tin.</p>
						<hr class="m-y-md">
					</div>
					<!-- nội dung quản lý tin  -->
					<div class="card-deck">
						<div class="container">
							<div class="row">
<?php foreach ($mangtin as $value) {?>
												<div class="col-sm-6">
													<div class="card">
														<img class="card-img-top" src="<?php echo base_url()?>" alt="Card image cap">
														<div class="card-block">
															<h4 class="card-title"><?php echo $value['tieude'];?></h4>
															<p class="card-text"><?php echo $value['noidungtin'];?></p>
															<small class="text-sm-left"><?php echo $value['iddanhmuc'];?></small>
														</div>
														<div class="card-footer">
															<small class="text-muted">Thời gian : <?php echo date('Y-m-d', $value['ngaytao']);?></small>
															<a href="<?php echo base_url()?>tin/editTin/<?php echo $value['id'];?>" class=""> <i class="fa fa-pencil"> </i></a> |
															<a href="<?php echo base_url()?>tin/deleteTinId/<?php echo $value['id'];?>" class="text text-danger"><i class="fa fa-remove"></i></a>
														</div>
													</div>
												</div>
	<?php }?>
							</div>
						</div>
					</div>
					<!-- hết nội dung quản lý tin  -->
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