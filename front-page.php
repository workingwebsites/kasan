<?php

/**
 * The static front page template
 *
 * @package workweb_base
 */

if ('posts' == get_option('show_on_front')) :

	get_template_part('index');

else :

	get_header(); ?>

	<div id="primary" class="content-area <?php workweb_base_primary_class() ?>">
		<!-- HOME BOXES AND LATEST POST -->
		<div id="fp_toprow">
			<!-- HOME BOXES -->
			<?php if ($GLOBALS['wwbFeatures']['home_box'] == true) { ?>
				<div id="fp_main_one" class="row">
					<?php get_template_part('inc/home-boxes/template/homebox', 'frontpage'); ?>
					<div id="homebox_4" class="col-md-3 homebox_container">
						<?php get_template_part('components/features/posts', 'homebox'); ?>
					</div>
				</div>
			<?php } ?>
		</div>
		<hr>

		<main id="main" class="site-main <?php workweb_base_main_class() ?>" role="main">
			<div id="fp_main_three" class="row">
				<!-- FEATURED POSTS -->
				<div id="latest_home_container" class="col-lg-8 col-xl-9">
					<?php while (have_posts()) : the_post(); ?>
						<?php get_template_part('components/page/content', 'page'); ?>
					<?php endwhile; ?>
				</div>

				<!-- HOME MIDDLE RIGHT BAR -->
				<div id="home-middle-right" class="bulletin-board widget-area col-lg-4 col-xl-3" role="complementary">
					<h1>Bulletin Board</h1>
					<?php if (is_active_sidebar('home-middle-right')) { ?>
						<?php dynamic_sidebar('home-middle-right'); ?>
					<?php }	?>
				</div>
			</div>

			<!-- FEATURED PAGE -->
			<?php if ($GLOBALS['wwbFeatures']['featured_page'] == true) { ?>
				<h1>Featured Page</h1>
				<div id="fp_featuredpage" class="row">
					<div id="div_featuredpage" class="col-md-12">
						<?php get_template_part('inc/featuredpage/template/featuredpage'); ?>
					</div>
				</div>
				<hr />
			<?php } ?>

		</main>
	</div> <!-- END SITE CONTENT ROW -->
	<?php get_footer(); ?>
<?php endif; ?>