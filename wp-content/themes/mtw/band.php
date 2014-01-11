<?php
/**
 Template Name: Band
 * @package WordPress
 * @subpackage Default_Theme
 */
//{debug}	
//echo "<pre>"; print_r(); die();
get_header(); ?>
<div class="bg-paper">
	<div class="container">
		<div id="band-wrapper">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-lg-4 margin-bottom-20">
					<h1>Band Members</h1>
					<div class="row">
						<?php $bandpic = new WP_Query('category_name=Band Photo'); ?>
						<?php if($bandpic->have_posts()) : ?>
							<?php while($bandpic->have_posts()): $bandpic->the_post(); ?>
								<div class="col-xs-4 col-sm-4 col-md-6 col-lg-6 margin-top-20">
									<div class="member-photo">
										<?php echo get_the_post_thumbnail( $post_id, array(150,150), array('alt' => 'Band Member') ); ?>
										<div class="mouse-enter" style="display: none;">
											<h3 class="wht margin-top-20 text-center"><?php the_title(); ?></h3>
										</div>	
									</div>		
								</div>
							<?php endwhile;?>
						<?php endif;?>
						<?php wp_reset_query(); ?>	
					</div>
				</div>	
				<div class="col-xs-12 col-md-6 col-lg-8">
					<h1>Biography</h1>
					<div class="band-bio">
						<p>Maynard &amp; The Walnut is an acoustic folk-rock group out of Boulder, Colorado who form their sound from a variety of influences, ranging from traditional folk to independent rock. Initially composed of Nathan Killen on Mandolin, Alex Courtney on Guitar, Cameron Nelson on Vocals, and Caleb Nelson on Banjo, they played their first open mic night in August of 2012. Soon after, they met CSU student and trumpet extraordinaire Timmy Johnson and began booking local venues around Boulder, Denver, Fort Collins, and Durango.<br><br>

				Throughout 2013 they have been finishing up their first studio effort, The Ides EP, due out in the coming months and recently adding the musical expertise of Andrew Alfred on upright bass. With brothers Caleb and Cameron Nelson hailing from the mountains of Southwest Colorado, Nathan Killen from Oregon, Alex Courtney from New Jersey, Timmy Johnson from Littleton, and Andrew Alfred from Indiana; Maynard &amp; The Walnut creates a unique sound that they look to progress in 2014.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function($) {
		$('.member-photo').on('mouseenter', function(){
			$(this).children('.mouse-enter').show();
		});
		$('.member-photo').on('mouseleave', function(){
			$(this).children('.mouse-enter').hide();
		});
	});
</script>
<?php get_footer(); ?>