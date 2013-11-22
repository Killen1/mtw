<?php
/**
 Template Name: Shows
 * @package WordPress
 * @subpackage Default_Theme
 */
//{debug}	
 //echo "<pre>"; print_r(); die();
get_header(); ?>
<div class="bg-paper">
	<?php global $post; ?>
	<div class="row">
		<div class="col-xs-12">
			<?php
				$options = array(
					'scope' => 'upcoming', 
					'limit' => 1
				);
			?>
			    <?php if(gigpress_has_upcoming($options)) : ?>
			        <?php echo gigpress_shows($options); ?>
			    <?php endif; ?>
			<h1 class="text-center">Upcoming Shows</h1>
		</div>
	</div>
</div>
<?php get_footer();?>