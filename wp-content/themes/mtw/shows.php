<?php
/**
 Template Name: Shows
 * @package WordPress
 * @subpackage Default_Theme
 */
//{debug}	
 //echo "<pre>"; print_r($post); die();
get_header(); ?>
<div id="shows">
	<div class="bg-paper">
		<?php global $post; ?>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-xs-12 col-sm-8">
				<h1 class="text-center">Show Dates</h1>
				<div class="show-type">
					<ul class="tabs" class="padding-0">
						<li><a class="upcoming" href="#upcoming">Upcoming Dates</a> |</li>
						<li><a class="past" href="#archive">Archive</a></li>
					</ul>
				</div>
				<div id="upcoming">
					<?php if(gigpress_has_upcoming()) : ?>
						<?php
						    $options = array(
						    	'scope' => 'upcoming'
						    );
						    echo gigpress_shows($options);
						?>
					<?else:?>
					Sorry, We have no upcoming shows.
					<?php endif; ?>
				</div>
				<div id="archive" style="display:none;">
					<?php echo gigpress_archive() ; ?>
				</div>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>
</div>
<?php get_footer();?>