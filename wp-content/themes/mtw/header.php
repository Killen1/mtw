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
	<title><?php if(is_home()):?><?php bloginfo('name'); ?><?else: ?><?php wp_title(' '); ?> | <?php bloginfo('name'); ?><?php endif;?></title> 
	<link rel="stylesheet" href="<?php echo SITE_ROOT ?>style.css">
	<link rel="stylesheet" href="<?php echo SITE_ROOT ?>gigpress.css">
	<link rel="shortcut icon" href="<?php echo SITE_ROOT ?>images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo SITE_ROOT ?>bootstrap.min.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
	<meta property="og:title" content="<?php the_title(); ?>">
	<meta property="og:description" content="<?php the_excerpt(); ?>">
	<script src="<?php echo SITE_ROOT ?>js/jquery-1.10.2.min.js"></script> 
	<script src="<?php echo SITE_ROOT ?>js/bootstrap.min.js"></script>
	<script src="<?php echo SITE_ROOT ?>js/slide-gallery.js"></script>
	<?php if ( is_home() || is_page('music')): ?><script src="<?php echo SITE_ROOT ?>js/soundcloud.js"></script><? endif; ?>
	<?php if ( is_page('shows')): ?><script src="<?php echo SITE_ROOT ?>js/gig-tabs.js"></script><? endif; ?>
	<?php if ( is_page('contact')): ?><script src="<?php echo SITE_ROOT ?>js/jquery.validate.pack.js"></script><? endif; ?>
	<?php if ( is_page('contact')): ?><script src="<?php echo SITE_ROOT ?>js/bootstrap-contact.js"></script><? endif; ?>
	<?php if ( is_page('photos')): ?><script src="<?php echo SITE_ROOT ?>js/instafeed.min.js"></script><? endif; ?>
</head>
<body <?php body_class(); ?>>
<div id="width-wrapper">
	<div class="row">
		<div id="slider" class="col-sm-12">
			<?php// if ( is_home()) ?>
				<img class="slide" src="http://placehold.it/1202x552" alt="">
				<img class="slide" src="http://placehold.it/1202x551" alt="">
				<img class="slide" src="http://placehold.it/1202x550" alt="">
			<?//elseif ( is_page('music') ) :?>
			<?//elseif ( is_page('shows') ) :?>
			<?//elseif ( is_page('news') ) :?>
			<?//elseif ( is_page('photos') ) :?>
			<?//elseif ( is_page('contact') ) :?>
			<?//elseif ( is_page('band') ) :?>	
			<?//else:?>

			<?php// endif; ?>
			<div class="controls text-center">
				<ul class="pager_list padding-0"></ul>
			</div>
		</div>
		<div class="main-logo"></div>
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
						<li <?php if ( is_page('photos') ) {echo " class=\"active\"";}?>><a href="<?php echo MTW_ROOT; ?>photos">Photos</a></li>
						<li <?php if ( is_page('contact') ) {echo " class=\"active\"";}?>><a href="<?php echo MTW_ROOT ?>contact">Contact</a></li>
						<li <?php if ( is_page('band-3') ) {echo " class=\"active\"";}?>><a href="<?php echo MTW_ROOT ?>band">Band</a></li>
					</ul>
					<div class="social-media pull-right margin-top-15 text-right">
						<ul class="addthis_toolbox addthis_32x32_style addthis_default_style padding-0 list-unstyled list-inline">
							<li><a class="addthis_button_facebook_follow" addthis:userid="MaynardandTheWalnut"><i class="fa fa-facebook fa-lg"></i></a></li>
							<li><a class="addthis_button_twitter_follow" addthis:userid="MaynardWalnut"><i class="fa fa-twitter fa-lg"></i></a></li>
							<li><a class="addthis_button_instagram_follow" addthis:userid="maynardandthewalnut"><i class="fa fa-instagram fa-lg"></i></a></li>
							<li><a class="addthis_button_youtube_follow" addthis:userid="MaynardandTheWalnut"><i class="fa fa-youtube fa-lg"></i></a></li>
							<li><a class="addthis_button_vimeo_follow" addthis:userid="MaynardandTheWalnut"><i class="fa fa-vimeo-square fa-lg"></i></a></li>
							<li><a class="rss" href="<?php echo MTW_ROOT ?>feed" target="_blank" title="RSS Feed"><i class="fa fa-rss-square fa-lg"></i></a></li>
						</ul>
						<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-526da6b84c40c531"></script>
					</div>
				</div>
			</div>
		</nav>
		<script>
			jQuery(document).ready(function($){
	    
			    var nav = $('.static-menu');
			    
			    $(window).scroll(function () {
			        if ($(this).scrollTop() > 136) {
			            nav.addClass("f-nav");
			        } else {
			            nav.removeClass("f-nav");
			        }
			    });
			 
			});
			jQuery(document).ready(function($) {
				$('#slider').imageSlider({
					slideDur: 5000,
					fadeDur: 800
				});
			});
		</script>
	</div>	