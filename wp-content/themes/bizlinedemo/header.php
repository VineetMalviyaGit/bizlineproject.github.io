<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bizlinedemo
 */

?>
<?php wp_head(); ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<title>Business & Corporate </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/images/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/css/font-awesome.min.css">
    <!-- ET Lineicon CSS -->
    <link rel="stylesheet" href="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/css/lineicon.css">
    <!-- Light Box CSS -->
    <link rel="stylesheet" href="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/css/lightbox.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/css/animate.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/css/owl.transitions.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/css/responsive.css">
    <!-- Google Font -->
    <!-- <link href="../../css?family=Poppins:300,400,500,600,700" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<!-- Start Page Loader -->
<!-- <div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_four"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_one"></div>
        </div>
    </div>
</div> -->
<!-- End Page Loader -->	


<style>
    .logo{
        margin-top:17px !important;
    }
    @media only screen and (max-width: 600px) {
        .logo{
        margin-top:15px !important;
        margin-left:-120px !important;
        height:20px !important;
        
    }
}
</style>
<?php  dynamic_sidebar('header_top') ?>  
	<!-- Start Header Area -->
    <header class="clearfix" id="header" >
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logo"><?= the_custom_logo();?></div>
                </div>
                <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                <li class="drop"><a href="<?= site_url('')?>" class="active">Home</a></li>
                <li class="drop"><a href="<?= site_url('about-us')?>">About</a></li>
                <li class="drop"><a href="<?= site_url('services')?>">Services</a></li>
                <li class="drop"><a href="<?= site_url('blog');?>">Blog</a></li>
                <li class="drop"><a href="#">Pages</a>
                <ul class="drop-down">
                <li><a href="<?= site_url('gallery');?>">Our Gallery</a></li>
                <li><a href="<?= site_url('faq');?>">Faq's</a></li>
                </ul>
                </li>
                <li class=""><a href="<?= site_url('contact');?>">Contact</a></li>
                 </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header Area -->
