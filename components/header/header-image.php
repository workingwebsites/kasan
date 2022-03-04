<?php
// You can upload a custom header and it'll output in a smaller logo size.
$header_image = get_header_image();

if (has_custom_logo()) { ?>
	<div id="header-image" class="custom-header">
		<div class="header-wrapper">
			<div class="site-branding row">
				<div class="site-logo col">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php wws_get_custom_logo('full') ?></a>
					<br>
					<?php bloginfo('description'); ?>

				</div>
			</div><!-- .site-branding -->
		</div><!-- .header-wrapper -->
	</div><!-- #header-image .custom-header -->
<?php } else { ?>
	<div class="site-branding row">
		<div class="site-title col-xs-12 col-md-8 col-lg-6">
			<h1><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
		</div>
		<div class="site-description col-xs-12 col-md-4 col-lg-6">
			<h2><?php bloginfo('description'); ?></h2>
		</div>
	</div><!-- .site-branding -->
<?php } ?>