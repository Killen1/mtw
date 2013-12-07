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
					<ul class="tabs padding-0">
						<li><a class="current" href="#upcoming">Upcoming Dates</a> |</li>
						<li><a href="#archive">Archive</a></li>
					</ul>
				</div>
				<div class="tabs-content-wrap">
					<div id="upcoming" class="tab-content">
						<?php if(gigpress_has_upcoming()) : ?>
							<?php
							    $options = array(
							    	'scope' => 'upcoming'
							    );
							    echo gigpress_shows($options);
							?>
						<?else:?>
							<p>Sorry, We have no upcoming shows.</p>
						<?php endif; ?>
					</div>
					<div id="archive" class="tab-content">
						<?php echo gigpress_archive() ; ?>
					</div>
				</div>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function(){
		init_tabs();
	});
</script>
<?php get_footer();?>