<?php
/**
 Template Name: News
 * @package WordPress
 * @subpackage Default_Theme
 */
//{debug}	
//echo "<pre>"; print_r($posts); die();
get_header(); ?>
	<div class="row">
		<div class="col-xs-12">
			<h1 class="text-center">Show Dates</h1>
		</div>
	</div>
	<?php $news = new WP_Query('posts_per_page=10'); ?>
	<?php if($news->have_posts()) : ?>
		<?php while($news->have_posts()): $news->the_post(); ?>
			<div class="news-post-wrapper">
				<div class="row">
					<div class="col-xs-12">
						<div id="<?php the_ID(); ?>" class="post-wrapper">
							<h2 class="text-center"><?php the_title(); ?></h2>
							<p class="text-center"><?php the_date();?> | <?php the_author(); ?> </p>
							<div class="news-image text-center">
								<?php echo get_the_post_thumbnail( $post_id, array(360,360), array('alt' => 'News Image') ); ?>
							</div>
							<div class="clearfix">
								<!-- AddThis Button BEGIN -->
								<div class="addthis_toolbox addthis_default_style pull-right">
									<a class="addthis_button_facebook_like" fb:like:layout="button_count" addthis:url="<?php echo MTW_ROOT ?>news#<?php the_ID(); ?>" addthis:title="<?php the_title(); ?>"></a>
									<a class="addthis_button_tweet" addthis:url="<?php echo MTW_ROOT ?>news#<?php the_ID(); ?>" addthis:title="<?php the_title(); ?>"></a>
									<a class="addthis_counter addthis_pill_style"></a>
								</div>
								<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
								<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-526da6b84c40c531"></script>
								<!-- AddThis Button END -->
							</div>
							<div class="new-content">
								<?php the_content();?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile;?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>
<?php get_footer();?>