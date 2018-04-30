<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from p.w3layouts.com/demos_new/09-02-2017/edifying-demo_Free/162609851/web/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Apr 2018 11:59:33 GMT -->
<head>
<title>Nesas Information</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Edifying Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url('assets/css/flexslider.css') ?>" type="text/css" media="screen" property="" />
<!-- js -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js') ?>"></script>
<!-- //js -->

<!-- gallery -->
<link href="<?php echo base_url('assets/css/lsb.css') ?>" rel="stylesheet" type="text/css">
<!-- //gallery -->
<!-- font-awesome-icons -->
<link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
<!-- //font-awesome-icons -->
<link href="http://fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet"></head>

<body>
<!-- banner -->
	<div class="banner<?php if(!$headerFull){echo "1";} ?>">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a class="navbar-brand" href="<?php echo base_url(); ?>"><span>Nesas</span>Information</a></h1>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="<?php if($pageActive == "home"){ echo "active"; } ?>"><a href="<?php echo base_url(); ?>"><span data-hover="Home">Beranda</span></a></li>
						<li class="<?php if($pageActive == "news"){ echo "active"; } ?>"><a href="<?php echo base_url('news'); ?>"><span data-hover="News">Informasi</span></a></li>
						<li class="<?php if($pageActive == "discussion"){ echo "active"; } ?>"><a href="<?php echo base_url('discussion'); ?>"><span data-hover="Discussion">Diskusi</span></a></li>
						<li class="<?php if($pageActive == "about"){ echo "active"; } ?>"><a href="<?php echo base_url('about'); ?>"><span data-hover="About">Tentang</span></a></li>
						<li>
              <?php
                if ($this->session->userdata('user_log')) {
                  ?>
                  <a href="<?php echo base_url('dashboard'); ?>">
                    <span data-hover="Account"><i class="fa fa-user"></i> <?php echo $this->session->userdata('user_username'); ?></span>
                  </a>
                  <?php
                }
                else {
                  ?>
                  <a href="<?php echo base_url('login'); ?>">
                    <span data-hover="Login">Ayo Mulai!</span>
                  </a>
                  <?php
                }
               ?>
            </li>

            <?php
              if ($this->session->userdata('user_log')) {
                ?>
                <li>
                  <a href="<?php echo base_url('logout'); ?>">
                    <span data-hover="Leave"><i class="fa fa-sign-out"></i> Logout</span>
                  </a>
                </li>
                <?php
              }
            ?>
					</ul>
				</nav>
			</div>
		</nav>

      <?php
        $data['data'] = isset($data) ? $data : array();
        $this->load->view('site/' . $content, $data);
      ?>

<!-- //testimonials -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<h2>Dapatkan <span>Berita Terbaru</span></h2>
			<form action="#" method="post">
				<input type="email" name="Email" placeholder="Enter Your Email..." required="">
				<input type="submit" value="Send">
			</form>
			<div class="agile_footer_copy">
				<div class="w3agile_footer_grids">
					<div class="col-md-4 w3agile_footer_grid">
						<h3>Tentang Sekolah</h3>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.<span>Excepteur sint occaecat cupidatat
							non proident, sunt in culpa qui officia deserunt mollit.</span></p>
					</div>
					<div class="col-md-4 w3agile_footer_grid">
						<h3>Informasi Alamat</h3>
						<ul>
							<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Jl. Arief Rahman Hakim NO 35 <span>Cigadung Subang.</span></li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@smkn1subang.com</a></li>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
						</ul>
					</div>
					<div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">
						<h3>Navigation</h3>
						<ul>
							<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="<?php echo base_url() ?>">Beranda</a></li>
							<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="<?php echo base_url('/news') ?>">Informasi</a></li>
							<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="<?php echo base_url('/discussion') ?>">Diskusi</a></li>
							<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="#">Tentang</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="w3_agileits_copy_right_social">
				<div class="col-md-6 agileits_w3layouts_copy_right">
					<p>&copy; 2018 Edifying. All rights reserved | Design by <a href="http://w3layouts.com/">URL SQUAD</a></p>
				</div>
				<div class="col-md-6 w3_agile_copy_right">
					<ul class="agileinfo_social_icons">
						<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agileits_pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- carousal -->
	<script src="<?php echo base_url('assets/js/slick.js'); ?>" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(document).on('ready', function() {
		  $(".center").slick({
			dots: true,
			infinite: true,
			centerMode: true,
			slidesToShow: 2,
			slidesToScroll: 2,
			responsive: [
				{
				  breakpoint: 768,
				  settings: {
					arrows: true,
					centerMode: false,
					slidesToShow: 2
				  }
				},
				{
				  breakpoint: 480,
				  settings: {
					arrows: true,
					centerMode: false,
					centerPadding: '40px',
					slidesToShow: 1
				  }
				}
			 ]
		  });
		});
	</script>
<!-- //carousal -->
<!-- flexisel -->
		<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint:480,
						visibleItems: 1
					},
					landscape: {
						changePoint:640,
						visibleItems:2
					},
					tablet: {
						changePoint:768,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<script type="text/javascript" src="assets/js/jquery.flexisel.js"></script>
<!-- //flexisel -->
<!-- gallery-pop-up -->
	<script src="assets/js/lsb.min.js"></script>
	<script>
	$(window).load(function() {
		  $.fn.lightspeedBox();
		});
	</script>
<!-- //gallery-pop-up -->
<!-- flexSlider -->
	<script defer src="assets/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
<!-- //flexSlider -->
<!-- banner-type-text -->
	<script src="assets/js/typed.js" type="text/javascript"></script>
    <script>
		$(function(){

			$("#typed").typed({
				// strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
				stringsElement: $('#typed-strings'),
				typeSpeed: 30,
				backDelay: 500,
				loop: false,
				contentType: 'html', // or text
				// defaults to false for infinite loop
				loopCount: false,
				callback: function(){ foo(); },
				resetCallback: function() { newTyped(); }
			});

			$(".reset").click(function(){
				$("#typed").typed('reset');
			});

		});

		function newTyped(){ /* A new typed object */ }

		function foo(){ console.log("Callback"); }
    </script>
<!-- //banner-type-text -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="assets/js/move-top.js"></script>
<script type="text/javascript" src="assets/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="assets/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
</body>

<!-- Mirrored from p.w3layouts.com/demos_new/09-02-2017/edifying-demo_Free/162609851/web/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Apr 2018 12:00:06 GMT -->
</html>
