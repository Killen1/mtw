<?php
/**
 Template Name: News
 * @package WordPress
 * @subpackage Default_Theme
 */
//{debug}	
//echo "<pre>"; print_r($posts); die();
get_header(); ?>
<div class="bg-paper">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="text-center padding-bottom-10">News</h1>
			</div>
		</div>
		<?php
			query_posts(array(
				'post_type' => 'post',
				'paged' => $paged,
				'orderby'=>  'date',
				'posts_per_page' => 10,
				'cat' => '-3'
			));
		?>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="news-post-wrapper">
					<div class="row">
						<div class="col-sm-1"></div>
						<div class="col-xs-12 col-sm-10">
							<div id="<?php the_ID(); ?>" class="post-wrapper margin-bottom-20">
								<h2 class="text-center"><?php the_title(); ?></h2>
								<p class="text-center"><i class="fa fa-calendar"></i> <?php the_date();?> | <?php the_author(); ?> </p>
								<div class="news-image text-center margin-bottom-10">
									<?php if( has_post_thumbnail()) :?>
										<?php echo get_the_post_thumbnail( $post_id, array(360,360), array('alt' => 'News Image') ); ?>
									<?else:?>
										<img src="http://placehold.it/350x350" alt="">
									<?php endif ;?>
								</div>
								<div class="clearfix margin-right-10 margin-bottom-10">
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
								<div class="text-center">
									<p><a href="<?php the_permalink(); ?>">Comment</a> | <?php comments_number(); ?></p>
								</div>
							</div>
						</div>
						<div class="col-sm-1"></div>
					</div>
				</div>
			<?php endwhile;?>
		<?php endif; ?>
		<?php news_pagination(); ?>
	</div>
</div>
<?php get_footer();?>