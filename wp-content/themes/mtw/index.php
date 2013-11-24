<?php get_header(); ?>
<div class="bg-paper">
	<div class="container margin-bottom-20">
		<div class="row">
   			<?php $count = 1 ?>
			<?php $latest_news = new WP_Query('cat=2&showposts=1'); ?>
			<?php if($latest_news->have_posts()) : ?>
				<?php while($latest_news->have_posts()) : ?>
					<?php $latest_news->the_post(); ?>
						<div class="col-sm-12 col-md-8 col-lg-6">
							<div class="row">
								<div class="col-sm-12 padding-0">
									<h2>Latest News</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-5 col-md-5 col-lg-6 margin-bottom-10 padding-0">
									<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php echo get_the_post_thumbnail( $post_id, array(260,260) ); ?></a>
								</div>
								<div class="col-sm-7 col-md-7 col-lg-6">
									<p>
										<?php 
							        		$excerpt = get_the_excerpt('','',FALSE);
							        		echo substr($excerpt, 0, 400);
							        		if(strlen($excerpt) > 400) echo "...";
							        	?>
									</p>
									<a href="<?php the_permalink() ?>">Read More</a>
								</div>
							</div>
						</div>
				<?php endwhile;?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
			<!--Loop Goes here-->
			<h2>Upcoming Shows</h2>
			<?php if(gigpress_has_upcoming()) : ?>
				<?php
				    $options = array(
				    	'scope' => 'upcoming', 
				    	'limit' => 4);
				    echo gigpress_shows($options);
				?>
			<?else:?>
			Sorry, We have no upcoming shows.
			<?php endif; ?>
			<!--Loop Ends here-->
		</div>
	</div>
	<div class="row">
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