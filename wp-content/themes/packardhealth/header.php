<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title(); ?></title>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="wrapper">
			<!-- header -->
			<div class="header">
				<div class="container">			
					<div class="logo">
						<a href="<?php echo bloginfo('home'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/logo2.png'; ?>" alt=""></a>
					</div>
					<span><?php echo bloginfo('description'); ?></span>
					<div class="main_menu">
						<a href="#" id="showmenu">menu <img src="<?php echo get_template_directory_uri() . '/assets/images/menu_open.png'; ?>" alt=""></a>
						<div class="menu" style="display: none;">
							<div class="hidemenu_outer">
								<a href="#" id="hidemenu"><img src="<?php echo get_template_directory_uri() . '/assets/images/menu_close.png'; ?>" alt=""></a>
							</div>
						    <ul>
						        <li><a class="active" href="#">Home</a></li>
						        <li class="dropdown"><a href="services.html">OUR SERVICES</a><span class="arrow_icon"></span>
									<ul class="sub_menu">
										 <li><a href="#">Primary Care for the Whole Family</a></li>
								        <li><a href="#">Women’s Health</a></li>
								        <li><a href="#">Prenatal Care</a></li>
								        <li><a href="#">Behavioral Health</a></li>
								        <li><a href="#">Chronic Disease Management</a></li>
								        <li><a href="#">Nutrition</a></li>
								        <li><a href="#">Insurance Enrollment Assistance</a></li>
								        <li><a href="#">Food, Medication, Transportation Assistance</a></li>	
								        <li><a href="#">Interpretive Services</a></li>
									</ul>
						        </li>
						        <li class="dropdown"><a href="our-health-care-team.html">OUR HEALTH CARE TEAM</a><span class="arrow_icon"></span>
									<ul class="sub_menu">
										<li><a href="find-a-provider.html">Find a Provider</a></li>
										<li><a href="#">Behavior Health Team</a></li>
										<li><a href="#">Outreach Team</a></li>
										<li><a href="#">Patient Advocates</a></li>
									</ul>
						        </li>
						        <li class="dropdown"><a href="#">ABOUT</a><span class="arrow_icon"></span>
						        	<ul class="sub_menu">
										<li><a href="#">Patient Information</a></li>
										<li><a href="#">Informacion del paciente</a></li>
										<li><a href="#">Why Packard Health?</a></li>
										<li><a href="#">Leadership Team</a></li>
										<li><a href="#">Board Members</a></li>
										<li><a href="#">Outreach</a></li>
										<li><a href="#">Community Partners</a></li>
										<li><a href="#">News</a></li>
										<li><a href="#">History</a></li>
										<li><a href="#">Patient Stories</a></li>
									</ul>
						        </li>
						        <li class="dropdown"><a href="#">CONTACT</a><span class="arrow_icon"></span>
						        	<ul class="sub_menu">
										<li><a href="#">Make An Appointment</a></li>
										<li><a href="#">Join Our Team</a></li>
									</ul>
						        </li>
						        <li class="dropdown"><a href="#">SUPPORT US</a><span class="arrow_icon"></span>
						        	<ul class="sub_menu">
										<li><a href="#">DONATE</a></li>
										<li><a href="#">Volunteer</a></li>
									</ul>
						        </li>
						    </ul>
						</div>
					</div>
				</div>
				<div class="header_btm">
					<div class="container">
						<?php get_template_part('parts/searchform'); ?>
					</div>
				</div>
			</div>

			<!-- content -->
			<div class="content">			