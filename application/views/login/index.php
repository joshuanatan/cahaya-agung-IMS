
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta name="description" content="bootstrap admin template">
		<meta name="author" content="">
		
		<title>TOKO BANGUNAN CAHAYA AGUNG</title>
		
		<link rel="apple-touch-icon" href="<?php echo base_url();?>images/apple-touch-icon.png">
		<link rel="shortcut icon" href="<?php echo base_url();?>images/favicon.ico">
		
		<!-- Stylesheets -->
		<link rel="stylesheet" href="<?php echo base_url();?>global/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>global/css/bootstrap-extend.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>css/site.min.css">
		
		<!-- Plugins -->
		<link rel="stylesheet" href="<?php echo base_url();?>global/vendor/animsition/animsition.css">
		<link rel="stylesheet" href="<?php echo base_url();?>global/vendor/asscrollable/asScrollable.css">
		<link rel="stylesheet" href="<?php echo base_url();?>global/vendor/switchery/switchery.css">
		<link rel="stylesheet" href="<?php echo base_url();?>global/vendor/intro-js/introjs.css">
		<link rel="stylesheet" href="<?php echo base_url();?>global/vendor/slidepanel/slidePanel.css">
		<link rel="stylesheet" href="<?php echo base_url();?>global/vendor/flag-icon-css/flag-icon.css">
			<link rel="stylesheet" href="<?php echo base_url();?>assets/examples/css/pages/login-v3.css">
		
		<!-- Fonts -->
		<link rel="stylesheet" href="<?php echo base_url();?>global/fonts/web-icons/web-icons.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>global/fonts/brand-icons/brand-icons.min.css">
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
		
		<script src="assets/global/vendor/breakpoints/breakpoints.js"></script>
		<script>
		Breakpoints();
		</script>
	</head>
	<body class="animsition page-login-v3 layout-full">
		<div class="page vertical-align text-center" style = "margin-top:100px" data-animsition-in="fade-in" data-animsition-out="fade-out">>
			<div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
				<div class="panel">
					<div class="panel-body">
						<div class="brand">
							<img class="brand-img" src="assets//images/logo-colored.png" alt="...">
							<h2 class="brand-text font-size-18">Inventory Management System</h2>
						</div>
						<form method="post" action="#">
							<div class="form-group form-material floating" data-plugin="formMaterial">
								<input type="email" class="form-control" name="email" />
								<label class="floating-label">Email</label>
							</div>
							<div class="form-group form-material floating" data-plugin="formMaterial">
								<input type="password" class="form-control" name="password" />
								<label class="floating-label">Password</label>
							</div>
							<div class="form-group clearfix">
								<div class="checkbox-custom checkbox-inline checkbox-primary checkbox-lg float-left">
								<input type="checkbox" id="inputCheckbox" name="remember">
								<label for="inputCheckbox">Remember me</label>
								</div>
								
							</div>
							<a href="<?php echo base_url(); ?>/Dashboard">
								<button type="button" class="btn btn-primary btn-block btn-lg mt-40">Sign in</button>
							</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
 <!-- Core  -->
<script src="<?php echo base_url();?>global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
<script src="<?php echo base_url();?>global/vendor/jquery/jquery.js"></script>
<script src="<?php echo base_url();?>global/vendor/popper-js/umd/popper.min.js"></script>
<script src="<?php echo base_url();?>global/vendor/bootstrap/bootstrap.js"></script>
<script src="<?php echo base_url();?>global/vendor/animsition/animsition.js"></script>
<script src="<?php echo base_url();?>global/vendor/mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo base_url();?>global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
<script src="<?php echo base_url();?>global/vendor/asscrollable/jquery-asScrollable.js"></script>
<script src="<?php echo base_url();?>global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

<!-- Plugins -->
<script src="<?php echo base_url();?>global/vendor/switchery/switchery.js"></script>
<script src="<?php echo base_url();?>global/vendor/intro-js/intro.js"></script>
<script src="<?php echo base_url();?>global/vendor/screenfull/screenfull.js"></script>
<script src="<?php echo base_url();?>global/vendor/slidepanel/jquery-slidePanel.js"></script>
<script src="<?php echo base_url();?>global/vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Scripts -->
<script src="<?php echo base_url();?>global/js/Component.js"></script>
<script src="<?php echo base_url();?>global/js/Plugin.js"></script>
<script src="<?php echo base_url();?>global/js/Base.js"></script>
<script src="<?php echo base_url();?>global/js/Config.js"></script>

<script src="<?php echo base_url();?>assets/js/Section/Menubar.js"></script>
<script src="<?php echo base_url();?>assets/js/Section/GridMenu.js"></script>
<script src="<?php echo base_url();?>assets/js/Section/Sidebar.js"></script>
<script src="<?php echo base_url();?>assets/js/Section/PageAside.js"></script>
<script src="<?php echo base_url();?>assets/js/Plugin/menu.js"></script>

<script src="<?php echo base_url();?>global/js/config/colors.js"></script>
<script src="<?php echo base_url();?>assets/js/config/tour.js"></script>
<script>Config.set('assets', 'assets');</script>

<!-- Page -->
<script src="<?php echo base_url();?>assets/js/Site.js"></script>
<script src="<?php echo base_url();?>global/js/Plugin/asscrollable.js"></script>
<script src="<?php echo base_url();?>global/js/Plugin/slidepanel.js"></script>
<script src="<?php echo base_url();?>global/js/Plugin/switchery.js"></script>
<script src="<?php echo base_url();?>global/js/Plugin/jquery-placeholder.js"></script>
<script src="<?php echo base_url();?>global/js/Plugin/material.js"></script>

<script>
	(function(document, window, $){
	'use strict';

	var Site = window.Site;
	$(document).ready(function(){
		Site.run();
	});
	})(document, window, jQuery);
</script>
