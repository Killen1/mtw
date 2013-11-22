<div class="bg-paper">
	<div class="row">
		<div class="col-sm-12">
			<div class="col-md-3 col-lg-4"></div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<ul class="nav navbar-nav">
					<li <?php if ( is_home() ) {echo " class=\"active\"";}?>><a href="<?php echo MTW_ROOT ?>">Home</a></li>
					<li <?php if ( is_page('music') ) {echo " class=\"active\"";}?>><a href="<?php echo MTW_ROOT ?>/music">Music</a></li>
					<li><a href="#">Shows</a></li>
					<li><a href="#">Gallery</a></li>
					<li><a href="#">The Band</a></li>
					<li><a href="#">Blog</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-lg-2"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-lg-4"></div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<div class="container">
				<div class="copyright clearfix">
					<p class="text-center">&copy; <?php echo date("Y") ?> Maynard &amp; The Walnut</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-lg-4"></div>
	</div>
</div>
</body>
</html>