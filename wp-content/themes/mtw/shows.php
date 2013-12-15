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
		<div class="container">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-xs-12 col-sm-10">
					<h1 class="text-center">Show Dates</h1>
					<div class="row">
						<div class="show-type col-xs-6">
							<ul class="tabs padding-0 list-unstyled">
								<li><a href="#upcoming">Upcoming Dates</a> |</li>
								<li><a href="#archive">Archive</a></li>
							</ul>
						</div>
						<div class="social-media col-xs-6">
							<ul class="addthis_toolbox addthis_32x32_style addthis_default_style pull-right padding-0 list-unstyled list-inline">
								<li><a class="addthis_button_facebook_follow" addthis:userid="MaynardandTheWalnut"><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a class="addthis_button_twitter_follow" addthis:userid="MaynardWalnut"><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a class="addthis_button_instagram_follow" addthis:userid="maynardandthewalnut"><i class="fa fa-instagram fa-lg"></i></a></li>
								<li><a class="addthis_button_youtube_follow" addthis:userid="MaynardandTheWalnut"><i class="fa fa-youtube fa-lg"></i></a></li>
							</ul>
							<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-526da6b84c40c531"></script>
						</div>
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
						<div id="archive" class="tab-content" style="display:none;">
							<?php echo gigpress_archive() ; ?>
						</div>
					</div>
				</div>
				<div class="col-sm-1"></div>
			</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function(){
		init_tabs();
	});
</script>
<?php get_footer();?>