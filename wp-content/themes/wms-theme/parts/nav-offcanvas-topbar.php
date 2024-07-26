<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<a href="<?php echo home_url(); ?>" class="logo_image" alt="Winemakers Selection"><?php bloginfo('name'); ?></a>
	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>	
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<div id="navicon" data-toggle="off-canvas">
			<span>&nbsp;</span>
			<span>&nbsp;</span>
			<span>&nbsp;</span>
			<span>&nbsp;</span>
		</div>
	</div>
	<div class="mobile_nav">
		<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/wms-reserve-logo.svg" class="logo_image" alt="Winemakers Selection" /></a>
		<div id="navicon">
			<span>&nbsp;</span>
			<span>&nbsp;</span>
			<span>&nbsp;</span>
			<span>&nbsp;</span>
		</div>
	</div>
</div>