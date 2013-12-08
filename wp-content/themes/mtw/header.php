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

<html>
<head>
<link rel="stylesheet" href="<?php echo SITE_ROOT ?>style.css">
<link rel="stylesheet" href="<?php echo SITE_ROOT ?>gigpress.css">
<link rel="shortcut icon" href="<?php echo SITE_ROOT ?>images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<script src="<?php echo SITE_ROOT ?>js/jquery-1.10.2.min.js"></script> 
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="<?php echo SITE_ROOT ?>js/slide-gallery.js"></script>
<script src="<?php echo SITE_ROOT ?>js/soundcloud.js"></script>
</head>
<body <?php body_class(); ?>>
	<div class="row">
		<div id="slider" class="col-sm-12">
			<img class="slide" src="http://stubbornsounds.files.wordpress.com/2013/05/maynard3.jpg" alt="">
			<img class="slide" src="http://michellegrudzinskiart.files.wordpress.com/2013/09/maynard-and-the-walnut-2.jpg" alt="">
			<img class="slide" src="http://placehold.it/1202x550" alt="">
			<div class="controls">
				<ul class="pager_list"></ul>
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
		<?//DO NOT EDIT ANYTHING ABOVE THIS POINT!!! IF YOU DO NEED TO ADD SOMETHING CONTACT NATHAN?>
		<nav id="main-nav" class="navbar navbar-default col-sm-12 margin-0" role="navigation">
			<div class="row">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header col-xs-4">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse-1">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- <a class="navbar-brand" href="#">M&amp;TW</a> -->
				</div>
				<!--Collect the nav links, forms, and other content for toggling -->
				<div class="col-sm-9">
					<div class="collapse navbar-collapse navbar-ex1-collapse">
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
				<div class="col-xs-14 col-sm-3">
					<!-- AddThis Follow BEGIN -->
					<div class="margin-top-10 addthis_toolbox addthis_32x32_style addthis_default_style">
						<a class="addthis_button_facebook_follow" addthis:userid="MaynardandTheWalnut"></a>
						<a class="addthis_button_twitter_follow" addthis:userid="MaynardWalnut"></a>
						<a class="addthis_button_instagram_follow" addthis:userid="maynardandthewalnut"></a>
					</div>
					<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-526da6b84c40c531"></script>
					<!-- AddThis Follow END -->
				</div>
			</div>		
		</nav>
	</div>	