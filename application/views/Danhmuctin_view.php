<!DOCTYPE html>
<?php if (!$this->session->userdata('username')) {
	exit('the request not found');
}?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Quan ly danh muc tin.</title>
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
				<div class="col-md-12">
					<div class="text-xs-center">
<?php if ($this->session->userdata['role'] == 1) {?>
	<div class="alert alert-danger">Admin</div>
	<?php } else {?>
	<div class="alert alert-info">User</div>
	<?php }?>
						<h3>Quản lý danh mục tin.</h3>

						<small class="btn btn-outline-danger"><a href="<?php echo base_url()?>account/logout">log out</a></small>
					</div>
<?php if (isset($this->session->userdata['username'])) {
	?>
									<div class="alert alert-info">
										<strong>hello : <?php echo ($this->session->userdata['username']);?></strong>
									</div>
	<?php } else {
	exit('No direct script access allowed');
}?>
				</div>
				<div class="col-sm-6">
					<div class="text-xs-center">
						<a href="<?php echo base_url()?>home/blog"><i class="fa fa-chevron-left"> </i> BACK</a>
					</div>
					<!-- <form action="<?php //echo base_url()?>tin/themdanhmuc" method="POST"> -->
					<fieldset class="form-group">
						<label for="">日替わり</label>
						<input type="text" name="tendanhmuc" class="form-control" id="tendanhmuc" placeholder="Tiêu đề">
					</fieldset>
					<fieldset class="form-group">
						<input type="button" id="nut" class="form-control btn btn-outline-info" id="mota" value="Add">
					</fieldset>
					<fieldset class="form-group">
						<a href="<?php echo base_url();?>tin/quanlytin" class="text-xs-center">TinView</a>
					</fieldset>
					<!-- </form> -->
				</div>
				<div class="col-sm-6 cacdanhmuc">
					<div class="text-xs-center">
						<h5 class="text text-danger">メニュー</h5>
					</div>
<?php foreach ($mangdl as $value) {?>
									<?php $id = $value['id'];?>
									<div class="alert <?php if ($id%2 == 0) {echo 'alert-info';} else {echo 'alert-light';}?>">
										<div class=" edit_del text-xs-righ ">
											<a class="btn btn-success nutsua" data-href="<?php echo base_url()?>tin/suadanhmuc/<?php echo $value['id'];?>"><i class="fa fa-pencil"> </i>Edit</a> |
											<a class="nutxoa btn btn-danger" data-href="<?php echo $value['id'];?>"><i class="fa fa-remove"> </i>Delete</a>
										</div>
										<div class="text-xs-right  nutupdate hidden-xs-up">
											<a href="" class="btn btn-outline-info">update</a>
										</div>
										<h4 class="danh_muc form-group "><?php echo $value['tendanhmuc'];?></h4>
										<input class="hidden-xs-up " type="text" value="<?php echo $value['tendanhmuc'];?>">
										<input type="hidden" class="form-control id" value="<?php echo $value['id'];?>">
									</div>
	<?php }?>
				</div>
			</div>
		</div>
		<script>
		$(document).ready(function() {
			//chuc nang sua du lieu dung jquery.
			$('body').on('click' , '.nutsua', function() {
				$(this).parent().addClass('hidden-xs-up');
				$(this).parent().next().removeClass('hidden-xs-up');
				$(this).parent().next().next().addClass('hidden-xs-up');
				$(this).parent().next().next().next().removeClass('hidden-xs-up');
				$(this).parent().find('.danh_muc').addClass('hidden-xs-up');
			});
			$('body').on('click', '.nutupdate', function(event) {
				//để sửa được dữ liệu cần dựa vào id của element.
				//phải lấy được giá trị id của element đó thid mới chuyên đưuocj du liệu id vào controller .
				giatriten = $(this).next().next('input').val(); //lấy tên của tin theo quan hệ parent children
				giatriid = $(this).next().next().next('input').val(); //lay gia trị id của tin .
				$(this).addClass('hidden-xs-up');
				inp = $(this).next().next().addClass('hidden-xs-up');
				$(this).parent().children('.edit_del').removeClass('hidden-xs-up');
				noidung = $(this).next().next().val();
				$(this).next().html(noidung).removeClass('hidden-xs-up');
				event.preventDefault();
				//goi controller de ajax su ly luu du lieu.
				$.ajax({
					url: path + 'tin/updateTin',
					type: 'POST',
					dataType: 'json',
					data: {
						id : giatriid,
						tendanhmuc: giatriten},
				})
				.done(function() {
					console.log("success");
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log('complete');
				});
				/* Act on the event */
			});
		path = "<?php echo base_url()?>";
		$('#nut').click(function() {
		tendanhmuc = $('#tendanhmuc').val();
		$.ajax({
		url : path + 'tin/addJquery',
		type : 'POST',
		dataType : 'json',
		data : { tendanhmuc: tendanhmuc }
		})
		.done(function() {
		})
		.always(function(res){
		//res là biến id nhận được khi ajax lấy dữ liệu.
		//truyền biến id cho data-href để sửa va xoá được
		noidung = '<div class="alert <?php if ($id%2 == 0) {echo 'alert-info';} else {echo 'alert-light';}?>">';
			noidung += '<div class="text-xs-righ">';
				noidung += '<a class="nutsua btn btn-success" data-href="'+res+'"><i class="fa fa-pencil"> </i>Edit</a> ';
				noidung += ' | ';
				noidung += '<a class="nutxoa btn btn-danger" data-href="'+res+'"> <i class="fa fa-remove"> </i>Delete</a>';
			noidung += '</div>';
			noidung += '<h4>';
			noidung += $('#tendanhmuc').val();
			noidung += '</h4>';
		noidung += '</div>';
		$('.cacdanhmuc').append(noidung); //chèn nội dung dùng thuộc tính append.
		$('#tendanhmuc').val('');
		})
		});
		//xoa bang ajax.
		//nếu thêm mới phần tử thì vần tử mới sẽ không thuộc các pt có sẵn ,jquery sẽ không bắt sự kiện với các phần tử mới. nên phải thay đổi code. thêm $(body).on('click' ...
		$('body').on('click', '.nutxoa',  function (event) {
		//gán đối tượng cần xoa. xliên kết đến thẻ cha cần xoa. thêm remove();
		doituongxoa = $(this).parent().parent();
		path = "<?php echo base_url()?>";
		id = $(this).data('href');
		$.ajax({
		url : path +'tin/deleteDanhMuc/' + id,
		type: 'POST',
		dataType : 'json'
		})
		.done(function() {
		console.log('success');
		})
		.always(function() {
		doituongxoa.remove();
		})
		});
		});
		</script>
	</body>
</html>