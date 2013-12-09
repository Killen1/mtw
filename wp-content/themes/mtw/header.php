<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
//variables set for the site to use
 define( 'SITE_ROOT', get_option('home') . '/wp-content/themes/mtw/' );
 define( 'MTW_ROOT', 'http://localhost:8888/wordpress/' ); 
 define('SITE_HOME', get_option('home') );

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="<?php echo SITE_ROOT ?>style.css">
<link rel="stylesheet" href="<?php echo SITE_ROOT ?>gigpress.css">
<link rel="shortcut icon" href="<?php echo SITE_ROOT ?>images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="<?php echo SITE_ROOT ?>bootstrap.min.css">
<script src="<?php echo SITE_ROOT ?>js/jquery-1.10.2.min.js"></script> 
<script src="<?php echo SITE_ROOT ?>js/bootstrap.min.js"></script>
<script src="<?php echo SITE_ROOT ?>js/slide-gallery.js"></script>
<script src="<?php echo SITE_ROOT ?>js/soundcloud.js"></script>
<?php if ( is_page('shows')): ?><script src="<?php echo SITE_ROOT ?>js/gig-tabs.js"></script><? endif; ?>
<?php if ( is_page('contact')): ?><script src="<?php echo SITE_ROOT ?>js/jquery.validate.pack.js"></script><? endif; ?>
<?php if ( is_page('contact')): ?><script src="<?php echo SITE_ROOT ?>js/bootstrap-contact.js"></script><? endif; ?>
<body <?php body_class(); ?>>
<div id="width-wrapper">
	<div class="row">
		<div id="fixed-menu">
			<nav id="main-nav" class="navbar navbar-default col-sm-12 margin-0" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header col-xs-2">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-collapse-1">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!--Collect the nav links, forms, and other content for toggling -->
				<div class="col-sm-12">
					<div class="collapse navbar-collapse navbar-ex1-collapse" id="bs-collapse-1">
						<ul class="nav navbar-nav">
							<li <?php if ( is_home() ) {echo " class=\"active\"";}?>><a href="<?php echo MTW_ROOT ?>">Home</a></li>
							<li <?php if ( is_page('music') ) {echo " class=\"active\"";}?>><a href="<?php echo MTW_ROOT ?>music">Music</a></li>
							<li <?php if ( is_page('shows') ) {echo " class=\"active\"";}?>><a href="<?php echo MTW_ROOT ?>shows">Shows</a></li>
							<li <?php if ( is_page('news') ) {echo " class=\"active\"";}?>><a href="<?php echo MTW_ROOT; ?>news">News</a></li>
							<li <?php if ( is_page('gallery') ) {echo " class=\"active\"";}?>><a href="#">Gallery</a></li>
							<li <?php if ( is_page('contact') ) {echo " class=\"active\"";}?>><a href="<?php echo MTW_ROOT ?>contact">Contact</a></li>
							<li <?php if ( is_page('band-3') ) {echo " class=\"active\"";}?>><a href="<?php echo MTW_ROOT ?>band-3">Band</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div id="slider" class="col-sm-12">
			<img class="slide" src="http://placehold.it/1202x552" alt="">
			<img class="slide" src="http://placehold.it/1202x551" alt="">
			<img class="slide" src="http://placehold.it/1202x550" alt="">
			<div class="controls">
				<ul class="pager_list padding-0"></ul>
			</div>
		</div>
		<script>
			jQuery(document).ready(function($) {
				$('#slider').imageSlider({
					slideDur: 5000,
					fadeDur: 800
				});
			});
		</script>
	</div>	