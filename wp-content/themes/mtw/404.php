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
<head>
	<title>Maynard and The Walnut</title> 
	<link rel="stylesheet" href="<?php echo SITE_ROOT ?>style.css">
	<link href="http://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo SITE_ROOT ?>bootstrap.min.css">
	<script src="<?php echo SITE_ROOT ?>js/jquery-1.10.2.min.js"></script> 
	<script src="<?php echo SITE_ROOT ?>js/soundcloud.js"></script>
</head>
<div class="bg-paper">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="text-center padding-bottom-10">We're sorry this is not a page, But here is some music to listen to!</h1>
			</div>
			<div class="col-sm-1"></div>
			<div class="col-xs-12 col-sm-10 margin-top-10 margin-bottom-10">
				<iframe id="sound-cloud" src="https://w.soundcloud.com/player/?url=http://soundcloud.com/maynard-7" width="100%" height="465" scrolling="no" frameborder="no"></iframe>
				<script>
					(function(){
					    var widgetIframe = document.getElementById('sound-cloud'),
					        widget       = SC.Widget(widgetIframe);
					    widget.bind(SC.Widget.Events.READY, {auto_play: true}, function() {
					    	widget.bind(SC.Widget.Events.PLAY, function() {
						        widget.getCurrentSound(function(currentSound) {
						          console.log('sound ' + currentSound.get('') + 'began to play');
						        });
					    	});
						    widget.getVolume(function(volume) {
						    	console.log('current volume value is ' + volume);
						    });
					      	widget.setVolume(75);
					    });
					}());
				</script>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
</div>