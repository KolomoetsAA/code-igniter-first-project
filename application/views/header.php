<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Sparsh Architecture</title>
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,500" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/themify-icons/themify-icons.css') ?>">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/owl-carousel/owl.theme.default.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/owl-carousel/owl.carousel.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
</head>
<body>
<!-- ================Offcanvus Menu Area =================-->
<div class="side_menu">
	<ul class="list menu_right">
		<li>
			<a href="<?= site_url('home/index') ?>">Home</a>
		</li>
		<li>
			<a href="<?= site_url('home/about') ?>">About</a>
		</li>
		<li>
			<a href="<?= site_url('home/projects') ?>">Projects</a>
		</li>
		<li>
			<a href="<?= site_url('home/service') ?>">Service</a>
		</li>
		<li>
			<a href="#">Pages</a>
			<ul class="list">
				<li>
					<a href="<?= site_url('home/elements') ?>">Elements</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="#">Blog</a>
			<ul class="list">
				<li>
					<a href="<?= site_url('home/blog') ?>">Blog</a>
				</li>
				<li>
					<a href="<?= site_url('home/blog_single') ?>">Blog Details</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="<?= site_url('home/contact') ?>">Contact</a>
		</li>
	</ul>
</div>
<!--================End Offcanvus Menu Area =================-->

<!--================Canvus Menu Area =================-->
<div class="canvus_menu">
	<div class="container">
		<div class="float-right">
			<div class="toggle_icon" title="Menu Bar">
				<span></span>
			</div>
		</div>
	</div>
</div>
<!--================End Canvus Menu Area =================-->
