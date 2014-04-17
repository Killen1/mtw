<?php
	
//This is an override for the gigpress that is being rendered in the index.php

?>

<li class="vevent <?php echo $class; ?>">
	<span class="row margin-0">
		<span class="gigpress-sidebar-date col-xs-4 padding-0">
			<abbr class="dtstart" title="<?php echo $showdata['iso_date']; ?>"><?php echo $showdata['date']; ?></abbr>
			<?php if($showdata['end_date']) : ?>
				 - <abbr class="dtend" title="<?php echo $showdata['iso_end_date']; ?>"><?php echo $showdata['end_date']; ?></abbr>
			<?php endif; ?>
		</span>
		<span class="col-xs-8 padding-0">
			<span class="pull-right">
				<span class="summary">
				<?php if($group_artists || $artist || $total_artists == 1) : ?>
					<span class="hide">
				<?php endif;?>
					<span class="gigpress-sidebar-artist"><?php echo $showdata['artist']; ?></span> 
					<span class="gigpress-sidebar-prep"><?php _e("in", "gigpress"); ?></span> 
					<?php if($group_artists || $artist || $total_artists == 1) : // See above ?></span>
					<?php endif; // end hiding ?>
					<span class="gigpress-sidebar-city"><?php echo $showdata['city']; if(!empty($showdata['state'])) echo ', '.$showdata['state']; ?></span>
				</span> 
				<span class="gigpress-sidebar-prep"><?php _e("at", "gigpress"); ?></span> 
				<span class="location gigpress-sidebar-venue"><?php echo $showdata['venue']; ?></span>
			</span> 
			<?php if($showdata['ticket_link']) : ?>
				<span class="gigpress-sidebar-status pull-right"><?php echo $showdata['ticket_link']; ?></span>
			<?php endif; ?>
		</span>
	</span>
</li>
