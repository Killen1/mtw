<?php
/**
 Template Name: Photos
 * @package WordPress
 * @subpackage Default_Theme
 */
//{debug}	
// echo "<pre>"; print_r(); die();
get_header(); ?>
<div class="bg-paper">
	<div class="container">
		<h1 class="text-center padding-bottom-10">Photos</h1>
		<div class="row">
			<div class="col-xs-12">
				<?php //foreach :?>
					<!--This is a loop of the youtube api video-->
				<?php// endforeach; ?>
				<div id="instafeed" class="text-center"></div>
			</div>
		</div>
	</div>
</div>
<script>
	//options can be found http://instafeedjs.com/
    var userFeed = new Instafeed({
        get: 'user',
        userId: 468590629,
        accessToken: '468590629.467ede5.82869085f3944180af4986eab1fea9bb',
        template: '<a href="{{link}}" target="_blank"><img src="{{image}}" alt=""/></a>',
        limit: '60'
    });
    userFeed.run();
</script>
<?php get_footer(); ?>