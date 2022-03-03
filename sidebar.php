<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package workweb_base
 */

?>

<aside id="secondary" class="widget-area <?php workweb_base_sidebar_class() ?>" role="complementary">
	<?php if (is_active_sidebar('bulletin-board')) { ?>
		<?php dynamic_sidebar('bulletin-board'); ?>
	<?php }	?>

	<?php if (is_active_sidebar('sidebar-inside')) { ?>
		<?php dynamic_sidebar('sidebar-inside'); ?>
	<?php }	?>
</aside>