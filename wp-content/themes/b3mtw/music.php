<?php
/**
 Template Name: Music
 * @package WordPress
 * @subpackage Default_Theme
 */
get_header(); ?>
<div class="bg-paper">	
	<div class="container">	
		<div class="margin-bottom-20 row">
			<div class="col-xs-12">
				<h1 class="text-center padding-bottom-10 border-bottom">Music</h1>
				<?php $music = new WP_Query('category_name=music'); ?>
				<?php if($music->have_posts()) : ?>
					<?php while($music->have_posts()): $music->the_post(); ?>
						<? //echo "<pre>"; print_r($music); die();?>
						<div id="<?php the_ID(); ?>" class="music-post-wrapper margin-top-20">
							<div class="row">
								<div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
									<div class="album-photo">
										<?php echo get_the_post_thumbnail( $post_id, array(250,250), array('alt' => 'Music Image') ); ?>
										<div class="mouse-enter-album" style="display: none;">
											<?php if (class_exists('MultiPostThumbnails')) :  MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL,  'post-secondary-image-thumbnail'); endif; ?>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
									<div class="row">
										<div class="col-xs-12">
											<h3 class="margin-top-0"><?php the_title(); ?></h3>
											<div class="addthis_toolbox addthis_default_style">
												<a class="addthis_button_facebook_like" fb:like:layout="button_count" addthis:url="<?php the_permalink(); ?>" addthis:title="<?php the_title(); ?>"></a>
												<a class="addthis_button_tweet" addthis:url="<?php the_permalink(); ?>" addthis:title="<?php the_title(); ?>"></a>
												<a class="addthis_counter addthis_pill_style"></a>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">		
											<p><?php the_content();?></p>
										</div>
									</div>
								</div>
							</div>
			            </div>
					<?php endwhile;?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>	
	</div>
</div>	
<div class="row">
	<div class="col-sm-12">
		<div id="wrapper" class="bg-fabric">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 margin-bottom-20 margin-top-20">
						<iframe id="sound-cloud" src="https://w.soundcloud.com/player/?url=http://soundcloud.com/maynardandthewalnut" width="100%" height="465" scrolling="no" frameborder="no"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
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

	jQuery(document).ready(function($) {
		$('.album-photo').on('mouseenter', function(){
			$(this).children('.mouse-enter-album').show().animate({opacity: '1'}, 300);
		});
		$('.album-photo').on('mouseleave', function(){
			$(this).children('.mouse-enter-album').hide().animate({opacity: '0'}, 300);
		});
	});
</script>
<?php get_footer(); ?>