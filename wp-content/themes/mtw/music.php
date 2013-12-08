<?php
/**
 Template Name: Music
 * @package WordPress
 * @subpackage Default_Theme
 */
//{debug}	
// echo "<pre>"; print_r(); die();
get_header(); ?>


<div class="bg-paper">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div>
					<h2>Music</h2>
				</div>
				<div class="row">
					<div class="col-sm-5 col-md-4 col-lg-4">
						<a href="#"><img src="http://placehold.it/250x250"/></a>
					</div>
					<div class="col-sm-7 col-md-8 col-lg-8">
						<h3>The Ides EP</h3>
						<p>Brownie muffin chocolate gummi bears gummi bears liquorice. Donut marzipan jelly dessert tart icing pie danish pudding.Liquorice soufflé lollipop oat cake muffin. Tart chocolate danish halvah lollipop croissant wafer powder.</p>
						<ol>
							<li>Track 1 | 00:00</li>
							<li>Track 2 | 00:00</li>
							<li>Track 3 | 00:00</li>
							<li>Track 4 | 00:00</li>
						</ol>
						<p><a href="#">Buy Now</a></p>
					</div>
				</div>
				<!-- Other recordings 
				<div class="margin-top-20 row">
					<div class="col-sm-5 col-md-4 col-lg-4">
						<a href="#"><img src="http://placehold.it/250x250"/></a>
					</div>
					<div class="col-sm-7 col-md-8 col-lg-8">
						<h3>The Ides EP</h3>
						<p>Brownie muffin chocolate gummi bears gummi bears liquorice. Donut marzipan jelly dessert tart icing pie danish pudding.Liquorice soufflé lollipop oat cake muffin. Tart chocolate danish halvah lollipop croissant wafer powder.</p>
						<ol>
							<li>Track 1 | 00:00</li>
							<li>Track 2 | 00:00</li>
							<li>Track 3 | 00:00</li>
							<li>Track 4 | 00:00</li>
						</ol>
						<p><a href="#">Buy Now</a></p>
					</div>
				</div> 
				<div class="margin-top-20 row">
					<div class="col-sm-5 col-md-4 col-lg-4">
						<a href="#"><img src="http://placehold.it/250x250"/></a>
					</div>
					<div class="col-sm-7 col-md-8 col-lg-8">
						<h3>The Ides EP</h3>
						<p>Brownie muffin chocolate gummi bears gummi bears liquorice. Donut marzipan jelly dessert tart icing pie danish pudding.Liquorice soufflé lollipop oat cake muffin. Tart chocolate danish halvah lollipop croissant wafer powder.</p>
						<ol>
							<li>Track 1 | 00:00</li>
							<li>Track 2 | 00:00</li>
							<li>Track 3 | 00:00</li>
							<li>Track 4 | 00:00</li>
						</ol>
						<p><a href="#">Buy Now</a></p>
					</div>
				</div> -->
			</div>	
		</div>
	</div>
	<div class="margin-top-20 row">
		<div class="col-sm-12 padding-0">
			<div id="wrapper" class="bg-fabric">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 "></div>
						<div class="col-xs-12 col-sm-6 margin-bottom-20 margin-top-20">
							<iframe id="sound-cloud" src="https://w.soundcloud.com/player/?url=http://soundcloud.com/maynard-7" width="100%" height="465" scrolling="no" frameborder="no"></iframe>
							<script>
							(function(){
							    var widgetIframe = document.getElementById('sound-cloud'),
							        widget       = SC.Widget(widgetIframe);
							    widget.bind(SC.Widget.Events.READY, {auto_play: true}, function() {
							    	widget.bind(SC.Widget.Events.PLAY, function() {
								        // get information about currently playing sound
								        widget.getCurrentSound(function(currentSound) {
								          console.log('sound ' + currentSound.get('') + 'began to play');
								        });
							    	});
							      	// get current level of volume
								    widget.getVolume(function(volume) {
								    	console.log('current volume value is ' + volume);
								    });
							      	// set new volume level
							      	widget.setVolume(75);
							      	// get the value of the current position
							    });
							}());
							</script>
			
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	



<?php get_footer(); ?>

						