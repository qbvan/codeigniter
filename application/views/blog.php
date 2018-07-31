<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Newspaper Template, Blog</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <!--
        Template 2060 Newspaper
        http://www.tooplate.com/view/2060-newspaper
        -->
        <script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>1.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>vendor/font-awesome.css">
        <link rel="stylesheet" href="<?php echo base_url();?>1.css">
        <link href="<?php echo base_url()?>css/tooplate_style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url()?>css/nivo-slider.css" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/ddsmoothmenu.css" />
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
        <script type="text/javascript" src="js/ddsmoothmenu.js">
        /***********************************************
        * Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
        * This notice MUST stay intact for legal use
        * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
        ***********************************************/
        </script>
        <style type="text/css">
        </style>
        <script type="text/javascript">
        ddsmoothmenu.init({
        mainmenuid: "tooplate_menu", //menu DIV id
        orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
        classname: 'ddsmoothmenu', //class added to menu's outer DIV
        //customtheme: ["#1c5a80", "#18374a"],
        contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
        })
        </script>
    </head>
    <body>
        <div id="tooplate_wrapper">
            <div id="tooplate_header">
                <div id="site_title"><h1><a href="#"></a></h1></div>
                <li><a href="<?php echo base_url();?>slide">Home</a></li>
                <li><a href="<?php echo base_url();?>home/dangky">register</a></li>
                <li><a href="<?php echo base_url();?>tin/danhmuctin">Them tin</a></li>
            </ul>
            <br style="clear: left" />
            </div> <!-- end of tooplate_menu -->
            </div> <!-- END of tooplate_header -->
            <div id="tooplate_main">
                <div id="content" class="float_l">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 push-2">
<?php
$uri = $_SERVER['REQUEST_URI'];
$uri = explode('/', $uri);
//-> gia tri nhan duoc la mot mang cac phan tu;
$tranghientai = end($uri);
echo $tranghientai;
?>
</div>
                        </div>
                    </div>
                    <!-- vi trí của các tin chi tiết. -->
<?php foreach ($mangdulieu as $value) {?>
				                    <div class="post">
				                        <h2><?php echo $value['tieude'];?></h2>
				                        <img src="<?php echo base_url();?>images/blog/01.jpg" alt="" />
				                        <div class="meta">
				                            <span class="text text-success">Bởi : Admin</span>
				                            <span class="date">Ngày : <?php echo date('Y-m-d H:i:s', $value['ngaytao']);
	?></span>
				                            <span >Danh mục : <a class="text text-danger" href=""><?php echo $value['tendanhmuc'];
	?></a></span>
				                            <div class="cleaner"></div>
				                        </div>
	<?php if ($this->session->has_userdata('admin')) {?>
								                        <div class="alert alert-info">
								                            <!-- khai báo và sử dụng biến session trong codeigniter. -->
								                            <strong>hello: </strong>
								                            admin : <?php echo $this->session->userdata('admin');?>
		</div>
		<?php }?>
				                        <p><?php echo $value['noidungtin'];?></p>
				                        <span class="more_but"><a href="fullpost.html" class="more">More</a></span>
				                    </div>
	<?php }?>
<!-- vị trí phân trang của các danh mục -->
                    <div class="pagging">
                        <ul>
<?php if ($tranghientai == 1) {?>
				                            <?php } else {?>
				                            <li><a href="<?=base_url()?>home/page/<?=
	$tranghientai-1;?>">Previous</a></li>
	<?php }?>
                            <?php for ($i = 1; $i <= $sotrang; $i++) {?>
				                            <?php if ($i == $tranghientai) {?>
								                            <li><a class="curent" href=""><?php echo $i;?></a></li>
		<?php } else {?>
								                            <li><a href="<?php echo base_url()?>home/page/<?php echo $i;?>" target="_parent"><?php echo $i;
		?></a></li>
		<?php }?>
				                            <?php }?>
                            <?php if ($tranghientai == $sotrang) {
} else {?>
				                            <li><a href="<?php echo base_url()?>home/page/<?php echo $tranghientai+1;?>" target="_parent">Next</a></li>
	<?php }?>
                        </ul>
                    </div>
                    <div class="cleaner"></div>
                </div>
                <div id="sidebar" class="float_r">
                    <a href="#"><img src="<?php echo base_url();?>images/ad_300.jpg" alt="image" /></a>
                    <div class="cleaner h40"></div>
                    <h5>Recent Posts</h5>
                    <div class="rp_pp">
                        <a href="#">Integer venenatis pharetra magna vitae ultrices</a>
                        <p>Feb 23, 2048 - 20 Comments</p>
                        <div class="cleaner"></div>
                    </div>
                    <div class="rp_pp">
                        <a href="#">Vestibulum quis nulla nunc, nec lobortis nunc.</a>
                        <p>Feb 16, 2048 - 20 Comments</p>
                        <div class="cleaner"></div>
                    </div>
                    <div class="rp_pp">
                        <a href="#">Pellentesque convallis tristique mauris.</a>
                        <p>Feb 10, 2048 - 20 Comments</p>
                        <div class="cleaner"></div>
                    </div>
                    <div class="cleaner h40"></div>
                    <h5>Popular Posts</h5>
                    <div class="rp_pp">
                        <a href="#">Id tempor odio faucibus et proin pharetra justo.</a>
                        <p>Feb 02, 2048 - 20 Comments</p>
                        <div class="cleaner"></div>
                    </div>
                    <div class="rp_pp">
                        <a href="#">Etiam Fringilla Sapien quis mauris  vestibulum.</a>
                        <p>June 03, 2048 - 20 Comments</p>
                        <div class="cleaner"></div>
                    </div>
                    <div class="rp_pp">
                        <a href="#">Sed ac arcu ipsum, ut suscipit neque. </a>
                        <p>August 08, 2048 - 20 Comments</p>
                        <div class="cleaner"></div>
                    </div>
                    <div class="cleaner h40"></div>
                    <h5>Flickr Stream</h5>
                    <ul class="flickr_stream">
                        <li><a href="#"><img class="image_frame" src="<?php echo base_url();?>images/tooplate_image_02.png" alt="" /></a></li>
                        <li><a href="#"><img class="image_frame" src="<?php echo base_url();?>images/tooplate_image_03.png" alt="" /></a></li>
                        <li class="no_margin_right"><a href="#"><img class="image_frame" src="<?php echo base_url();?>images/tooplate_image_04.png" alt="" /></a></li>
                        <li><a href="#"><img class="image_frame" src="<?php echo base_url();?>images/tooplate_image_05.png" alt="" /></a></li>
                        <li><a href="#"><img class="image_frame" src="<?php echo base_url();?>images/tooplate_image_06.png" alt="" /></a></li>
                        <li class="no_margin_right"><a href="#"><img class="image_frame" src="<?php echo base_url();?>images/tooplate_image_07.png" alt="" /></a></li>
                    </ul>
                </div>
            </div>
            <div class="cleaner"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card mb-3">
                            <img class="card-img-top img-fluid" src="https://placehold.it/700x400" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card mb-3">
                            <img class="card-img-top img-fluid" src="https://placehold.it/700x400" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card mb-3">
                            <img class="card-img-top img-fluid" src="https://placehold.it/700x400" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                </div> <!-- END of tooplate_main -->
                </div> <!-- END of tooplate_wrapper -->
                <div id="tooplate_bottom_wrapper">
                    <div id="tooplate_bottom">
                        <div class="col one_fourth">
                            <h4>Categories</h4>
                            <ul class="footer_list">
                                <li><a href="#">HTML CSS Layouts</a></li>
                                <li><a href="#">Website Templates</a></li>
                                <li><a href="#">Wordpress Themes</a></li>
                                <li><a href="#">Web Design Blog</a></li>
                                <li><a href="#">Art and Illustration</a></li>
                            </ul>
                        </div>
                        <div class="col one_fourth">
                            <h4>Pages</h4>
                            <ul class="footer_list">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col one_fourth">
                            <h4>Follow Us</h4>
                            <div class="footer_social_button">
                                <a href="#"><img src="<?php echo base_url();?>images/facebook.png" alt="facebook" /></a>
                                <a href="#"><img src="<?php echo base_url();?>images/flickr.png" alt="flickr" /></a>
                                <a href="#"><img src="<?php echo base_url();?>images/twitter.png" alt="twitter" /></a>
                                <a href="#"><img src="<?php echo base_url();?>images/youtube.png" alt="youtube" /></a>
                                <a href="#"><img src="<?php echo base_url();?>images/feed.png" alt="rss" /></a>
                            </div>
                        </div>
                        <div class="col one_fourth no_margin_right">
                            <h4>Twitter</h4>
                            <ul class="twitter_post">
                                <li>Suspendisse at scelerisque urna. Aenean tincidunt massa in tellus varius ultricies. <a href="#">http://bit.ly/13IwZO</a></li>
                            </ul>
                        </div>
                        <div class="cleaner"></div>
                        </div> <!-- END of tooplate_bottom -->
                        </div> <!-- END of tooplate_bottom_wrapper -->
                        <div id="tooplate_footer_wrapper">
                            <div id="tooplate_footer">
                                Copyright © 2048 Your Company Name
                                </div> <!-- END of tooplate_footer -->
                                </div> <!-- END of tooplate_footer_wrapper -->
                            </body>
                        </html>