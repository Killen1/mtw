	<div class="bg-paper padding-top-10">
		<div class="row">
			<div class="col-xs-12">
				<div id="footer" class="container margin-top-20">
					<div class="copyright clearfix">
						<p class="text-center">&copy; <?php echo date("Y") ?> Maynard &amp; The Walnut All Rights Reserved.</p>
					</div>
					<div id="top" class=" hidden-xs pull-right">
						<a href="#width-wrapper">Top</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="social-media hidden-sm hidden-md hidden-lg text-center col-xs-12">
				<ul class="addthis_toolbox addthis_32x32_style addthis_default_style padding-0 list-unstyled list-inline">
					<li><a class="addthis_button_facebook_follow" addthis:userid="MaynardandTheWalnut"><i class="fa fa-facebook fa-lg"></i></a></li>
					<li><a class="addthis_button_twitter_follow" addthis:userid="MaynardWalnut"><i class="fa fa-twitter fa-lg"></i></a></li>
					<li><a class="addthis_button_instagram_follow" addthis:userid="maynardandthewalnut"><i class="fa fa-instagram fa-lg"></i></a></li>
					<li><a class="addthis_button_youtube_follow" addthis:userid="MaynardandTheWalnut"><i class="fa fa-youtube fa-lg"></i></a></li>
					<li><a class="addthis_button_vimeo_follow" addthis:userid="MaynardandTheWalnut"><i class="fa fa-vimeo-square fa-lg"></i></a></li>
					<li><a class="rss" href="<?php echo MTW_ROOT ?>feed" target="_blank" title="RSS Feed"><i class="fa fa-rss-square fa-lg"></i></a></li>
				</ul>
				<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-526da6b84c40c531"></script>
			</div>
		</div>
	</div>
</div><!--opens in Header-->
<script>
	jQuery(document).ready(function($){	
		//slideshow
		$('#slider').imageSlider({
			slideDur: 5000,
			fadeDur: 800
		});

	    // Fixed menu on scroll
		var stickyHeaderTop = $('#main-nav').offset().top;
		$(window).scroll(function(){
			if($(window).width() > 992) {
	            if($(window).scrollTop() > stickyHeaderTop ) {
	                $('#main-nav').css({position: 'fixed', top: '0px', width: '102.35%'});
	                $('#spacer').css({display: 'block', height: '53px'});
	            }else{
	                $('#main-nav').css({position: 'static', top: '0px', width: '100%'});
	                $('#spacer').css({display: 'none'});
	            }
	        }
	    });
		
		//For mobile toggle
		$('.navbar-toggle').click(function(e) {
		    e.stopPropagation();
		    $('#bs-collapse-1').toggleClass('in');
		});
		$(document).click(function (e) {
		    if(!$(e.target).closest('#bs-collapse-1').length){
		        $('#bs-collapse-1').removeClass('in');
		    }
		});

		$('#top a').on("click",function(){
			$('html,body').animate({ scrollTop: 0 }, 'slow', function () {
                      
            });
		}); 

	});
	
	//google analytics 
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-46848745-1', 'maynardandthewalnut.com');
	ga('send', 'pageview');

	//Addthis
	var addthis_config = {"data_track_addressbar":false};
</script>
</body>
</html>