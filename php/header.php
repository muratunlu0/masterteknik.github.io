<!DOCTYPE html>
<html>
	<head>
		<title>CleanMate - Cleaning Template</title>
		<!--meta-->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="keywords" content="Clean, Cleaning, Maid, Laundry, Car Cleaning, Gardening, Janitorial, Move In Out, Window Cleaning" />
		<meta name="description" content="Responsive Cleaning Company Maid Gardening Template" />
		<!--slider revolution-->
		<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css">
		<!--style-->
		<link href='//fonts.googleapis.com/css?family=Raleway:300,400,500&amp;subset=latin-ext' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;subset=latin-ext' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style/reset.css">
		<link rel="stylesheet" type="text/css" href="style/superfish.css">
		<link rel="stylesheet" type="text/css" href="style/prettyPhoto.css">
		<link rel="stylesheet" type="text/css" href="style/jquery.qtip.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/animations.css">
		<link rel="stylesheet" type="text/css" href="style/responsive.css">
		<link rel="stylesheet" type="text/css" href="style/odometer-theme-default.css">
		<!--fonts-->
		<link rel="stylesheet" type="text/css" href="fonts/features/style.css">
		<link rel="stylesheet" type="text/css" href="fonts/template/style.css">
		<link rel="stylesheet" type="text/css" href="fonts/social/style.css">
		<link rel="shortcut icon" href="images/favicon.ico">
	</head>
	<!--<body class="image-1">
	<body class="image-1 overlay">
	<body class="image-2">
	<body class="image-2 overlay">
	<body class="image-3">
	<body class="image-3 overlay">
	<body class="image-4">
	<body class="image-4 overlay">
	<body class="image-5">
	<body class="image-5 overlay">
	<body class="pattern-1">
	<body class="pattern-2">
	<body class="pattern-3">
	<body class="pattern-4">
	<body class="pattern-5">
	<body class="pattern-6">
	<body class="pattern-7">
	<body class="pattern-8">
	<body class="pattern-9">
	<body class="pattern-10">-->
	<body class="<?php echo (isset($_COOKIE['cm_layout']) && $_COOKIE['cm_layout']=="boxed" ? (isset($_COOKIE['cm_layout_style']) && $_COOKIE['cm_layout_style']!="" ? $_COOKIE['cm_layout_style'] . ' ' . $_COOKIE['cm_image_overlay'] : 'image-1 overlay') : ''); echo (isset($_COOKIE['cm_header_top_bar']) && $_COOKIE['cm_header_top_bar']=="yes" ? ' with-topbar' : ''); ?>">
		<div class="site-container<?php echo (isset($_COOKIE['cm_layout']) && $_COOKIE['cm_layout']=="boxed" ? ' boxed' : ''); ?>">
		<!--<div class="site-container boxed">-->
		<?php echo (empty($_GET["page"]) || $_GET["page"]=="home" || $_GET["page"]=="about_2" || $_GET["page"]=="service_calculator" || $_GET["page"]=="services_2" || $_GET["page"]=="cleaning_checklist" || $_GET["page"]=="contact_3" ? '<div class="transparent-header-container' . (!empty($_GET["page"]) && $_GET["page"]!="home" ? ' overlay' : ' height-auto') . '">' : '');
			if(isset($_COOKIE['cm_header_top_bar']) && $_COOKIE['cm_header_top_bar']=="yes")
			{
			?>
			<div class="header-top-bar-container clearfix">
				<div class="header-top-bar">
					<ul class="contact-details clearfix">
						<li class="template-location">
							745 Adelaide Street, Ottawa
						</li>
						<li class="template-mobile">
							<a href="tel:2507257052">250 725 7052</a>
						</li>
						<li class="template-clock">
							08.00 am - 05.00 pm
						</li>
					</ul>
					<ul class="social-icons">
						<li class="show-on-mobiles">
							<a class="template-search" href="#" title="Search"></a>
							<form class="search">
								<input type="text" name="s" placeholder="Type and hit enter..." value="Type and hit enter..." class="search-input hint">
								<fieldset class="search-submit-container">
									<span class="template-search"></span>
									<input type="submit" class="search-submit" value="">
								</fieldset>
								<input type="hidden" name="page" value="search">
							</form>
						</li>
						<li class="show-on-mobiles">
							<a href="#" class="template-cart"><span class="cart-items-number">2<span class="cart-items-number-arrow"></span></span></a>
						</li>
						<li>
							<a target="_blank" href="https://facebook.com/QuanticaLabs" class="social-facebook" title="facebook"></a>
						</li>
						<li>
							<a target="_blank" href="https://twitter.com/QuanticaLabs" class="social-twitter" title="twitter"></a>
						</li>
						<li>
							<a href="https://pinterest.com/quanticalabs/" class="social-pinterest" title="pinterest"></a>
						</li>
						<!--
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-google-plus"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-youtube"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-linkedin"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-dribbble"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-skype"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-tumblr"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-flickr"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-instagram"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-xing"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-foursquare"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-rss"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-behance"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-stumbleupon"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-vimeo"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-houzz"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-yelp"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-github"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-reddit"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-soundcloud"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-vk"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-weibo"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-vine"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-spotify"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-deviantart"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-paypal"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-email"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-location"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-mobile"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-envato"></a>
						</li>
						<li>
							<a title="" href="https://1.envato.market/quanticalabs" class="social-angies-list"></a>
						</li>
						-->
					</ul>
				</div>
				<a href="#" class="header-toggle template-arrow-vertical-3"></a>
			</div>
			<?php
			}
			?>
			<div class="header-container<?php echo (isset($_COOKIE['cm_menu_type']) && $_COOKIE['cm_menu_type']=="no_sticky" ? '' : ' sticky sticky-responsive');?>">
			<!--<div class="header-container sticky sticky-responsive">-->
				<div class="header clearfix">
					<?php
					if(empty($_COOKIE["cm_header_type"]) || $_COOKIE["cm_header_type"]!="type_2")
					{
					?>
					<div class="menu-container first-menu clearfix">
						<?php
						require_once('menu_1.php');
						?>
					</div>
					<?php
					}
					?>
					<div class="logo">
						<h1>
							<a href="?page=home" title="CleanMate">
								<img src="images/logo.png" srcset="images/logo_retina.png 2x" class="<?php echo (empty($_GET["page"]) || $_GET["page"]=="home" || $_GET["page"]=="about_2" || $_GET["page"]=="service_calculator" || $_GET["page"]=="services_2" || $_GET["page"]=="cleaning_checklist" || $_GET["page"]=="contact_3" ? 'secondary-logo' : 'primary-logo'); ?>" alt="logo">
								<img src="images/logo_transparent.png" srcset="images/logo_transparent_retina.png 2x" class="<?php echo (empty($_GET["page"]) || $_GET["page"]=="home" || $_GET["page"]=="about_2" || $_GET["page"]=="service_calculator" || $_GET["page"]=="services_2" || $_GET["page"]=="cleaning_checklist" || $_GET["page"]=="contact_3" ? 'primary-logo' : 'secondary-logo'); ?>" alt="logo">
								<span class="logo-text">CLEANMATE</span>
							</a>
						</h1>
						<?php
						if(empty($_COOKIE["cm_header_type"]) || $_COOKIE["cm_header_type"]!="type_2")
						{
						?>
						<div class="logo-clone">
							<h1>
								<a href="?page=home" title="CleanMate">
									<img src="images/logo.png" srcset="images/logo_retina.png 2x" class="<?php echo (empty($_GET["page"]) || $_GET["page"]=="home" || $_GET["page"]=="about_2" || $_GET["page"]=="service_calculator" || $_GET["page"]=="services_2" || $_GET["page"]=="cleaning_checklist" || $_GET["page"]=="contact_3" ? 'secondary-logo' : 'primary-logo'); ?>" alt="logo">
									<img src="images/logo_transparent.png" srcset="images/logo_transparent_retina.png 2x" class="<?php echo (empty($_GET["page"]) || $_GET["page"]=="home" || $_GET["page"]=="about_2" || $_GET["page"]=="service_calculator" || $_GET["page"]=="services_2" || $_GET["page"]=="cleaning_checklist" || $_GET["page"]=="contact_3" ? 'primary-logo' : 'secondary-logo'); ?>" alt="logo">
									<span class="logo-text">CLEANMATE</span>
								</a>
							</h1>
						</div>
						<?php
						}
						?>
					</div>
					<a href="#" class="mobile-menu-switch">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</a>
					<div class="menu-container clearfix<?php echo (empty($_COOKIE["cm_header_type"]) || $_COOKIE["cm_header_type"]!="type_2" ? ' second-menu' : ''); ?>">
						<?php
						if(empty($_COOKIE["cm_header_type"]) || $_COOKIE["cm_header_type"]!="type_2")
							require_once('menu_2.php');
						else
							require_once('menu.php');
						?>
					</div>
					<div class="header-icons-container hide-on-mobiles">
						<a href="#" class="template-cart"><span class="cart-items-number">2<span class="cart-items-number-arrow"></span></span></a>
						<a class="template-search" href="#" title="Search"></a>
						<form class="search">
							<input type="text" name="s" placeholder="Type and hit enter..." value="Type and hit enter..." class="search-input hint">
							<fieldset class="search-submit-container">
								<span class="template-search"></span>
								<input type="submit" class="search-submit" value="">
							</fieldset>
							<input type="hidden" name="page" value="search">
						</form>
					</div>
				</div>
			</div>