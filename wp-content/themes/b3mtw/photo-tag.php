<?php
/**
 Template Name: Photo Tag
 * @package WordPress
 * @subpackage Default_Theme
 */
get_header(); ?>
<div class="bg-paper">
	<div class="container">
		<div class="row">
			<h1 class="text-center padding-bottom-10 border-bottom">Photos</h1>
			<div class="col-xs-12">
				<h4 class="text-center">#maynardandthewalnut</h4>
				<h4 class="text-center"><a href="<?php echo MTW_ROOT ?>photos" title="Our Instagram">Back to Our Instagram</a></h4>
			</div>
			<div class="col-xs-12">
				<div id="instafeed" class="text-center"></div>
			</div>
		</div>
	</div>
</div>
<script>
	//options can be found http://instafeedjs.com/
    var userFeed = new Instafeed({
        get: 'tagged',
        tagName: 'maynardandthewalnut',
        clientId: '3006d7ade78d491e8090c15e39d77206',
        template: '<div class="col-xs-12 col-sm-4 col-md-3"><a href="{{link}}" target="_blank" title="{{caption}}"><img src="{{image}}" class="margin-10 padding-10" alt="Maynard & The Walnut"/></a></div>',
        limit: '60'
    });
    userFeed.run();
</script>
<?php get_footer(); ?>
