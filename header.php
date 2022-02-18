<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package workweb_base
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('test'); ?>>
	<div id="page" class="site container-fluid">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'workweb_base'); ?></a>
		<?php if ($GLOBALS['wwbFeatures']['modal'] == true) {
		?>
			<?php get_template_part('inc/modal/template/modal', 'contact'); ?>
		<?php } ?>

		<header class="site-header" role="banner">
			<div class="row top-bar">&nbsp;</div>
			<div id="masthead" class="row">
				<div class="col-md-3">
					<?php get_template_part('components/header/header', 'image'); ?>
				</div>

				<div id="navigation" class="col-md-9">
					<?php get_template_part('components/navigation/navigation', 'top'); ?>
				</div>
			</div>

		</header>

		<div id="content" class="site-content row">