<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Emily</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>1.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url();?>vendor/font-awesome.css">
		<link rel="stylesheet" href="<?php echo base_url();?>1.css">
		<link rel="stylesheet"
		  href="https://fonts.googleapis.com/css?family=Tangerine">
		  <link href="https://fonts.googleapis.com/css?family=Dancing+Script:700" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>css/animate.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>css/nivo-lightbox.css">
		<link rel="stylesheet" href="<?php echo base_url();?>css/nivo_themes/default/default.css">
		<link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
		<link rel="stylesheet" href="<?php echo base_url();?>css/load-title.css">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!-- preloader section -->
		<!-- <section class="preloader">
					<div class="sk-spinner sk-spinner-pulse"></div>
		</section> -->
		<!-- navigation section -->
		<section class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">EMILY</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url();?>slide" class="smoothScroll">HOME</a></li>
						<li><a class="contact" href="#contact" class="smoothScroll">CONTACT</a></li>
						<li><a href="<?php echo base_url();?>home/" class="smoothScroll">Login</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- home section -->
		<section id="home" class="parallax-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<h1 class="hides main-title1">Emily Restaurant</h1>
						<h2 class="hides main-title2">Happy Time with Your Family</h2>
						<a href="#gallery" class="hides smoothScroll btn btn-default main-title3">LEARN MORE</a>
					</div>
				</div>
			</div>
		</section>
		<!-- gallery section -->
		<section id="gallery" class="parallax-section">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
						<h1 class="heading">Food Gallery</h1>
						<hr>
					</div>
					<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
						<a href="<?php echo base_url();?>images/gallery-img1.jpg" data-lightbox-gallery="zenda-gallery"><img src="<?php echo base_url();?>images/gallery-img1.jpg" alt="gallery img"></a>
						<div>
							<h3>Lemon-Rosemary Prawn</h3>
							<span>Seafood / Shrimp / Lemon</span>
						</div>
						<a href="<?php echo base_url();?>images/gallery-img2.jpg" data-lightbox-gallery="zenda-gallery"><img src="<?php echo base_url();?>images/gallery-img2.jpg" alt="gallery img"></a>
						<div>
							<h3>Lemon-Rosemary Vegetables</h3>
							<span>Tomato / Rosemary / Lemon</span>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
						<a href="<?php echo base_url();?>images/gallery-img3.jpg" data-lightbox-gallery="zenda-gallery"><img src="<?php echo base_url();?>images/gallery-img3.jpg" alt="gallery img"></a>
						<div>
							<h3>Lemon-Rosemary Bakery</h3>
							<span>Bread / Rosemary / Orange</span>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
						<a href="<?php echo base_url();?>images/gallery-img4.jpg" data-lightbox-gallery="zenda-gallery"><img src="<?php echo base_url();?>images/gallery-img4.jpg" alt="gallery img"></a>
						<div>
							<h3>Lemon-Rosemary Salad</h3>
							<span>Chicken / Rosemary / Green</span>
						</div>
						<a href="<?php echo base_url();?>images/gallery-img5.jpg" data-lightbox-gallery="zenda-gallery"><img src="<?php echo base_url();?>images/gallery-img5.jpg" alt="gallery img"></a>
						<div>
							<h3>Lemon-Rosemary Pizza</h3>
							<span>Pasta / Rosemary / Green</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- menu section -->
		<section id="menu" class="parallax-section">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
						<h1 class="heading">Special Menu</h1>
						<hr>
					</div>
					<div class="col-md-6 col-sm-6">
						<h4>トンカツ............... <span>$20.50</span></h4>
						<h5>チキン / レモン</h5>
					</div>
					<div class="col-md-6 col-sm-6">
						<h4>トンカツピザ ........................... <span>$30.50</span></h4>
						<h5>牛肉 / チーズ / レモン</h5>
					</div>
					<div class="col-md-6 col-sm-6">
						<h4>くるくる巻きトンカツ ........................ <span>$40.75</span></h4>
						<h5>Pork / Tooplate / Lemon</h5>
					</div>
					<div class="col-md-6 col-sm-6">
						<h4>塩豆腐のトンコツみそ .......................... <span>$55.00</span></h4>
						<h5>Salad / Rosemary / Orange</h5>
					</div>
					<div class="col-md-6 col-sm-6">
						<h4>豚ヒレのチーズカツ ...................... <span>$65.00</span></h4>
						<h5>Squid / Rosemary / Lemon</h5>
					</div>
					<div class="col-md-6 col-sm-6">
						<h4>ミックストンカツ ........................ <span>$70.50</span></h4>
						<h5>Shrimp / Rosemary / Orange</h5>
					</div>
					<div class="col-md-6 col-sm-6">
						<h4>ガーリックチーズトンカツ ................... <span>$110.75</span></h4>
						<h5>Chicken / Rosemary / Lemon</h5>
					</div>
					<div class="col-md-6 col-sm-6">
						<h4>もやしみそカツ ..................... <span>$220.50</span></h4>
						<h5>Seafood / Rosemary / Lemon</h5>
					</div>
				</div>
			</div>
		</section>
		<!-- team section -->
		<section id="team" class="parallax-section">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
						<h1 class="heading">Meet Zentro chefs</h1>
						<hr>
					</div>
					<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
						<img src="<?php echo base_url();?>images/teemon.jpg" class="img-responsive center-block" alt="team img">
						<h4>Teemo</h4>
						<h3>Main Chef</h3>
					</div>
					<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
						<img src="<?php echo base_url();?>images/ex.jpg" class="img-responsive center-block" alt="team img">
						<h4>Ryh</h4>
						<h3>Pizza Specialist</h3>
					</div>
					<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
						<img src="<?php echo base_url();?>images/zed.png" class="img-responsive center-block" alt="team img">
						<h4>Zed</h4>
						<h3>New Baker</h3>
					</div>
				</div>
			</div>
		</section>
		<!-- contact section -->
		<section id="contact" class="parallax-section">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
						<h1 class="heading">Contact Us</h1>
						<hr>
					</div>
					<div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
						<form action="<?php echo base_url();?>slide/datban" method="POST">
							<div class="col-md-6 col-sm-6">
								<input name="ten" type="text" class="form-control" id="name" placeholder="名前">
							</div>
							<div class="col-md-6 col-sm-6">
								<input name="email" type="email" class="form-control" id="email" placeholder="メール">
							</div>
							<div class="col-md-6 col-sm-6">
								<input name="sdt" type="number" class="form-control" id="sdt" placeholder="電話番号" min="0">
							</div>
							<div class="col-md-6 col-sm-6">
								<input name="giodatban" type="time" class="form-control" id="time">
							</div>
							<div class="col-md-6 col-sm-6">
								<input name="ngaydatban" type="date" class="form-control" id="date">
							</div>
							<div class="col-md-6 col-sm-6">
								<input name="songuoi" type="number" class="form-control" id="people" min="1" placeholder="人数">
							</div>
							<div class="col-md-12 col-sm-12">
								<textarea name="tinnhan" rows="8" class="form-control" id="message" placeholder="メッセージ"></textarea>
							</div>
							<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
								<input name="submit" type="submit" class="form-control" id="submit" value="make a reservation">
							</div>
						</form>
					</div>
					<div class="col-md-2 col-sm-1"></div>
				</div>
			</div>
		</section>
		<!-- footer section -->
		<footer class="parallax-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
						<h2 class="heading">Contact Info.</h2>
						<div class="ph">
							<p><i class="fa fa-phone"></i> Phone</p>
							<h4>080-4113-3996</h4>
						</div>
						<div class="address">
							<p><i class="fa fa-map-marker"></i> Our Location</p>
							<h4>小平, 東京</h4>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
						<h2 class="heading">Open Hours</h2>
						<p>日曜 <span>10:30 AM - 10:00 PM</span></p>
						<p>平日 <span>9:00 AM - 8:00 PM</span></p>
						<p>土曜 <span>11:30 AM - 10:00 PM</span></p>
					</div>
					<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
						<h2 class="heading">Follow Us</h2>
						<ul class="social-icon">
							<li><a href="#" class="fa fa-facebook wow bounceIn" data-wow-delay="0.3s"></a></li>
							<li><a href="#" class="fa fa-twitter wow bounceIn" data-wow-delay="0.6s"></a></li>
							<li><a href="#" class="fa fa-behance wow bounceIn" data-wow-delay="0.9s"></a></li>
							<li><a href="#" class="fa fa-dribbble wow bounceIn" data-wow-delay="0.9s"></a></li>
							<li><a href="#" class="fa fa-github wow bounceIn" data-wow-delay="0.9s"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- copyright section -->
		<section id="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<h3>EMILY</h3>
						<p>Copyright © Emily Restaurant and Cafe
							| Design: <a rel="nofollow" href="" target="_parent">popCorn</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- JAVASCRIPT JS FILES -->
			<script src="<?php echo base_url();?>js/loadview-main.js"></script>
			<script src="<?php echo base_url();?>js/jump.js"></script>
			<script src="<?php echo base_url();?>js/jquery.js"></script>
			<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
			<script src="<?php echo base_url();?>js/jquery.parallax.js"></script>
			<script src="<?php echo base_url();?>js/smoothscroll.js"></script>
			<script src="<?php echo base_url();?>js/nivo-lightbox.min.js"></script>
			<script src="<?php echo base_url();?>js/wow.min.js"></script>
			<script src="<?php echo base_url();?>js/custom.js"></script>
		</body>
	</html>