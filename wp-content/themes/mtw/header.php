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
    <link rel="stylesheet" href="<?php echo SITE_ROOT ?>style.min.css">
    <link rel="stylesheet" href="<?php echo SITE_ROOT ?>bootstrap.min.css">
    <link rel="shortcut icon" href="<?php echo SITE_ROOT ?>images/favicon.ico" type="image/x-icon">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
    <?php if ( is_single() ):?>
    <meta property="og:url" content="<?php the_permalink(); ?>">
    <meta property="og:title" content="<?php the_title(); ?>">
    <meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID, array(200,200) )); }?>" />
    <meta property="og:description" content="">
    <?else:?>
    <meta property="og:title" content="<?php if(is_home()):?><?php bloginfo('name'); ?><?else: ?><?php wp_title(' '); ?> | <?php bloginfo('name'); ?><?php endif;?>">
    <meta property="og:url" content="<?php if(is_home()):?>http://www.maynardandthewalnut.com<?else:?><?php the_permalink(); ?><?endif;?>">
    <meta property="og:description" content="Maynard &amp; The Walnut's Official Website! Check out all of our music, blog, videos, and photos.">
    <?endif;?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="fb:app_id" content="1441527642733336"/>
    <script src="<?php echo SITE_ROOT ?>js/jquery-1.11.min.js"></script> 
    <script src="<?php echo SITE_ROOT ?>js/bootstrap.min.js"></script>
    <script src="<?php echo SITE_ROOT ?>js/scripts.min.js"></script>
    <?php if ( is_page('contact')): ?><script src="<?php echo SITE_ROOT ?>js/jquery.validate.pack.js"></script><? endif; ?>
    <?php if ( is_page('contact')): ?><script src="<?php echo SITE_ROOT ?>js/bootstrap-contact.js"></script><? endif; ?>
    <?php if ( is_page('photos') || is_page('photo-tag')): ?><script src="<?php echo SITE_ROOT ?>js/instafeed.min.js"></script><? endif; ?>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-526da6b84c40c531"></script>
    <script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
</head>
<body <?php body_class(); ?>>
<div id="width-wrapper"><!--#width-wrapper closes in Footer-->
    <div class="row">
        <div id="spacer"></div>
        <div id="slider" class="col-sm-12">
            <?php if ( is_home()): ?>
                <img class="slide" src="<?php echo SITE_ROOT ?>images/BandShot7.jpg" alt="Maynard &amp; The Walnut">
                <img class="slide" src="<?php echo SITE_ROOT ?>images/BandShot6.jpg" alt="Maynard &amp; The Walnut">
                <img class="slide" src="<?php echo SITE_ROOT ?>images/BandShot1.jpg" alt="Maynard &amp; The Walnut">
            <?elseif ( is_page('music')): ?>
                <img class="slide" src="<?php echo SITE_ROOT ?>images/cameron_singing.jpg" alt="Maynard &amp; The Walnut">
                <img class="slide" src="<?php echo SITE_ROOT ?>images/BandShot6.jpg" alt="Maynard &amp; The Walnut">
                <img class="slide" src="<?php echo SITE_ROOT ?>images/andrew_with_bass.jpg" alt="Maynard &amp; The Walnut">
            <?else:?>
                <img class="slide" src="<?php echo SITE_ROOT ?>images/andrew_cameron_timmy.jpg" alt="Maynard &amp; The Walnut">
                <img class="slide" src="<?php echo SITE_ROOT ?>images/alex_nathan_andrew.jpg" alt="Maynard &amp; The Walnut">
                <img class="slide" src="<?php echo SITE_ROOT ?>images/BandShot1.jpg" alt="Maynard &amp; The Walnut">
            <?php endif; ?>
            <div class="controls text-center">
                <ul class="pager_list padding-0"></ul>
            </div>
        </div>
        <div class="main-logo"></div>
        <nav id="main-nav" class="navbar navbar-default col-sm-12 margin-0" role="navigation">
            <div class="navbar-header pull-left margin-left-10">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="col-sm-12">
                <div class="collapse navbar-collapse navbar-ex1-collapse" id="bs-collapse-1">
                    <?php //This is the menu. Menu items can be edited in admin panel in menus.
                        wp_nav_menu( array( 
                            'theme_location' => 'primary', 
                            'items_wrap'     => '<ul class="nav navbar-nav">%3$s</ul>', 
                        )); 
                    ?>
                    <div class="social-media pull-right margin-top-15 text-right">
                        <ul class="addthis_toolbox addthis_32x32_style addthis_default_style padding-0 list-unstyled list-inline">
                            <li><a class="addthis_button_facebook_follow" addthis:userid="MaynardandTheWalnut"><i class="fa fa-facebook fa-lg"></i></a></li>
                            <li><a class="addthis_button_twitter_follow" addthis:userid="MaynardWalnut"><i class="fa fa-twitter fa-lg"></i></a></li>
                            <li><a class="addthis_button_instagram_follow" addthis:userid="maynardandthewalnut"><i class="fa fa-instagram fa-lg"></i></a></li>
                            <li><a class="addthis_button_youtube_follow" addthis:userid="MaynardandTheWalnut"><i class="fa fa-youtube fa-lg"></i></a></li>
                            <li><a class="addthis_button_vimeo_follow" addthis:userid="MaynardandTheWalnut"><i class="fa fa-vimeo-square fa-lg"></i></a></li>
                            <li><a class="rss" href="<?php echo MTW_ROOT ?>feed" target="_blank" title="RSS Feed"><i class="fa fa-rss-square fa-lg"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>  