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
		<div class="row">
			<div class="col-xs-12">
				<div class="post-wrapper">
					<h2 class="text-center"><?php the_title(); ?></h2>
					<p class="text-center"><?php the_date();?> | <?php the_author(); ?> </p>
					<?php the_content();?>
				</div>
			</div>
		</div>
		<div class="fb-comments" data-href="http://example.com/comments" data-numposts="5" data-colorscheme="light"></div>
		<?php endwhile;?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>
<?php get_footer();?>