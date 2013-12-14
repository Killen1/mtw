<?php
/**
 Template Name: Music
 * @package WordPress
 * @subpackage Default_Theme
 */
//{debug}	
// echo "<pre>"; print_r(); die();
get_header(); ?>
	<div class="row">
		<div class="col-xs-12">
			<h1 class="text-center">Music</h1>
		</div>
	</div>
	<?php $music = new WP_Query('category_name=music'); ?>
	<?php if($music->have_posts()) : ?>
		<?php while($music->have_posts()): $music->the_post(); ?>
			<div id="<?php the_ID(); ?>" class="music-post-wrapper margin-left-20 margin-top-20">
				<div class="row">
					<div class="col-sm-5 col-md-4 col-lg-4">
						<?php echo get_the_post_thumbnail( $post_id, array(250,250), array('alt' => 'Music Image') ); ?>
					</div>
					<div class="col-sm-7 col-md-8 col-lg-8">
						<h3><?php the_title(); ?></h3>
						<p><?php the_content();?></p>
					</div>
				</div>
            </div>
		<?php endwhile;?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>
	<div class="margin-top-20 row">
		<div class="col-sm-12 padding-0">
			<div id="wrapper" class="bg-fabric">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6"></div>
						<div class="col-xs-12 col-sm-6 margin-bottom-20 margin-top-20">
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
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>