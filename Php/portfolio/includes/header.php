<?php
	include '../database/config.php';
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nazmul Hossain</title>
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="css/animate.compat.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/material-scrolltop.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body>

		<!--==== Header Area Start ==== -->
	<header>
		<!-- Company Name & Logo -->
		<div class="company_logo">
			<a href="#">
				<img src="images/logo.png" alt="Logo">				
			</a>
		</div>
		<!-- Menu Part -->
		<div class="menu_icon">
			<span><i class="fas fa-bars"></i></span>
		</div>
		<nav id="main_menu">
			<ul>
				<li><a href="#home">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#service">Services</a></li>
				<li><a href="#portfolio">Projects</a></li>
				<li><a href="#">Contact</a></li>
				<li class="active"><a href="#">Log in</a></li>
			</ul>
		</nav>
	</header>
	<!--==== Header Area End ==== -->

	<?php 
	 include 'includes/slider.php';
	include 'includes/about.php';
	include 'includes/skills.php';  
	include 'includes/service.php'; 
	include 'includes/portfolio.php'; 
	include 'includes/contact.php'; 
	include 'includes/footer.php'; 
	
	 ?>