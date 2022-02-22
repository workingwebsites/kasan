<?php

/**
 * Adds latest post to look like home boxes.  See components/features/posts', 'homebox' for formatting
 */

$args = array(
	'numberposts' => 1,
	'offset' => 0,
	'category' => 0,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'include' => '',
	'exclude' => '',
	'meta_key' => '',
	'meta_value' => '',
	'post_type' => 'post',
	'post_status' => 'publish',
	'suppress_filters' => true
);

$recent_posts = wp_get_recent_posts($args);

foreach ($recent_posts as $recent) {
	$content = get_the_excerpt($recent['ID']);
	$link = get_permalink($recent['ID']);
	$strLink = '<a href="' . $link . '" class="homebox_link_a">More</a>';
?>
	<div class="homebox">

		<div class="homebox_image"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/whats_new.jpg" /></div>
		<h2 class="homebox_title"><?php echo $recent['post_title'] ?></h2>
		<div class="homebox_meta">Posted: <?php echo $recent['post_date'] ?></div>
		<div class="homebox_content"><?php echo $content ?></div>
		<div class="homebox_link"><?php echo  $strLink ?></div>
	</div>
<?php
}
wp_reset_query();
?>