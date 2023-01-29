<!doctype html>
<html lang="zxx">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?php echo WEB_PATH; ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo WEB_PATH; ?>assets/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo WEB_PATH; ?>assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?php echo WEB_PATH; ?>assets/css/magnific-popup.min.css">
	<link rel="stylesheet" href="<?php echo WEB_PATH; ?>assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo WEB_PATH; ?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo WEB_PATH; ?>assets/css/odometer.min.css">
	<link rel="stylesheet" href="<?php echo WEB_PATH; ?>assets/css/rangeSlider.min.css">
	<link rel="stylesheet" href="<?php echo WEB_PATH; ?>assets/css/showMoreItems-theme.min.css">
	<link rel="stylesheet" href="<?php echo WEB_PATH; ?>assets/css/flaticon.css">
	<link rel="stylesheet" href="<?php echo WEB_PATH; ?>assets/css/meanmenu.min.css">
	<link rel="stylesheet" href="<?php echo WEB_PATH; ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo WEB_PATH; ?>assets/css/responsive.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/shortid/2.2.8/decode.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/shortid/2.2.7/decode.min.js"></script>
	<title>Abhishek Patel</title>
</head>

<body>

<div class="header-area p-absolute">

	<div class="top-header-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-4">
					<ul class="top-header-social-links">
						<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
						<li><a href="https://www.linkedin.com/in/abhishek-patel-649b3a169/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-7 col-md-8">
					<div class="top-header-contact-info text-end">
						<a href="https://mail.google.com/" class="email"><i class="far fa-envelope"></i> <span class="__cf_email__" data-cfemail="e28a878e8e8da28c8d8987cc818d8f">[abhishek212301@&#160;gmail.com]</span></a>
						<!--<a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#4c24292020230c22232729622f2321" class="email"><i class="far fa-envelope"></i> <span class="__cf_email__" data-cfemail="e28a878e8e8da28c8d8987cc818d8f">[abhishek212301@&#160;gmail.com]</span></a>-->
						<a href="tel:+44-45789-5789" class="number"><i class="fas fa-phone-alt"></i> (+91)8858030792</a>
						<div class="lang-switcher">
							<label><i class="fas fa-globe"></i></label>
							<select>
								<option>English</option>
								<option>Spanish</option>
								<option>Russian</option>
								<option>French</option>
								<option>Arabic</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="navbar-area color-white">
		<div class="noke-responsive-nav">
			<div class="container">
				<div class="noke-responsive-menu">
					<div class="logo">
						<a href="<?php echo WEB_URL; ?>"><img src="<?php echo WEB_PATH; ?>assets/img/logo/bglogo.gif" alt="logo"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="noke-nav">
			<div class="container">
				<nav class="navbar navbar-expand-md navbar-light">
					<?php $count = countCart();
					$num_padded = sprintf("%02d", count($count));
					?>
					<!--<a class="navbar-brand" href="<?php /*echo WEB_URL; */?>"><img src="<?php /*echo WEB_PATH; */?>assets/img/logo/bglogo.gif" alt="logo"></a>-->
					<div class="collapse navbar-collapse mean-menu">
						<ul class="navbar-nav">
							<li class="nav-item megamenu"><a href="<?php echo WEB_URL;?>" class="nav-link">Home</a></li>
							<li class="nav-item megamenu"><a href="#" class="nav-link">About Us</a></li>
							<li class="nav-item"><a href="<?php echo WEB_URL; ?>welcome/contactUs" class="nav-link">Contact</a></li>
							<li class="nav-item"><a href="<?php echo WEB_URL; ?>welcome/contactUs" class="nav-link"><i class="fas fa-user"></i></a></li>
							<li class="nav-item"><a href="<?php echo WEB_URL; ?>welcome/contactUs" class="nav-link icon-btn"><sub><i class="fas fa-shopping-cart"></i></sub><span style="display: inline-block; border-radius: 50%;background-color: red;text-align: center;"><?=$num_padded?></span></a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>

	</div>
</div>
