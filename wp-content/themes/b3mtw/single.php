<?php get_header();?>
<div class="bg-paper">
	<div class="container">
		<?php if (have_posts()) : ?>
			<?php $counter = 0; ?>
			<?php while (have_posts()) : the_post(); ?>
				<? if($counter == 0 ){?>
					<div class="news-post-wrapper">
						<div class="row">
							<div class="col-xs-12 col-sm-offset-1 col-sm-10">
								<div id="<?php the_ID(); ?>" class="post-wrapper margin-bottom-20">
									<h2 class="text-center"><?php the_title(); ?></h2>
									<p class="text-center"><i class="fa fa-calendar"></i> <?php the_date();?> | <?php the_author(); ?> </p>
									<div class="news-image text-center margin-bottom-10">
										<?php if( has_post_thumbnail()) :?>
											<?php echo get_the_post_thumbnail( $post_id, array(360,360), array('alt' => 'News Image') ); ?>
										<?else:?>
											<img src="<?php echo SITE_ROOT ?>images/mtw-logo.png" alt="Maynard &amp; The Walnut">
										<?php endif ;?>
									</div>
									<div class="clearfix margin-right-10 margin-bottom-10">
										<div class="addthis_toolbox addthis_default_style pull-right">
											<a class="addthis_button_facebook_like" fb:like:layout="button_count" addthis:url="<?php the_permalink(); ?>" addthis:title="<?php the_title(); ?>"></a>
											<a class="addthis_button_tweet" addthis:url="<?php the_permalink(); ?>" addthis:title="<?php the_title(); ?>"></a>
											<a class="addthis_counter addthis_pill_style"></a>
										</div>
									</div>
									<div class="new-content">
										<?php the_content();?>
									</div>
								</div>
								<?php// echo do_shortcode('[fbcomments]'); ?>
								<div class="post-nav">
									<?php previous_post_link('%link', '<div id="prev-post" class="pull-right margin-bottom-20"><i class="fa fa-chevron-right fa-3"></i></div>', $excluded_categories = '3, 4') ?>
									<?php next_post_link('%link', '<div id="next-post" class="pull-left margin-bottom-20"><i class="fa fa-chevron-left fa-3"></i></div>', $excluded_categories = '3, 4') ?>
								</div>
							</div>
						</div>
					</div>
				<?}$counter++;?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
<div id="fb-root"></div>
<script>
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) {
		return;
	}
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=1441527642733336";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<script>
		ent.getElementById('fb-root').appendChild(e);
	}());
	</script>
</script>

<?php get_footer();?>