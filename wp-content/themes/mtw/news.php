<?php
/**
 Template Name: News
 * @package WordPress
 * @subpackage Default_Theme
 */
//{debug}	
//echo "<pre>"; print_r($posts); die();
get_header(); ?>
	<?php $news = new WP_Query('posts_per_page=10'); ?>
	<?php if($news->have_posts()) : ?>
		<?php while($news->have_posts()): $news->the_post(); ?>
		<div class="post-wrapper">
			<h1><?php the_title(); ?></h1>
		</div>
		<?php endwhile;?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>
<?php get_footer();?>